@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Tambah Data</h4>
                <a href="{{ route('arp.index') }}" class="btn btn-info mb-3">Kembali</a>
            </div>

            <div class="card-body">
                <form action="{{ route('arp.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="tanggal_mulai">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai">
                    </div>

                    <div class="form-group">
                        <label for="tanggal_selesai">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai">
                    </div>

                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukkan kode">
                    </div>

                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul">
                    </div>

                    <div class="form-group">
                        <label for="jenis_permintaan_diklat">Jenis Permintaan Diklat</label>
                        <input type="text" class="form-control" id="jenis_permintaan_diklat" name="jenis_permintaan_diklat" placeholder="Masukkan Jenis Permintaan">
                    </div>

                    <div class="form-group">
                        <label for="jenis_pelaksanaan_diklat">Jenis Pelaksanaan Diklat</label>
                        <input type="text" class="form-control" id="jenis_pelaksanaan_diklat" name="jenis_pelaksanaan_diklat" placeholder="Masukkan Jenis Pelaksanaan">
                    </div>

                    <div class="form-group">
                        <label for="angkatan">Angkatan</label>
                        <input type="text" class="form-control" id="angkatan" name="angkatan" placeholder="Masukkan Angkatan">
                    </div>

                    <div class="form-group">
                        <label for="instruktur">Instruktur</label>
                        <input type="text" class="form-control" id="instruktur" name="instruktur" placeholder="Instruktur">
                    </div>

                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select class="form-control" id="kelas" name="kelas">
                            @foreach($kelasOptions as $option)
                            <option value="{{ $option }}">{{ $option }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="wisma">Wisma</label>
                        <select class="form-control" id="wisma" name="wisma">
                            @foreach($wismaOptions as $option)
                            <option value="{{ $option }}">{{ $option }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- <div class="form-group">
                        <label for="rencana_peserta">Rencana Peserta</label>
                        <input type="text" class="form-control" id="rencana_peserta" name="rencana_peserta" placeholder="Masukkan Rencana Peserta">
                    </div>
                    <div class="form-group">
                        <label for="realisasi_peserta">Realisasi Peserta</label>
                        <input type="text" class="form-control" id="realisasi_peserta" name="realisasi_peserta" placeholder="Masukkan Realisasi Peserta">
                    </div>
                    

                    <div class="form-group">
                        <label for="persiapan">Persiapan</label>
                        <input type="text" class="form-control" id="persiapan" name="persiapan" placeholder="Masukkan Persiapan">
                    </div>
                    <div class="form-group">
                        <label for="pelaksanaan">Pelaksanaan</label>
                        <input type="text" class="form-control" id="pelaksanaan" name="pelaksanaan" placeholder="Masukkan pelaksanaan">
                    </div>
                    <div class="form-group">
                        <label for="pasca">Pasca</label>
                        <input type="text" class="form-control" id="pasca" name="pasca" placeholder="Masukkan pasca">
                    </div>
                    <div class="form-group">
                        <label for="realisasi_biaya">Realisasi Biaya</label>
                        <input type="text" class="form-control" id="realisasi_biaya" name="realisasi_biaya" placeholder="Masukkan realisasi biaya">
                    </div> -->
                    <!-- Add more form fields for other attributes -->
                    
                    <div class="btn btn-primary">
                    <button type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
