<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.profile');

Route::get('/login', [AuthController::class, 'login'])->name('login');

//Dashboard
Route::get('/dashboards/index', [DashboardController::class, 'index'])->name('dashboard.index');

