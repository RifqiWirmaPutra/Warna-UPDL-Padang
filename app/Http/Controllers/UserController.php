<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = User::all();
        return view ('admin.user.user', compact('peserta'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = $request->input('peserta');

        foreach ($data as $id => $pesertaData) {
            $peserta = User::findOrFail($id);
            $peserta->update($pesertaData);
        }

        return redirect()->route('index.user')->with('success', 'Semua data peserta berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function importPeserta($filePeserta, $arp_id)
    {
        // Validasi file peserta di sini seperti yang Anda lakukan sebelumnya
        $fileExtension = $filePeserta->getClientOriginalExtension();
        $importError = false; //variable error
        if ($fileExtension === 'csv') {
            // Proses file CSV
            $csv = Reader::createFromPath($filePeserta->getPathname());
            $csv->setHeaderOffset(0);
            $records = $csv->getRecords();
            // Tentukan kata sandi default
            $defaultPassword = Hash::make('12345678');
            foreach ($records as $record) {
                try {
                    User::create([
                        'name' => $record['NAMA'],
                        'email' => $record['EMAIL'],
                        'password' => $defaultPassword,
                        'nip' => $record['NIP'],
                        'jabatan' => $record['JABATAN'],
                        'unit_induk' => $record['UNIT INDUK'],
                        'unit_pelaksana' => $record['UNIT PELAKSANA'],
                        'no_hp' => $record['NO HP'],
                        'arp_id' => $arp_id, //mengaitkan dengan id dari table arp
                    ]);
                } catch (\Exception $e) {
                    // Tangani kesalahan pengecualian untuk email duplikat
                    // return redirect()->route('arp')->with('error', 'Email sudah ada dalam database.');
                    $importError = true;
                }
            }
        } elseif (in_array($fileExtension, ['xls', 'xlsx'])) {
            // Proses file Excel
            try {
                Excel::import(new UserController, $filePeserta);
            } catch (\Exception $e) {
                // Tangani kesalahan pengecualian untuk email duplikat
                // return redirect()->route('arp')->with('error', 'Email sudah ada dalam database.');
                // Tampilkan pesan kesalahan atau log pesan kesalahan ke file log Laravel
                \Log::error($e->getMessage());
                $importError = true;
            }
        } else {
            // Tipe file tidak sesuai
            return redirect()->back()->with('error', 'Gagal! Format data Anda salah. Hanya file CSV, XLS, dan XLSX yang diizinkan.');
        }
        if ($importError) {
            return redirect()->route('arp.index')->with('error', 'Terjadi kesalahan saat mengunggah file peserta. Pastikan tidak ada email yang sama dan periksa data anda.');
        } else {
            // Pesan sukses hanya ditampilkan jika tidak ada kesalahan
            return redirect()->route('arp.index')->with('success', 'File berhasil diunggah dan data berhasil diproses.');
        }
        // Tambahkan log atau pesan sukses jika diperlukan
    }

    // menjumlahkan jumlah dari semua user
    // public function totalUsers()
    // {
    //     $totalUsers = User::count();

    //     return View::make('admin.dashboard', compact('totalUsers'));
    // }
}
