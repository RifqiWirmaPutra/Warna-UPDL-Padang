<?php

namespace App\Http\Controllers;
use App\Models\Arp;
use App\Models\Pelaksanaan;
use App\Models\Admin;

use Illuminate\Http\Request;

class PelaksanaanController extends Controller
{
    public function index($arpId){
        $arp = Arp::findOrFail($arpId);
        $kegiatans = $arp->Pelaksanaans;

        return view ('admin.arp.pelaksanaan.index', compact('arp', 'kegiatans'));
    }

    public function store(Request $request, $arpId)
    {
        // dd($request->all());

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
            // $adminId = Admin::where('role', $picData)->first()->id;  // Dapatkan ID admin berdasarkan role
            $ceklistData = $request->input('ceklist');
            $keteranganData = $request->input('keterangan');
            foreach ($kegiatanData as $index => $kegiatan) {
                $data = [
                    'kegiatan' => $kegiatan,
                    'pic' => $adminId[$index], // Simpan ID admin
                    'ceklist' => $ceklistData[$index],
                    'keterangan' => $keteranganData[$index],
                    'arp_id' => $arpId,
                ];
                Pelaksanaan::create($data);
            }
            return redirect()->route('pelaksanaan.index', $arpId)->with('success', 'Kegiatan Pelaksanaan berhasil ditambahkan!');
        }else {
            // Pengguna tidak memiliki izin
            return redirect()->route('pelaksanaan.index', $arpId)->with('error', 'Anda tidak memiliki izin untuk menambahkan kegiatan pelaksanaan.');
        }
    }

    public function update(Request $request, $arpId, $kegiatanId)
    {
        // dd($request->all());
        // Cari data pelaksanaan yang sesuai dengan ID ARP dan ID pelaksanaan
        $pelaksanaan = Pelaksanaan::where('arp_id', $arpId)->find($kegiatanId);
        if (!$pelaksanaan) {
            return redirect()->route('pelaksanaan.index', $arpId)->with('error', 'Data kegiatan pelaksanaan tidak ditemukan.');
        }
        // Cek apakah user memiliki role yang sesuai dengan PIC atau adalah Super Admin
        if (auth()->user()->role !== $pelaksanaan->pic && auth()->user()->role !== Admin::ROLE_SUPERADMIN) {
            return redirect()->route('pelaksanaan.index', $arpId)->with('error', 'Anda tidak memiliki izin untuk mengedit kegiatan pelaksanaan ini.');
        }
        // Jika pengguna memiliki izin, lanjutkan dengan validasi input
        $request->validate([
            'ceklist' => 'required|in:Selesai,Belum Selesai,Tidak Diperlukan',
            'keterangan' => 'nullable|string',
        ]);
        // Lakukan penyuntingan kolom "Ceklist"
        $pelaksanaan->ceklist = $request->input('ceklist');
        $pelaksanaan->keterangan = $request->input('keterangan');
        $pelaksanaan->save();
        // Kembalikan dengan pesan sukses
        return redirect()->route('pelaksanaan.index', $arpId)->with('success', 'Kegiatan Pelaksanaan berhasil diperbarui!');

    }

    public function destroy($arpId, $kegiatanId)
    {
        $pelaksanaan = Pelaksanaan::where('arp_id', $arpId)->find($kegiatanId);
        if (!$pelaksanaan) {
            return redirect()->route('pelaksanaan.index', $arpId)->with('error', 'Data kegiatan persiapan tidak ditemukan.');
        }
        // Cek apakah user memiliki role yang sesuai atau adalah Super Admin
        if (auth()->user()->role !== $pelaksanaan->pic && auth()->user()->role !== Admin::ROLE_SUPERADMIN) {
            return redirect()->route('pelaksanaan.index', $arpId)->with('error', 'Anda tidak memiliki izin untuk menghapus kegiatan persiapan ini.');
        }
        $pelaksanaan->delete();
        return redirect()->route('pelaksanaan.index', $arpId)->with('success', 'Kegiatan Persiapan berhasil dihapus!');
    }

}