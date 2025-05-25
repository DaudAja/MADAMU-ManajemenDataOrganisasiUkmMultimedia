<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AnggotaKegiatanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\UserController;
use App\Models\Divisi;
use App\Models\Kegiatan;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
// });


//login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login');

//register
// Route::get('/register', [AuthController::class, 'registerView']);
// Route::post('/register', [AuthController::class, 'register'])->name('register');

//logout
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

//User
Route::resource('user', UserController::class)->middleware('auth');

//Anggota
Route::resource('anggota', AnggotaController::class)->middleware('auth');

//Divisi
Route::resource('divisi', DivisiController::class)->middleware('auth');

//Kegiatan
Route::resource('kegiatan', KegiatanController::class)->middleware('auth');

//Anggota_Kegiatan
Route::resource('AnggotaKegiatan', AnggotaKegiatanController::class)->middleware('auth');

