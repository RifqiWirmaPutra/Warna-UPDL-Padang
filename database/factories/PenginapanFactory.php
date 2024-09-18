<?php

namespace Database\Factories;

use App\Models\Penginapan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penginapan>
 */
class PenginapanFactory extends Factory
{
    protected $model = Penginapan::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'tipeRuangan' => $this->faker->randomElement(['Family', 'Standard']),
            'fotoRuangan' => $this->faker->imageUrl(640, 480, 'rooms', true), // Gambar random
            'harga' => $this->faker->numberBetween(100000, 1000000), // Harga antara 100k-1M
            'keterangan' => $this->faker->sentence(),
        ];
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> df8c089bbb22f01aebda973dff238feab8c40530
