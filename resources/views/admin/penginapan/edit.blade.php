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
@endsection
