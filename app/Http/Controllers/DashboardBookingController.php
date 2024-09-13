<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingPe;

class DashboardBookingController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggalMasuk' => 'required|date',
            'tanggalKeluar' => 'required|date|after_or_equal:tanggalMasuk',
            'email' => 'required|email',
            'noHP' => 'required|string|max:15',
            'uploadKTP' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);

        // Simpan data ke dalam database
        BookingPe::create([
            'tanggalMasuk' => $validatedData['tanggalMasuk'],
            'tanggalKeluar' => $validatedData['tanggalKeluar'],
            'email' => $validatedData['email'],
            'noHP' => $validatedData['noHP'],
            'uploadKTP' => $request->file('uploadKTP')->store('ktp_uploads'),
        ]);

        return redirect()->back()->with('success', 'Booking berhasil disimpan!');
    }
}
