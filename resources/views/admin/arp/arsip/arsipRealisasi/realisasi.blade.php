@extends('layouts.admin')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Arsip Realisasi Peserta</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index.arsip')}}">Kembali</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Rencana Peserta</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="table1">
                        <thead>
                            <tr>
                                <th style="min-width: 150px;">No</th>
                                <th style="min-width: 150px;">Nip</th>
                                <th style="min-width: 150px;">Nama</th>
                                <th style="min-width: 150px;">Tanggal Mulai</th>
                                <th style="min-width: 150px;">Tanggal Selesai</th>
                                <th style="min-width: 150px;">Kode</th>
                                <th style="min-width: 150px;">Judul</th>
                                <th style="min-width: 150px;">Angkatan</th>
                                <th style="min-width: 150px;">Verifikasi</th>
                                <th style="min-width: 150px;">Absensi</th>
                                <th style="min-width: 150px;">Tanggal Absensi</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($realisasi as $rs)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $rs->nip }}</td>
                                <td class="align-middle">{{ $rs->nama }}</td>
                                <td class="align-middle">{{ $rs->tanggal_mulai }}</td>
                                <td class="align-middle">{{ $rs->tanggal_selesai }}</td>
                                <td class="align-middle">{{ $rs->kode }}</td>
                                <td class="align-middle">{{ $rs->judul }}</td>
                                <td class="align-middle text-center">{{ $rs->angkatan }}</td>
                                <td class="align-middle text-center">{{ $rs->verifikasi }}</td>
                                <td class="align-middle text-center">{{ $rs->absensi }}</td>
                                <td class="align-middle text-center">{{ $rs->tanggal_absensi }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
<style>
.table {
    width: 100%;
    max-width: none;
}

.table th {
    white-space: nowrap;
}
</style>
@endsection