<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('perusahaan')->name('perusahaan.')->group(function () {
 Route::get('/', function () {
 return 'Daftar semua perusahaan mitra PKL';
 })->name('index');
 Route::get('/{id}', function ($id) {
 return 'Detail perusahaan ID: ' . $id;
 })->name('show');
});

oute::get('/', function () {
 return 'Selamat datang di Sistem E-PKL';
});
  

