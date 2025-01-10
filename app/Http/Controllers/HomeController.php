<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Guru;
use App\Models\ProfilSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $profil = ProfilSekolah::first();

        $guru = Guru::where('statusenabled', true)->get();

        $data = [
            'profil' => $profil,
            'guru' => $guru,
        ];
        return view('home.index', compact('data'));
    }

    public function galeri()
    {
        $galeri = DB::table('galeri_t as gl')
        ->leftJoin('file_t as fl', 'gl.file_id', 'fl.id')
        ->select('gl.*', 'fl.path')->where('gl.statusenabled', true)->get();

        return view('home.galeri', compact('galeri'));
    }

    public function materipembelajaran()
    {
        $galeri = DB::table('galeri_t as gl')
        ->leftJoin('file_t as fl', 'gl.file_id', 'fl.id')
        ->select('gl.*', 'fl.path')->where('gl.statusenabled', true)->get();

        return view('home.materipembelajaran', compact('galeri'));
    }
}
