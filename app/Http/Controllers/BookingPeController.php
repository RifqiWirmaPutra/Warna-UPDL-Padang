<?php

namespace App\Http\Controllers;

use App\Models\BookingPe;
use Illuminate\Http\Request;

class BookingPeController extends Controller
{
    // Menampilkan form pemesanan
    public function create()
    {
        return view('layout.booking.create');
    }

    // Menyimpan pemesanan
    public function store(Request $request)
    {
        $request->validate([
            'tanggalMasuk' => 'required|date',
            'tanggalKeluar' => 'required|date|after:tanggalMasuk',
            'email' => 'required|email',
            'noHP' => 'required|string|max:15',
            'uploadKTP' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Handle file upload
        $filePath = $request->file('uploadKTP')->store('uploads', 'public');

        BookingPe::create([
            'tanggalMasuk' => $request->tanggalMasuk,
            'tanggalKeluar' => $request->tanggalKeluar,
            'email' => $request->email,
            'email_verified_at' => now(),
            'noHP' => $request->noHP,
            'uploadKTP' => $filePath,
        ]);

        return redirect()->route('layout.booking.create')->with('success', 'Booking successfully created!');
    }

    // Menampilkan daftar pemesanan untuk admin
    public function index()
    {
        $bookings = BookingPe::all();
        return view('admin.bookings.index', compact('bookings'));
    }

    // Mengupdate status pemesanan (jika diperlukan)
    public function update(Request $request, $id)
    {
        $booking = BookingPe::findOrFail($id);
        // Update status atau informasi lain jika diperlukan
        // $booking->status = $request->status;
        // $booking->save();

        return redirect()->route('admin.bookings.index')->with('success', 'Booking updated!');
    }
}
