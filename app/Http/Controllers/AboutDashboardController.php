<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutDashboardController extends Controller
{
    public function index()
    {
        return view('layouts.dashboard.about');
    }
}
