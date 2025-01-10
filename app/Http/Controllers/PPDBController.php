<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\PPDB;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class PPDBController extends Controller
{
    //
    public function index()
    {

        $ppdb = PPDB::where('statusenabled', true)->get();

        $data = [
            'ppdb' => $ppdb,
        ];
        return view('ppdb.index', compact('data'));
    }

    public function insert()
    {
        return view('ppdb.insert');
    }

    public function post(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'gambar' => 'required|image|max:10240', // Maksimal 10MB
        ]);
        try {
            $fileRecord = null;
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');

                // Menyimpan file ke storage dan mendapatkan path
                $path = $file->store('gambar', 'public');

                // Menyimpan informasi file ke tabel 'files'
                $fileRecord = new File();
                $fileRecord->uuid = (string) Uuid::uuid4()->toString();
                $fileRecord->name = $file->getClientOriginalName();
                $fileRecord->path = $path;
                $fileRecord->mime_type = $file->getMimeType();
                $fileRecord->size = $file->getSize();
                $fileRecord->format = $file->getClientOriginalExtension();
                $fileRecord->save();  // Simpan file terlebih dahulu untuk mendapatkan ID-nya
            }

            // dd($fileRecord);

            // Menyimpan data MateriPembelajaran setelah file berhasil disimpan
            PPDB::create([
                'uuid' => (string) Uuid::uuid4()->toString(),
                'pengumuman_pendaftaran' => $request->pengumuman_pendaftaran,
                'syarat_pendaftaran' => $request->syarat_pendaftaran,
                'kuota' => $request->kuota,
                'status' => $request->status,
                'file_id' => $fileRecord->id,
            ]);


            return redirect()->route('ppdb.index')->with('success','PPDB berhasil ditambahkan');

        } catch (\Throwable $th) {
            return redirect()->route('ppdb.index')->with('info','PPDB gagal ditambahkan'. $th->getMessage());
        }

    }

    public function delete($uuid)
    {
        try {
            PPDB::where('uuid', $uuid) ->update(
                [
                    'statusenabled' => false
                ]
            );

            return redirect()->back()->with('success','PPDB berhasil dihapus');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','PPDB gagal dihapus');
        }
    }
}
