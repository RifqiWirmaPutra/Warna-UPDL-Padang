<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    //
    public function index()
    {
        // Ambil data konfirmasi dari sesi
        $confirmationData = Session::get('confirmation');

        // Tampilkan halaman konfirmasi dengan data tersebut
        return view('admin.arp.confirmation.index', ['confirmationData' => $confirmationData]);
    }
}
