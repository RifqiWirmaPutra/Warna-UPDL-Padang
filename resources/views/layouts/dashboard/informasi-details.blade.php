@extends('layouts.dashboard.header')
@section('content')

<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.html">Beranda</a></li>
        <li>Informasi Details</li>
      </ol>
      <h2>Informasi Details</h2>
    </div>
  </section>
  <!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide">
                <img src="{{ asset('storage/' . str_replace('public/', '', $informasi->foto)) }}" alt="{{ $informasi->judul }}">
              </div>

                <!-- <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                </div> -->

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <!-- jan digaduah -->
        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Informasi Detail</h3>
            <ul>
              <li><strong>Judul</strong>: {{ $informasi->judul }}</li>
              <li><strong>Ket. Lokasi</strong>: {{ $informasi->lokasi }}</li>
              <!-- Jika ada atribut lain yang ingin ditampilkan, tambahkan di sini -->
            </ul>
          </div>
          <div class="portfolio-description">
            <!-- Jika diperlukan, Anda dapat menambahkan judul dan deskripsi khusus untuk informasi details -->
            <h2>Keterangan</h2>
            <p>{{ $informasi->keterangan }}</p>
            <!-- Jika ada atribut lain yang ingin ditampilkan, tambahkan di sini -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Portfolio Details Section -->
</main><!-- End #main -->
@endsection