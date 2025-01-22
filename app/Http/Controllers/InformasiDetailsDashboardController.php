<?php

namespace App\Http\Controllers;
use App\Models\Informasi;

use Illuminate\Http\Request;

class InformasiDetailsDashboardController extends Controller
{
    public function show(string $id)
    {
         // Ambil informasi berdasarkan id
        $informasi = Informasi::findOrFail($id);

        // Tampilkan view informasi-details dan kirimkan informasi
        // return view('informasi-details', ['informasi' => $informasi]);
        return view('layouts.dashboard.informasi-details', ['informasi' => $informasi]);
    }
}
