<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function create()
    {
        // Tampilkan formulir pembuatan akun
        return view('account.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email', // Pastikan tabel admin adalah nama tabel yang benar
            'role' => 'required|in:super-admin,jar-admin,pelayanan-admin,keuangan-admin,pmk-admin', // Sesuaikan dengan peran yang Anda izinkan
            'password' => 'required|string|min:8|same:password_confirmation',
        ]);

        // Simpan akun
        $admin = new Admin();
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->role = $request->input('role');
        $admin->password = Hash::make($request->input('password'));

        // Simpan admin ke dalam database
        $admin->save();

        return redirect()->route('accounts.create')->with('success', 'Akun Admin berhasil ditambahkan!');
        // Redirect atau tampilkan pesan sukses, sesuai kebijakan aplikasi Anda
    }
}
