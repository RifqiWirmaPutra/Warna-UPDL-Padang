<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Warna - PLN Udiklat Padang</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('landing_page/img/resize.png') }}" rel="icon">
  <link href="{{ asset('landing_page/img/resize.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('landing_page/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('landing_page/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">  

  <!-- Template Main CSS File -->
  <link href="{{ asset('kuliner/css/app.css') }}" rel="stylesheet">

 <!-- ini untuk modal -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

 <!-- ini untuk icon lokasi di modal -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- fungsi aktif menu -->
  <style>
    .navbar .menu .navbar-item.active a {
    color: #00A2B9; 
  }
  #loading2 {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.7); /* Latar belakang semi-transparan */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999; /* Atur z-index untuk menempatkan elemen loading di atas konten lain */
    }
  </style>
  </head>
  <body style="background-color: #fff;">
    @include('layouts.kwt.circular.menu')
    <div id="loading2" class="text-center">
        <div class="spinner-border" role="status"></div>
        <p>Loading...</p>
    </div>
    
        <section id="topbar" class="d-flex align-items-center">
          <div class="container d-flex justify-content-center justify-content-md-between">
          </div>
        </section>
        <!-- ======= Header ======= -->
        <header id="header" class="d-flex align-items-center mb-0">
          <div class="container d-flex justify-content-between align-items-center">
            <div class="logo" >
              <a href="{{ route('wlcm') }}"><img src="{{asset('assets/images/mockup2.1.png')}}" alt="" class="img-fluid"></a>
            </div>
            <nav id="navbar" class="navbar active">
              <ul class="menu">
                <li class="navbar-item {{ request()->is('/*') ? 'active' : '' }}"><a href="{{ route('dashboardkuliner.index') }}">Kembali ke Halaman Sebelumnya</a></li>
            </ul>        
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
          <!-- .navbar -->
        </div>
      </header>
      {{-- <section id="hero" style="background-image: url('kuliner/images/9bgdark-1.png')">
        <div class="container mt-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <h2>Kafe</h2>
                        <h5>Nikmati Suasana Nongkrong Terbaik di Tempat Hangout Pilihan Anda!</h5>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    
    <main class="py-4">
      @yield('content')
    </main>
    {{-- @extends('layouts.dashboard.footer') --}}
    <script src="{{ asset('kuliner/js/main.js') }}"></script>

    <!-- ini tampilan modaal -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>