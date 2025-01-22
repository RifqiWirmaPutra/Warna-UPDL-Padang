<?php

namespace App\Http\Controllers;
use App\Models\Arp;
use App\Models\Pasca;
use App\Models\Admin;

use Illuminate\Http\Request;

class PascaController extends Controller
{
    public function index($arpId){
        $arp = Arp::findOrFail($arpId);
        $kegiatans = $arp->pascas;

        return view ('admin.arp.pasca.index', compact('arp', 'kegiatans'));
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
                Pasca::create($data);
            }
            return redirect()->route('pasca.index', $arpId)->with('success', 'Kegiatan Pasca berhasil ditambahkan!');
        }else {
            // Pengguna tidak memiliki izin
            return redirect()->route('pasca.index', $arpId)->with('error', 'Anda tidak memiliki izin untuk menambahkan kegiatan pasca.');
        }
    }

    public function update(Request $request, $arpId, $kegiatanId)
    {
        // dd($request->all());
        // Cari data pasca yang sesuai dengan ID ARP dan ID pasca
        $pasca = Pasca::where('arp_id', $arpId)->find($kegiatanId);
        if (!$pasca) {
            return redirect()->route('pasca.index', $arpId)->with('error', 'Data kegiatan pasca tidak ditemukan.');
        }
        // Cek apakah user memiliki role yang sesuai dengan PIC atau adalah Super Admin
        if (auth()->user()->role !== $pasca->pic && auth()->user()->role !== Admin::ROLE_SUPERADMIN) {
            return redirect()->route('pasca.index', $arpId)->with('error', 'Anda tidak memiliki izin untuk mengedit kegiatan pasca ini.');
        }
        // Jika pengguna memiliki izin, lanjutkan dengan validasi input
        $request->validate([
            'ceklist' => 'required|in:Selesai,Belum Selesai,Tidak Diperlukan',
            'keterangan' => 'nullable|string',
        ]);
        // Lakukan penyuntingan kolom "Ceklist"
        $pasca->ceklist = $request->input('ceklist');
        $pasca->keterangan = $request->input('keterangan');
        $pasca->save();
        // Kembalikan dengan pesan sukses
        return redirect()->route('pasca.index', $arpId)->with('success', 'Kegiatan Pasca berhasil diperbarui!');

    }
    public function destroy($arpId, $kegiatanId)
    {
        $pasca = Pasca::where('arp_id', $arpId)->find($kegiatanId);
        if (!$pasca) {
            return redirect()->route('pasca.index', $arpId)->with('error', 'Data kegiatan persiapan tidak ditemukan.');
        }
        // Cek apakah user memiliki role yang sesuai atau adalah Super Admin
        if (auth()->user()->role !== $pasca->pic && auth()->user()->role !== Admin::ROLE_SUPERADMIN) {
            return redirect()->route('pasca.index', $arpId)->with('error', 'Anda tidak memiliki izin untuk menghapus kegiatan persiapan ini.');
        }
        $pasca->delete();
        return redirect()->route('pasca.index', $arpId)->with('success', 'Kegiatan Persiapan berhasil dihapus!');
    }

}