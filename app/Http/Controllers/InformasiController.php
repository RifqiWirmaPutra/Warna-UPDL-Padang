<?php

namespace App\Http\Controllers;
use App\Models\Informasi;
use Illuminate\Support\Facades\Storage; // Tambahkan baris ini

use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index(){
        $informasis = Informasi::all();
        return view('admin.informasi.index', compact('informasis'));
    }

    public function create()
    {
        return view('admin.informasi.create'); // Perbaikan typo di sini
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi tipe dan ukuran gambar
            'keterangan' => 'required',
            'lokasi' => 'required'
        ]);

        // Mengunggah gambar ke direktori penyimpanan
        $fotoPath = $request->file('foto')->store('public/assets/informasi');

        // Menyimpan data ke database
        Informasi::create([
            'judul' => $request->input('judul'),
            'foto' => $fotoPath, // Menyimpan nama file gambar
            'keterangan' => $request->input('keterangan'),
            'lokasi' => $request->input('lokasi')
        ]);
        return redirect()->route('informasiadmin.admin')->with('success', 'Data Informasi berhasi ditambahkan.');

    }  

    public function edit(Request $request, string $id){
        
        $request->validate([
            'judul'=> 'required',
            // 'foto'=> 'required',
            'keterangan'=> 'required',
            'lokasi'=> 'required'
        ]);
        $informasi = Informasi::findOrFail($id);
        $informasi->judul = $request->input('judul');
        // $informasi->foto = $request->input('foto');
        $informasi->keterangan = $request->input('keterangan');
        $informasi->lokasi = $request->input('lokasi');

        // Cek apakah ada file gambar baru diunggah
        if ($request->hasFile('foto')) {
            // Hapus gambar lama jika ada
            Storage::delete($informasi->foto);

            // Upload gambar baru dan simpan ke database
            $fotoPath = $request->file('foto')->store('public/assets/informasi');
            $informasi->foto = $fotoPath;
        }

        $informasi->save();
        return redirect()->route('informasiadmin.admin')->with('success', 'Data Informasi berhasil diperbarui!');
    }

    public function destroy(string $id){
        $informasi = Informasi::findOrFail($id);
        $informasi->delete();
        return redirect()->route('informasiadmin.admin')->with('success', 'Data Informasi berhasil dihapus!');
    }
}
