@php
use App\Models\Admin;
@endphp

@extends('layouts.admin')

@section('content')
<div class="page-heading">
    <section class="section">
        <div class="card">    
            <div class="card-body">
                <div class="table-responsive">
                    <div class="page-title">
                        <div class="row">

                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Kegiatan Realisasi Biaya untuk ARP ID: {{ $arp->id }}</h3>

                                @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible show fade" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}<button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button></li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

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
                                        <li class="breadcrumb-item"><a href="{{route('arp.index')}}">Kembali</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Realisasi Biaya</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="min-width: 150px;">N0</th>
                                <th style="min-width: 150px;">Kegiatan</th>
                                <th style="min-width: 150px;">PIC</th>
                                <th style="min-width: 150px;">Ceklist<br><label class="small">contoh biaya : 50000000</label></th>
                                <th style="min-width: 150px;">Keterangan</th>
                                <th style="min-width: 150px;">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($kegiatans as $kegiatan)
                            <tr>
                                <form action="{{ route('realisasiBiaya.update', [$arp->id, $kegiatan->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $kegiatan->kegiatan }}</td>
                                    <td class="align-middle">{{ $kegiatan->pic }}</td>
                                    <td class="align-middle d-flex"><label class="small">Rp. </label>
                                        <input type="text" class="form-control" name="ceklist" value="{{ $kegiatan->ceklist }}">
                                    </td>
                                    <td class="align-middle">
                                        <textarea class="form-control form-control" type="text" name="keterangan">{{ $kegiatan->keterangan }}</textarea>
                                    </td>
                                    <td class="align-middle d-flex">
                                        <button type="submit" class="btn btn-outline-primary">Update</button>
                                        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteConfirmation{{ $kegiatan->id }}">Delete</button>
                                    </td>
                                </form>
                            </tr>

                             <!-- Modal for delete confirmation -->
                             <div class="modal fade" id="deleteConfirmation{{ $kegiatan->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteConfirmationLabel">Konfirmasi Hapus</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus data ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                                            <form action="{{ route('realisasiBiaya.destroy', [$arp->id, $kegiatan->id]) }}" method="POST">
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
                    @php
                        $userRole = auth()->user()->role; // Assuming 'role' is the field representing the user's role
                    @endphp
                    @if($userRole === Admin::ROLE_SUPERADMIN)
                    <form action="{{ route('realisasiBiaya.store', $arp->id) }}" method="POST">
                        @csrf
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="min-width: 150px;">N0</th>
                                    <th style="min-width: 150px;">Kegiatan</th>
                                    <th style="min-width: 150px;">PIC</th>
                                    <th style="min-width: 150px;">Ceklist<br><label class="small">contoh biaya : 50000000</label></th>
                                    <th style="min-width: 150px;">Keterangan</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach($kegiatans as $kegiatan)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $kegiatan->kegiatan }}</td>
                                    <td class="align-middle">{{ $kegiatan->pic }}</td>
                                    <td class="align-middle">Rp. {{ number_format($kegiatan->ceklist, 0, ',', '.') }}</td>
                                    <td class="align-middle">{{ $kegiatan->keterangan }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td class="align-middle">{{ $kegiatans->count() + 1 }}</td>
                                    <td class="align-middle">
                                        <input type="text" name="kegiatan[]" placeholder="Kegiatan Baru" required>
                                    </td>
                                    <td class="align-middle">
                                    <select name="pic[]" class="form-control" required>
                                        <option value="{{ App\Models\Admin::ROLE_SUPERADMIN }}">Super Admin</option>
                                        <option value="{{ App\Models\Admin::ROLE_AdminJar }}">Admin Pengajar</option>
                                        <option value="{{ App\Models\Admin::ROLE_AdminPelayanan }}">Admin Pelayanan</option>
                                        <option value="{{ App\Models\Admin::ROLE_AdminKeuangan }}">Admin Keuangan</option>
                                        <option value="{{ App\Models\Admin::ROLE_AdminPmk }}">Admin PMK</option>
                                    </select>
                                    </td>

                                    <td class="align-middle">
                                      <input type="text" class="form-control" name="ceklist">
                                    </td>
                                    <td class="align-middle">
                                        <input type="text" name="keterangan[]" placeholder="Keterangan Baru">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-outline-primary">Save</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
</section>
</div>
@endsection 