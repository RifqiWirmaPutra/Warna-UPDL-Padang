{{-- @extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <h1 class="mb-4">Tambah Jenis Penginapan</h1>
        <form action="{{ route('admin.jenisPenginapan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Jenis Penginapan</label>
                <select class="form-control" id="nama" name="nama">
                    <option value="" selected disabled>Pilih Jenis Penginapan</option>
                    <option value="Kerinci">Kerinci</option>
                    <option value="Merapi">Merapi</option>
                    <option value="Up">Up</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nomorKamar" class="form-label">Nomor Kamar</label>
                <input type="text" class="form-control" id="nomorKamar" name="nomorKamar"
                    placeholder="Masukkan Nomor Kamar">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection --}}
@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <h1>Edit Jenis Penginapan</h1>
    <form action="{{ route('admin.jenisPenginapan.update', $jenisPenginapan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $jenisPenginapan->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="nomorKamar" class="form-label">Nomor Kamar</label>
            <input type="text" name="nomorKamar" id="nomorKamar" class="form-control" value="{{ $jenisPenginapan->nomorKamar }}" required>
        </div>
        <button type="submit" class="btn btn-success">Perbarui</button>
    </form>
</div>
@endsection
