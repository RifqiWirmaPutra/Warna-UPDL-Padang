<?php

namespace App\Http\Controllers;

use App\Models\Penginapan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PenginapanController extends Controller
{
    public function padang()
    {
         // Mengambil semua data dari tabel penginapans
         $penginapans = Penginapan::all();

        // Mengirim data ke view
    return view('jdl.penginapan.padang', ['penginapans' => $penginapans]);
    }

    public function suralaya()
    {
        return view('penginapan.suralaya');
    }

    public function jakarta()
    {
        return view('penginapan.jakarta');
    }

    public function semarang()
    {
        return view('penginapan.semarang');
    }

    public function bogor()
    {
        return view('penginapan.bogor');
    }
}
