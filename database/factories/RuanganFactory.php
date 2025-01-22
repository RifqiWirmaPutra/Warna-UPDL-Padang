<?php

namespace Database\Factories;

use App\Models\Ruangan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RuanganFactory extends Factory
{
    protected $model = Ruangan::class;

    public function definition()
    {
        return [
            'tipeLab' => $this->faker->randomElement(['Lab A', 'Lab B']),
            'jumlahPeserta' => $this->faker->numberBetween(1, 50),
            'harga' => $this->faker->numberBetween(100000, 1000000),
            'foto' => $this->faker->imageUrl(),
            'keterangan' => $this->faker->sentence(),
            'tanggalMasuk' => $this->faker->date(),
            'tanggalKeluar' => $this->faker->date(),
            'email' => $this->faker->safeEmail(),
            'email_verified_at' => now(),
            'noHP' => $this->faker->numerify('08##########'),
            'uploadKTP' => $this->faker->imageUrl(),
        ];
    }
}
