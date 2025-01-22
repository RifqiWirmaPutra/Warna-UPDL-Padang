<?php

namespace App\Http\Controllers;

use App\Models\JenisPenginapan;
use Illuminate\Http\Request;

class JenisPenginapanController extends Controller
{
    /**
     * Menampilkan daftar jenis penginapan.
     */
    public function index()
    {
        $jenisPenginapans = JenisPenginapan::all();
        return view('admin.jenisPenginapan.index', compact('jenisPenginapans'));
    }

    /**
     * Menampilkan form untuk membuat jenis penginapan baru.
     */
    public function create()
    {
        return view('admin.jenisPenginapan.create');
    }

    /**
     * Menyimpan jenis penginapan baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nomorKamar' => 'required|string|max:255',
        ]);

        JenisPenginapan::create($validated);

        return redirect()->route('admin.jenisPenginapan.index')->with('success', 'Jenis penginapan berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit jenis penginapan.
     */
    public function edit($id)
    {
        $jenisPenginapan = JenisPenginapan::findOrFail($id);
        return view('admin.jenisPenginapan.edit', compact('jenisPenginapan'));
    }

    /**
     * Memperbarui jenis penginapan di database.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nomorKamar' => 'required|string|max:255',
        ]);

        $jenisPenginapan = JenisPenginapan::findOrFail($id);
        $jenisPenginapan->update($validated);

        return redirect()->route('admin.jenisPenginapan.index')->with('success', 'Jenis penginapan berhasil diperbarui.');
    }

    /**
     * Menghapus jenis penginapan dari database.
     */
    public function destroy($id)
    {
        $jenisPenginapan = JenisPenginapan::findOrFail($id);
        $jenisPenginapan->delete();

        return redirect()->route('admin.jenisPenginapan.index')->with('success', 'Jenis penginapan berhasil dihapus.');
    }
}
