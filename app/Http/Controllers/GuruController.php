<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::where('statusenabled', true)->get();
        return view('guru.index', compact('guru'));
    }

    public function insert(Request $request)
    {
        try {
            Guru::create([
                'uuid' => (string) Uuid::uuid4()->toString(),
                'nip' => $request->nip,
                'guru' => $request->guru,
                'jabatan' => $request->jabatan,
            ]);

            return redirect()->back()->with('success','Guru berhasil ditambahkan');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','Guru gagal ditambahkan');
        }
    }

    public function update($uuid, Request $request)
    {
        try {
            Guru::where('uuid', $uuid) ->update(
                [
                    'nip' => $request->nip,
                    'guru' => $request->guru,
                    'jabatan' => $request->jabatan,
                ]
            );

            return redirect()->back()->with('success','Guru berhasil diupdate');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','Guru gagal diupdate');
        }
    }

    public function delete($uuid)
    {
        try {
            Guru::where('uuid', $uuid) ->update(
                [
                    'statusenabled' => false
                ]
            );

            return redirect()->back()->with('success','Guru berhasil dihapus');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','Guru gagal dihapus');
        }
    }
}
