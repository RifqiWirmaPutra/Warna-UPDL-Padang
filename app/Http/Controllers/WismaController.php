<?php

namespace App\Http\Controllers;
use App\Models\Wisma;

use Illuminate\Http\Request;

class WismaController extends Controller
{
    public function index(){
        $wismas = Wisma::all();
        return view('admin.wisma.index', compact('wismas'));
        
    }

    public function create()
    {
        return view('wismas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_wisma' => 'required',
            'nama_wisma' => 'required'
        ]);

      
        // Menyimpan data ke database
        Wisma::create([
            'no_wisma' => $request->input('no_wisma'),
            'nama_wisma' => $request->input('nama_wisma')
        ]);

        return redirect()->route('wisma.index')->with('success', 'Data Wisma berhasil ditambahkan!');
    }

    public function edit(Request $request, string $id)
    {
        $request->validate([
            'no_wisma' => 'required',
            'nama_wisma' => 'required',
        ]);

        $wisma = Wisma::findOrFail($id);
        $wisma->no_wisma = $request->input('no_wisma');
        $wisma->nama_wisma = $request->input('nama_wisma');
        $wisma->save();
        return redirect()->route('wisma.index')->with('success', 'Data Wisma berhasil di perbarui!');
    }

    public function destroy(string $id){
        $wisma = Wisma::findOrFail($id);
        $wisma->delete();
        return redirect()->route('wisma.index')->with('success', 'Data Wisma berhasil dihapus!');
    }

}


