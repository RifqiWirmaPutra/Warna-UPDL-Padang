<?php

namespace App\Http\Controllers;

use App\Models\BookingPe;
use App\Models\Monitoring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MonitoringController extends Controller
{
    // 1. Menampilkan data dari tabel booking_pes
    public function index()
    {
        $bookings = BookingPe::where('status', 1)->get();
        return view('admin.monitoring.index', compact('bookings'));
    }

    // 2. Menampilkan form pemilihan kamar
    public function create($id)
    {
        $booking = BookingPe::findOrFail($id);
        return view('admin.monitoring.create', compact('booking'));
    }

    // 3. Menyimpan data ke tabel monitoring
    public function store(Request $request)
    {
        $request->validate([
            'booking_id' => 'required|exists:booking_pes,id',
            'jenisPenginapan' => 'required|string',
            'namaKamar' => 'required|string',
            'nomorKamar' => 'required|integer',
        ]);

        DB::table('monitorings')->insert([
            'booking_id' => $request->booking_id,
            'jenisPenginapan' => $request->jenisPenginapan,
            'namaKamar' => $request->namaKamar,
            'nomorKamar' => $request->nomorKamar,
            'status' => 0, // Tersedia secara default
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.monitoring.index')->with('success', 'Data monitoring berhasil disimpan!');
    }

    // 4. Menampilkan daftar kamar untuk monitoring
    public function monitoringList()
    {
        $rooms = Monitoring::with(['jenisPenginapan', 'bookingPe'])
            ->get()
            ->map(function ($room) {
                $tanggalMasuk = optional($room->bookingPe)->tanggalMasuk;
                $tanggalKeluar = optional($room->bookingPe)->tanggalKeluar;

                return [
                    'id' => $room->id,
                    'jenisPenginapan' => $room->jenisPenginapan ?? 'N/A',
                    'namaKamar' => $room->namaKamar ?? 'Tidak diketahui',
                    'nomorKamar' => $room->nomorKamar ?? 'Tidak diketahui',
                    'status' => $room->status,
                    'statusLabel' => $room->status == 1
                        ? 'Booking'
                        : ($room->status == 2 ? 'Pending' : 'Tersedia'),
                    'email' => optional($room->bookingPe)->email ?? 'N/A',
                    'tanggalMasuk' => $tanggalMasuk
                        ? \Carbon\Carbon::parse($tanggalMasuk)->format('d-m-Y')
                        : 'N/A',
                    'tanggalKeluar' => $tanggalKeluar
                        ? \Carbon\Carbon::parse($tanggalKeluar)->format('d-m-Y')
                        : 'N/A',
                ];
            });

        return view('admin.monitoring.list', compact('rooms'));
    }


    // public function monitoringList()
    // {
    //     // Ambil semua data Monitoring dengan relasi bookingPe
    //     $rooms = Monitoring::with(['jenisPenginapan', 'bookingPe'])
    //         ->get()
    //         ->map(function ($room) {
    //             return [
    //                 'id' => $room->id,
    //                 'jenisPenginapan' => $room->jenisPenginapan ?? 'N/A',
    //                 'namaKamar' => $room->namaKamar,
    //                 'nomorKamar' => $room->nomorKamar,
    //                 'status' => $room->status == 1 ? 'Booking' : ($room->status == 2 ? 'Pending' : 'Tersedia'),
    //                 'email' => optional($room->bookingPe)->email ?? 'N/A',
    //                 'tanggalMasuk' => optional($room->bookingPe)->tanggalMasuk ? \Carbon\Carbon::parse($room->bookingPe->tanggalMasuk)->format('d-m-Y') : 'N/A',
    //                 'tanggalKeluar' => optional($room->bookingPe)->tanggalKeluar ? \Carbon\Carbon::parse($room->bookingPe->tanggalKeluar)->format('d-m-Y') : 'N/A',
    //             ];
    //         });

    //     return view('admin.monitoring.list', compact('rooms'));
    // }



    // 5. Memperbarui status kamar
    // public function updateStatus(Request $request, $id)
    // {
    //     $room = Monitoring::findOrFail($id);

    //     // Cek apakah relasi bookingPe ada
    //     $booking = $room->bookingPe;

    //     if (!$booking) {
    //         return redirect()->route('admin.monitoring.list')->with('error', 'Data booking tidak ditemukan.');
    //     }

    //     // Cek jika tanggal masuk atau keluar kosong
    //     if (!$booking->tanggalMasuk || !$booking->tanggalKeluar) {
    //         return redirect()->route('admin.monitoring.list')->with('error', 'Tanggal masuk atau keluar tidak boleh kosong.');
    //     }
    public function updateStatus(Request $request, $id)
    {
        $room = Monitoring::findOrFail($id);

        // Validasi Konflik
        $conflict = Monitoring::where('nomorKamar', $room->nomorKamar)
            ->where('jenisPenginapan', $room->jenisPenginapan)
            ->where('tanggalMasuk', '<=', $room->tanggalKeluar)
            ->where('tanggalKeluar', '>=', $room->tanggalMasuk)
            ->where('status', 1)
            ->exists();

        if ($conflict) {
            return redirect()->back()->with('error', 'Kamar ini sudah dibooking pada tanggal tersebut.');
        }

        // Update Status
        $room->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Status kamar berhasil diperbarui.');


        // Cek jika ada kamar yang bertabrakan
        // $conflictingRoom = Monitoring::where('jenisPenginapan', $room->jenisPenginapan)
        //     ->where('status', 1) // Status booking
        //     ->where(function ($query) use ($booking) {
        //         $query->whereBetween('tanggalMasuk', [$booking->tanggalMasuk, $booking->tanggalKeluar])
        //             ->orWhereBetween('tanggalKeluar', [$booking->tanggalMasuk, $booking->tanggalKeluar])
        //             ->orWhere(function ($q) use ($booking) {
        //                 $q->where('tanggalMasuk', '<=', $booking->tanggalMasuk)
        //                     ->where('tanggalKeluar', '>=', $booking->tanggalKeluar);
        //             });
        //     })
        //     ->exists();

        // // Jika ada kamar yang bertabrakan, tampilkan pesan error
        // if ($conflictingRoom) {
        //     return redirect()->route('admin.monitoring.list')->with('error', 'Kamar ini sudah dipesan pada tanggal tersebut.');
        // }

        // Update status booking
        // $booking->update(['status' => $request->status]);

        // return redirect()->route('admin.monitoring.list')->with('success', 'Status berhasil diubah.');
    }

    // 6. Mengambil data realtime untuk monitoring
    public function realtimeStatus()
    {
        $rooms = Monitoring::select('id', 'namaKamar', 'nomorKamar', 'status')->get();
        return response()->json($rooms);
    }

    // 7. Menghapus data
    public function destroy($id)
    {
        $monitoring = Monitoring::findOrFail($id);
        $monitoring->delete();

        return redirect()->route('admin.monitoring.list')->with('success', 'Data monitoring berhasil dihapus!');
    }
}
