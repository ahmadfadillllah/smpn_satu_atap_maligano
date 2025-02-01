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
            ->leftJoin('kelas_m as kl', 'gr.id', 'kl.guru_id')
            ->leftJoin('jadwal_pembelajaran_t as jd', 'kl.id', 'jd.kelas_id')
            ->where('gr.statusenabled', true)
            ->select('gr.id', 'gr.guru', 'kl.kelas', 'jd.id as jadwal_id')
            ->get()
            ->groupBy('guru') // Mengelompokkan data berdasarkan nama guru
            ->map(function($items) {
                // Mengambil kelas-kelas yang diajarkan oleh guru tersebut dan menggabungkannya dengan koma
                $kelas = $items->pluck('kelas')->unique()->implode(', ');

                // Menambahkan status keaktifan (mengambil status dari salah satu jadwal karena semua guru memiliki status yang sama)
                $status_keaktifan = $items->first()->jadwal_id ? 'Aktif' : 'Tidak Aktif';

                return [
                    'guru' => $items->first()->guru,
                    'kelas' => $kelas,
                    'status_keaktifan' => $status_keaktifan,
                ];
            });

        // dd($guru);  // Untuk melihat hasilnya


        return view('keaktifan.index', compact('guru'));
    }
}
