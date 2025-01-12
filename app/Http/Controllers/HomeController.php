<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\File;
use App\Models\Galeri;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\NamaPelajaran;
use App\Models\PPDB;
use App\Models\ProfilSekolah;
use App\Models\Rating;
use App\Models\UsulanMateri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\TabCompletion\Matcher\FunctionsMatcher;
use Ramsey\Uuid\Uuid;

class HomeController extends Controller
{
    //
    public function index()
    {
        $profil = ProfilSekolah::first();

        $rating = DB::table('rating_m as rt')
        ->leftJoin('file_t as fl', 'rt.gambar_id', 'fl.id')
        ->select('rt.*', 'fl.path')->where('rt.statusenabled', true)->get();

        $guru = Guru::where('statusenabled', true)->get();

        $data = [
            'profil' => $profil,
            'guru' => $guru,
            'rating' => $rating,
        ];
        return view('home.index', compact('data'));
    }

    public function usulan_materi(Request $request)
    {
        // dd($request->all());
        try {
            UsulanMateri::create([
                'name' => $request->name,
                'uuid' => (string) Uuid::uuid4()->toString(),
                'email' => $request->email,
                'no_wa' => $request->no_wa,
                'materi' => $request->materi,
            ]);

            return redirect()->back()->with('success', 'Usulan materi telah terkirim, terimakasih');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', 'Usulan materi gagal terkirim, mohon coba kembali');
        }
    }

    public function rating(Request $request)
    {
        // dd($request->all());
        try {
            $fileRecord = null;
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');

                // Menyimpan file ke storage dan mendapatkan path
                $path = $file->store('rating', 'public');

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

            Rating::create([
                'nama' => $request->nama,
                'uuid' => (string) Uuid::uuid4()->toString(),
                'pekerjaan' => $request->pekerjaan,
                'deskripsi' => $request->deskripsi,
                'gambar_id' => $fileRecord->id,
            ]);

            return redirect()->back()->with('success', 'Rating telah terkirim, terimakasih');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', 'Rating gagal terkirim, mohon coba kembali'. $th->getMessage());
        }
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

        return view('home.materipembelajaran', compact('materi'));
    }

    public function jadwalpembelajaran(Request $request)
    {
        $kelas = Kelas::where('statusenabled', true)->get();
        $pelajaran = NamaPelajaran::where('statusenabled', true)->get();

        $jadwal = DB::table('jadwal_pembelajaran_t as jd')
            ->leftJoin('kelas_m as kl', 'jd.kelas_id', 'kl.id')
            ->leftJoin('nama_pelajaran_m as np', 'jd.pelajaran_id', 'np.id')
            ->select(
                'jd.hari',
                'jd.statusenabled',
                'jd.uuid',
                'jd.semester',
                'jd.jam_masuk',
                'jd.kelas_id',
                'np.id as pelajaran_id',
                'jd.jam_selesai',
                'kl.kelas',
                'np.pelajaran'
            )
            ->where('jd.statusenabled', true);

        if (isset($request->kelas_id)) {
            $jadwal = $jadwal->where('jd.kelas_id', $request->kelas_id);
        }

        if (isset($request->pelajaran_id)) {
            $jadwal = $jadwal->where('np.id', $request->pelajaran_id);
        }

        if (isset($request->semester)) {
            $jadwal = $jadwal->where('jd.semester', $request->semester);
        }

        $jadwal = $jadwal->get()->map(function ($item) {
            $item->kelas_id = str_pad($item->kelas_id, 3, '0', STR_PAD_LEFT);
            return $item;
        });

        return view('home.jadwalpembelajaran', compact('jadwal', 'kelas', 'pelajaran'));
    }

    public function ppdb()
    {
        $ppdb = PPDB::where('statusenabled', true)->get();

        return view('home.ppdb.index', compact('ppdb'));
    }

    public function contact()
    {

        return view('home.contact');
    }

    public function contact_post(Request $request)
    {
        // dd($request->all());
        try {
            Contact::create([
                'name' => $request->name,
                'uuid' => (string) Uuid::uuid4()->toString(),
                'subject' => $request->subject,
                'no_wa' => $request->no_wa,
                'message' => $request->message,
            ]);

            return redirect()->back()->with('success', 'Formulir kontak berhasil dikirim, terimakasih');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', 'Formulir kontak gagal dikirim, mohon coba kembali');
        }
    }

    public function ppdb_detail($uuid)
    {
        $ppdb = DB::table('ppdb_t as pp')
        ->leftJoin('file_t as fl', 'pp.file_id', 'fl.id')
            ->select(
                'pp.*',
                'fl.name as files',
                'fl.format',
                'fl.path',
            )
            ->where('pp.uuid', $uuid)->first();



        return view('home.ppdb.detail', compact('ppdb'));
    }
}
