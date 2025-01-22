<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactDashboardController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_visit' => 'required',
            'email_visit' => 'required|email',
            'subject' => 'required',
            'pesan' => 'required',
            
        ]);

        // Set status sebagai 0 (belum terbaca)
        $request['status'] = 0;

        Contact::create($request->all());

        return redirect()->route('contact.index')->with('success', 'Terimakasih, Pesan anda sudah terkirim.');
    }

    public function index()
    {
        $contacts = Contact::all();
        return view('layouts.dashboard.contact', compact('contacts'));
    }

}
