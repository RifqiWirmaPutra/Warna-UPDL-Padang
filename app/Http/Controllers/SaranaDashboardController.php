<?php

namespace App\Http\Controllers;
use App\Models\Sarana; // Tambahkan ini


use Illuminate\Http\Request;

class SaranaDashboardController extends Controller
{
    public function index()
    {
        $saranas = Sarana::all(); // Sesuaikan dengan model dan query yang digunakan
        return view('layouts.dashboard.sarana', compact('saranas'));
    }
}


