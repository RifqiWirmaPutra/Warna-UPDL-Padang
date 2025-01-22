<?php

namespace App\Exports;

use App\Models\UabsensiPeserta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AbsenExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return UabsensiPeserta::all();
    }
    public function headings(): array{
        return[
            'No',
            'Nip',
            'Nama',
            'Judul',
            'Jenis Permintaan Diklat',
            'Tanggal Kehadiran',
            'Penggantian Kuota',
            'No Hp',
            'Kehadiran',
        ];
    }
}
