<?php

namespace App\Http\Controllers;
use App\Models\Sarana;
use Illuminate\Support\Facades\Storage; // Tambahkan baris ini

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function index(){
        $saranas = Sarana::all();
        return view('admin.sarana.index', compact('saranas'));
    }

    public function create()
    {
        return view('admin.sarana.create'); // Perbaikan typo di sini
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi tipe dan ukuran gambar
            'keterangan' => 'required'
        ]);

        // Mengunggah gambar ke direktori penyimpanan
        $fotoPath = $request->file('foto')->store('public/assets/sarana');

        // Menyimpan data ke database
        Sarana::create([
            'judul' => $request->input('judul'),
            'foto' => $fotoPath, // Menyimpan nama file gambar
            'keterangan' => $request->input('keterangan')
        ]);

        return redirect()->route('sarana.admin')->with('success', 'Data Sarana berhasil ditambahkan!');
    }  

    public function edit(Request $request, string $id){
        
        $request->validate([
            'judul'=> 'required',
            // 'foto'=> 'required',
            'keterangan'=> 'required'
        ]);
        $sarana = Sarana::findOrFail($id);
        $sarana->judul = $request->input('judul');
        // $sarana->foto = $request->input('foto');
        $sarana->keterangan = $request->input('keterangan');

        // Cek apakah ada file gambar baru diunggah
        if ($request->hasFile('foto')) {
            // Hapus gambar lama jika ada
            Storage::delete($sarana->foto);

            // Upload gambar baru dan simpan ke database
            $fotoPath = $request->file('foto')->store('public/assets/sarana');
            $sarana->foto = $fotoPath;
        }
        
        $sarana->save();
        return redirect()->route('sarana.admin')->with('success', 'Data Sarana berhasil diperbarui!');
    }

    public function destroy(string $id){
        $sarana = Sarana::findOrFail($id);
        $sarana->delete();
        return redirect()->route('sarana.admin')->with('success', 'Data Sarana berhasil dihapus!');
    }
}
