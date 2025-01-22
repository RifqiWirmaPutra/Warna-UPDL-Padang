<?php

namespace App\Http\Controllers;

use App\Models\Arp;
use Illuminate\Support\Facades\Hash;
use App\Models\ArpRencanaPe;
use League\Csv\Reader;
use App\Imports\ExcelImport;
use App\Imports\ImportPeserta;
use Session;
use App\Models\User;
use App\Models\Arsip;
use App\Models\UabsensiPeserta;
use App\Models\Kelas;
use App\Models\Wisma;
use App\Imports\ArpImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ArpExport;
// use Excel;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ArpController extends Controller {
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $date_from = $request->input('date_from');
        $date_to = $request->input('date_to');
    
        // Mengambil semua ARP tanpa filter tanggal terlebih dahulu
        $arpQuery = Arp::with('users.udaftarHadir')->orderBy('created_at', 'DESC');
    
        // Jika ada rentang tanggal yang diberikan, tambahkan filter pada query
        if ($date_from && $date_to) {
            $arpQuery->where(function ($query) use ($date_from, $date_to) {
                $query->whereBetween('tanggal_mulai', [$date_from, $date_to])
                    ->orWhereBetween('tanggal_selesai', [$date_from, $date_to]);
            });
        }
            // Ambil data Arsip berdasarkan id ARP
        $arsipIds = Arsip::pluck('arp_id')->toArray();
            // Filter data ARP yang sudah ada di tabel Arsip
        $arpQuery->whereNotIn('id', $arsipIds);
            // Eksekusi query setelah penambahan filter jika ada
        $arp = $arpQuery->get();
    
        $kelasOptions = Kelas::pluck('namakelas', 'id');
        $wismaOptions = Wisma::pluck('nama_wisma', 'id');
    
        // Logika untuk menghitung jumlah konfirmasi
        foreach ($arp as &$item) {
            $item->users_count = $item->users->count();
            $item->confirmed_count = $item->users->filter(function ($user) use ($item) {
                return isset($user->udaftarHadir->konfirmasi) && $user->udaftarHadir->konfirmasi == 'iya' && $user->udaftarHadir->arp_id == $item->id;
            })->count();
        }
    
        return view('admin.arp.arp', compact('arp', 'kelasOptions', 'wismaOptions'));
    }

    public function aipView(){
        $arp = Arp::all();
        return view('admin.aip.aip', ['arp' => $arp]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelasOptions = Kelas::pluck('namakelas', 'id');
        $wismaOptions = Wisma::pluck('nama_wisma', 'id');
        return view('admin.arp.create', compact('kelasOptions', 'wismaOptions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Tambahkan kode berikut untuk mengatur nilai 'jenis_permintaan_diklat' menjadi null jika input kosong
        $requestData = $request->all();
        $requestData['jenis_permintaan_diklat'] = $request->input('jenis_permintaan_diklat') ?: null;

        $requestData['kelas'] = $request->input('kelas');
        $requestData['wisma'] = $request->input('wisma');

        Arp::create($requestData);

        return redirect()->route('arp.index')->with('success', 'Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function showPeserta(Arp $arp, string $id)
    {
        $arp = Arp::with(['users' => function ($query) {
            $query->with('udaftarHadir');
        }])->find($id);
    
        $peserta = $arp->users;
    
        return view('admin.arp.subarp.rencana-peserta', compact('arp', 'peserta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Arp $arp, string $id)
    {
        $arp = Arp::findOrFail($id);
        $kelasOptions = Kelas::pluck('namakelas', 'id');
        $wismaOptions = Wisma::pluck('nama_wisma', 'id');
        return view('admin.arp.edit', compact('arp', 'kelasOptions', 'wismaOptions'));
    }

    // update di button edit arp
    public function updatearp(Request $request, Arp $arp, string $id){
        $validatedData = $request->validate([
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'kode' => 'required|string',
            'judul' => 'required|string',
            'jenis_permintaan_diklat' => 'required|string',
            'jenis_pelaksanaan_diklat' => 'required|string',
            'angkatan' => 'required|string',
            'instruktur' => 'required|string',
        ]);
        $arp = Arp::findOrFail($id);
        $arp->update($validatedData);

        return redirect()->back()->with('success', 'Data berhasil diperbarui');
    }
    public function update(Request $request, Arp $arp, string $id)
    {
        $selesai = false;
        // dd($request->all());
        try {
            $validatedData = $request->validate([
                'tanggal_mulai' => 'required|date',
                'tanggal_selesai' => 'required|date',
                'kode' => 'required|string',
                'judul' => 'required|string',
                'jenis_permintaan_diklat' => 'required|string',
                'jenis_pelaksanaan_diklat' => 'required|string',
                'angkatan' => 'required|string',
                'instruktur' => 'required|string',
                'rencana_peserta' => 'nullable|string',
                'realisasi_peserta' => 'nullable|string',
                'kelas' => 'nullable|string',
                'wisma' => 'nullable|string',
                'persiapan' => 'nullable|string',
                'pelaksanaan' => 'nullable|string',
                'pasca' => 'nullable|string',
                'realisasi_biaya' => 'nullable|string',
            ]);
            $arp = Arp::findOrFail($id);
            if (!$arp) {
                return redirect()->back()->with('error', 'Data tidak ditemukan!');
            }
            
            $arp->tanggal_mulai = $request->tanggal_mulai;
            $arp->tanggal_selesai = $request->tanggal_selesai;
            $arp->kode = $request->kode;
            $arp->judul = $request->judul;
            $arp->jenis_permintaan_diklat = $request->jenis_permintaan_diklat;
            $arp->jenis_pelaksanaan_diklat = $request->jenis_pelaksanaan_diklat;
            $arp->angkatan = $request->angkatan;
            $arp->instruktur = $request->instruktur;
            $arp->rencana_peserta = $request->rencana_peserta;
            $arp->realisasi_peserta = $request->realisasi_peserta;
            $arp->persiapan = $request->persiapan;
            $arp->pelaksanaan = $request->pelaksanaan;
            $arp->pasca = $request->pasca;
            $arp->realisasi_biaya = $request->realisasi_biaya;

            if ($arp->save()) {
                $selesai = true;
                return redirect()->back()->with('success', 'Data berhasil diperbarui.');
            } else {
                return redirect()->back()->with('error', 'Gagal menyimpan data. Silakan coba lagi.');
            }
        } catch (\Throwable $e) {
            $selesai = false;
            // Tangani kesalahan validasi
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan periksa kembali data yang Anda masukkan.');
        }
    }

    public function updatewisma(Request $request, Arp $arp, string $id) {
        try {
            $validatedData = $request->validate([
                'wisma' => 'nullable|array', // Mengubah validasi menjadi array
            ]);

            // Temukan entri yang ingin diperbarui berdasarkan ID
            $arp = Arp::findOrFail($id);
            if (!$arp) {
                return redirect()->back()->with('error', 'Data tidak ditemukan!');
            }

            // Mengambil data Wisma dari form
            $selectedWisma = $request->input('wisma', []); // Mendapatkan array dari input

            // Mengubah array Wisma menjadi string untuk disimpan dalam satu field
            $wismaNames = [];
            foreach ($selectedWisma as $wismaId) {
                $wisma = Wisma::find($wismaId);
                if ($wisma) {
                    $wismaNames[] = $wisma->nama_wisma;
                }
            }
            $arp->wisma = implode(', ', $wismaNames); // Menyimpan multiple values dalam satu field
            if ($arp->save()) {
                return redirect()->route('arp.index')->with('success', 'Data berhasil diperbarui!');
            } else {
                return redirect()->back()->with('error', 'Gagal menyimpan data. Silakan coba lagi.');
            }
        } catch (\Throwable $e) {
            // Tangani kesalahan validasi
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan periksa kembali data yang Anda masukkan.');
        }
    }

    public function updatekelas(Request $request, Arp $arp, string $id)
    {
        try {
            $validatedData = $request->validate([
                'kelas' => 'nullable|string',
            ]);

            $arp = Arp::findOrFail($id);


            if (!$arp) {
                return redirect()->back()->with('error', 'Data tidak ditemukan!');
            }

            // Update data ARP
            $kelas = Kelas::find($request->kelas);
            if ($kelas) {
                $arp->kelas = $kelas->namakelas;
            }
            if ($arp->save()) {
                return redirect()->route('arp.index')->with('success', 'Data berhasil diperbarui!');
            } else {
                return redirect()->back()->with('error', 'Gagal menyimpan data. Silakan coba lagi.');
            }
        } catch (\Throwable $e) {
            // Tangani kesalahan validasi
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan periksa kembali data yang Anda masukkan.');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Arp $arp, string $id)
    {
        $arp = Arp::findOrFail($id);
        $arp->delete();
        return redirect()->route('arp.index')->with('success', 'Data berhasil di hapus.');
    }

    // upload rendiklat csv
    public function uploadRendiklat(Request $request) {
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:csv,xls,xlsx',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $file = $request->file('file');
        $fileExtension = $file->getClientOriginalExtension();
        // dd($fileExtension);
        if ($fileExtension === 'csv') {
            // Proses file CSV
            $csv = Reader::createFromPath($file->getPathname());
            $csv->setHeaderOffset(0);
            $records = $csv->getRecords();
            foreach ($records as $record) {
                Arp::create([
                    'tanggal_mulai' => date('Y-m-d', strtotime($record['TANGGAL MULAI'])),
                    'tanggal_selesai' => date('Y-m-d', strtotime($record['TANGGAL SELESAI'])),
                    'kode' => $record['KODE'],
                    'judul' => $record['JUDUL'],
                    'jenis_permintaan_diklat' => $record['JENIS PERMINTAAN DIKLAT'],
                    'jenis_pelaksanaan_diklat' => $record['JENIS PELAKSANAAN DIKLAT'],
                    'angkatan' => $record['ANGKATAN'],
                    'instruktur' => $record['INSTRUKTUR'],
                ]);
            }
        } else {
            //jika tipe data tidak sesuai
            return redirect()->back()->with('error', 'Gagal! Format data anda salah. Hanya file CSV yang diizinkan.');
        }
        return redirect()->route('arp.index')->with('success', 'File berhasil diunggah dan data berhasil diproses.');
    }
    // upload rendiklat excel
    public function import_excel(Request $request){
        $validator = Validator::make($request->all(), [
            'fileexcel' => 'required|mimes:xls,xlsx',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $fileexcel = $request->file('fileexcel');
        $fileExtension = $fileexcel->getClientOriginalExtension();
        if ($fileExtension === 'xls' || $fileExtension === 'xlsx') {
            $nama_file = rand().$fileexcel->getClientOriginalName();
            $path = $fileexcel->storeAs('arp-data', $nama_file);
            try {
                // Excel::import(new ExcelImport, storage_path('app/' . $path));
                Excel::import(new ExcelImport, storage_path('app/arp-data/' . $nama_file));
                return redirect()->route('arp.index')->with('success', 'File berhasil diunggah dan data berhasil diproses.');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
            }
        } else {
            return redirect()->back()->with('error', 'Gagal! Format data Anda salah. Hanya file Excel (xls, xlsx) yang diizinkan.');
        }
    }
    // end excel

    public function uploadPeserta(Request $request)
    {
        $arpId = $request->input('arp_id');
        $validator = $request->validate([
            'file_peserta' => 'required|mimes:csv,xls,xlsx',
        ]);
        $filePeserta = $request->file('file_peserta');
        $fileExtension = $filePeserta->getClientOriginalExtension();
        $importError = false;
        if ($fileExtension === 'csv') {
            $csv = Reader::createFromPath($filePeserta->getPathname());
            $csv->setHeaderOffset(0);
            $records = $csv->getRecords();
            $defaultPassword = Hash::make('12345678');
            foreach ($records as $record) {
                try {
                    $existingUser = User::where('nip', $record['NIP'])
                    ->orWhere('email', $record['EMAIL'])
                    ->first();
                    if ($existingUser) {
                        // Jika user sudah ada, tambahkan ARP ID dan pisahkan dengan koma
                        $existingUser->update(['arp_id' => $arpId]);
                    } else {
                        User::create([
                            'name' => $record['NAMA'],
                            'email' => $record['EMAIL'],
                            'password' => $defaultPassword,
                            'nip' => $record['NIP'],
                            'jabatan' => $record['JABATAN'],
                            'unit_induk' => $record['UNIT INDUK'],
                            'unit_pelaksana' => $record['UNIT PELAKSANA'],
                            'no_hp' => $record['NO HP'],
                            'arp_id' => $arpId
                        ]);
                    }
                } catch (\Exception $e) {
                    $importError = true;
                }
            }
        } elseif (in_array($fileExtension, ['xls', 'xlsx'])) {
            try {
                Excel::import(new ImportPeserta($request), $filePeserta);

            } catch (\Exception $e) {
                \Log::error($e->getMessage());
                $importError = true;
            }
        } else {
            return redirect()->back()->with('error', 'Gagal! Format data Anda salah. Hanya file CSV, XLS, dan XLSX yang diizinkan.');
        }
        if ($importError) {
            return redirect()->route('arp.index')->with('error', 'Terjadi kesalahan saat mengunggah file peserta. Pastikan tidak ada email yang sama dan periksa data anda.');
        } else {
            return redirect()->route('arp.index')->with('success', 'File berhasil diunggah dan data berhasil diproses.');
        }
        return redirect()->route('arp.index');
    }

    // download excel
    public function downloadExcel()
    {
        return Excel::download(new ArpExport, 'rencana_realisasi_pembelajaran_data.xlsx');
    }

    // download pdf
    public function downloadPDF()
    {
        // Ambil data ARP dari database
        $arp = Arp::all();
        // Gunakan library PDF untuk membuat file PDF
        $pdf = PDF::loadView('admin.arp.pdf.arp_pdf', compact('arp'));
        $pdf->setPaper([0, 0, 496.98, 900.85], 'landscape');
        $pdf->setOptions(['header-html' => view('admin.arp.pdf.pdf-header')]);
        // Simpan atau tampilkan file PDF
        return $pdf->download('rencana_realisasi_pembelajaran_data.pdf');
    }
    
}
