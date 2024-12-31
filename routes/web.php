<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalPembelajaranController;
use App\Http\Controllers\MateriPembelajaranController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.profile');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/post', [AuthController::class, 'login_post'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function(){

    //Dashboard
    Route::get('/dashboards/index', [DashboardController::class, 'index'])->name('dashboard.index');

    //Jadwal Pembelajaran
    Route::get('/jadwal-pembelajaran/index', [JadwalPembelajaranController::class, 'index'])->name('jadwalpembelajaran.index');

    //Materi Pembelajaran
    Route::get('/materi-pembelajaran/index', [MateriPembelajaranController::class, 'index'])->name('materipembelajaran.index');

    //PPDB
    Route::get('/ppdb/index', [PPDBController::class, 'index'])->name('ppdb.index');

    //Galeri
    Route::get('/galeri/index', [GaleriController::class, 'index'])->name('galeri.index');

    //Profil
    Route::get('/profile/index', [ProfilController::class, 'index'])->name('profil.index');

});
