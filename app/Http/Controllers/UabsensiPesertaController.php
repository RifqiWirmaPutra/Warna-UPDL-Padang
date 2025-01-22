<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\UabsensiPeserta;
use App\Models\User;
use App\Models\Arp;

class UabsensiPesertaController extends Controller
{
    public function index(){
        $user = Auth::user();
        $arp = Arp::find($user->arp_id);
        return view('user.absensi-peserta', ['arp' => $arp]);
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'absensi' => 'required|in:hadir,izin,sakit',
            'penggantian_kuota' => 'required|in:iya,tidak'
        ]);

        $today = Carbon::today();
        $user = Auth::user();
        $arp = Arp::find($user->arp_id); // Asumsi model User memiliki relasi dengan Arp

        if (!$arp) {
            return redirect()->back()->with('error', 'Informasi ARP tidak ditemukan!');
        }

        UabsensiPeserta::create([
            // dd([
            'nip' => $user->nip,
            'nama' => $user->name,
            'judul' => $arp->judul,
            'jenis_permintaan_diklat' => $arp->jenis_permintaan_diklat,
            'tanggal_absensi' => $today,
            'penggantian_kuota' => $request->penggantian_kuota,
            'no_hp' => $user->no_hp,
            'absensi' => $request->absensi,
            'user_id' => Auth::id(),
            'arp_id' => $user->arp_id
        ]);

        return redirect()->route('absensi.create')->with('success', 'Absensi berhasil disimpan!');
    }
}
