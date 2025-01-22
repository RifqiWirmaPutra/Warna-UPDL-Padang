<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersiapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kegiatans = [
            'Kesiapan Materi',
            'Surat Pemanggilan Peserta',
            'Surat Pemanggilan Instruktur',
            'Pembuatan Grup WA',
            'Pembuatan Zoom/Digital',
            'Nota Dinas Rendiklat ke MUP',
            'Tindaklanjut Nota Dinas Rendiklat',
            'Pembuatan RKS Narasumber',
            'Pembuatan Kontrak',
        ];
        foreach ($kegiatans as $kegiatan) {
            DB::table('persiapans')->insert([
                'kegiatan' => $kegiatan,
                'pic' => 'Nama PIC', // Ganti dengan nama PIC sesuai kebutuhan Anda.
                'ceklist' => 'Belum Selesai', // Ganti jika sesuai kebutuhan Anda.
                'keterangan' => null, // Sesuaikan dengan kebutuhan Anda.
                'arp_id' => 1, // Sesuaikan dengan ARP ID yang sesuai.
            ]);
        }
    }
}
