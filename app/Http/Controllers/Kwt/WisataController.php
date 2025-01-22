<?php

namespace App\Http\Controllers\Kwt;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WisataController extends Controller
{
    public function index(){
        return view ('kwt.wisata.index');
    }
    public function lubukBonta(){
        return view ('kwt.wisata.lubukBonta');
    }
    public function maninjau(){
        return view ('kwt.wisata.maninjau');
    }
    public function airManis(){
        return view ('kwt.wisata.airManis');
    }
    public function gondariah(){
        return view ('kwt.wisata.gondariah');
    }
    public function harau(){
        return view ('kwt.wisata.harau');
    }
    public function jamgadang(){
        return view ('kwt.wisata.jamgadang');
    }
    public function lawang(){
        return view ('kwt.wisata.lawang');
    }
    public function lembahAnai(){
        return view ('kwt.wisata.lembahAnai');
    }
    public function mesjidRaya(){
        return view ('kwt.wisata.mesjidRaya');
    }
    public function pagaruyuang(){
        return view ('kwt.wisata.pagaruyuang');
    }
    public function pasirJambak(){
        return view ('kwt.wisata.pasirJambak');
    }
    public function singkarak(){
        return view ('kwt.wisata.singkarak');
    }
    public function tirtaAlami(){
        return view ('kwt.wisata.tirtaAlami');
    }

}

