<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AnggotaKegiatanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KetuaDivisiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PartisipasiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('Dashboard.dashboard');
});

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
// });

Route:: middleware('guest')->group(function(){
    //login
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login');
    // register
    Route::get('/register', [AuthController::class, 'registerView']);
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});
//logout
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

//User
Route::resource('user', UserController::class)->middleware('auth');

//Anggota
Route::resource('anggota', AnggotaController::class);
Route::get('/anggota/{id}', [AnggotaController::class, 'show'])->name('anggota.show');
Route::get('/kegiatan/pilih', [PartisipasiController::class, 'create'])->name('partisipasi.create')->middleware('auth');
Route::post('/kegiatan/pilih', [PartisipasiController::class, 'store'])->name('partisipasi.store');

//Divisi
Route::resource('divisi', DivisiController::class)->middleware('auth');

//Kegiatan
Route::resource('kegiatan', KegiatanController::class)->middleware('auth');
Route::get('/kegiatanku', [KegiatanController::class, 'kegiatanku'])->middleware('auth')->name('kegiatan.kegiatanku');

//Anggota Kegiatan
Route::resource('AnggotaKegiatan', AnggotaKegiatanController::class)->middleware('auth');

//Profile
Route::middleware(['auth'])->group(function () {
    Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});





