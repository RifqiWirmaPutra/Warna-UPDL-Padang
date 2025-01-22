@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">Daftar Booking</h1>
            <a href="{{ route('admin.monitoring.list') }}" class="btn btn-secondary shadow-sm">
                <i class="bi bi-list"></i> Lihat Daftar Monitoring
            </a>
        </div>

        {{-- Pesan sukses --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive shadow rounded-3 p-3 bg-white">
            <table class="table table-striped table-hover shadow-sm">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Jenis Penginapan dan Kamar</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Keluar</th>
                        <th>Total Hari</th>
                        <th>Email</th>
                        <th>No. HP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($bookings as $booking)
                        <tr>
                            <td class="text-center">
                                <span class="fw-bold text-primary">
                                    {{ $booking->penginapan->tipePenginapan }}
                                </span> &
                                <span class="fw-bold text-primary">
                                    {{ $booking->pilihanKamar }}
                                </span>
                            </td>
                            <td class="text-center">{{ $booking->tanggalMasuk }}</td>
                            <td class="text-center">{{ $booking->tanggalKeluar }}</td>
                            <td class="text-center">
                                @php
                                    try {
                                        $tanggalMasuk = \Carbon\Carbon::parse($booking->tanggalMasuk);
                                        $tanggalKeluar = \Carbon\Carbon::parse($booking->tanggalKeluar);
                                        $totalHari = $tanggalMasuk->diffInDays($tanggalKeluar);
                                    } catch (\Exception $e) {
                                        $totalHari = 'Tidak valid';
                                    }
                                @endphp
                                {{ $totalHari }} hari
                            </td>
                            <td class="text-center">{{ $booking->email }}</td>
                            <td class="text-center">{{ $booking->noHP }}</td>


                            <td class="text-center">
                                <a href="{{ route('admin.monitoring.create', $booking->id) }}" class="btn btn-primary btn-sm">
                                    <i class="bi bi-door-open"></i> Pilih Kamar
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">Belum ada data booking.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
