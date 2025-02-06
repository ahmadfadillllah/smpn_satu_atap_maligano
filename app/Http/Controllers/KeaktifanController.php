<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeaktifanController extends Controller
{
    //
    public function index()
    {
        $guru = DB::table('guru_m as gr')
        ->leftJoin('kelas_m as kl', 'gr.id', '=', 'kl.guru_id')
        ->leftJoin('jadwal_pembelajaran_t as jd', 'kl.id', '=', 'jd.kelas_id')
        ->leftJoin('absensi_t as ab', 'gr.id', '=', 'ab.guru_id')
        ->where('gr.statusenabled', true)
        ->select(
            'gr.nip',
            'gr.guru',
            'kl.kelas',
            DB::raw('IFNULL(GROUP_CONCAT(DISTINCT jd.hari ORDER BY FIELD(jd.hari, "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu") ASC SEPARATOR ", "), "Tidak Ada") as hari'),
            DB::raw('COUNT(CASE WHEN ab.status = "Hadir" THEN 1 END) as hadir'),  // Menghitung jumlah status "Hadir"
            DB::raw('COUNT(CASE WHEN ab.status = "Tidak Hadir" THEN 1 END) as tidakHadir')  // Menghitung jumlah status "Hadir"
        )
        ->groupBy('gr.id', 'gr.nip', 'gr.guru', 'kl.kelas')
        ->get();


        // dd($guru);  // Untuk melihat hasilnya


        return view('keaktifan.index', compact('guru'));
    }
}
