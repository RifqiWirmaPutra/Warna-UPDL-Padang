@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 text-primary">
                <i class="bi bi-house-door-fill"></i> Monitoring Ketersediaan Kamar
            </h1>
            <a href="{{ route('admin.monitoring.index') }}" class="btn btn-secondary shadow-sm">
                <i class="bi bi-arrow-left-circle"></i> Kembali
            </a>
        </div>

        {{-- Pesan --}}
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                <i class="bi bi-exclamation-triangle-fill"></i> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Tabel Data --}}
        <div class="table-responsive shadow rounded-3 p-3 bg-white">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Jenis Penginapan</th>
                        <th>Nama Kamar</th>
                        <th>Nomor Kamar</th>
                        <th>Status</th>
                        <th>Email</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Keluar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($rooms as $room)
                        <tr>
                            <td class="text-center text-primary">{{ $room['jenisPenginapan'] }}</td>
                            <td class="text-center">{{ $room['namaKamar'] }}</td>
                            <td class="text-center">{{ $room['nomorKamar'] }}</td>
                            <td class="text-center">
                                <span class="badge
                                    {{ $room['status'] == 1 ? 'bg-danger' : ($room['status'] == 2 ? 'bg-warning' : 'bg-success') }}">
                                    {{ $room['statusLabel'] }}
                                </span>
                            </td>
                            <td class="text-center">{{$room['email']}}</td>
                            <td class="text-center">{{ $room['tanggalMasuk'] }}</td>
                            <td class="text-center">{{ $room['tanggalKeluar'] }}</td>
                            <td class="text-center">
                                @if (!$room['status'] || $room['status'] == 2)
                                    @php
                                        $conflict = collect($rooms)
                                            ->where('nomorKamar', $room['nomorKamar'])
                                            ->where('jenisPenginapan', $room['jenisPenginapan'])
                                            ->where('status', 1)
                                            ->count();
                                    @endphp
                                    @if ($conflict == 0)
                                        <form action="{{ route('admin.monitoring.updateStatus', $room['id']) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="status" value="1">
                                            <button type="submit" class="btn btn-warning btn-sm text-dark shadow-sm me-2">
                                                <i class="bi bi-check-circle"></i> Tandai Booking
                                            </button>
                                        </form>
                                    @else
                                        <span class="text-danger">Nomor kamar {{ $room['nomorKamar'] }} untuk jenis {{ $room['jenisPenginapan'] }} sudah dibooking.</span>
                                    @endif
                                @endif
                                <form action="{{ route('admin.monitoring.destroy', $room['id']) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm text-dark shadow-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">
                                <i class="bi bi-info-circle"></i> Data kamar belum tersedia.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
