<?php

namespace App\Http\Controllers;

use App\Models\Penginapan;
use Illuminate\Http\Request;

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


    public function create()
    {
        return view('admin.penginapan.create');
    }

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
    }
}
