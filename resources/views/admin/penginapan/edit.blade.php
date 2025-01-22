{{-- @extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Edit Penginapan
        </div>
        <div class="card-body">
            <form action="{{ route('admin.penginapan.update', $penginapan->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="tipePenginapan">Tipe Penginapan:</label>
                    <input type="text" name="tipePenginapan" class="form-control" value="{{ $penginapan->tipePenginapan }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga Penginapan:</label>
                    <input type="number" name="harga" class="form-control" value="{{ $penginapan->harga }}" required>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan:</label>
                    <textarea name="keterangan" class="form-control" required>{{ $penginapan->keterangan }}</textarea>
                </div>
                <div class="form-group">
                    <label for="fotoPenginapan">Foto Penginapan:</label>
                    <input type="file" name="fotoPenginapan" class="form-control">
                    <small>Biarkan kosong jika tidak ingin mengganti foto.</small>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
    <style>
        .table-responsive {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            max-width: none;
        }

        .table th,
        .table td {
            white-space: nowrap;
        }
    </style>
@endsection --}}
@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Penginapan
        </div>
        <div class="card-body">
            <form action="{{ route('admin.penginapan.update', $penginapan->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="tipePenginapan">Tipe Penginapan:</label>
                    <input type="text" name="tipePenginapan" class="form-control" value="{{ $penginapan->tipePenginapan }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="hargadpln">Harga Daily PLN:</label>
                    <input type="number" name="hargadpln" class="form-control" value="{{ $penginapan->hargadpln }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="hargampln">Harga Monthly PLN:</label>
                    <input type="number" name="hargampln" class="form-control" value="{{ $penginapan->hargampln }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="hargadnonpln">Harga Daily Non PLN:</label>
                    <input type="number" name="hargadnonpln" class="form-control" value="{{ $penginapan->hargadnonpln }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="hargamnonpln">Harga Monthly Non PLN:</label>
                    <input type="number" name="hargamnonpln" class="form-control" value="{{ $penginapan->hargamnonpln }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="fasilitas">Fasilitas</label>
                    <input  name="fasilitas" class="form-control" value="{{ $penginapan->fasilitas }}"
                        required>
                </div>

                {{-- <div class="form-group">
                    <label for="kapastas">Kapasitas</label>
                    <input  name="kapasitas" class="form-control" value="{{ $penginapan->kapasitas }}"
                        required>
                </div> --}}

                <div class="form-group">
                    <label for="fotoPenginapan">Foto Penginapan:</label>
                    <input type="file" name="fotoPenginapan" class="form-control">
                    <small>Biarkan kosong jika tidak ingin mengganti foto.</small>
                </div>

                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>

    <style>
        .table-responsive {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            max-width: none;
        }

        .table th,
        .table td {
            white-space: nowrap;
        }
    </style>
@endsection
