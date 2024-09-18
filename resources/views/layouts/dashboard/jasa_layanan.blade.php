@extends('layouts.dashboard.header')
@section('content')


{{--
<--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Not Found</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
            margin: 30px;
        }

        h1 {
            font-size: 10rem;
            margin: 0;
            color: #333;
        }

        p {
            font-size: 1.5rem;
            color: #777;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        .circle {
            animation: bounce 2s ease infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="circle">
            <h1>404</h1>
        </div>
        <p>Halaman yang Anda cari masih dalam pengembangan.</p>
        <p><a href="{{route('wlcm')}}">Kembali ke Halaman Utama</a></p>
    </div>
</body>
</html>
--}} {{-- Boleh hapus atau ngk --}}



<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{route('wlcm')}}">Beranda</a></li>
          <li>Jasa & Layanan</li>
        </ol>
        <h2>Jasa & Layanan</h2>
      </div>
    </section><!-- End Breadcrumbs -->

<section id="portfolio" class="portfolio">
    <div class="container">
      <div class="section-title">
        <h2>Info Jasa & Layanan Kami</h2>
        <p>Temukan Rincian Jasa &Layanan Kami</p>
      </div>
    </div>
  </section>

<section id="featured" class="featured">

    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <div class="icon-box">
          <a href="{{ route('penginapan.index') }}">
            <img src="{{asset('assets/images/10.png')}}" alt="Icon 1" class="img-fluid mb-3" style="max-width: 60px;">
            <h3 class="text-dark">PENGINAPAN</h3>
            <p>Lihat Informasi Penginapan Disini</p>
            </a>
          </div>
        </div>

        <div class="col-lg-3 mt-4 mt-lg-0">
          <div class="icon-box">
          <a href="{{route('ruangan.index')}}">
            <img src="{{asset('assets/images/9.png')}}" alt="Icon 2" class="img-fluid mb-3" style="max-width: 60px;">
            <h3 class="text-dark">RUANGAN</h3>
            <p>Lihat Informasi Ruangan Disini</p>
            </a>
          </div>
        </div>

        <div class="col-lg-3 mt-4 mt-lg-0">
          <div class="icon-box">
          <a href="{{route('peralatan.index')}}">
            <img src="{{asset('assets/images/8.png')}}" alt="Icon 3" class="img-fluid mb-3" style="max-width: 60px;">
            <h3 class="text-dark">PERALATAN</h3>
            <p>Lihat Informasi Peralatan Disini</p>
            </a>
          </div>
        </div>

        <div class="col-lg-3 mt-4 mt-lg-0">
          <div class="icon-box">
          <a href="{{ route('pembelajaran.index') }}">
            <!-- <i class="bi bi-binoculars"></i> -->
            <img src="{{asset('assets/images/11.png')}}" alt="Icon 4" class="img-fluid mb-3" style="max-width: 60px;">
            <h3 class="text-dark">PEMBELAJARAN</h3>
            <p>Lihat Informasi Pembelajaran Disini</p>
            </a>
          </div>
        </div>
        
      </div>

    </div>

</section><!-- End Featured Section -->
    @endsection

