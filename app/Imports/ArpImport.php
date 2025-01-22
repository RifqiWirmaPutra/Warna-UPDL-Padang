<?php

namespace App\Imports;

use App\Models\Arp; 
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Excel;
use PhpOffice\PhpSpreadsheet\Settings;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class ArpImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            $dataToLog = $row->toArray(); // Konversi koleksi menjadi array
            \Log::info('Row Data:', $dataToLog);
            

            // nama yang ada dalam berkas Excel
            $tanggalMulaiExcel = $row['tanggal_mulai'];
            $tanggalSelesaiExcel = $row['tanggal_selesai'];
            $kodeExcel = $row['KODE']; // nama kolom dalam berkas Excel

            Arp::create([
                'tanggal_mulai' => date('Y-m-d', strtotime($tanggalMulaiExcel)),
                'tanggal_selesai' => date('Y-m-d', strtotime($tanggalSelesaiExcel)),
                'kode' => $kodeExcel,
                'judul' => $row['JUDUL'],
                'jenis_permintaan_diklat' => $row['JENIS PERMINTAAN DIKLAT'],
                'jenis_pelaksanaan_diklat' => $row['JENIS PELAKSANAAN DIKLAT'],
                'angkatan' => $row['ANGKATAN'],
                'instruktur' => $row['INSTRUKTUR'],
            ]);
        }
    }

}
