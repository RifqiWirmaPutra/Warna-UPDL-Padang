@extends('layouts.dashboard.header')

@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="{{ route('wlcm') }}">Beranda</a></li>
        <li>Peralatan</li>
      </ol>
      <h2>Peralatan</h2>
    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="section-title">
        <h2>Info Peralatan Kami</h2>
        <p>Temukan Info Peralatan Kami</p>
      </div>

      <!-- Tabel Peralatan -->
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Alat</th>
              <th>Jumlah Tersedia</th>
              <th>Harga Sewa Per pcs</th>
              <th>Tanggal Mulai Pakai</th>
              <th>Tanggal Kembali</th>
              <th>Boking</th>
            </tr>
          </thead>
          <tbody>
            @foreach($peralatan as $index => $alat)
            <tr>
              <!-- Warna kuning, diisi dari backend -->
              <td>{{ $index + 1 }}</td>
              <td>{{ $alat->nama }}</td>
              <td>{{ $alat->jumlah_tersedia }}</td>
              <td>Rp. {{ number_format($alat->harga_sewa_per_pcs, 0, ',', '.') }}</td>

              <!-- Warna hijau, diisi oleh pelanggan -->
              <td>
                <input type="date" name="tanggal_mulai_pakai_{{ $alat->id }}" class="form-control">
              </td>
              <td>
                <input type="date" name="tanggal_kembali_{{ $alat->id }}" class="form-control">
              </td>

              <!-- Warna biru, otomatis dari sistem -->
              <td>
                <a href="{{ route('booking', $alat->id) }}" class="btn btn-primary">Booking</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <!-- Bagian Footer untuk Total Peralatan dan Biaya Sewa -->
      <div class="row mt-3">
        <div class="col-md-6">
          <p>Jumlah Peralatan: <strong>{{ $jumlah_peralatan }} pcs</strong></p>
        </div>
        <div class="col-md-6">
          <p>Jumlah Biaya Sewa: <strong>Rp. {{ number_format($jumlah_biaya_sewa, 0, ',', '.') }}</strong></p>
        </div>
      </div>

      <!-- Tombol Booking -->
      <div class="text-center">
        <a href="{{ route('booking') }}" class="btn btn-success">Booking</a>
      </div>

    </div>
  </section><!-- End Portfolio Section -->

</main><!-- End #main -->

@endsection
