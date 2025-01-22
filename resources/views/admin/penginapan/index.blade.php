{{-- @extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Daftar Penginapan
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <div class="btn btn-primary mb-3">
                            <a href="{{ route('admin.penginapan.create') }}" class="btn btn-primary">Tambah Penginapan</a>
                        </div>
                        <table class="table table-bordered table-striped mb-0" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tipe Penginapan</th>
                                    <th class="text-center">Foto Penginapan</th>
                                    <th>Harga</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penginapans as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $item->tipePenginapan }}</td>
                                        <td class="text-center">
                                            <!-- Menampilkan foto penginapan dengan ukuran yang sesuai -->
                                            @if ($item->fotoPenginapan)
                                                <img src="{{ asset('storage/assets/penginapan/' . $item->fotoPenginapan) }}" alt="Foto Penginapan"
                                                    style="width: 150px; height: auto; object-fit: cover;">
                                            @else
                                                Tidak Ada Foto
                                            @endif
                                        </td>
                                        <td>{{ $item->harga }}</td>
                                        <td>{{ $item->keterangan }}</td>
                                        <td>
                                            <a href="{{ route('admin.penginapan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('admin.penginapan.destroy', $item->id) }}" method="POST" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
        .table th, .table td {
            white-space: nowrap;
        }

        /* Atur ukuran kolom foto */
        .table td img {
            max-width: 150px;
            height: auto;
        }

        /* Atur kolom action agar lebih rapi */
        .table td form {
            display: inline-block;
        }

        /* Tambahkan padding agar tabel tidak terlalu padat */
        .table th, .table td {
            padding: 10px;
            vertical-align: middle;
        }
    </style>
@endsection --}}
@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Daftar Penginapan
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <div class="btn btn-primary mb-3">
                            <a href="{{ route('admin.penginapan.create') }}" class="btn btn-primary">Tambah Penginapan</a>
                        </div>
                        <table class="table table-bordered table-striped mb-0" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tipe Penginapan</th>
                                    <th class="text-center">Foto Penginapan</th>
                                    <th>Harga Daily PLN</th>
                                    <th>Harga Monthly PLN</th>
                                    <th>Harga Daily Non PLN</th>
                                    <th>Harga Monthly Non PLN</th>
                                    <th>Fasilitas</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penginapans as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $item->tipePenginapan }}</td>
                                        <td class="text-center">
                                            @if ($item->fotoPenginapan)
                                                @foreach ($item->fotoPenginapan as $foto)
                                                    <img src="{{ asset('storage/storage/assets/penginapan/' . $foto) }}"
                                                         alt="Foto Penginapan"
                                                         style="width: 100px; height: auto; object-fit: cover; margin-right: 5px;">
                                                @endforeach
                                            @else
                                                Tidak Ada Foto
                                            @endif
                                        </td>

                                        <td>{{ $item->hargadpln }}</td>
                                        <td>{{ $item->hargampln }}</td>
                                        <td>{{ $item->hargadnonpln }}</td>
                                        <td>{{ $item->hargamnonpln }}</td>
                                        <td>{{ $item->fasilitas }}</td>
                                        <td>
                                            <a href="{{ route('admin.penginapan.edit', $item->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <form action="{{ route('admin.penginapan.destroy', $item->id) }}"
                                                method="POST" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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

        /* Atur ukuran kolom foto */
        .table td img {
            max-width: 150px;
            height: auto;
        }

        /* Atur kolom action agar lebih rapi */
        .table td form {
            display: inline-block;
        }

        /* Tambahkan padding agar tabel tidak terlalu padat */
        .table th,
        .table td {
            padding: 10px;
            vertical-align: middle;
        }
    </style>
@endsection
