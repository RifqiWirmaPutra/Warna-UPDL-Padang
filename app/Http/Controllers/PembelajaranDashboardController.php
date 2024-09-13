<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelajaranDashboardController extends Controller
{
    public function index()
    {
        return view('layouts.dashboard.pembelajarandashboard');
    }
}
