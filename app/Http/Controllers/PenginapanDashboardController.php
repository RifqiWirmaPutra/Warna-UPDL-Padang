<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenginapanDashboardController extends Controller
{
    public function index()
    {
        return view('layouts.dashboard.penginapandashboard');
    }
}
