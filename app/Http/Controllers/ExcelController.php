<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ArpImport;
use Maatwebsite\Excel\Facades\Excel;


class ExcelController extends Controller
{
    public function import(Request $request)
    {
        // dd($record['TANGGAL MULAI']);

        $validator = \Validator::make($request->all(), [
            'file' => 'required|mimes:xls,xlsx',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $file = $request->file('file');

        try {
            Excel::import(new ArpImport, $file); // Sesuaikan dengan model import Anda
        } catch (\Exception $e) {
            // Tangani kesalahan jika diperlukan
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengimpor data Excel.');
        }

        return redirect()->route('arp.index')->with('success', 'File Excel berhasil diunggah dan data berhasil diproses.');
    }

}
