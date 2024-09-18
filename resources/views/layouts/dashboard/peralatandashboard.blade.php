@extends('layouts.dashboard.header')
@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="{{route('wlcm')}}">Beranda</a></li>
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
        </div>
      </section>
      
      @endsection