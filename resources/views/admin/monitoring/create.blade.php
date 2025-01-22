@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">Form Pemilihan Kamar</h1>
            <a href="{{ route('admin.monitoring.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>

        <form action="{{ route('admin.monitoring.store') }}" method="POST" class="bg-light p-4 rounded shadow-sm">
            @csrf
            <input type="hidden" name="booking_id" value="{{ $booking->id }}">

            {{-- Pilihan Jenis Penginapan --}}
            {{-- Pilihan Jenis Penginapan --}}
            <div class="mb-3">
                <label for="jenisPenginapan" class="form-label">Jenis Penginapan</label>
                <input type="text" class="form-control" value="{{ $booking->penginapan->tipePenginapan ?? 'Standar' }}"
                    readonly>
                <input type="hidden" name="jenisPenginapan"
                    value="{{ $booking->penginapan->tipePenginapan ?? 'Standar' }}">
            </div>


            {{-- Pilihan Nama Kamar --}}
            <div class="mb-3">
                <label for="namaKamar" class="form-label">Nama Kamar</label>
                <select name="namaKamar" id="namaKamar" class="form-select" required>
                    <option value="Kerinci" {{ old('namaKamar') == 'Kerinci' ? 'selected' : '' }}>Kerinci</option>
                    <option value="Merapi" {{ old('namaKamar') == 'Merapi' ? 'selected' : '' }}>Merapi</option>
                    <option value="Up" {{ old('namaKamar') == 'Up' ? 'selected' : '' }}>Up</option>
                </select>
            </div>

            {{-- Input Nomor Kamar --}}
            <div class="mb-3">
                <label for="nomorKamar" class="form-label">Nomor Kamar</label>
                <select name="nomorKamar" id="nomorKamar" class="form-select" required>
                    <optgroup label="Lantai 1">
                        @for ($i = 101; $i <= 107; $i++)
                            <option value="{{ $i }}" {{ old('nomorKamar') == $i ? 'selected' : '' }}>
                                {{ $i }}</option>
                        @endfor
                    </optgroup>
                    <optgroup label="Lantai 2">
                        @for ($i = 201; $i <= 207; $i++)
                            <option value="{{ $i }}" {{ old('nomorKamar') == $i ? 'selected' : '' }}>
                                {{ $i }}</option>
                        @endfor
                    </optgroup>
                    <optgroup label="Kamar Khusus">
                        @for ($i = 1; $i <= 7; $i++)
                            <option value="{{ $i }}" {{ old('nomorKamar') == $i ? 'selected' : '' }}>
                                {{ $i }}</option>
                        @endfor
                    </optgroup>
                </select>
            </div>

            {{-- Tombol Simpan --}}
            <div class="d-grid">
                <button type="submit" class="btn btn-success text-dark shadow-sm border-0 rounded-pill">
                    <i class="bi bi-check-circle me-2"></i> Simpan Data
                </button>
            </div>

        </form>
    </div>
@endsection
