<?php

namespace Database\Factories;

use App\Models\Peralatan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PeralatanFactory extends Factory
{
    protected $model = Peralatan::class;

    public function definition()
    {
        return [
            'namaAlat' => $this->faker->word,
            'jumlahTersedia' => $this->faker->numberBetween(1, 100),
            'harga' => $this->faker->randomFloat(2, 10, 1000),
            'tanggalPinjam' => $this->faker->optional()->date(),
            'tanggalKembali' => $this->faker->optional()->date(),
            'booking' => $this->faker->boolean,
        ];
    }
}
