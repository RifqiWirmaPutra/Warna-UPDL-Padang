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
                    <select name="tipePenginapan" class="form-control" required>
                        <option value="">Pilih Tipe Penginapan</option>
                        <option value="Family Room">Family Room</option>
                        <option value="Standard Room">Standard Room</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="hargadpln">Harga Daily PLN:</label>
                    <input type="number" name="hargadpln" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="hargampln">Harga Monthly PLN:</label>
                    <input type="number" name="hargampln" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="hargadnonpln">Harga Daily Non PLN:</label>
                    <input type="number" name="hargadnonpln" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="hargamnonpln">Harga Monthly Non PLN:</label>
                    <input type="number" name="hargamnonpln" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="fasilitas">Fasilitas:</label>
                    <textarea name="fasilitas" class="form-control" required></textarea>
                </div>

                {{-- <div class="form-group">
                    <label for="kapasitas">Kapasitas:</label>
                    <textarea name="kapasitas" class="form-control" required></textarea>
                </div> --}}

                <div class="form-group">
                    <label for="fotoPenginapan">Foto Penginapan:</label>
                    <input type="file" name="fotoPenginapan[]" class="form-control" multiple>
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
