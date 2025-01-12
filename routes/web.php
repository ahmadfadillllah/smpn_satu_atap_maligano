<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalPembelajaranController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MateriPembelajaranController;
use App\Http\Controllers\NamaPelajaranController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsulanMateriController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.profile');
Route::post('/usulan-materi', [HomeController::class, 'usulan_materi'])->name('home.usulanMateri');
Route::post('/rating', [HomeController::class, 'rating'])->name('home.rating');

Route::get('/galeri', [HomeController::class, 'galeri'])->name('home.galeri');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::post('/contact/post', [HomeController::class, 'contact_post'])->name('home.contact.post');
Route::get('/materipembelajaran', [HomeController::class, 'materipembelajaran'])->name('home.materipembelajaran');
Route::get('/jadwalpembelajaran', [HomeController::class, 'jadwalpembelajaran'])->name('home.jadwalpembelajaran');
Route::get('/ppdb', [HomeController::class, 'ppdb'])->name('home.ppdb');
Route::get('/ppdb/detail/{uuid}', [HomeController::class, 'ppdb_detail'])->name('home.ppdb.detail');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/post', [AuthController::class, 'login_post'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function(){

    //Dashboard
    Route::get('/dashboards/index', [DashboardController::class, 'index'])->name('dashboard.index');

    //Guru
    Route::get('/guru/index', [GuruController::class, 'index'])->name('guru.index');
    Route::post('/guru/insert', [GuruController::class, 'insert'])->name('guru.insert');
    Route::post('/guru/update/{uuid}', [GuruController::class, 'update'])->name('guru.update');
    Route::get('/guru/delete/{uuid}', [GuruController::class, 'delete'])->name('guru.delete');

    //Kelas
    Route::get('/kelas/index', [KelasController::class, 'index'])->name('kelas.index');
    Route::post('/kelas/insert', [KelasController::class, 'insert'])->name('kelas.insert');
    Route::post('/kelas/update/{uuid}', [KelasController::class, 'update'])->name('kelas.update');
    Route::get('/kelas/delete/{uuid}', [KelasController::class, 'delete'])->name('kelas.delete');

    //Jadwal Pembelajaran
    Route::get('/jadwal-pembelajaran/index', [JadwalPembelajaranController::class, 'index'])->name('jadwalpembelajaran.index');
    Route::post('/jadwal-pembelajaran/insert', [JadwalPembelajaranController::class, 'insert'])->name('jadwalpembelajaran.insert');
    Route::get('/jadwal-pembelajaran/delete/{uuid}', [JadwalPembelajaranController::class, 'delete'])->name('jadwalpembelajaran.delete');

    //Materi Pembelajaran
    Route::get('/materi-pembelajaran/index', [MateriPembelajaranController::class, 'index'])->name('materipembelajaran.index');
    Route::post('/materi-pembelajaran/insert', [MateriPembelajaranController::class, 'insert'])->name('materipembelajaran.insert');
    Route::get('/materi-pembelajaran/delete/{uuid}', [MateriPembelajaranController::class, 'delete'])->name('materipembelajaran.delete');

    //PPDB
    Route::get('/ppdb/index', [PPDBController::class, 'index'])->name('ppdb.index');
    Route::get('/ppdb/insert', [PPDBController::class, 'insert'])->name('ppdb.insert');
    Route::get('/ppdb/delete/{uuid}', [PPDBController::class, 'delete'])->name('ppdb.delete');
    Route::post('/ppdb/post', [PPDBController::class, 'post'])->name('ppdb.post');

    //Galeri
    Route::get('/galeri/index', [GaleriController::class, 'index'])->name('galeri.index');
    Route::post('/galeri/insert', [GaleriController::class, 'insert'])->name('galeri.insert');
    Route::get('/galeri/delete/{uuid}', [GaleriController::class, 'delete'])->name('galeri.delete');

    //Nama Pelajaran
    Route::get('/nama-pelajaran/index', [NamaPelajaranController::class, 'index'])->name('namapelajaran.index');
    Route::post('/nama-pelajaran/insert', [NamaPelajaranController::class, 'insert'])->name('namapelajaran.insert');
    Route::get('/nama-pelajaran/delete/{uuid}', [NamaPelajaranController::class, 'delete'])->name('namapelajaran.delete');

    //Usulan Materi
    Route::get('/usulan-materi/index', [UsulanMateriController::class, 'index'])->name('usulanmateri.index');
    Route::get('/usulan-materi/delete/{uuid}', [UsulanMateriController::class, 'delete'])->name('usulanmateri.delete');

    //Kontak
    Route::get('/kontak/index', [ContactController::class, 'index'])->name('kontak.index');
    Route::get('/kontak/delete/{uuid}', [ContactController::class, 'delete'])->name('kontak.delete');

    //Rating
    Route::get('/rating/index', [RatingController::class, 'index'])->name('rating.index');
    Route::get('/rating/delete/{uuid}', [RatingController::class, 'delete'])->name('rating.delete');

    //Profil
    Route::get('/profile/index', [ProfilController::class, 'index'])->name('profil.index');
    Route::post('/profile/update', [ProfilController::class, 'update'])->name('profil.update');

    //Users
    Route::get('/users/index', [UsersController::class, 'index'])->name('users.index');
    Route::get('/users/status/{id}', [UsersController::class, 'statusEnabled'])->name('users.status');
    Route::get('/users/reset-password/{id}', [UsersController::class, 'resetPassword'])->name('users.resetPassword');
    Route::post('/users/insert', [UsersController::class, 'insert'])->name('users.insert');

});
