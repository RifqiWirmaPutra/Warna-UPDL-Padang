<!-- resources/views/peralatans/index.blade.php -->
@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Daftar Peralatan
            </div>
            <div class="card-body small">
                <div class="table-responsive">
                    @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <div class="btn btn-primary mb-3">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#formTambah">Tambah Data</button>
                    </div>
                    <!-- Modal Tambah Data -->
                    <div class="modal fade text-left" id="formTambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Tambah Peralatan</h4>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <i data-feather="x"></i>
                                    </button>
                                </div>
                                <form action="{{ route('admin.peralatan.store') }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <label>Nama Alat: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan Nama Alat" class="form-control" name="namaAlat" required>
                                        </div>
                                        <label>Jumlah Tersedia: </label>
                                        <div class="form-group">
                                            <input type="number" placeholder="Masukkan Jumlah Tersedia" class="form-control" name="jumlahTersedia" required>
                                        </div>
                                        <label>Harga: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan Harga" class="form-control" name="harga" required>
                                        </div>
                                        <label>Tanggal Pinjam: </label>
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="tanggalPinjam" required>
                                        </div>
                                        <label>Tanggal Kembali: </label>
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="tanggalKembali" required>
                                        </div>
                                        <label>Booking: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan Status Booking" class="form-control" name="booking" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Batal</span>
                                        </button>
                                        <button type="submit" class="btn btn-light-primary ml-1">
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Tambah</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal Tambah Data -->

                    <table class="table table-bordered table-striped mb-0" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Alat</th>
                                <th>Jumlah Tersedia</th>
                                <th>Harga</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Booking</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($peralatans as $item)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $item->namaAlat }}</td>
                                <td class="align-middle">{{ $item->jumlahTersedia }}</td>
                                <td class="align-middle">{{ $item->harga }}</td>
                                <td class="align-middle">{{ $item->tanggalPinjam }}</td>
                                <td class="align-middle">{{ $item->tanggalKembali }}</td>
                                <td class="align-middle">{{ $item->booking }}</td>
                                <td class="align-middle">
                                    <div class="btn btn-primary">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#formEdit{{ $item->id }}">Edit</button>
                                    </div>
                                    <div class="btn btn-danger">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#deletePeralatan{{ $item->id }}">Hapus</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal Edit Data -->
                            <div class="modal fade text-left" id="formEdit{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Edit Peralatan</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <form action="{{ route('admin.peralatan.update', $item->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <label>Nama Alat: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Masukkan Nama Alat" class="form-control" name="namaAlat" value="{{ $item->namaAlat }}" required>
                                                </div>
                                                <label>Jumlah Tersedia: </label>
                                                <div class="form-group">
                                                    <input type="number" placeholder="Masukkan Jumlah Tersedia" class="form-control" name="jumlahTersedia" value="{{ $item->jumlahTersedia }}" required>
                                                </div>
                                                <label>Harga: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Masukkan Harga" class="form-control" name="harga" value="{{ $item->harga }}" required>
                                                </div>
                                                <label>Tanggal Pinjam: </label>
                                                <div class="form-group">
                                                    <input type="date" class="form-control" name="tanggalPinjam" value="{{ $item->tanggalPinjam }}" required>
                                                </div>
                                                <label>Tanggal Kembali: </label>
                                                <div class="form-group">
                                                    <input type="date" class="form-control" name="tanggalKembali" value="{{ $item->tanggalKembali }}" required>
                                                </div>
                                                <label>Booking: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Masukkan Status Booking" class="form-control" name="booking" value="{{ $item->booking }}" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Batal</span>
                                                </button>
                                                <button type="submit" class="btn btn-light-primary ml-1">
                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Simpan</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Edit Data -->

                            <!-- Modal Hapus Peralatan -->
                            <div class="modal fade text-left" id="deletePeralatan{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Konfirmasi Hapus Data</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus peralatan ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                                            <form action="{{ route('admin.peralatan.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Hapus Peralatan -->
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

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