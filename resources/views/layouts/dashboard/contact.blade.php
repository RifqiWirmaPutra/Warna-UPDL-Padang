@extends('layouts.dashboard.header')
@section('content')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{route('wlcm')}}">Beranda</a></li>
                <li>Hubungi kami</li>
            </ol>
            <h2>Hubungi Kami</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->

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
                        <h3>Telepon Kami</h3>
                        <p>(+62) 821-7278-5770</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.555894542064!2d100.28036837412891!3d-0.6571533352603726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4de72a9c9b1b7%3A0x2e2e53b762bdcac0!2sPLN%20UPDL%20Padang!5e0!3m2!1sid!2sid!4v1694489525458!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6">
                    <!-- class="php-email-form" -->
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
    </section>
</main>
@endsection
