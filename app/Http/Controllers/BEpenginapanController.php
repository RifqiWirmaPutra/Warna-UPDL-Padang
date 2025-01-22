<?php

namespace App\Http\Controllers;

use App\Models\Penginapan;
use Illuminate\Http\Request;

class BEpenginapanController extends Controller
{
    public function index()
    {
        $penginapans = Penginapan::all();

        // Format harga menjadi Rupiah
        foreach ($penginapans as $penginapan) {
            $penginapan->hargadpln = $this->formatRupiah($penginapan->hargadpln);
            $penginapan->hargampln = $this->formatRupiah($penginapan->hargampln);
            $penginapan->hargadnonpln = $this->formatRupiah($penginapan->hargadnonpln);
            $penginapan->hargamnonpln = $this->formatRupiah($penginapan->hargamnonpln);

            //untuk foto
            $penginapan->fotoPenginapan = $penginapan->fotoPenginapan ? json_decode($penginapan->fotoPenginapan, true) : [];
        }

        return view('admin.penginapan.index', compact('penginapans'));
    }

    public function create()
    {
        return view('admin.penginapan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipePenginapan' => 'required|string|max:255',
            'fotoPenginapan.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'hargadpln' => 'required|numeric',
            'hargampln' => 'required|numeric',
            'hargadnonpln' => 'required|numeric',
            'hargamnonpln' => 'required|numeric',
            'fasilitas' => 'required|string',
        ]);

        $data = $request->all();

        // Simpan banyak foto
        if ($request->hasFile('fotoPenginapan')) {
            $files = $request->file('fotoPenginapan');
            $fotoPaths = [];

            foreach ($files as $file) {
                $path = $file->store('public/assets/penginapan');
                $fotoPaths[] = basename($path);
            }

            $data['fotoPenginapan'] = $fotoPaths; // Simpan sebagai array
        }

        $data['fotoPenginapan'] = json_encode($data['fotoPenginapan'] ?? []); // Jika tidak ada foto, default kosong
        Penginapan::create($data);

        return redirect()->route('admin.penginapan.index')->with('success', 'Penginapan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $penginapan = Penginapan::findOrFail($id);
        return view('admin.penginapan.edit', compact('penginapan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tipePenginapan' => 'required|string|max:255',
            'hargadpln' => 'required|numeric',
            'hargampln' => 'required|numeric',
            'hargadnonpln' => 'required|numeric',
            'hargamnonpln' => 'required|numeric',
            'fotoPenginapan.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'fasilitas' => 'required|string',
        ]);

        $penginapan = Penginapan::findOrFail($id);
        $data = $request->all();

        // Update banyak foto
        if ($request->hasFile('fotoPenginapan')) {
            $files = $request->file('fotoPenginapan');
            $fotoPaths = [];

            foreach ($files as $file) {
                $path = $file->store('public/assets/penginapan');
                $fotoPaths[] = basename($path);
            }

            $data['fotoPenginapan'] = $fotoPaths;
        } else {
            $data['fotoPenginapan'] = $penginapan->fotoPenginapan;
        }

        $penginapan->update($data);

        return redirect()->route('admin.penginapan.index')->with('success', 'Penginapan berhasil diperbarui');
    }

    public function destroy(Penginapan $penginapan)
    {
        $penginapan->delete();
        return redirect()->route('admin.penginapan.index')->with('success', 'Penginapan berhasil dihapus.');
    }

    private function formatRupiah($value)
    {
        return 'Rp ' . number_format($value, 0, ',', '.');
    }
}
