<?php

namespace App\Http\Controllers;

use App\Models\ProfilSekolah;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //
    public function index()
    {
        $profil = ProfilSekolah::first();
        return view('profilsekolah.index', compact('profil'));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        try {
            ProfilSekolah::where('uuid', $request->uuid) ->update(
                [
                    'profile' => $request->profile,
                    'visi' => $request->visi,
                    'misi' => $request->misi,
                    'nspn' => $request->nspn,
                    'sk_pendirian' => $request->sk_pendirian,
                    'sk_izin' => $request->sk_izin,
                    'bentuk_pendidikan' => $request->bentuk_pendidikan,
                    'tanggal_sk_pendirian' => $request->tanggal_sk_pendirian,
                    'tanggal_sk_izin' => $request->tanggal_sk_izin,
                    'status_kepemilikan' => $request->status_kepemilikan,
                ]
            );

            return redirect()->back()->with('success','Profil Sekolah berhasil diupdate');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','Profil Sekolah gagal diupdate');
        }
    }
}
