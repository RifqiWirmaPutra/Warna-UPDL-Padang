@extends('layouts.dashboard.header')
@section('content')

<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="{{route('wlcm')}}">Beranda</a></li>
        <li>Sarana & Prasarana</li>
      </ol>
      <h2>Sarana & Prasarana</h2>
    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Sarana Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="section-title">
        <h2>Tempat yang Penuh Kenyamanan</h2>
        <p>PLN UPDL Padang memiliki Sarana & Pasarana yang Modern dan Lengkap</p>
      </div>

            <!-- <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Semua</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div> -->

      <div class="row portfolio-container">
        @foreach($saranas as $sarana)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ asset('storage/' . str_replace('public/', '', $sarana->foto)) }}"
            style="width: 100%; height: 230px; object-fit: cover;"
            class="img-fluid equal-height" alt="{{ $sarana->judul }}">
            <div class="portfolio-info">
              <h4>{{ $sarana->judul }}</h4>
              <p>{{ $sarana->keterangan }}</p>
              <div class="portfolio-links">
                <a href="{{ asset('storage/' . str_replace('public/', '', $sarana->foto)) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $sarana->judul }}"><i class="bi bi-eye-fill"></i></a>
                <!-- <a href="#" title="Lihat Selengkapnya"><i class="bx bx-link"></i></a> -->
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- End Portfolio Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container">

    </div>
  </section>
  <!-- End Clients Section -->
</main>
<!-- End #main -->
@endsection
