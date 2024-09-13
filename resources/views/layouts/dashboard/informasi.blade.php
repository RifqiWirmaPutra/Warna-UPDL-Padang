@extends('layouts.dashboard.header')
@section('content')

<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="{{route('wlcm')}}">Beranda</a></li>
        <li>Informasi</li>
      </ol>
      <h2>Informasi</h2>
    </div>
  </section>
  <!-- End Breadcrumbs -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="section-title">
        <h2>Info Kegiatan Kami</h2>
        <p>Temukan Rincian Kegiatan Terbaru Kami</p>
      </div>
      <div class="row portfolio-container">
  @foreach($informasis as $informasi)
    <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="margin-bottom: 50px;">
      <div class="portfolio-wrap" style="position: relative; overflow: hidden;">
        <img src="{{ asset('storage/' . str_replace('public/', '', $informasi->foto)) }}"
        style="width: 100%; height: 230px; object-fit: cover;" alt="{{ $informasi->judul }}">
        <div class="portfolio-info" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0, 0, 0, 0.6); color: #fff; padding: 10px; text-align: center;">
          <h4>{{ $informasi->judul }}</h4>
          <!-- <p>{{ $informasi->keterangan }}</p> -->
          <div class="portfolio-links">
            <a href="{{ asset('storage/' . str_replace('public/', '', $informasi->foto)) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $informasi->judul }}" style="color: #fff; margin-right: 5px;"><i class="bi bi-eye-fill"></i></i></a>
            <a href="{{ route('informasi-details.show', ['id' => $informasi->id]) }}" title="Lihat Selengkapnya" style="color: #fff;"><i class="bi bi-bookmarks-fill"></i></i></a>
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
</main><!-- End #main -->
@endsection
