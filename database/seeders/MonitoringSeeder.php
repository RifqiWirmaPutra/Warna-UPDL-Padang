<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Monitoring;

class MonitoringSeeder extends Seeder
{
    public function run()
    {
        // Mengisi data Monitoring sebanyak 10 entri
        Monitoring::factory()->count(10)->create();
    }
}
