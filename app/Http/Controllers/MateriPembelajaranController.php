<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Kelas;
use App\Models\MateriPembelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class MateriPembelajaranController extends Controller
{
    //
    public function index()
    {
        $materi = DB::table('materi_pembelajaran_t as mt')
        ->leftJoin('kelas_m as kls', 'mt.kelas_id', 'kls.id')
        ->leftJoin('file_t as fl', 'mt.file_id', 'fl.id')
        ->select(
            'mt.uuid',
            'mt.judul',
            'kls.kelas as kelas',
            'mt.statusenabled',
            'mt.penerbit',
            'mt.tahun_terbit',
            'fl.name as files',
            'fl.format',
            'fl.path',
        )->where('mt.statusenabled', true)->get();

        $kelas = Kelas::where('statusenabled', true)->get();

        $data = [
            'materi' => $materi,
            'kelas' => $kelas,
            'by' => 'ahmad_fadillah'
        ];

        return view('akademik.materi-pembelajaran.index', compact('data'));
    }

    public function insert(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'files' => 'required|file|max:10240', // Maksimal 10MB
        // ]);
        try {
            $fileRecord = null;
            if ($request->hasFile('files')) {
                $file = $request->file('files');

                // Menyimpan file ke storage dan mendapatkan path
                $path = $file->store('files', 'public');

                // Menyimpan informasi file ke tabel 'files'
                $fileRecord = new File();
                $fileRecord->uuid = (string) Uuid::uuid4()->toString();
                $fileRecord->name = $file->getClientOriginalName();
                $fileRecord->path = $path;
                $fileRecord->mime_type = $file->getMimeType();
                // $fileRecord->size = $file->getSize();
                // $fileRecord->format = $file->getClientOriginalExtension();
                $fileRecord->save();  // Simpan file terlebih dahulu untuk mendapatkan ID-nya
            }

            dd($fileRecord);

            // Menyimpan data MateriPembelajaran setelah file berhasil disimpan
            MateriPembelajaran::create([
                'uuid' => (string) Uuid::uuid4()->toString(),
                'judul' => $request->judul,
                'kelas_id' => $request->kelas_id,
                'penerbit' => $request->penerbit,
                'tahun_terbit' => $request->tahun_terbit,
                'file_id' => $fileRecord->id,
            ]);


            return redirect()->back()->with('success','Materi pembelajaran berhasil ditambahkan');

        } catch (\Throwable $th) {
            // dd($th);
            return redirect()->back()->with('info','Materi pembelajaran gagal ditambahkan'. $th->getMessage());
        }

    }

    public function delete($uuid)
    {
        try {
            MateriPembelajaran::where('uuid', $uuid) ->update(
                [
                    'statusenabled' => false
                ]
            );

            return redirect()->back()->with('success','Materi pembelajaran berhasil dihapus');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','Materi pembelajaran gagal dihapus');
        }
    }
}
