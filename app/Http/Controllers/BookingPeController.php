<?php

namespace App\Http\Controllers;

use App\Models\BookingPe;
use App\Models\Penginapan;
use Illuminate\Http\Request;

class BookingPeController extends Controller
{
    public function create($id)
    {
        $penginapans = Penginapan::find($id);

        if (!$penginapans) {
            return redirect()->route('penginapan.index')->with('error', 'Penginapan tidak ditemukan!');
        }

        $price = session('price', 0);
        $fasilitas = explode(",", $penginapans->keterangan);

        return view('layouts.booking.create', compact('penginapans', 'price', 'fasilitas'));
    }

    public function updatePrice(Request $request)
    {
        $validated = $request->validate([
            'price' => 'required|numeric',
        ]);

        session(['price' => $validated['price']]);

        return response()->json(['message' => 'Harga berhasil diperbarui di session.']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggalMasuk' => 'required|date',
            'tanggalKeluar' => 'required|date|after:tanggalMasuk',
            'tipeKamar' => 'required',
            'pilihanKamar' => 'required',
            'harga' => 'required',
            'email' => 'required|email',
            'noHP' => 'required|string|max:15',
            'nik' => 'required|integer',
            'nip' => 'required|integer',
            'status' => 'integer',
        ]);

        $booking = BookingPe::create([
            'tanggalMasuk' => $request->tanggalMasuk,
            'tanggalKeluar' => $request->tanggalKeluar,
            'tipeKamar' => $request->tipeKamar,
            'pilihanKamar' => $request->pilihanKamar,
            'harga' => $request->harga,
            'email' => $request->email,
            'email_verified_at' => now(),
            'noHP' => $request->noHP,
            'nik' => $request->nik,
            'nip' => $request->nip,
            'status' => 0,
        ]);

        return redirect()->route('booking.success', ['id' => $booking->id])->with('success', 'Booking berhasil disimpan!');
    }

    public function index()
    {
        $bookings = BookingPe::with('penginapan')->get();

        $bookings->each(function ($booking) {
            $booking->totalHarga = $booking->harga * $this->lamaMenginap($booking);
        });

        return view('admin.bookings.index', compact('bookings'));
    }

    public function confirm($id)
    {
        $booking = BookingPe::findOrFail($id);
        $booking->status = 1;
        $booking->save();

        return redirect()->route('admin.bookings.index')->with('success', 'Booking berhasil dikonfirmasi!');
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:0,1,2'
        ]);

        $booking = BookingPe::findOrFail($id);
        $booking->status = $request->status;

        if ($booking->save()) {
            return response()->json(['success' => true, 'message' => 'Status berhasil diubah!']);
        }

        return response()->json(['success' => false, 'message' => 'Gagal mengubah status.'], 500);
    }

    public function destroy($id)
    {
        $booking = BookingPe::findOrFail($id);
        $booking->delete();
        return redirect()->route('admin.bookings.index')->with('success', 'Booking berhasil dihapus!');
    }

    public function success($id)
    {
        $booking = BookingPe::with('penginapan')->find($id);

        if (!$booking) {
            return redirect()->route('layouts.booking.create')->with('error', 'Booking not found!');
        }

        $penginapan = $booking->penginapan;
        $roomType = $penginapan ? $penginapan->tipePenginapan : 'Standard Room';

        $checkInDate = \Carbon\Carbon::parse($booking->tanggalMasuk);
        $checkOutDate = \Carbon\Carbon::parse($booking->tanggalKeluar);
        $days = $checkOutDate->diffInDays($checkInDate);
        $totalPrice = $booking->harga * $days;

        return view('layouts.booking.success', [
            'booking' => $booking,
            'totalPrice' => $totalPrice,
            'roomType' => $roomType
        ]);
    }


    public function lamaMenginap($booking)
    {
        $tanggalMasuk = \Carbon\Carbon::parse($booking->tanggalMasuk);
        $tanggalKeluar = \Carbon\Carbon::parse($booking->tanggalKeluar);
        return $tanggalKeluar->diffInDays($tanggalMasuk);
    }
}
