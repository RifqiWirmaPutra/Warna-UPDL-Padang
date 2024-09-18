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
                        <div class="btn btn-primary">
                            <a href="{{ route('admin.penginapan.create') }}" class="btn btn-primary">Tambah Penginapan</a>
                        </div>
                        <table class="table table-bordered table-striped mb-0" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tipe Penginapan</th>
                                    <th>Harga</th>
                                    {{-- @foreach ($penginapans as $penginapan)
                                        <td>{{ formatRupiah($penginapan->harga) }}</td>
                                    @endforeach --}}
                                    <th>Foto Penginapan</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penginapans as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->tipePenginapan }}</td>
                                        <td>{{ $item->harga }}</td>
                                        <td>
                                            <!-- Menampilkan foto penginapan -->
                                            @if ($item->foto)
                                                <img src="{{ asset('storage/penginapan/' . $item->foto) }}"
                                                    alt="Foto Penginapan" style="width: 100px; height: auto;">
                                            @else
                                                Tidak Ada Foto
                                            @endif
                                        </td>
                                        <td>{{ $item->keterangan }}</td>
                                        <td>
                                            <a href="{{ route('admin.penginapan.edit', $item->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            {{-- <form action="{{ route('admin.penginapan.destroy', $item->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                            </form> --}}
                                            <form action="{{ route('admin.ruangan.destroy', $item->id) }}" method="POST" style="display: inline">
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
    </style>
@endsection
