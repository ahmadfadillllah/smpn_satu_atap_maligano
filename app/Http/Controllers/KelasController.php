<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class KelasController extends Controller
{
    //
    public function index()
    {
        $kelas = DB::table('kelas_m as kls')
        ->leftJoin('guru_m as gr', 'kls.guru_id', 'gr.id')
        ->select(
            'kls.id',
            'kls.uuid',
            'kls.statusenabled',
            'kls.kelas',
            'kls.guru_id',
            'gr.guru',
            )
        ->where('kls.statusenabled', true)->get();

        $guru = Guru::where('statusenabled', true)->get();

        return view('kelas.index', compact('kelas', 'guru'));
    }

    public function insert(Request $request)
    {
        try {
            Kelas::create([
                'uuid' => (string) Uuid::uuid4()->toString(),
                'kelas' => $request->kelas,
                'guru_id' => $request->guru_id,
            ]);

            return redirect()->back()->with('success','Kelas berhasil ditambahkan');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','Kelas gagal ditambahkan');
        }
    }

    public function update(Request $request, $uuid)
    {
        try {
            Kelas::where('uuid', $uuid) ->update(
                [
                    // 'kelas' => $request->kelas,
                    'guru_id' => $request->guru_id,
                ]
            );

            return redirect()->back()->with('success','Kelas berhasil diupdate');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','Kelas gagal diupdate');
        }
    }

    public function delete($uuid)
    {
        try {
            Kelas::where('uuid', $uuid) ->update(
                [
                    'statusenabled' => false
                ]
            );

            return redirect()->back()->with('success','Kelas berhasil dihapus');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','Kelas gagal dihapus');
        }
    }
}
