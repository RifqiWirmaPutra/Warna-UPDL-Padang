@extends('layouts.appUser')

@section('content')

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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
<div class="card">
    <div class="card-header">
        <h2 class="card-title">Form Pengajuan Lupa Absen</h2>
    </div>
    <div class="card-content">
        <div class="card-body">
            <form action="{{ route('telat-absen.ajukan') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="waktu_absen">Waktu Absen</label>
                            <input type="time" id="waktu_absen" class="form-control" name="waktu_absen" placeholder="waktu absen" readonly>
                        </div>
                    </div>
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
                            <label for="absensi">Absensi</label>
                            <input type="text" id="absensi" class="form-control" name="absensi"  value="{{ auth()->user()->absensiPeserta->absensi ?? 'absen' }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="jenis_permintaan_diklat">Jenis Permintaan Diklat</label>
                            <input type="text" id="jenis_permintaan_diklat" class="form-control" name="jenis_permintaan_diklat" placeholder="Jenis Permintaan" value="{{ $arp->jenis_permintaan_diklat }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="tanggal_absensi">Tanggal Absensi</label>
                            <input type="date" id="tanggal_absensi" class="form-control" name="tanggal_absensi" value="{{ \Carbon\Carbon::now()->toDateString() }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="penggantian_kuota">Penggantian Kuota Internet</label>
                            <select name="penggantian_kuota" class="form-control" required>
                                <option value="iya">Iya</option>
                                <option value="tidak">Tidak</option>
                            </select>
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
                            <label for="alasan">Alasan</label>
                            <textarea type="text" id="alasan" class="form-control" name="alasan" placeholder="alasan anda" style="height: 100px; resize: vertical" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="arp_id">Id Pembelajaran</label>
                            <input type="text" id="arp_id" class="form-control" name="arp_id" placeholder="No Hp" value="{{ auth()->user()->arp_id }}" readonly>
                        </div>
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-primary bg-primary text-white" style="color: black;">Ajukan</button>
            </form>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Fungsi untuk mendapatkan format waktu sekarang (HH:mm:ss)
        function getCurrentTime() {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            return `${hours}:${minutes}:${seconds}`;
        }

        // Mengatur nilai input waktu_absen dengan waktu sekarang saat halaman dimuat
        document.getElementById('waktu_absen').value = getCurrentTime();
    });
</script>

@endsection