<?php

namespace App\Http\Controllers\Jdl;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenginapanController extends Controller
{
    public function padang()
    {
        return view('jdl.penginapan.padang');
    }

    public function suralaya()
    {
        return view('jdl.penginapan.suralaya');
    }
    
    public function jakarta()
    {
        return view('jdl.penginapan.jakarta');
    }
    
    public function semarang()
    {
        return view('jdl.penginapan.semarang');
    }
    
    public function pandaan()
    {
        return view('jdl.penginapan.pandaan');
    }
    
    public function bogor()
    {
        return view('jdl.penginapan.bogor');
    }
}