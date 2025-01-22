<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuanganDashboardController extends Controller
{
    public function index()
    {
        return view('layouts.dashboard.ruangandashboard');
    }
}
