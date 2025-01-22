<?php

namespace App\Http\Controllers\Kwt;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransportasiController extends Controller
{
    public function index(){
        return view ('kwt.transportasi.index');
    }
}
