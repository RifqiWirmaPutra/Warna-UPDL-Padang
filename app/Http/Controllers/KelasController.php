<?php

namespace App\Http\Controllers;
use App\Models\Kelas;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){
        $kelas = Kelas::all();
        return view('admin.kelas.index', compact('kelas'));
        
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namakelas' => 'required'
        ]);

        Kelas::create($request->all());

        return redirect()->route('kelas.index')->with('success', 'Data Kelas berhasil ditambahkan!');
    }   
    public function edit(Request $request, string $id){
        
        $request->validate([
            'namakelas'=> 'required',
        ]);
        $kelas = Kelas::findOrFail($id);
        $kelas->namakelas = $request->input('namakelas');
        $kelas->save();
        return redirect()->route('kelas.index')->with('success', 'Data Kelas berhasil diperbarui!');
    }

    public function destroy(string $id){
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return redirect()->route('kelas.index')->with('success', 'Data Kelas berhasil dihapus!');
    }
    
}

