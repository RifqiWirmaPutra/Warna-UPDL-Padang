<?php

namespace App\Http\Controllers;
use App\Models\Arp;
use App\Models\RealisasiBiaya;
use App\Models\Admin;

use Illuminate\Http\Request;

class RealisasiBiayaController extends Controller
{
    public function index($arpId){
        $arp = Arp::findOrFail($arpId);
        $kegiatans = $arp->RealisasiBiayas;

        return view ('admin.arp.realisasi_biaya.index', compact('arp', 'kegiatans'));
    }

    public function store(Request $request, $arpId)
    {
        // dd($request->all());
         // Validasi input
         $request->validate([
            'ceklist' => 'required|numeric|max:9999999999.99',
        ]);

        // Konversi input ke tipe data float
        $ceklistData = (float) preg_replace('/[^0-9.]/', '', $request->input('ceklist'));
        
        // Validasi apakah pengguna memiliki peran super-admin
        if (auth()->user()->role === Admin::ROLE_SUPERADMIN) {
            $roles = [
                Admin::ROLE_SUPERADMIN,
                Admin::ROLE_AdminJar,
                Admin::ROLE_AdminPelayanan,
                Admin::ROLE_AdminKeuangan
            ];

            // Pengguna memiliki peran super-admin, izinkan penyimpanan
            $kegiatanData = $request->input('kegiatan');
            $adminId = $request->input('pic');
            // $ceklistData = $request->input('ceklist');
            $keteranganData = $request->input('keterangan');
            foreach ($kegiatanData as $index => $kegiatan) {
                $data = [
                    'kegiatan' => $kegiatan,
                    'pic' => $adminId[$index], // Simpan ID admin
                    'ceklist' => $ceklistData,
                    'keterangan' => $keteranganData[$index],
                    'arp_id' => $arpId,
                ];
                RealisasiBiaya::create($data);
            }
            return redirect()->route('realisasiBiaya.index', $arpId)->with('success', 'Kegiatan Realisasi berhasil ditambahkan!');
        }else {
            // Pengguna tidak memiliki izin
            return redirect()->route('realisasiBiaya.index', $arpId)->with('error', 'Anda tidak memiliki izin untuk menambahkan kegiatan realisasi.');
        }
    }

    public function update(Request $request, $arpId, $kegiatanId)
    {
        // dd($request->all());
        // Cari data realisasi yang sesuai dengan ID ARP dan ID realisasi
        $realisasi = RealisasiBiaya::where('arp_id', $arpId)->find($kegiatanId);
        if (!$realisasi) {
            return redirect()->route('realisasi.index', $arpId)->with('error', 'Data kegiatan realisasi tidak ditemukan.');
        }
        // Cek apakah user memiliki role yang sesuai dengan PIC atau adalah Super Admin
        if (auth()->user()->role !== $realisasi->pic && auth()->user()->role !== Admin::ROLE_SUPERADMIN) {
            return redirect()->route('realisasiBiaya.index', $arpId)->with('error', 'Anda tidak memiliki izin untuk mengedit kegiatan realisasi ini.');
        }
        // Jika pengguna memiliki izin, lanjutkan dengan validasi input
        $request->validate([
            'ceklist' => 'required|numeric|max:9999999999.99',
            'keterangan' => 'nullable|string',
        ]);
        // Lakukan penyuntingan kolom "Ceklist"
        // $realisasi->ceklist = $request->input('ceklist');
        $realisasi->ceklist = (float) $request->input('ceklist');
        $realisasi->keterangan = $request->input('keterangan');
        $realisasi->save();
        // Kembalikan dengan pesan sukses
        return redirect()->route('realisasiBiaya.index', $arpId)->with('success', 'Kegiatan realisasi biaya berhasil diperbarui!');

    }
    public function destroy($arpId, $kegiatanId)
    {
        $realisasiBiaya = RealisasiBiaya::where('arp_id', $arpId)->find($kegiatanId);
        if (!$realisasiBiaya) {
            return redirect()->route('realisasiBiaya.index', $arpId)->with('error', 'Data kegiatan persiapan tidak ditemukan.');
        }
        // Cek apakah user memiliki role yang sesuai atau adalah Super Admin
        if (auth()->user()->role !== $realisasiBiaya->pic && auth()->user()->role !== Admin::ROLE_SUPERADMIN) {
            return redirect()->route('realisasiBiaya.index', $arpId)->with('error', 'Anda tidak memiliki izin untuk menghapus kegiatan persiapan ini.');
        }
        $realisasiBiaya->delete();
        return redirect()->route('realisasiBiaya.index', $arpId)->with('success', 'Kegiatan Persiapan berhasil dihapus!');
    }

}