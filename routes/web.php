<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\SiswaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman utama
Route::get('/', function () {
    return 'Selamat datang di Sistem E-PKL';
});

// Route siswa
Route::get('/siswa', [SiswaController::class, 'index'])
    ->name('siswa.index');

Route::get('/siswa/{id}', [SiswaController::class, 'show'])
    ->name('siswa.show');
    
    Route::get('/siswa', [SiswaController::class, 'index']);

// Route perusahaan menggunakan Controller
Route::get('/perusahaan', [PerusahaanController::class, 'index'])
    ->name('perusahaan.index');

Route::get('/perusahaan/{id}', [PerusahaanController::class, 'show'])
    ->name('perusahaan.show');

    

    