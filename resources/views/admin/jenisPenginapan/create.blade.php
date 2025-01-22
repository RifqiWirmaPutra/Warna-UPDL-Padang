{{-- @extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <h1 class="mb-4">Edit Jenis Penginapan</h1>
        <form action="{{ route('admin.jenisPenginapan.update', $jenisPenginapan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Input for Nama -->
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Jenis Penginapan</label>
                <input type="text" class="form-control" id="nama" name="nama"
                    value="{{ old('nama', $jenisPenginapan->nama) }}" required>
            </div>

            <!-- Input for Nomor Kamar -->
            <div class="mb-3">
                <label for="nomorKamar" class="form-label">Nomor Kamar</label>
                <input type="text" class="form-control" id="nomorKamar" name="nomorKamar"
                    value="{{ old('nomorKamar', $jenisPenginapan->nomorKamar) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
@endsection --}}
@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <h1>Tambah Jenis Penginapan</h1>
    <form action="{{ route('admin.jenisPenginapan.store') }}" method="POST">
        @csrf
        <!-- Dropdown Nama -->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <select name="nama" id="nama" class="form-select" required>
                <option value="Merapi">Merapi</option>
                <option value="Kerinci">Kerinci</option>
                <option value="UP">UP</option>
            </select>
        </div>

        <!-- Dropdown Nomor Kamar -->
        <div class="mb-3">
            <label for="nomorKamar" class="form-label">Nomor Kamar</label>
            <select name="nomorKamar" id="nomorKamar" class="form-select" required>
                <optgroup label="Lantai 1 dan 2">
                    @for ($i = 101; $i <= 110; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </optgroup>
                <optgroup label="Khusus UP">
                    @for ($i = 1; $i <= 7; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </optgroup>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection

