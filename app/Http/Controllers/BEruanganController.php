<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class BEruanganController extends Controller
{
    // Menampilkan daftar ruangan
    public function index()
    {
        $ruangans = Ruangan::all();
        return view('admin.ruangan.index', compact('ruangans'));
    }

    // Menampilkan form tambah ruangan
    public function create()
    {
        return view('admin.ruangan.create');
    }

    // Menyimpan data ruangan baru
    public function store(Request $request)
    {
        $request->validate([
            'tipeLab' => 'required|string',
            'jumlahPeserta' => 'required|integer',
            'harga' => 'required|integer',
            'foto' => 'required|string',
            'keterangan' => 'required|string',
            'tanggalMasuk' => 'required|date',
            'tanggalKeluar' => 'required|date',
            'email' => 'required|email',
            'noHP' => 'required|string|max:15',
            'uploadKTP' => 'required|string',
        ]);

        Ruangan::create($request->all());

        return redirect()->route('ruangan.index')->with('success', 'Ruangan berhasil ditambahkan!');
    }

    // Menampilkan form edit ruangan
    public function edit($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        return view('admin.ruangan.edit', compact('ruangan'));
    }

    // Mengupdate data ruangan
    public function update(Request $request, $id)
    {
        $request->validate([
            'tipeLab' => 'required|string',
            'jumlahPeserta' => 'required|integer',
            'harga' => 'required|integer',
            'foto' => 'nullable|string',
            'keterangan' => 'required|string',
            'tanggalMasuk' => 'required|date',
            'tanggalKeluar' => 'required|date',
            'email' => 'required|email',
            'noHP' => 'required|string|max:15',
            'uploadKTP' => 'nullable|string',
        ]);

        $ruangan = Ruangan::findOrFail($id);
        $ruangan->update($request->all());

<<<<<<< HEAD
        return redirect()->route('admin.ruangan.index')->with('success', 'Ruangan berhasil diperbarui!');
=======
        return redirect()->route('ruangan.index')->with('success', 'Ruangan berhasil diperbarui!');
>>>>>>> df8c089bbb22f01aebda973dff238feab8c40530
    }

    // Menghapus data ruangan
    public function destroy($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        $ruangan->delete();

<<<<<<< HEAD
        return redirect()->route('admin.ruangan.index')->with('success', 'Ruangan berhasil dihapus!');
=======
        return redirect()->route('ruangan.index')->with('success', 'Ruangan berhasil dihapus!');
>>>>>>> df8c089bbb22f01aebda973dff238feab8c40530
    }
}
