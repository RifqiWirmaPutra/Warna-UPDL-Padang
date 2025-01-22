<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomunitasDashboardController extends Controller
{
    public function index()
    {
        return view('layouts.dashboard.komunitas');
    }
}
