<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingPe;

class DashboardBookingController extends Controller
{
    public function index(){
        $bookings = BookingPe::all();
        return view('admin.booking.index', compact('bookings'));
    }

    public function create()
    {
        return view('admin.booking.create');
    }

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

        return redirect()->route('booking.index')->with('success', 'Booking berhasil disimpan!');
    }

    public function edit(string $id)
    {
        $booking = BookingPe::findOrFail($id);
        return view('admin.booking.edit', compact('booking'));
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'tanggalMasuk' => 'required|date',
            'tanggalKeluar' => 'required|date|after_or_equal:tanggalMasuk',
            'email' => 'required|email',
            'noHP' => 'required|string|max:15',
            'uploadKTP' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);

        $booking = BookingPe::findOrFail($id);
        $booking->update([
            'tanggalMasuk' => $validatedData['tanggalMasuk'],
            'tanggalKeluar' => $validatedData['tanggalKeluar'],
            'email' => $validatedData['email'],
            'noHP' => $validatedData['noHP'],
            'uploadKTP' => $request->hasFile('uploadKTP') ? $request->file('uploadKTP')->store('ktp_uploads') : $booking->uploadKTP,
        ]);

        return redirect()->route('booking.index')->with('success', 'Booking berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $booking = BookingPe::findOrFail($id);
        $booking->delete();
        return redirect()->route('booking.index')->with('success', 'Booking berhasil dihapus!');
    }
}
