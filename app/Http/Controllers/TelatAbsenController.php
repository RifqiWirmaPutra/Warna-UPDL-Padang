<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Arp;
use App\Models\TelatAbsen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class TelatAbsenController extends Controller
{
    public function index (){
        $user = Auth::user();
        $arp = Arp::find($user->arp_id);
        return view ('user.telat-absen', ['arp' => $arp]);
    }

    public function ajukan(Request $request)
    {
        $user = Auth::user();
        $today = Carbon::today();
        $telatAbsen = new TelatAbsen();
        $telatAbsen->waktu_absensi = $request->input('waktu_absen');
        $telatAbsen->nip = $request->input('nip');
        $telatAbsen->nama = $request->input('nama');
        $telatAbsen->judul = $request->input('judul');
        $telatAbsen->absensi = $request->input('absensi');
        $telatAbsen->jenis_permintaan_diklat = $request->input('jenis_permintaan_diklat');
        $telatAbsen->tanggal_absensi = $today->toDateString();
        $telatAbsen->penggantian_kuota = $request->input('penggantian_kuota');
        $telatAbsen->no_hp = $request->input('no_hp');
        $telatAbsen->alasan = $request->input('alasan');
        $telatAbsen->user_id = $user->id;
        $telatAbsen->arp_id = $request->input('arp_id');

        
        if ($telatAbsen->save()) {
            Session::flash('success', 'Pengajuan telat absen berhasil.');
        } else {
            Session::flash('error', 'Gagal mengajukan telat absen.');
        }
        
        return redirect()->back(); // Redirect ke halaman sebelumnya
    }
}
