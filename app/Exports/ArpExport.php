<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Arp;

class ArpExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Arp::all();
    }
    public function headings(): array
    {
        return [
            'No',
            'Tanggal Mulai',
            'Tanggal Selesai',
            'Kode',
            'Judul',
            'Jenis Permintaan Diklat',
            'Jenis Pelaksanaan Diklat',
            'Angkatan',
            'Instruktur',
            'Rencana Peserta',
            'Realisasi Peserta',
            'Kelas',
            'Wisma',
            'Persiapan',
            'Pelaksanaan',
            'Pasca',
            'Realisasi Biaya',
            // Tambahkan kolom lain sesuai dengan data ARP yang ingin ditampilkan
        ];
    }
}
