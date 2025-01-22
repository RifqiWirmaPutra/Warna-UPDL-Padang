@extends('layouts.admin')
@section('content')
<div class="page-heading">
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <a href="#" class="btn btn-info mb-2" data-toggle="modal" data-target="#download">Download</a>
            <div class="modal fade" id="download" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pilih Tipe File yang Akan Diunduh</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="text-center">
                            <a href="{{ url('admin/daftarhadir/download/excel') }}" class="btn btn-outline-primary">Download Excel</a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Daftar Hadir
            </div>
            <div class="card-body small">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th style="min-width: 50px;">No</th>
                            <th style="min-width: 150px;">Nip</th>
                            <th style="min-width: 150px;">Nama</th>
                            <th style="min-width: 150px;">Judul</th>
                            <th style="min-width: 150px;">Jenis Permintaan Diklat</th>
                            <th style="min-width: 150px;">Tanggal Kehadiran</th>
                            <th style="min-width: 150px;">Penggantian Kuota</th>
                            <th style="min-width: 150px;">No HP</th>
                            <th style="min-width: 150px;">Kehadiran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($absensiPeserta->count() > 0)
                        @foreach($absensiPeserta as $rs)
                        <tr>
                            <td class="align-middle">{{ $loop->iteration }}</td>
                            <td class="align-middle">{{ $rs->nip }}</td>
                            <td class="align-middle">{{ $rs->nama }}</td>
                            <td class="align-middle">{{ $rs->judul }}</td>
                            <td class="align-middle">{{ $rs->jenis_permintaan_diklat }}</td>
                            <td class="align-middle">{{ $rs->tanggal_absensi }}</td>
                            <td class="align-middle">{{ $rs->penggantian_kuota }}</td>
                            <td class="align-middle">{{ $rs->no_hp }}</td>
                            <td class="align-middle">{{ $rs->absensi }}</td>
                            {{-- <td class="align-middle">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="#" type="button" class="btn btn-secondary bg-secondary">Details</a>
                                    <a href="#" type="button" class="btn btn-warning bg-warning">Edit</a>
                                    <button class="btn btn-danger m-0">Delete</button>
                                </div>
                            </td> --}}
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td class="text-center" colspan="5"> Data Tidak Ditemukan</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection