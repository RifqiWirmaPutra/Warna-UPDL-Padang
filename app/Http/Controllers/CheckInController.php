<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckInController extends Controller
{
    // public function index()
    // {
    //     return view('checkin.index');
    // }

    // public function checkIn(Request $request)
    // {
    //     // Gantilah ini dengan logic autentikasi yang sesuai dengan kebutuhanmu
    //     // Misalnya, jika menggunakan model User, ganti 'nip' dan 'nip' dengan kolom yang sesuai di tabel User.
    //     $credentials = $request->only('nip', 'password');

    //     if (auth()->attempt($credentials)) {
    //         // Peserta berhasil login
    //         // Gantilah ini dengan logika filter pembelajaran berdasarkan tanggal
    //         $isRegistered = $this->checkIfRegistered($request->user()->id);

    //         if ($isRegistered) {
    //             // Peserta sudah terdaftar
    //             // Gantilah ini dengan logika denah wisma dan pemilihan kamar
    //             $selectedRoom = $this->selectRoom($request->input('room_number'));

    //             if ($selectedRoom) {
    //                 // Kamar berhasil dipilih
    //                 // Gantilah ini dengan logika notifikasi dan redirect ke beranda
    //                 return redirect()->route('home')->with('success', 'Terima kasih anda sudah memilih kamar');
    //             } else {
    //                 // Kamar sudah terisi
    //                 return back()->with('error', 'Kamar sudah dipilih oleh peserta lain');
    //             }
    //         } else {
    //             // Peserta belum terdaftar
    //             return back()->with('error', 'Maaf anda belum terdaftar');
    //         }
    //     } else {
    //         // Kombinasi NIP dan password tidak cocok
    //         return back()->with('error', 'Username atau password salah');
    //     }
    // }

    // private function checkIfRegistered($userId)
    // {
    //     // Gantilah ini dengan logika pengecekan apakah peserta sudah terdaftar atau belum
    //     return true; // Gantilah dengan logika yang sesuai
    // }

    // private function selectRoom($roomNumber)
    // {
    //     // Gantilah ini dengan logika pemilihan kamar
    //     // Misalnya, cek apakah kamar sudah terisi atau belum
    //     return true; // Kamar berhasil dipilih
    // }
}
