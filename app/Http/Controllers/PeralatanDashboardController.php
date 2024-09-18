<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeralatanDashboardController extends Controller
{
    public function index()
    {
        return view('layouts.dashboard.peralatandashboard');
    }
}
