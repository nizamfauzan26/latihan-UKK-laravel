<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
 public function index()
 {
 $judulHalaman = 'Daftar Perusahaan Mitra PKL';
 $perusahaan = [
 ['nama_perusahaan' => 'PT Sinergi Digital Nusantara', 'bidang_usaha' =>
'Software House', 'jumlah_siswa' => 6],
 ['nama_perusahaan' => 'CV Karya Teknologi', 'bidang_usaha' => 'Jaringan &
Infrastruktur IT', 'jumlah_siswa' => 3],
 ];
 return view('perusahaan.index', compact('judulHalaman', 'perusahaan'));
 }
}
