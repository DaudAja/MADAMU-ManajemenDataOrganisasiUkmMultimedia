<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AnggotaKegiatanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\UserController;
use App\Models\Divisi;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/welcome', function () {
    return view('welcome');
});


// Route::controller(AnggotaController::class)->group(function () {
//     Route::get('/lihatanggota', 'show');
// });
//login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login');

//User
Route::resource('user', UserController::class);
// Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('editUser');
// Route::put('/user/{id}', [UserController::class, 'update'])->name('update');

//Anggota
Route::resource('anggota', AnggotaController::class);

//Divisi
Route::resource('divisi', DivisiController::class);

//Kegiatan
Route::resource('kegiatan', KegiatanController::class);

//Anggota_Kegiatan
// Route::resource('AnggotaKegiatan', AnggotaKegiatanController::class);

