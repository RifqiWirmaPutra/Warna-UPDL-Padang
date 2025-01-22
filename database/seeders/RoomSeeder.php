<?php

namespace Database\Seeders;

use App\Models\Monitoring;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    public function run()
    {
        // Membuat 17 kamar dengan data dummy
        Monitoring::factory()->count(17)->create();
    }
}
