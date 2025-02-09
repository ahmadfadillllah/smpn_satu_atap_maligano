<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class KeaktifanController extends Controller
{
    //
    public function index(Request $request)
    {

        $guru = DB::table('guru_m as gr')
        ->leftJoin('absensi_t as ab', 'gr.id', '=', 'ab.guru_id')
        ->leftJoin('kelas_m as kl', 'gr.id', '=', 'kl.guru_id')
        ->leftJoin('jadwal_pembelajaran_t as jd', 'kl.id', '=', 'jd.kelas_id')
        ->where('gr.statusenabled', true)
        ->select(
            'gr.nip',
            'gr.guru',
            'kl.kelas',
            DB::raw('IFNULL(GROUP_CONCAT(DISTINCT jd.hari ORDER BY FIELD(jd.hari, "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu") ASC SEPARATOR ", "), "Tidak Ada") as hari'),
            DB::raw('COUNT(DISTINCT CASE WHEN ab.status = "Hadir" THEN ab.id END) as hadir'),  // Menghitung jumlah kehadiran unik
            DB::raw('COUNT(DISTINCT CASE WHEN ab.status = "Tidak Hadir" THEN ab.id END) as tidakHadir')  // Menghitung jumlah ketidakhadiran unik
        );
        if(isset($request->semester)){
            $guru = $guru->where('jd.semester', $request->semester);
        }
        if(isset($request->tahun_ajaran)){
            $guru = $guru->where('jd.tahun_ajaran', $request->tahun_ajaran);
        }
        $guru = $guru->groupBy('gr.id', 'gr.nip', 'gr.guru', 'kl.kelas')
        ->get();



        // dd($guru);  // Untuk melihat hasilnya


        return view('keaktifan.index', compact('guru'));
    }

    public function downloadExcel(Request $request)
    {
        $guru = DB::table('guru_m as gr')
        ->leftJoin('absensi_t as ab', 'gr.id', '=', 'ab.guru_id')
        ->leftJoin('kelas_m as kl', 'gr.id', '=', 'kl.guru_id')
        ->leftJoin('jadwal_pembelajaran_t as jd', 'kl.id', '=', 'jd.kelas_id')
        ->where('gr.statusenabled', true)
        ->where('jd.semester', $request->semester)
        ->select(
            'gr.nip',
            'gr.guru',
            'kl.kelas',
            DB::raw('IFNULL(GROUP_CONCAT(DISTINCT jd.hari ORDER BY FIELD(jd.hari, "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu") ASC SEPARATOR ", "), "Tidak Ada") as hari'),
            DB::raw('COUNT(DISTINCT CASE WHEN ab.status = "Hadir" THEN ab.id END) as hadir'),  // Menghitung jumlah kehadiran unik
            DB::raw('COUNT(DISTINCT CASE WHEN ab.status = "Tidak Hadir" THEN ab.id END) as tidakHadir')  // Menghitung jumlah ketidakhadiran unik
        )
        ->groupBy('gr.id', 'gr.nip', 'gr.guru', 'kl.kelas')
        ->get();



        dd($guru);  // Untuk melihat hasilnya


        return view('keaktifan.index', compact('guru'));
    }

    public function downloadPDF(Request $request)
    {
        $guru = DB::table('guru_m as gr')
        ->leftJoin('absensi_t as ab', 'gr.id', '=', 'ab.guru_id')
        ->leftJoin('kelas_m as kl', 'gr.id', '=', 'kl.guru_id')
        ->leftJoin('jadwal_pembelajaran_t as jd', 'jd.id', '=', 'jd.guru_id')
        ->where('gr.statusenabled', true)
        ->where('jd.semester', $request->semester)
        ->select(
            'gr.nip',
            'gr.guru',
            'kl.kelas',
            DB::raw('IFNULL(GROUP_CONCAT(DISTINCT jd.hari ORDER BY FIELD(jd.hari, "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu") ASC SEPARATOR ", "), "Tidak Ada") as hari'),
            DB::raw('COUNT(DISTINCT CASE WHEN ab.status = "Hadir" THEN ab.id END) as hadir'),  // Menghitung jumlah kehadiran unik
            DB::raw('COUNT(DISTINCT CASE WHEN ab.status = "Tidak Hadir" THEN ab.id END) as tidakHadir')  // Menghitung jumlah ketidakhadiran unik
        )
        ->groupBy('gr.id', 'gr.nip', 'gr.guru', 'kl.kelas')
        ->get();

        $guru = $guru->toArray();
        $semester = $request->semester;

        // dd($guru);

        return view('keaktifan.downloadPDF', compact('guru', 'semester'));

        $pdf = Pdf::loadView('keaktifan.downloadPDF', compact('guru', 'semester'));
        return $pdf->download('Laporan Keaktifan.pdf');



    }
}
