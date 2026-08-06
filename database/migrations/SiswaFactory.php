<?php

namespace Database\Factories;

use App\Models\Perusahaan; // <--- TAMBAHKAN BARIS INI
use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    public function definition(): array
    {
        return [
            // Menggunakan Model Perusahaan yang sudah di-import di atas
            'perusahaan_id' => Perusahaan::inRandomOrder()->first()?->id ?? Perusahaan::factory(),
            'nisn'          => fake()->unique()->numerify('##########'),
            'nama'          => fake()->name(),
            'kelas'         => fake()->randomElement(['XII RPL 1', 'XII RPL 2', 'XII TKJ 1']),
            'tgl_masuk'     => fake()->dateTimeBetween('-2 years', 'now'),
        ];
    }
}