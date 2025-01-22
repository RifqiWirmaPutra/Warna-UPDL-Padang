<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arp;

class IpController extends Controller
{
    public function index (){
        $arp = Arp::all();
        return view('ip', ['arp' => $arp]);
    }
    public function viewindex (){
        $arp = Arp::all();
        return view('user.uip', ['arp' => $arp]);
    }
}
