@extends('layouts.admin')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <a href="#" class="btn btn-info mb-2">Download</a>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                Daftar Hadir
            </div>
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

            <div class="card-body small">
                <form action="{{route('adh.terimaAjukan')}}" method="POST">
                    @csrf
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th style="min-width: 50px;">No</th>
                                <th style="min-width: 150px;">Nip</th>
                                <th style="min-width: 150px;">Nama</th>
                                <th style="min-width: 150px;">Judul</th>
                                <th style="min-width: 150px;">Kehadiran</th>
                                <th style="min-width: 150px;">Alasan</th>
                                <th style="min-width: 150px;">Jenis Permintaan Diklat</th>
                                <th style="min-width: 150px;">Tanggal Absensi</th>
                                <th style="min-width: 150px;">Penggantian Kuota</th>
                                <th style="min-width: 150px;">No HP</th>
                                <th style="min-width: 150px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if($telatAbsen->count() > 0)
                            @foreach($telatAbsen as $rs)
                            <input type="hidden" name="id" value="{{ $rs->id }}">
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">
                                    {{ $rs->nip }}
                                    <input type="hidden" name="nip" value="{{ $rs->nip }}" readonly>
                                </td>
                                <td class="align-middle">
                                    {{ $rs->nama }}
                                    <input type="hidden" name="nama" value="{{ $rs->nama }}" readonly>
                                </td>
                                <td class="align-middle">
                                    {{ $rs->judul }}
                                    <input type="hidden" name="judul" value="{{ $rs->judul }}" readonly>
                                </td>
                                <td class="align-middle">
                                    {{ $rs->absensi }}
                                </td>
                                <td class="align-middle">
                                    {{ $rs->alasan }}
                                    <input type="hidden" name="alasan" value="{{ $rs->alasan }}" readonly>
                                </td>
                                <td class="align-middle">
                                    {{ $rs->jenis_permintaan_diklat }}
                                    <input type="hidden" name="alasan_permintaan_diklat" value="{{ $rs->jenis_permintaan_diklat }}" readonly>
                                </td>
                                <td class="align-middle">
                                    {{ $rs->tanggal_absensi }}
                                    <input type="hidden" name="tanggal_absensi" value="{{ $rs->tanggal_absensi }}" readonly>
                                </td>
                                <td class="align-middle">
                                    {{ $rs->penggantian_kuota }}
                                    <input type="hidden" name="penggantian_kuota" value="{{ $rs->penggantian_kuota }}" readonly>
                                </td>
                                <td class="align-middle">
                                    {{ $rs->no_hp }}
                                    <input type="hidden" name="no_hp" value="{{ $rs->no_hp }}" readonly>
                                </td>
                                <td class="align-middle">
                                    {{ $rs->arp_id }}
                                    <input type="hidden" name="arp_id" value="{{ $rs->arp_id }}" readonly>
                                </td>
                                <td class="align-middle">
                                    <input type="hidden" name="absensi" value="hadir" readonly>
                                    <button type="submit" class="btn btn-primary bg-primary">Terima</button>
                                </td>
                                <td class="align-middle">
                                    <input type="hidden" name="user_id" value="{{ $rs->user_id }}" readonly>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td class="text-center" colspan="5"> Data Tidak Ditemukan</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection