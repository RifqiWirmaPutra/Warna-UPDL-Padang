<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Admin::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@updlpdg.com',
            'password'=> 'UPDLpdg123'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@updlpdg.com',
            'password'=> 'UPDLpdg123'
        ]);
        // $this->call([
        //     // MonitoringSeeder::class,
        //     PenginapanSeeder::class,
        //     PeralatanSeeder::class,
        //     PersiapanSeeder::class,
        //     RoomSeeder::class,
        //     RuanganSeeder::class,
        // ]);
    }
}
