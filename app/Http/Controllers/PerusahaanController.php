<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
 public function index()
 {
    $judulHalaman = 'Daftar Perusahaan Mitra PKL';

 return view('perusahaan.index', compact ('judulHalaman'));

 }

 public function show($id)

 {
 return 'Menampilkan detail perusahaan dengan ID: ' . $id;
 }
}

Route::get('/perusahaan', [PerusahaanController::class, 'index'])->name('perusahaan.index');
Route::get('/perusahaan/{id}', [PerusahaanController::class, 'show'])->name('perusahaan.show');
