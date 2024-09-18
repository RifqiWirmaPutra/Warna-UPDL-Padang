<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Penginapan;
use Illuminate\Database\Seeder;
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penginapan;
>>>>>>> df8c089bbb22f01aebda973dff238feab8c40530

class PenginapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penginapan::factory()->count(10)->create();
    }
}
