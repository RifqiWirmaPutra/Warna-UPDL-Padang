@extends('layouts.dashboard.header')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url({{ asset('landing_page/img/slide2/1.png')}})">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <img src="{{asset('assets/images/mockup2.1.png')}}" alt="" class="img-fluid" style="max-width: 15rem"></h2>
                <h4><p class="animate__animated animate__fadeInUp text-white">Web Informasi Sarana dan Prasarana</p></h4>
                <!-- <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a> -->
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url({{ asset('landing_page/img/slide2/4.png')}})">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated fanimate__adeInDown">PLN UPDL<span> PADANG</span></h2>
                <h4><p class="animate__animated animate__fadeInUp text-white">Pelatihan dan Pengembangan Keahlian untuk Masa Depan Energi yang Lebih Baik.</p></h4>
                <!-- <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a> -->
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url({{ asset('landing_page/img/slide2/3.png')}})">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown pb-5" style="margin-bottom: 10rem;">PLN Corpu <span>Bertransformasi</span></h2>
                <!-- <h4><p class="animate__animated animate__fadeInUp">PLN adalah perusahaan listrik negara yang beroperasi di Indonesia. Ini adalah perusahaan monopoli yang bertanggung jawab untuk memasok listrik kepada pelanggan di seluruh negeri. PLN memiliki peran penting dalam menyediakan layanan listrik yang diperlukan untuk menjalankan berbagai aspek kehidupan sehari-hari, termasuk rumah tangga, bisnis, industri, dan sektor publik.</p></h4> -->
                <!-- <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a> -->
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <!-- Untuk menu check in,nanti hapus kalau disabled tidak digunakan lagi -->
  <style>
    .disable-click {
      pointer-events: none;
      cursor: not-allowed;
      opacity: 0.3; /* Adjust the opacity as needed */
      /* Add any additional styling to make it visually appear as disabled */
    }
  </style>


  <main id="main">

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">

        <div class="row">

          <div class="col-lg-3">
            <div class="icon-box">
            <a href="{{ route('ip.index') }}">
              <!-- <i class="bi bi-card-checklist"></i> -->
              <img src="{{asset('assets/images/1.png')}}" alt="Icon 1" class="img-fluid mb-3" style="max-width: 60px;">
              <h3 class="text-dark">Informasi Pembelajaran</h3>
              <p>Lihat Informasi Pembelajaran Disini</p>
              </a>
            </div>
          </div>


          <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="icon-box">
            <a href="{{route('jasa_layanan.index')}}">
              <img src="{{asset('assets/images/3.png')}}" alt="Icon 2" class="img-fluid mb-3" style="max-width: 60px;">
              <h3 class="text-dark">Jasa & Layanan</h3>
              <p>Lihat Jasa & Layanan Kami Disini</p>
              </a>
            </div>
          </div>



        {{--
        <div class="col-lg-3 mt-4 mt-lg-0">
          <div class="icon-box">
            <a href="{{route('soon.index')}}" class="disable-click" onclick="return false;">
              <img src="{{asset('assets/images/3.png')}}" alt="Icon 2" class="img-fluid mb-3" style="max-width: 60px;">
              <h3 class="text-dark">Check-in Penginapan</h3>
              <h1 style="font-size: 35px; color: #000000; font-weight: bold;">Coming Soon!</h1>
            </a>
          </div>
        </div> --}} {{-- Boleh dihapus atau ngk --}}



          <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="icon-box">
            <a href="{{route('sarana.index')}}">
           {{-- <!-- <a href="{{route('soon.index')}}"> --> --}}
              <!-- <i class="bi bi-binoculars"></i> -->
              <img src="{{asset('assets/images/4.png')}}" alt="Icon 3" class="img-fluid mb-3" style="max-width: 60px;">
              <h3 class="text-dark">Sarana dan Prasarana</h3>
              <p>Lihat Sarana & Prasarana Disini</p>
              </a>
            </div>
          </div>

          <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="icon-box">
            <a href="{{ route('dashboardkuliner.index') }}">
              <!-- <i class="bi bi-binoculars"></i> -->
              <img src="{{asset('assets/images/5.png')}}" alt="Icon 4" class="img-fluid mb-3" style="max-width: 60px;">
              <h3 class="text-dark">Kuliner, Wisata dan Transportasi</h3>
              <p>Coba cari Makanan, Tempat, dan Transportasi di dekat Anda Disini</p>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
          <div>
            <iframe class="mb-4 mb-lg-0" src="https://www.youtube.com/embed/_pSJxARxImY?autoplay=1&mute=1" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>PLN UPDL Padang</h3>
            <h5><p class="fst-italic">
            VISI
            </p></h5>
            <p>
            Menjadi Pusat pengembangan kompetensi energi dan ketenagalistrikan bertaraf internasional serta mampu memberikan nilai tambah bagi indonesia.
            </p>

            <h5><p class="fst-italic">
            MISI
            </p></h5>
            <ul>
              <li><i class="bi bi-check-circle"></i> Mengembangkan, Memelihara dan Meningkatkan Kualitas Tenaga Kerja Sektor Ketenagalistrikan melalui Penyelengaraan Pembelajaran, Asesmen, Sertifikasi, dan Manajemen Pengetahuan.</li>
              <li><i class="bi bi-check-circle"></i> Melakukan Konsultasi Sistem Management untuk  Mewujudkan Nilai Tambah bagi Pemangku Kepentingan.</li>
              <li><i class="bi bi-check-circle"></i> Memfasilitasi progres perubahan dan transformasi bisnis perusahaan untuk mendukung upaya menjaga keberlangsungan.</li>
              <li><i class="bi bi-check-circle"></i> Memberikan pengetahuan ketenagalistrikan dan energi ramah lingkungan kepada masyarakat indonesia.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat Kami</h3>
              <p>Jalan Raya Padang - Bukittinggi KM 37, Lubuk Alung, Sintuak, Kec. Sintuk Toboh Gadang, Kabupaten Padang Pariaman, Sumatera Barat 25584</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Kami</h3>
              <p>udiklat.padang@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Hubungi Kami</h3>
              <p>(+62) 821-7278-5770</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.555894542064!2d100.28036837412891!3d-0.6571533352603726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4de72a9c9b1b7%3A0x2e2e53b762bdcac0!2sPLN%20UPDL%20Padang!5e0!3m2!1sid!2sid!4v1694489525458!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>
            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
              {{ Session::get('success') }}
            </div>
            @endif
            @if (Session::has('error'))
            <div class="alert alert-danger alert-dismissible show fade" role="alert">
              {{ Session::get('error') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
          <div class="col-lg-6">
            <form action="{{ route('contact.store') }}" method="post" role="form" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama_visit" class="form-control" id="name" placeholder="Nama Anda" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email_visit" id="email" placeholder="Email Anda" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan" required></textarea>
              </div><p>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message">Form submission failed: Please check your input and try again.</div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


  </main><!-- End #main -->

    @endsection
