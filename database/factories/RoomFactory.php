<?php

namespace Database\Factories;

use App\Models\Monitoring;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    protected $model = Monitoring::class;

    public function definition()
    {
        return [
            'jenis' => $this->faker->randomElement(['Standar', 'Family']),
            'nama_kamar' => $this->faker->word() . ' Room',
            'harga' => $this->faker->numberBetween(100, 200), // Ganti sesuai dengan rentang harga yang diinginkan
            // Ketersediaan kamar per hari dalam sebulan
            'availability' => json_encode(array_fill(0, 30, $this->faker->randomElement([0, 1]))),
        ];
    }
}
