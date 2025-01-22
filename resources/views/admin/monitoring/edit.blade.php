@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Edit Kamar</h1>
        <a href="{{ route('admin.monitoring.index') }}" class="btn btn-secondary mb-3">Kembali</a>

        <form action="{{ route('admin.monitoring.update', $monitoring->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="jenisPenginapan" class="form-label">Jenis Penginapan</label>
                <select name="jenisPenginapan" id="jenisPenginapan" class="form-control">
                    <option value="Standar" {{ $monitoring->jenisPenginapan == 'Standar' ? 'selected' : '' }}>Standar
                    </option>
                    <option value="Family" {{ $monitoring->jenisPenginapan == 'Family' ? 'selected' : '' }}>Family</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="namaKamar" class="form-label">Nama Kamar</label>
                <select name="namaKamar" id="namaKamar" class="form-select" required>
                    <option value="Kerinci">Kerinci</option>
                    <option value="Merapi">Merapi</option>
                    <option value="Up">Up</option>
                </select>

            </div>

            <div class="mb-3">
                <label for="nomorKamar" class="form-label">Nomor Kamar</label>
                <input type="number" name="nomorKamar" id="nomorKamar" class="form-control"
                    value="{{ $monitoring->nomorKamar }}" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection