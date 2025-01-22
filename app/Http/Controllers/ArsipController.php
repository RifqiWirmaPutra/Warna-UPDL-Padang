<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arsip;
use App\Models\Arp;
use App\Models\ArealisasiPeserta;
use App\Models\ArsipUser;

class ArsipController extends Controller
{
    public function index(){
        $arsip = Arsip::all();
        $arpDb = Arp::all();
        return view ('admin.arp.arsip.arsip', compact('arsip','arpDb'));
    }
    public function store(Request $request){
         $validatedData = $request->validate([
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'kode' => 'required',
            'judul' => 'required',
            'jenis_permintaan_diklat' => 'required',
            'jenis_pelaksanaan_diklat' => 'required',
            'angkatan' => 'required',
            'instruktur' => 'required',
            'rencana_peserta' => 'required',
            'realisasi_peserta' => 'required',
            'kelas' => 'required',
            'wisma' => 'required',
            'persiapan' => 'required',
            'pelaksanaan' => 'required',
            'pasca' => 'required',
            'realisasi_biaya' => 'required',
            'arp_id' => 'required|unique:arsips',
        ]);
        // $existingData = Arsip::where('tanggal_mulai', $validatedData['tanggal_mulai'])
        // ->where('tanggal_selesai', $validatedData['tanggal_selesai'])
        // ->first();

        // if ($existingData) {
        //     // Jika data sudah ada, tampilkan peringatan
        //     return view('konfirmasi_update', compact('existingData'));
        //     // return back()->with('existingData', $existingData);
        // }


        $arsip = Arsip::create($validatedData);

        if ($arsip) {
            return redirect()->route('arp.index')->with('success', 'Data Berhasil di Arsip');
        } else {
            return redirect()->route('arp.index')->with('error', 'Gagal Menyimpan, Periksa apakah ada data yang kosong');
        }
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'kode' => 'required',
            'judul' => 'required',
            'jenis_permintaan_diklat' => 'required',
            'jenis_pelaksanaan_diklat' => 'required',
            'angkatan' => 'required',
            'instruktur' => 'required',
            'rencana_peserta' => 'required',
            'realisasi_peserta' => 'required',
            'kelas' => 'required',
            'wisma' => 'required',
            'persiapan' => 'required',
            'pelaksanaan' => 'required',
            'pasca' => 'required',
            'realisasi_biaya' => 'required',
        ]);
        $arsip = Arsip::findOrFail($id);
        $arsip->update($validatedData);

        return redirect()->route('arp.index')->with('success', 'Data berhasil diperbarui');
    }

    // Arsip User
    public function arsipUser(Request $request, string $arpId){
        // $arpId = $request->query('arp_id');
        $arsipUser = ArsipUser::where('arp_id', $arpId)->get();
        $arsip = Arsip::find($arpId);
        return view ('admin.arp.arsip.arsipUser.arsipuser', compact('arsipUser', 'arsip'));
    }

    public function destroy(Arsip $arsip, string $id){
        $arsip = Arsip::findOrFail($id);
        $arsip->delete();
        return redirect()->route('index.arsip')->with('success', 'Data berhasil di hapus.');
    }

    public function realisasiPeserta(Request $request, string $arpId){
        $realisasi = ArealisasiPeserta::where('arp_id', $arpId)->get();
        $arsip = Arsip::find($arpId);

        return view ('admin.arp.arsip.arsipRealisasi.realisasi', compact('realisasi', 'arsip'));
    }
}
