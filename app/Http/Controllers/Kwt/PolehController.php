<?php

namespace App\Http\Controllers\Kwt;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PolehController extends Controller
{
    public function index(){
        return view ('kwt.poleh.index');
    }
}
