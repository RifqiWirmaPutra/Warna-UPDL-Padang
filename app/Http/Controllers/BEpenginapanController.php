<?php

namespace App\Http\Controllers;

use App\Models\Penginapan;
use Illuminate\Http\Request;
<<<<<<< HEAD

class BEpenginapanController extends Controller
{
    public function index()
    {
        $penginapans = Penginapan::all();
        // Format harga menjadi rupiah
        foreach ($penginapans as $penginapan) {
           $penginapan->harga = formatRupiah(intval($penginapan->harga));


        }
        return view('admin.penginapan.index', compact('penginapans'));
    }


=======
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
>>>>>>> df8c089bbb22f01aebda973dff238feab8c40530
    public function create()
    {
        return view('admin.penginapan.create');
    }

<<<<<<< HEAD
    public function store(Request $request)
    {
        $request->validate([
            'tipePenginapan' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'keterangan' => 'required|string',
            'fotoPenginapan' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $penginapan = new Penginapan();
        $penginapan->tipePenginapan = $request->tipePenginapan;
        $penginapan->harga = $request->harga;
        $penginapan->keterangan = $request->keterangan;

        if ($request->hasFile('fotoPenginapan')) {
            $file = $request->file('fotoPenginapan');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/penginapan', $filename);
            $penginapan->fotoPenginapan = $filename;
        }

        $penginapan->save();

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
            'harga' => 'required|numeric',
            'keterangan' => 'required|string',
            'fotoPenginapan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $penginapan = Penginapan::findOrFail($id);
        $penginapan->tipePenginapan = $request->tipePenginapan;
        $penginapan->harga = $request->harga;
        $penginapan->keterangan = $request->keterangan;

        if ($request->hasFile('fotoPenginapan')) {
            $file = $request->file('fotoPenginapan');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/penginapan', $filename);
            $penginapan->fotoPenginapan = $filename;
        }

        $penginapan->save();

        return redirect()->route('admin.penginapan.index')->with('success', 'Penginapan berhasil diperbarui');
    }


    public function destroy(Penginapan $penginapan)
    {
        $penginapan->delete();

        return redirect()->route('admin.penginapan.index')
            ->with('success', 'Penginapan berhasil dihapus.');
=======
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
>>>>>>> df8c089bbb22f01aebda973dff238feab8c40530
    }
}
