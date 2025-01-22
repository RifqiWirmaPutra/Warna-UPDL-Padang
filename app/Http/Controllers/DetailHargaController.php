<?php

namespace App\Http\Controllers;

use App\Models\DetailHarga;
use Illuminate\Http\Request;

class DetailHargaController extends Controller
{
    // Method untuk menampilkan halaman index
    public function index()
    {
        $detailhargas = DetailHarga::all();
        
        // Format harga menjadi rupiah
        foreach ($detailhargas as $detailharga) {
            $detailharga->hargaMonthly = formatRupiah(intval($detailharga->hargaMonthly));
            $detailharga->hargaDaily = formatRupiah(intval($detailharga->hargaDaily));
            $detailharga->nonDaily = formatRupiah(intval($detailharga->nonDaily));
            $detailharga->nonMonthly = formatRupiah(intval($detailharga->nonMonthly));
        }

        return view('admin.detailHarga.index', compact('detailhargas'));
    }

    // Method untuk menampilkan form create
    public function create()
    {
        return view('admin.detailHarga.create');
    }

    // Method untuk menyimpan data ke dalam tabel detailhargas
    public function store(Request $request)
    {
        $request->validate([
            'hargaMonthly' => 'required|integer',
            'hargaDaily' => 'required|integer',
            'nonDaily' => 'required|integer',
            'nonMonthly' => 'required|integer',
        ]);

        // Simpan data ke dalam tabel
        $detailHarga = new DetailHarga();
        $detailHarga->hargaMonthly = $request->hargaMonthly;
        $detailHarga->hargaDaily = $request->hargaDaily;
        $detailHarga->nonDaily = $request->nonDaily;
        $detailHarga->nonMonthly = $request->nonMonthly;
        $detailHarga->save();

        return redirect()->route('admin.detailHarga.index')->with('success', 'Data detail harga berhasil ditambahkan!');
    }

    // Method untuk menampilkan form edit
    public function edit($id)
    {
        $detailharga = DetailHarga::findOrFail($id);
        return view('admin.detailHarga.edit', compact('detailhargas'));
    }

    // Method untuk memperbarui data yang sudah ada
    public function update(Request $request, $id)
    {
        $request->validate([
            'hargaMonthly' => 'required|integer',
            'hargaDaily' => 'required|integer',
            'nonDaily' => 'required|integer',
            'nonMonthly' => 'required|integer',
        ]);

        // Update data di tabel
        $detailHarga = DetailHarga::findOrFail($id);
        $detailHarga->hargaMonthly = $request->hargaMonthly;
        $detailHarga->hargaDaily = $request->hargaDaily;
        $detailHarga->nonDaily = $request->nonDaily;
        $detailHarga->nonMonthly = $request->nonMonthly;
        $detailHarga->save();

        return redirect()->route('admin.detailHarga.index')->with('success', 'Data detail harga berhasil diperbarui!');
    }

    // Method untuk menghapus data detail harga
    public function destroy(DetailHarga $detailharga)
    {
        $detailharga->delete();
        return redirect()->route('admin.detailHarga.index')->with('success', 'Data detail harga berhasil dihapus.');
    }
}
