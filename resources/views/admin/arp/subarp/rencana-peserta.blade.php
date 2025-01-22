@extends('layouts.admin')
@section('content')
<div class="page-heading">
    <div class="page-title">
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
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Rencana Peserta</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('arp.index')}}">Kembali</a></li>
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
                    <form action="{{ route('store.arsipuser') }}" method="POST">
                        @csrf
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
                            @foreach ($peserta as $user)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">
                                    {{ $user->nip }}
                                    <input type="hidden" name="nip[]" value="{{ $user->nip }}" readonly>
                                </td>
                                <td class="align-middle">
                                    {{ $user->name }}
                                    <input type="hidden" name="nama[]" value="{{ $user->name }}" readonly>
                                </td>
                                <td class="align-middle">
                                    {{ $arp->tanggal_mulai }}
                                    <input type="hidden" name="tanggal_mulai[]" value="{{ date_format(date_create($arp->tanggal_mulai), 'Y-m-d') }}" readonly>
                                </td>
                                <td class="align-middle">
                                    {{ $arp->tanggal_selesai }}
                                    <input type="hidden" name="tanggal_selesai[]" value="{{ date_format(date_create($arp->tanggal_selesai), 'Y-m-d') }}" readonly>
                                </td>
                                <td class="align-middle">
                                    {{ $arp->kode }}
                                    <input type="hidden" name="kode[]" value="{{ $arp->kode }}" readonly>
                                </td>
                                <td class="align-middle">
                                    {{ $arp->judul }}
                                    <input type="hidden" name="judul[]" value="{{ $arp->judul }}" readonly>
                                </td>
                                <td class="align-middle text-center">
                                    {{ $arp->angkatan }}
                                    <input type="hidden" name="angkatan[]" value="{{ $arp->angkatan }}" readonly>
                                </td>
                                <td class="align-middle text-center">
                                    @if(isset($user->udaftarHadir->arp_id) && $user->udaftarHadir->arp_id == $arp->id)
                                    {{ $user->udaftarHadir->konfirmasi }}
                                    @else
                                    - <!-- apapun jika data konfirmasi tidak ada -->
                                    @endif
                                    <input type="hidden" name="konfirmasi[]" value="{{ $user->udaftarHadir && $user->udaftarHadir->arp_id == $arp->id ? $user->udaftarHadir->konfirmasi : '' }}" readonly>
                                    {{-- @if(isset($user->udaftarHadir->konfirmasi))
                                    {{ $user->udaftarHadir->konfirmasi }}
                                    @else
                                    - <!-- apapun jika data konfirmasi tidak ada -->
                                    @endif
                                    <input type="text" name="konfirmasi[]" value="{{ $user->udaftarHadir ? $user->udaftarHadir->konfirmasi : '' }}" readonly> --}}
                                </td>
                                <td>
                                    <input type="hidden" name="arp_id[]" value="{{$arp->id}}" readonly>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary bg-primary">Save</button>
                    </form>
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
