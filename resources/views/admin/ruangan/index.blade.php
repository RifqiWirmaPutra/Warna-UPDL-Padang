@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Daftar Ruangan
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
                    <!-- Modal Tambah Data -->
                    <div class="modal fade text-left" id="formTambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Tambah Ruangan</h4>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <i data-feather="x"></i>
                                    </button>
                                </div>
                                <form action="{{ route('admin.ruangan.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <label>Tipe Lab: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan Tipe Lab" class="form-control" name="tipeLab" required>
                                        </div>
                                        <label>Jumlah Peserta: </label>
                                        <div class="form-group">
                                            <input type="number" placeholder="Masukkan Jumlah Peserta" class="form-control" name="jumlahPeserta" required>
                                        </div>
                                        <label>Harga: </label>
                                        <div class="form-group">
                                            <input type="number" placeholder="Masukkan Harga" class="form-control" name="harga" required>
                                        </div>
<<<<<<< HEAD
                                        <label>Foto Ruangan: </label>
                                        <div class="form-group">
                                            {{-- <label for="uploadKTP">Upload KTP</label> --}}
                                            <input type="file" class="form-control-file" id="uploadKTP" name="uploadKTP" required>
=======
                                        <label>Foto: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="URL Foto" class="form-control" name="foto" required>
>>>>>>> df8c089bbb22f01aebda973dff238feab8c40530
                                        </div>
                                        <label>Keterangan: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan Keterangan" class="form-control" name="keterangan" required>
                                        </div>
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
                                        <label>No HP: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan No HP" class="form-control" name="noHP" required>
                                        </div>
                                        <label>Upload KTP: </label>
                                        <div class="form-group">
<<<<<<< HEAD
                                            {{-- <label for="uploadKTP">Upload KTP</label> --}}
                                            <input type="file" class="form-control-file" id="uploadKTP" name="uploadKTP" required>
=======
                                            <input type="text" placeholder="URL KTP" class="form-control" name="uploadKTP" required>
>>>>>>> df8c089bbb22f01aebda973dff238feab8c40530
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                            <span class="d-none d-sm-block">Batal</span>
                                        </button>
                                        <button type="submit" class="btn btn-light-primary ml-1">
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
                                <th>Tipe Lab</th>
                                <th>Jumlah Peserta</th>
                                <th>Harga</th>
                                <th>Foto</th>
                                <th>Keterangan</th>
                                <th>Tanggal Masuk</th>
                                <th>Tanggal Keluar</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ruangans as $item)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $item->tipeLab }}</td>
                                <td class="align-middle">{{ $item->jumlahPeserta }}</td>
                                <td class="align-middle">{{ $item->harga }}</td>
                                <td class="align-middle"><img src="{{ $item->foto }}" alt="Foto Ruangan" style="width: 100px;"></td>
                                <td class="align-middle">{{ $item->keterangan }}</td>
                                <td class="align-middle">{{ $item->tanggalMasuk }}</td>
                                <td class="align-middle">{{ $item->tanggalKeluar }}</td>
                                <td class="align-middle">{{ $item->email }}</td>
                                <td class="align-middle">{{ $item->noHP }}</td>
                                <td class="align-middle">
                                    <div class="btn btn-primary">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#formEdit{{ $item->id }}">Edit</button>
                                    </div>
                                    <div class="btn btn-danger">
                                        <button type="button" data-toggle="modal" data-target="#deleteRuangan{{ $item->id }}">Hapus</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal Edit Data -->
                            <div class="modal fade text-left" id="formEdit{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Edit Ruangan</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
<<<<<<< HEAD
                                        <form action="{{ route('admin.ruangan.edit', $item->id) }}" method="POST" enctype="multipart/form-data">
=======
                                        <form action="{{ route('admin.ruangan.update', $item->id) }}" method="POST" enctype="multipart/form-data">
>>>>>>> df8c089bbb22f01aebda973dff238feab8c40530
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <label>Tipe Lab: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Masukkan Tipe Lab" class="form-control" name="tipeLab" value="{{ $item->tipeLab }}" required>
                                                </div>
                                                <label>Jumlah Peserta: </label>
                                                <div class="form-group">
                                                    <input type="number" placeholder="Masukkan Jumlah Peserta" class="form-control" name="jumlahPeserta" value="{{ $item->jumlahPeserta }}" required>
                                                </div>
                                                <label>Harga: </label>
                                                <div class="form-group">
                                                    <input type="number" placeholder="Masukkan Harga" class="form-control" name="harga" value="{{ $item->harga }}" required>
                                                </div>
                                                <label>Foto: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="URL Foto" class="form-control" name="foto" value="{{ $item->foto }}" required>
                                                </div>
                                                <label>Keterangan: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Masukkan Keterangan" class="form-control" name="keterangan" value="{{ $item->keterangan }}" required>
                                                </div>
                                                <label>Tanggal Masuk: </label>
                                                <div class="form-group">
                                                    <input type="date" class="form-control" name="tanggalMasuk" value="{{ $item->tanggalMasuk }}" required>
                                                </div>
                                                <label>Tanggal Keluar: </label>
                                                <div class="form-group">
                                                    <input type="date" class="form-control" name="tanggalKeluar" value="{{ $item->tanggalKeluar }}" required>
                                                </div>
                                                <label>Email: </label>
                                                <div class="form-group">
                                                    <input type="email" placeholder="Masukkan Email" class="form-control" name="email" value="{{ $item->email }}" required>
                                                </div>
                                                <label>No HP: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Masukkan No HP" class="form-control" name="noHP" value="{{ $item->noHP }}" required>
                                                </div>
                                                <label>Upload KTP: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="URL KTP" class="form-control" name="uploadKTP" value="{{ $item->uploadKTP }}" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                    <span class="d-none d-sm-block">Batal</span>
                                                </button>
                                                <button type="submit" class="btn btn-light-primary ml-1">
                                                    <span class="d-none d-sm-block">Simpan</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Edit Data -->

                            <!-- Modal Hapus Ruangan -->
                            <div class="modal fade text-left" id="deleteRuangan{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Konfirmasi Hapus Data</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus ruangan ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                                            <form action="{{ route('admin.ruangan.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Hapus Ruangan -->
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
