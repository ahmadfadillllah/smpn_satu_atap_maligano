<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class GaleriController extends Controller
{
    //
    public function index()
    {
        $galeri = DB::table('galeri_t as gl')
        ->leftJoin('file_t as fl', 'gl.file_id', 'fl.id')
        ->select('gl.*', 'fl.path')->where('gl.statusenabled', true)->get();

        return view('galeri.index', compact('galeri'));
    }

    public function insert(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'galeri' => 'required|file|mimes:jpg,jpeg,png,gif,mp4,avi,mov|max:10240', // Maksimal 10MB
        ]);

        try {
            $fileRecord = null;
            if ($request->hasFile('galeri')) {
                $file = $request->file('galeri');

                // Menyimpan file ke storage dan mendapatkan path
                $path = $file->store('galeri', 'public');

                // Menyimpan informasi file ke tabel 'files'
                $fileRecord = new File();
                $fileRecord->uuid = (string) Uuid::uuid4()->toString();
                $fileRecord->name = $file->getClientOriginalName();
                $fileRecord->path = $path;
                $fileRecord->mime_type = $file->getMimeType();
                $fileRecord->size = $file->getSize();
                $fileRecord->format = $file->getClientOriginalExtension();
                $fileRecord->save();
            }

            Galeri::create([
                'uuid' => (string) Uuid::uuid4()->toString(),
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'keterangan' => $request->keterangan,
                'file_id' => $fileRecord->id,
            ]);


            return redirect()->back()->with('success','Galeri berhasil ditambahkan');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','Galeri gagal ditambahkan'. $th->getMessage());
        }

    }

    public function delete($uuid)
    {
        try {
            Galeri::where('uuid', $uuid) ->update(
                [
                    'statusenabled' => false
                ]
            );

            return redirect()->back()->with('success','Galeri berhasil dihapus');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','Galeri gagal dihapus');
        }
    }
}
