<?php

namespace Database\Seeders;

use App\Models\Penginapan;
use Illuminate\Database\Seeder;

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
