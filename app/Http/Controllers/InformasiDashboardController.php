<?php

namespace App\Http\Controllers;
use App\Models\Informasi; // Tambahkan ini

use Illuminate\Http\Request;

class InformasiDashboardController extends Controller
{
    public function index()
    {
        $informasis = Informasi::all(); // Sesuaikan dengan model dan query yang digunakan
        return view('layouts.dashboard.informasi', compact('informasis'));
    }
}
