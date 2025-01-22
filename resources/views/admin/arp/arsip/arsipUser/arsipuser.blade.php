@extends('layouts.admin')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Arsip User</h3>
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
        <!-- <a href="#" class="btn btn-info mb-3">Tambah Data</a> -->
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
                                <th style="min-width: 150px;">Konfirmasi</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($arsipUser as $arsipuser)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $arsipuser->nip }}</td>
                                <td class="align-middle">{{ $arsipuser->nama }}</td>
                                <td class="align-middle">{{ $arsipuser->tanggal_mulai }}</td>
                                <td class="align-middle">{{ $arsipuser->tanggal_selesai }}</td>
                                <td class="align-middle">{{ $arsipuser->kode }}</td>
                                <td class="align-middle">{{ $arsipuser->judul }}</td>
                                <td class="align-middle text-center">{{ $arsipuser->angkatan }}</td>
                                <td class="align-middle text-center">{{ $arsipuser->konfirmasi }}</td>
                                <td class="align-middle text-center">{{ $arsipuser->arp_id }}</td>
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