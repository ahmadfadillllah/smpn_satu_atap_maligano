<?php

namespace App\Http\Controllers;

use App\Models\NamaPelajaran;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class NamaPelajaranController extends Controller
{
    //
    public function index()
    {
        $pelajaran = NamaPelajaran::where('statusenabled', true)->get();
        return view('nama-pelajaran.index', compact('pelajaran'));
    }

    public function insert(Request $request)
    {
        try {
            NamaPelajaran::create([
                'uuid' => (string) Uuid::uuid4()->toString(),
                'pelajaran' => $request->pelajaran,
            ]);

            return redirect()->back()->with('success','Pelajaran berhasil ditambahkan');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','Pelajaran gagal ditambahkan');
        }
    }

    public function update(Request $request, $uuid)
    {
        try {
            NamaPelajaran::where('uuid', $uuid) ->update(
                [
                    // 'kelas' => $request->kelas,
                    'pelajaran' => $request->pelajaran,
                ]
            );

            return redirect()->back()->with('success','Nama Pelajaran berhasil diupdate');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','Nama Pelajaran gagal diupdate');
        }
    }

    public function delete($uuid)
    {
        try {
            NamaPelajaran::where('uuid', $uuid) ->update(
                [
                    'statusenabled' => false
                ]
            );

            return redirect()->back()->with('success','Pelajaran berhasil dihapus');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','Pelajaran gagal dihapus');
        }
    }
}
