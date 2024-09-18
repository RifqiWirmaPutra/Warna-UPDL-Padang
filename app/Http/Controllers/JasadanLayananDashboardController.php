<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JasadanLayananDashboardController extends Controller
{
    public function index()
    {
        return view('layouts.dashboard.jasa_layanan');
    }
}
