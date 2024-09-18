<?php

namespace App\Http\Controllers;

use App\Models\BookingPe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PeBookingController extends Controller
{
    // Menampilkan form pemesanan
    public function booking()
    {
        return view('jdl.booking.booking');
    }

    // Menyimpan data pemesanan
    public function store(Request $request)
    {
        // Validasi data yang dimasukkan oleh pengguna
        $validator = Validator::make($request->all(), [
            'tanggalMasuk' => 'required|date|after_or_equal:tomorrow',
            'tanggalKeluar' => 'required|date|after:tanggalMasuk',
            'email' => 'required|email',
            'noHP' => 'required|max:15',
            'uploadKTP' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
            'nip' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Mengupload file KTP
        $ktpPath = $request->file('uploadKTP')->store('ktp-uploads', 'public');

        // Menyimpan data ke dalam database
        BookingPe::create([
            'tanggalMasuk' => $request->tanggalMasuk,
            'tanggalKeluar' => $request->tanggalKeluar,
            'email' => $request->email,
            'noHP' => $request->noHP,
            'uploadKTP' => $ktpPath,
            'nip' => $request->nip,
        ]);

        return redirect()->route('booking.success')->with('success', 'Booking berhasil disimpan!');
    }

    // Menampilkan halaman sukses setelah pemesanan berhasil
    public function success()
    {
        return view('booking.success');
    }
}
