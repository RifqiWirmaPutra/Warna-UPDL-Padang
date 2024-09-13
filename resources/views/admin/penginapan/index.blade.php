@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Daftar Penginapan
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
                                    <h4 class="modal-title" id="myModalLabel33">Tambah Penginapan</h4>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <i data-feather="x"></i>
                                    </button>
                                </div>
                                <form action="{{ route('admin.penginapan.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <label>Tipe Ruangan: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan Tipe Ruangan" class="form-control" name="tipeRuangan" required>
                                        </div>
                                        <label>Foto Ruangan: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="URL Foto Ruangan" class="form-control" name="fotoRuangan" required>
                                        </div>
                                        <label>Harga: </label>
                                        <div class="form-group">
                                            <input type="number" placeholder="Masukkan Harga" class="form-control" name="harga" required>
                                        </div>
                                        <label>Keterangan: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan Keterangan" class="form-control" name="keterangan" required>
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
                                <th style="min-width: 150px;">Tipe Ruangan</th>
                                <th style="min-width: 150px;">Foto Ruangan</th>
                                <th style="min-width: 150px;">Harga</th>
                                <th style="min-width: 150px;">Keterangan</th>
                                <th style="min-width: 150px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($penginapans as $item)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $item->tipeRuangan }}</td>
                                <td class="align-middle"><img src="{{ $item->fotoRuangan }}" alt="Foto Ruangan" style="width: 100px;"></td>
                                <td class="align-middle">{{ $item->harga }}</td>
                                <td class="align-middle">{{ $item->keterangan }}</td>
                                <td class="align-middle">
                                    <div class="btn btn-primary">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#formEdit{{ $item->id }}">Edit</button>
                                    </div>
                                    <div class="btn btn-danger">
                                        <button type="button" data-toggle="modal" data-target="#deletePenginapan{{ $item->id }}">Hapus</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Desain Modal Edit Data -->
                            <div class="modal fade text-left" id="formEdit{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Edit Penginapan</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <form action="{{ route('admin.penginapan.edit', $item->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <label>Tipe Ruangan: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Masukkan Tipe Ruangan" class="form-control" name="tipeRuangan" value="{{ $item->tipeRuangan }}" required>
                                                </div>
                                                <label>Foto Ruangan: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="URL Foto Ruangan" class="form-control" name="fotoRuangan" value="{{ $item->fotoRuangan }}" required>
                                                </div>
                                                <label>Harga: </label>
                                                <div class="form-group">
                                                    <input type="number" placeholder="Masukkan Harga" class="form-control" name="harga" value="{{ $item->harga }}" required>
                                                </div>
                                                <label>Keterangan: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Masukkan Keterangan" class="form-control" name="keterangan" value="{{ $item->keterangan }}" required>
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

                            <!-- Modal Hapus Penginapan -->
                            <div class="modal fade text-left" id="deletePenginapan{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Konfirmasi Hapus Data</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus penginapan ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                                            <form action="{{ route('admin.penginapan.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Hapus Penginapan -->
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
