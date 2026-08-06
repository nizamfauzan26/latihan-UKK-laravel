<?php

namespace Database\Factories;

use App\Models\Perusahaan;
use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    protected $model = Siswa::class;

    public function definition(): array
    {
        return [
            'nis' => $this->faker->unique()->numerify('#########'),
            'nama' => $this->faker->name(),
            'kelas' => $this->faker->randomElement(['XI RPL 1', 'XI RPL 2']),
            'tanggal_mulai_pkl' => $this->faker->dateTimeBetween('-3 months', 'now'),
            'tanggal_selesai_pkl' => $this->faker->dateTimeBetween('now', '+3 months'),
            'perusahaan_id' => Perusahaan::inRandomOrder()->first()->id ?? Perusahaan::factory(),
        ];
    }
}
