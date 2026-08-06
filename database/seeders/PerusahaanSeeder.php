<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Perusahaan; 

class PerusahaanSeeder extends Seeder
{
 public function run(): void
 {
 $data = [
 [
 'nama_perusahaan' => 'Nzm Design',
 'bidang_usaha' => 'Desain Grafis',
 'alamat' => 'Jl. Soreang-ciwidey km 26',
 'nama_pembimbing_industri' => 'Rafly Rodiansyah',
 'telepon' => '089685500906',
 ],
 [
 'nama_perusahaan' => 'PT Geo Jaya Abadi',
 'bidang_usaha' => 'Geothermal',
 'alamat' => 'Jl. Patuha No 1',
 'nama_pembimbing_industri' => 'asep roni sanjaya',
 ],
 ];
 foreach ($data as $item) {
 Perusahaan::create($item);
 }
 }
}