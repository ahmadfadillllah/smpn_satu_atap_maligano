<?php

namespace App\Http\Controllers;

use App\Models\UsulanMateri;
use Illuminate\Http\Request;

class UsulanMateriController extends Controller
{
    //
    public function index()
    {
        $usulan = UsulanMateri::where('statusenabled', true)->get();

        return view('usulan-materi.index', compact('usulan'));
    }

    public function delete($uuid)
    {
        try {
            UsulanMateri::where('uuid', $uuid) ->update(
                [
                    'statusenabled' => false
                ]
            );

            return redirect()->back()->with('success','Usulan Materi berhasil dihapus');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','Usulan Materi gagal dihapus');
        }
    }
}
