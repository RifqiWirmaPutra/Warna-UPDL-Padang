<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UdaftarHadir;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\SettingHari;

class UdaftarHadirController extends Controller
{
    public function index()
    {
        // Cek apakah pengguna sudah melakukan konfirmasi
        if (Auth::user()->hasTakenAbsensi()) {
            return redirect()->route('dashboard')->with('success', 'Success, konfirmasi berhasil.');
        }
        return view('user.udh');
    }
    public function store(Request $request)
    {
        // Pastikan pengguna telah login
        if (Auth::check()) {
            $user = Auth::user();
            // Periksa apakah pengguna sudah mengambil absen
            if (!$user->hasTakenAbsensi()) {
                $validatedData = $request->validate([
                    'konfirmasi' => 'required|in:iya,tidak'
                ]);
                // informasi NIP dan Nama pengguna
                $validatedData['nip'] = $user->nip;
                $validatedData['nama'] = $user->name;
                $validatedData['user_id'] = auth()->user()->id;
                $validatedData['arp_id'] = auth()->user()->arp_id;
                // Simpan data ke database
                // dd($validatedData, $user);
                UdaftarHadir::create($validatedData);
                return redirect()->route('udh.index')->with('success', 'Data berhasil disimpan!');
            }
        }
        $confirmationStartTime = SettingHari::get('confirmation_start_time');
        $confirmationEndTime = SettingHari::get('confirmation_end_time');

        if ($currentHour < intval(substr($confirmationStartTime, 0, 2)) || $currentHour >= intval(substr($confirmationEndTime, 0, 2))) {
            return redirect()->route('udh.index')->with('error', 'Maaf, waktu daftar hadir hanya dari jam ' . $confirmationStartTime . ' sampai ' . $confirmationEndTime . '.');
        }
        if (Auth::check()) {
            $user = Auth::user();
            if (!$user->hasTakenAbsensi()) {
                $validatedData = $request->validate([
                    'konfirmasi' => 'required|in:iya,tidak'
                ]);
                $validatedData['nip'] = $user->nip;
                $validatedData['nama'] = $user->name;
                $validatedData['user_id'] = auth()->user()->id;
                $validatedData['arp_id'] = auth()->user()->arp_id;
                UdaftarHadir::create($validatedData);
                return redirect()->route('udh.index')->with('success', 'Data berhasil disimpan!');
            }
        }
        return redirect()->route('udh.index')->with('error', 'Anda sudah mengambil absen.');
    }
}