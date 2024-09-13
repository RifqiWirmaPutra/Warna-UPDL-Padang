<?php

namespace App\Http\Controllers;

use App\Models\Penginapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Tambahkan baris ini

class BEpenginapanController extends Controller
{
    // Menampilkan daftar penginapan
    public function index()
    {
        $penginapans = Penginapan::all();
        return view('admin.penginapan.index', compact('penginapans'));
    }

    // Menampilkan form tambah penginapan
    public function create()
    {
        return view('admin.penginapan.create');
    }

    // Menyimpan data penginapan baru
    public function store(Request $request)
    {
        $request->validate([
            'tipeRuangan' => 'required|string',
            'fotoRuangan' => 'required|url',
            'harga' => 'required|integer',
            'keterangan' => 'required|string',
        ]);

        Penginapan::create([
            'tipeRuangan' => $request->input('tipeRuangan'),
            'fotoRuangan' => $request->input('fotoRuangan'),
            'harga' => $request->input('harga'),
            'keterangan' => $request->input('keterangan'),
        ]);

        return redirect()->route('admin.penginapan.index')->with('success', 'Penginapan berhasil ditambahkan!');
    }

    // Menampilkan form edit penginapan
    public function edit(Request $request, string $id)
    {
        $request->validate([
            'tipeRuangan' => 'required|string',
            'fotoRuangan' => 'nullable|url', // Validasi URL gambar
            'harga' => 'required|integer',
            'keterangan' => 'required|string',
        ]);

        $penginapan = Penginapan::findOrFail($id);

        $penginapan->tipeRuangan = $request->input('tipeRuangan');
        $penginapan->harga = $request->input('harga');
        $penginapan->keterangan = $request->input('keterangan');

        // Cek apakah ada file gambar baru diunggah

        $penginapan->save();

        return redirect()->route('admin.penginapan.index')->with('success', 'Penginapan berhasil diperbarui!');
    }

    // Menghapus data penginapan
    public function destroy(string $id)
    {
        $penginapan = Penginapan::findOrFail($id);
        $penginapan->delete();
        return redirect()->route('admin.penginapan.index')->with('success', 'Penginapan berhasil dihapus!');
    }
}
