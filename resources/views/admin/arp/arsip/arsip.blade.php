@php
use App\Models\Admin;
$userRole = auth()->user()->role;
@endphp
@extends('layouts.admin')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Arsip Data Pembelajaran</h3>
                <!-- success -->
                @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible show fade" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button>
                </div>
                @endif
                <!-- error -->
                @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible show fade" role="alert">
                    {{ Session::get('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
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
                        <table class="table table-bordered table-hover" id="table1">
                            <thead class="table-light">
                                <tr>
                                    <th class="small" style="min-width: 70px;">No</th>
                                    <th class="small" style="min-width: 150px;">Tanggal Mulai</th>
                                    <th class="small" style="min-width: 150px;">Tanggal Selesai</th>
                                    <th class="small" style="min-width: 150px;">Kode</th>
                                    <th class="small" style="min-width: 250px;">Judul</th>
                                    <th class="small" style="min-width: 200px;">Jenis Permintaan Diklat</th>
                                    <th class="small" style="min-width: 200px;">Jenis Pelaksanaan Diklat</th>
                                    <th class="small" style="min-width: 150px;">Angkatan</th>
                                    <th class="small" style="min-width: 150px;">Instruktur</th>
                                    <th class="small" style="min-width: 150px;">Rencana Peserta</th>
                                    <th class="small" style="min-width: 150px;">Realisasi Peserta</th>
                                    <th class="small" style="min-width: 150px;">Kelas</th>
                                    <th class="small" style="min-width: 150px;">Wisma</th>
                                    <th class="small" style="min-width: 150px;">Persiapan</th>
                                    <th class="small" style="min-width: 150px;">Pelaksanaan</th>
                                    <th class="small" style="min-width: 150px;">Pasca</th>
                                    <th class="small" style="min-width: 150px;">Realisasi Biaya</th>
                                    <th class="small" style="min-width: 150px;">AKSI</th>
                                    <th class="small" style="min-width: 150px;">ID ARP</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($arsip as $item )
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ date_format(date_create($item->tanggal_mulai), 'd-m-Y') }}
                                        <input type="hidden" name="tanggal_mulai" value="{{ date_format(date_create($item->tanggal_mulai), 'Y-m-d') }}">
                                    </td>
                                    <td class="align-middle">{{ date_format(date_create($item->tanggal_selesai), 'd-m-Y') }}
                                        <input type="hidden" name="tanggal_selesai" value="{{ date_format(date_create($item->tanggal_selesai), 'Y-m-d') }}">
                                    </td>
                                    <td class="align-middle">{{ $item->kode }}
                                        <input type="hidden" name="kode" value="{{ $item->kode }}">
                                    </td>
                                    <td class="align-middle">{{ $item->judul }}
                                        <input type="hidden" name="judul" value="{{ $item->judul }}">
                                    </td>
                                    <td class="align-middle">{{ $item->jenis_permintaan_diklat }}
                                        <input type="hidden" name="jenis_permintaan_diklat" value="{{ $item->jenis_permintaan_diklat }}">
                                    </td>
                                    <td class="align-middle">{{ $item->jenis_pelaksanaan_diklat }}
                                        <input type="hidden" name="jenis_pelaksanaan_diklat" value="{{ $item->jenis_pelaksanaan_diklat }}">
                                    </td>
                                    <td class="align-middle">{{ $item->angkatan }}
                                        <input type="hidden" name="angkatan" value="{{ $item->angkatan }}">
                                    </td>
                                    <td class="align-middle">{{ $item->instruktur }}
                                        <input type="hidden" name="instruktur" value="{{ $item->instruktur }}">
                                    </td>
                                    <td class="align-middle text-center">
                                        <a href="{{ route('index.arsipuser', ['arp_id' => $item->arp_id]) }}">
                                            {{ $item->rencana_peserta }}
                                        </a>
                                        <input type="hidden" name="rencana_peserta" value="{{ $item->rencana_peserta }}">
                                    </td>
                                    <td class="align-middle text-center">
                                        <a href="{{ route('index.realisasiPeserta', $item->arp_id) }}">
                                            {{ $item->realisasi_peserta }}
                                        </a>
                                        <input type="hidden" name="realisasi_peserta" value="{{ $item->realisasi_peserta }}">
                                    </td>
                                    <td class="align-middle">{{ $item->kelas }}
                                        <input type="hidden" name="kelas" value="{{ $item->kelas }}">
                                    </td>
                                    <td class="align-middle">{{ $item->wisma }}
                                        <input type="hidden" name="wisma" value="{{ $item->wisma }}">
                                    </td>
                                    <td class="align-middle">{{ $item->persiapan }} %
                                        <input type="hidden" name="persiapan" value="{{ $item->persiapan }}">
                                    </td>
                                    <td class="align-middle">{{ $item->pelaksanaan }} %
                                        <input type="hidden" name="pelaksanaan" value="{{ $item->pelaksanaan }}">
                                    </td>
                                    <td class="align-middle">{{ $item->pasca }} %
                                        <input type="hidden" name="pasca" value="{{ $item->pasca }}">
                                    </td>
                                    <td class="align-middle">{{ $item->realisasi_biaya }}
                                        <input type="hidden" name="realisasi_biaya" value="{{ $item->realisasi_biaya }}">
                                    </td>
                                    @if(in_array($userRole, [Admin::ROLE_SUPERADMIN, Admin::ROLE_AdminJar]))
                                        <td class="align-middle">
                                            <div class="btn-group" role="group" aria-label="Basic example" style="white-space: nowrap;">
                                                <div class="btn btn-danger">
                                                    <button type="button" data-toggle="modal" data-target="#deleteModal{{ $item->id }}">Hapus</button>
                                                </div>
                                            </div>
                                        </td>
                                        @endif
                                    <td class="align-middle">{{ $item->arp_id }}
                                        <input type="hidden" name="arp_id" value="{{ $item->arp_id }}">
                                    </td>
                                </tr>
                                <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Penghapusan Arsip ARP ID: {{ $item->id }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin ingin menghapus Data ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                                                <form action="{{ route('destroy.arsip', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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