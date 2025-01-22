@extends('layouts.appUser')

@section('content')
<div class="card">
    <div class="card-header">
        <h2 class="card-title">Absensi Harian</h2>
    </div>
    <div class="card-content">
        <div class="card-body">
            <form action="{{ route('absensi.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" id="nip" class="form-control" name="nip" placeholder="NIP" value="{{ auth()->user()->nip }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama" value="{{ auth()->user()->name }}" readonly>
                        </div>
                    </div>
            
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" id="judul" class="form-control" name="judul" placeholder="Judul" value="{{ $arp->judul }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="jenis_pelaksanaan_diklat">Jenis Pelaksanaan Diklat</label>
                            <input type="text" id="jenis_pelaksanaan_diklat" class="form-control" name="jenis_pelaksanaan_diklat" placeholder="Jenis Pelaksanaan Diklat" value="{{ $arp->jenis_pelaksanaan_diklat }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="tanggal_absensi">Tanggal Absensi</label>
                            <input type="date" id="tanggal_absensi" class="form-control" name="tanggal_absensi" value="{{ \Carbon\Carbon::now()->toDateString() }}" readonly>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="penggantian_kuota">Penggantian Kuota Internet</label>
                            <select name="penggantian_kuota" class="form-control" required>
                                <option value="iya">Iya</option>
                                <option value="tidak">Tidak</option>
                            </select>
                            <!-- <input type="text" id="penggantian_kuota" class="form-control" name="penggantian_kuota" placeholder="Penggantian Kuota"> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="no_hp">No Hp</label>
                            <input type="text" id="no_hp" class="form-control" name="no_hp" placeholder="No Hp" value="{{ auth()->user()->no_hp }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="no_hp">ID Pembelajaran</label>
                            <input type="text" id="arp_id" class="form-control" name="arp_id" placeholder="ID Pembelajaran" value="{{ auth()->user()->arp_id }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="absensi">Status Absensi:</label>
                        <select name="absensi" class="form-control" required>
                            <option value="hadir">Hadir</option>
                            <option value="izin">Izin</option>
                            <option value="sakit">Sakit</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary bg-primary">Absen</button>
            </form>
        </div>
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
</div>

@endsection
