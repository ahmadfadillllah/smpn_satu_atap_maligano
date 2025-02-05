<?php

namespace App\Http\Controllers;

use App\Models\JadwalPembelajaran;
use App\Models\Kelas;
use App\Models\NamaPelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class JadwalPembelajaranController extends Controller
{
    //
    public function index(Request $request)
    {
        $hariUrutan = [
            'Senin' => 1,
            'Selasa' => 2,
            'Rabu' => 3,
            'Kamis' => 4,
            'Jumat' => 5,
            'Sabtu' => 6,
            'Minggu' => 7,
        ];

        $kelas = Kelas::where('statusenabled', true)->get();
        $nama_pelajaran = NamaPelajaran::where('statusenabled', true)->get();

        $pelajaran = DB::table('jadwal_pembelajaran_t as jd')
        ->leftJoin('kelas_m as kl', 'jd.kelas_id', 'kl.id')
        ->leftJoin('guru_m as gr', 'kl.guru_id', 'gr.id')
        ->leftJoin('nama_pelajaran_m as np', 'jd.pelajaran_id', 'np.id')
        ->select(
            'jd.hari',
            'jd.statusenabled',
            'jd.uuid',
            'gr.guru',
            'jd.jam_masuk',
            'jd.kelas_id',
            'jd.pelajaran_id',
            'jd.jam_selesai',
            'jd.semester',
            'kl.kelas',
            'np.pelajaran',

            )->where('jd.statusenabled', true);

        // Filter berdasarkan kelas jika parameter ada
        if (isset($request->search_kelas)) {
            $pelajaran = $pelajaran->where('jd.kelas_id', $request->search_kelas);
        }

        // Filter berdasarkan hari jika parameter ada
        if (isset($request->search_hari)) {
            $pelajaran = $pelajaran->where('jd.hari', $request->search_hari);
        }

        $pelajaran = $pelajaran->get();

        $pelajaran = $pelajaran->groupBy('hari')->sortBy(function ($item) use ($hariUrutan) {
            return $hariUrutan[$item->first()->hari];
        });

        $data = [
            'kelas' => $kelas,
            'pelajaran' => $pelajaran,
            'nama_pelajaran' => $nama_pelajaran,
        ];

        return view('akademik.jadwal-pembelajaran.index', compact('data'));
    }

    public function insert(Request $request)
    {
        $jadwal = JadwalPembelajaran::where('hari', $request->hari)
        ->where('hari', $request->hari)
        ->where('kelas_id', $request->kelas_id)
        ->where('semester', $request->semester)
        ->where('pelajaran_id', $request->pelajaran_id)
        ->where('statusenabled', true)->first();

        // dd($request->all());
        try {
            if(empty($jadwal)){
                JadwalPembelajaran::create([
                    'uuid' => (string) Uuid::uuid4()->toString(),
                    'hari' => $request->hari,
                    'kelas_id' => $request->kelas_id,
                    'semester' => $request->semester,
                    'pelajaran_id' => $request->pelajaran_id,
                    'jam_masuk' => $request->jam_masuk,
                    'jam_selesai' => $request->jam_selesai,
                ]);

                return redirect()->back()->with('success','Jadwal pembelajaran berhasil ditambahkan');
            }else{
                return redirect()->back()->with('info','Jadwal sudah ada, mohon inputkan jadwal lain');
            }


        } catch (\Throwable $th) {
            return redirect()->back()->with('info','Jadwal pembelajaran gagal ditambahkan');
        }
    }

    public function update($uuid, Request $request)
    {
        try {
            JadwalPembelajaran::where('uuid', $uuid) ->update(
                [
                    'hari' => $request->hari,
                    'kelas_id' => $request->kelas_id,
                    'semester' => $request->semester,
                    'pelajaran_id' => $request->pelajaran_id,
                    'jam_masuk' => $request->jam_masuk,
                    'jam_selesai' => $request->jam_selesai,
                ]
            );

            return redirect()->back()->with('success','Jadwal pembelajaran berhasil diupdate');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','Jadwal pembelajaran gagal diupdate');
        }
    }

    public function delete($uuid)
    {
        try {
            JadwalPembelajaran::where('uuid', $uuid) ->update(
                [
                    'statusenabled' => false
                ]
            );

            return redirect()->back()->with('success','Jadwal pembelajaran berhasil dihapus');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','Jadwal pembelajaran gagal dihapus');
        }
    }
}
