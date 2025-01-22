<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArsipUser;
use App\Models\Arsip;

class ArsipUserController extends Controller
{
    public function index(Request $request){
        // $arsipUser = ArsipUser::all();
        $arpId = $request->query('arp_id');
        $arsipUser = ArsipUser::where('arp_id', $arpId)->get();
        $arsip = Arsip::all();
        return view ('admin.arp.arsip.arsipUser.arsipuser', compact('arsipUser', 'arsip'));
    }
    
    public function store(Request $request) {
        $validatedData = $request->validate([
            'nip.*' => 'required',
            'nama.*' => 'required',
            'tanggal_mulai.*' => 'required|date',
            'tanggal_selesai.*' => 'required|date',
            'kode.*' => 'required',
            'judul.*' => 'required',
            'angkatan.*' => 'required',
            'konfirmasi.*' => 'nullable',
            'arp_id.*' => 'required',
        ]);

        try {
            foreach ($validatedData['nip'] as $key => $nip) {
                $existingRecord = ArsipUser::where('arp_id', $validatedData['arp_id'][$key])
                ->where('nip', $nip)
                ->first();
                if ($existingRecord) {
                    // Update catatan yang sudah ada jika ditemukan
                    $existingRecord->update([
                        'nama' => $validatedData['nama'][$key],
                        'tanggal_mulai' => $validatedData['tanggal_mulai'][$key],
                        'tanggal_selesai' => $validatedData['tanggal_selesai'][$key],
                        'kode' => $validatedData['kode'][$key],
                        'judul' => $validatedData['judul'][$key],
                        'angkatan' => $validatedData['angkatan'][$key],
                        'konfirmasi' => $validatedData['konfirmasi'][$key],
                    ]);
                }else{
                    ArsipUser::create([
                        'nip' => $nip,
                        'nama' => $validatedData['nama'][$key],
                        'tanggal_mulai' => $validatedData['tanggal_mulai'][$key],
                        'tanggal_selesai' => $validatedData['tanggal_selesai'][$key],
                        'kode' => $validatedData['kode'][$key],
                        'judul' => $validatedData['judul'][$key],
                        'angkatan' => $validatedData['angkatan'][$key],
                        'konfirmasi' => $validatedData['konfirmasi'][$key],
                        'arp_id' => $validatedData['arp_id'][$key],
                    ]);
                }
            }
            return redirect()->back()->with('success', 'Data Berhasil di Arsip');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal Menyimpan. Error: ' . $e->getMessage());
        }
    }
}
