<?php

namespace Database\Factories;

use App\Models\Monitoring;
use App\Models\Penginapan;
use App\Models\BookingPe;
use Illuminate\Database\Eloquent\Factories\Factory;

class MonitoringFactory extends Factory
{
    protected $model = Monitoring::class;

    public function definition()
    {
        // Ambil data acak dari tabel `penginapans` dan `booking_pe`
        $penginapan = Penginapan::inRandomOrder()->first();
        $bookingMasuk = BookingPe::inRandomOrder()->first();
        $bookingKeluar = BookingPe::inRandomOrder()->first();

        return [
            'tipePenginapan' => $penginapan ? $penginapan->id : null,
            'namaRuangan' => $this->faker->word() . ' ' . $this->faker->numberBetween(100, 999),
            'tersedia' => $this->faker->boolean(),
            'tanggalMasuk' => $bookingMasuk ? $bookingMasuk->tanggalMasuk : $this->faker->dateTimeBetween('-1 month', 'now'),
            'tanggalKeluar' => $bookingKeluar ? $bookingKeluar->tanggalKeluar : $this->faker->dateTimeBetween('now', '+1 month'),
            'jumlah_hari' => $this->faker->numberBetween(1, 30),
        ];
    }
}
