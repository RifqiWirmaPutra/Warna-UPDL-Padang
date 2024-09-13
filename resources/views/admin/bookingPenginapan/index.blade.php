@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Daftar Booking
            </div>
            <div class="card-body small">
                <div class="table-responsive">
                    @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <div class="btn btn-primary">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#formTambah">Tambah Data</button>
                    </div>
                    <!-- Desain Modal Tambah Data -->
                    <div class="modal fade text-left" id="formTambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Tambah Booking</h4>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <i data-feather="x"></i>
                                    </button>
                                </div>
                                <form action="{{ route('admin.booking.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <label>Tanggal Masuk: </label>
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="tanggalMasuk" required>
                                        </div>
                                        <label>Tanggal Keluar: </label>
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="tanggalKeluar" required>
                                        </div>
                                        <label>Email: </label>
                                        <div class="form-group">
                                            <input type="email" placeholder="Masukkan Email" class="form-control" name="email" required>
                                        </div>
                                        <label>Nomor HP: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan Nomor HP" class="form-control" name="noHP" required>
                                        </div>
                                        <label>Upload KTP: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="URL KTP" class="form-control" name="uploadKTP" required>
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
                    <!-- End Desain Modal -->

                    <table class="table table-bordered table-striped mb-0" id="table1">
                        <thead>
                            <tr>
                                <th style="min-width: 70px;">No</th>
                                <th style="min-width: 150px;">Tanggal Masuk</th>
                                <th style="min-width: 150px;">Tanggal Keluar</th>
                                <th style="min-width: 150px;">Email</th>
                                <th style="min-width: 150px;">Nomor HP</th>
                                <th style="min-width: 150px;">Upload KTP</th>
                                <th style="min-width: 150px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings as $booking)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $booking->tanggalMasuk }}</td>
                                <td class="align-middle">{{ $booking->tanggalKeluar }}</td>
                                <td class="align-middle">{{ $booking->email }}</td>
                                <td class="align-middle">{{ $booking->noHP }}</td>
                                <td class="align-middle"><img src="{{ $booking->uploadKTP }}" alt="KTP" style="width: 100px;"></td>
                                <td class="align-middle">
                                    <div class="btn btn-primary">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#formEdit{{ $booking->id }}">Edit</button>
                                    </div>
                                    <div class="btn btn-danger">
                                        <button type="button" data-toggle="modal" data-target="#deleteBooking{{ $booking->id }}">Hapus</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Desain Modal Edit Data -->
                            <div class="modal fade text-left" id="formEdit{{ $booking->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Edit Booking</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <form action="{{ route('admin.booking.update', $booking->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <label>Tanggal Masuk: </label>
                                                <div class="form-group">
                                                    <input type="date" class="form-control" name="tanggalMasuk" value="{{ $booking->tanggalMasuk }}" required>
                                                </div>
                                                <label>Tanggal Keluar: </label>
                                                <div class="form-group">
                                                    <input type="date" class="form-control" name="tanggalKeluar" value="{{ $booking->tanggalKeluar }}" required>
                                                </div>
                                                <label>Email: </label>
                                                <div class="form-group">
                                                    <input type="email" placeholder="Masukkan Email" class="form-control" name="email" value="{{ $booking->email }}" required>
                                                </div>
                                                <label>Nomor HP: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Masukkan Nomor HP" class="form-control" name="noHP" value="{{ $booking->noHP }}" required>
                                                </div>
                                                <label>Upload KTP: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="URL KTP" class="form-control" name="uploadKTP" value="{{ $booking->uploadKTP }}" required>
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
                            <!-- End Desain Modal Edit Data -->

                            <!-- Modal Hapus Booking -->
                            <div class="modal fade text-left" id="deleteBooking{{ $booking->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Konfirmasi Hapus Data</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus booking ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                                            <form action="{{ route('admin.booking.destroy', $booking->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Hapus Booking -->
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