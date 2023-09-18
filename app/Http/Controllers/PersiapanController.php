<?php

namespace App\Http\Controllers;
use App\Models\Arp;
use App\Models\Persiapan;
use App\Models\Admin;

use Illuminate\Http\Request;

class PersiapanController extends Controller
{
    public function index($arpId){
        $arp = Arp::findOrFail($arpId);
        $kegiatans = $arp->Persiapans;
        $kegiatanPelaksanaan = $arp->Pelaksanaans;

        return view ('admin.arp.persiapan.index', compact('arp', 'kegiatans', 'kegiatanPelaksanaan'));
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
                Persiapan::create($data);
            }
            return redirect()->route('persiapan.index', $arpId)->with('success', 'Kegiatan Persiapan berhasil ditambahkan!');
        }else {
            // Pengguna tidak memiliki izin
            return redirect()->route('persiapan.index', $arpId)->with('error', 'Anda tidak memiliki izin untuk menambahkan kegiatan persiapan.');
        }
    }
    public function update(Request $request, $arpId, $kegiatanId)
    {
        // Cari data persiapan yang sesuai dengan ID ARP dan ID persiapan
        $persiapan = Persiapan::where('arp_id', $arpId)->find($kegiatanId);
        // Jika data persiapan tidak ditemukan
        if (!$persiapan) {
            return redirect()->route('persiapan.index', $arpId)->with('error', 'Data kegiatan persiapan tidak ditemukan.');
        }
        // Cek apakah user memiliki role yang sesuai dengan PIC atau adalah Super Admin
        if (auth()->user()->role !== $persiapan->pic && auth()->user()->role !== Admin::ROLE_SUPERADMIN) {
            return redirect()->route('persiapan.index', $arpId)->with('error', 'Anda tidak memiliki izin untuk mengedit kegiatan persiapan ini.');
        }
        // Jika pengguna memiliki izin, lanjutkan dengan validasi input
        $request->validate([
            'ceklist' => 'required|in:Selesai,Belum Selesai',
        ]);
        // Lakukan penyuntingan kolom "Ceklist"
        $persiapan->ceklist = $request->input('ceklist');
        $persiapan->save();
        // Kembalikan dengan pesan sukses
        return redirect()->route('persiapan.index', $arpId)->with('success', 'Kegiatan Persiapan berhasil diperbarui!');
    }

    
    // public function update(Request $request, $arpId, $kegiatanId)
    // {
    //     // dd($request->all());
    //     // Validasi apakah pengguna memiliki peran super-admin
    //     if (auth()->user()->role === Admin::ROLE_SUPERADMIN) {
    //         // Cari data persiapan yang sesuai dengan ID ARP dan ID persiapan
    //         $persiapan = Persiapan::where('arp_id', $arpId)->find($kegiatanId);
    //         // Periksa apakah data persiapan ditemukan
    //         if ($persiapan) {
    //             // Validasi input
    //             $request->validate([
    //                 'ceklist' => 'required|in:Selesai,Belum Selesai',
    //             ]);
    //             // Pengguna memiliki peran super-admin, izinkan penyuntingan kolom "Ceklist"
    //             $persiapan->ceklist = $request->input('ceklist');
    //             $persiapan->save();
    //             return redirect()->route('persiapan.index', $arpId)->with('success', 'Kegiatan Persiapan berhasil diperbarui!');
    //         } else {
    //             // Data persiapan tidak ditemukan
    //             return redirect()->route('persiapan.index', $arpId)->with('error', 'Data kegiatan persiapan tidak ditemukan.');
    //         }
    //     } else {
    //         // Pengguna tidak memiliki izin
    //         return redirect()->route('persiapan.index', $arpId)->with('error', 'Anda tidak memiliki izin untuk mengedit kegiatan persiapan.');
    //     }
    // }


}
