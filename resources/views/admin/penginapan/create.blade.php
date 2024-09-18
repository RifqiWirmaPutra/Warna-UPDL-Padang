@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Tambah Penginapan
        </div>
        <div class="card-body">
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif

            <form action="{{ route('admin.penginapan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="tipePenginapan">Tipe Penginapan:</label>
                    <input type="text" name="tipePenginapan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga Penginapan:</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan:</label>
                    <textarea name="keterangan" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="fotoPenginapan">Foto Penginapan:</label>
                    <input type="file" name="fotoPenginapan" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Penginapan</button>
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
