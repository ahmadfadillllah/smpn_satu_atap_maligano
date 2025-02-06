<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class KehadiranController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->has('date')) {
            $date = $request->input('date');
        } else {
            $date = now()->toDateString();
        }

        $absensi = DB::table('absensi_t as ab')
        ->leftJoin('guru_m as gr', 'ab.guru_id', 'gr.id')
        ->leftJoin('kelas_m as kl', 'gr.id', 'kl.guru_id')
        ->select(
            'ab.uuid',
            'gr.nip',
            'gr.guru',
            'kl.kelas',
            'ab.status'
        )
        ->where('ab.statusenabled', true)->where('date', $date)->get();

        return view('kehadiran.index', compact('absensi'));
    }

    public function insert()
    {
        $guru = Guru::where('statusenabled', true)->get();
        return view('kehadiran.insert', compact('guru'));
    }

    public function update(Request $request, $uuid)
    {

        try {
            Absensi::where('uuid', $uuid) ->update(
                [
                    'status' => $request->status
                ]
            );

            return redirect()->back()->with('success','Absensi berhasil diupdate');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','Absensi gagal diupdate');
        }
    }

    public function post(Request $request)
    {
        $date = $request->input('date');
        $data = $request->input('data');

        $cekFirst = Absensi::where('date',$date)->first();
        if(!empty($cekFirst)){
            return redirect()->route('kehadiran.index')->with('info','Maaf, absen sudah ada');
        }

        try {

            // Menyimpan data MateriPembelajaran setelah file berhasil disimpan
            foreach ($data as $idGuru => $kehadiran) {
                Absensi::create([
                    'uuid' => Uuid::uuid4()->toString(),
                    'guru_id' => $kehadiran['guru_id'],
                    'status' => $kehadiran['status'],
                    'date' => $date
                ]);

            }


            return redirect()->route('kehadiran.index')->with('success','Absensi berhasil ditambahkan');

        } catch (\Throwable $th) {
            return redirect()->route('kehadiran.index')->with('info','Absensi gagal ditambahkan'. $th->getMessage());
        }
    }
}
