@extends('layouts.kwt.hotel.hotel')
@section('content')

<style>
    /* ini tampilan tulisan modal */
    .article-text {
        font-size: 16px; /* Sesuaikan ukuran font */
        line-height: 1.6; /* Sesuaikan tinggi baris */
        text-align: justify;
    }
    .article-text img {
        max-width: 100%;
        height: auto;
    }
    /* ini untuk tampilan tombol tutup modal */
    .modal-footer button.btn-secondary { 
        background-color: black; /* Warna latar belakang awal */
        color: white; /* Warna teks awal */
    }
    .modal-footer button.btn-secondary:hover {
        background-color: white; /* Warna latar belakang saat dihover */
        color: black; /* Warna teks saat dihover */
    }
</style>

<div class="banner">
    <div id="captioned-gallery" class="hotel-bg">
        <div class="hotel-image"></div>
        <div class="container text-wrap">
            <h1 style="font-size: 36px; color: #fff;  margin-bottom: 10px; margin-top: 8rem; font-weight: 900">Ayo Cari Aroma dan Kenikmatan Bersama Kami!</h1>
            <p style="font-size: 14px">Temukan tempat peristirahatan terbaik disini.</p>
            <a href="#menu-cafe" class="btn-gradient cyan small">Cek Selengkapnya &nbsp;<i class="bi bi-search"></i></a>
        </div>
    </div>
    <div class=" cafe-menu mt-4 mb-0" id="menu-cafe">
        <div class="container-fluid"> 
            <div class="row text-center">
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('kuliner/images/DATA_HOTEL/zhmpremire (2).jpg') }}" alt="zhmpremire" class="img-fluid">
                            <h6 class="card-title">The ZHM Premiere Padang</h6>
                            {{-- <p>Jl. Padang - Bengkulu, Tlk. Bayur, Kec. Padang Sel., Kota Padang, Sumatera Barat</p> --}}
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalzhmpremire" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('kuliner/images/DATA_HOTEL/mercure (4).jpg') }}" alt="mercure" class="img-fluid">
                            <h6 class="card-title">Mercure Padang</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalmercure" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('kuliner/images/DATA_HOTEL/rockyplaza (2).jpg') }}" alt="rockyplaza" class="img-fluid">
                            <h6 class="card-title">Rocky Plaza Hotel Padang</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalrockyplaza" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('kuliner/images/DATA_HOTEL/pangeran (4).jpg') }}" alt="pangeran" class="img-fluid">
                            <h6 class="card-title">Hotel Pangeran Beach Padang</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalpangeran" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('kuliner/images/DATA_HOTEL/basko (2).jpg') }}" alt="basko" class="img-fluid">
                            <h6 class="card-title">Grand Basko Hotel</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalbasko" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('kuliner/images/DATA_HOTEL/axana.jpg') }}" alt="axana" class="img-fluid">
                            <h6 class="card-title">The Axana Hotel</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalaxana" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-4">
                  <div class="card">
                      <div class="card-body">
                          <img src="{{ asset('kuliner/images/DATA_HOTEL/daimahotel.jpg') }}" alt="daimahotel" class="img-fluid">
                          <h6 class="card-title">Daima Hotel Padang</h6>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#modaldaimahotel" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                      </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('kuliner/images/DATA_HOTEL/unphotel.jpg') }}" alt="unphotel" class="img-fluid">
                            <h6 class="card-title">Unp Hotel & Convention</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalunphotel" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('kuliner/images/DATA_HOTEL/ibisthotel (4).jpg') }}" alt="ibis" class="img-fluid">
                            <h6 class="card-title">Hotel Ibis Padang</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalibisthotel" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('kuliner/images/DATA_HOTEL/grandsari.jpg') }}" alt="grandsari" class="img-fluid">
                            <h6 class="card-title">Grand Sari Hotel</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalgrandsari" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('kuliner/images/DATA_HOTEL/favehotel.jpg') }}" alt="favehotel" class="img-fluid">
                            <h6 class="card-title">Favehotel Olo Padang</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalfavehotel" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('kuliner/images/DATA_HOTEL/kawana.jpg') }}" alt="kawana" class="img-fluid">
                            <h6 class="card-title">Kawana Hotel</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalkawana" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('kuliner/images/DATA_HOTEL/whizprime.jpg') }}" alt="iiwhizprimebumi" class="img-fluid">
                            <h6 class="card-title">Whiz Prime Hotel Khatib Sulaiman Padang</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalwhizprime" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('kuliner/images/DATA_HOTEL/kyriadhotel (4).jpg') }}" alt="kyriadhotel" class="img-fluid">
                            <h6 class="card-title">Kyriad Bumiminang Padang</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalkyriadhotel" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hotel">
        <div class="container">
            <div class="slide-hotel" style="background-image: url('{{ asset('kuliner/images/DATA_HOTEL/ibisthotel (4).jpg') }}')">
                <h3>IBIS HOTEL</h3>
            </div>

            <div class="slide-hotel" style="background-image: url('{{ asset('kuliner/images/DATA_HOTEL/kawana (2).jpg') }}')">
                <h3>KAWANA HOTEL</h3>
            </div>

            <div class="slide-hotel active-hotel" style="background-image: url('{{ asset('kuliner/images/DATA_HOTEL/basko (2).jpg') }}')">
                <h3>BASKO HOTEL</h3>
            </div>

            <div class="slide-hotel" style="background-image: url('{{ asset('kuliner/images/DATA_HOTEL/mercure (4).jpg') }}')">
                <h3>MERCURE HOTEL</h3>
            </div>

            <div class="slide-hotel" style="background-image: url('{{ asset('kuliner/images/DATA_HOTEL/pangeran (3).jpg') }}')">
                <h3>PANGERAN HOTEL</h3>
            </div>

            <div class="slide-hotel" style="background-image: url('{{ asset('kuliner/images/DATA_HOTEL/daimahotel (4).jpg') }}')">
                <h3>DAIMA HOTEL</h3>
            </div>

            <div class="slide-hotel" style="background-image: url('{{ asset('kuliner/images/DATA_HOTEL/santikahotel.jpg') }}')">
                <h3>SANTIKA HOTEL</h3>
            </div>

            <div class="slide-hotel" style="background-image: url('{{ asset('kuliner/images/DATA_HOTEL/unphotel (3).jpg') }}')">
                <h3>UNP HOTEL</h3>
            </div>

            <div class="slide-hotel" style="background-image: url('{{ asset('kuliner/images/DATA_HOTEL/axana (3).jpg') }}')">
                <h3>AXANA HOTEL</h3>
            </div>

            <div class="slide-hotel" style="background-image: url('{{ asset('kuliner/images/DATA_HOTEL/grandsari (2).jpg') }}')">
                <h3>GRAND SARI HOTEL</h3>
            </div>

            <div class="slide-hotel" style="background-image: url('{{ asset('kuliner/images/DATA_HOTEL/santikahotel (3).jpg') }}')">
                <h3>SANTIKA HOTEL</h3>
            </div>

            <div class="slide-hotel" style="background-image: url('{{ asset('kuliner/images/DATA_HOTEL/kriyadhotel.jpg') }}')">
                <h3>KRIYAD HOTEL</h3>
            </div>

            <div class="slide-hotel" style="background-image: url('{{ asset('kuliner/images/DATA_HOTEL/kawana (4).jpg') }}')">
                <h3>Kawana HOTEL</h3>
            </div>
        </div>
    </div>
</div>

<!-- Modal zhmpremire -->
<div class="modal fade" id="modalzhmpremire" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Menikmati Istrirahat dengan Nyaman</b></h5>\
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselzhmpremire" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/zhmpremire.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/zhmpremire (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/zhmpremire (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/zhmpremire (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselzhmpremire" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselzhmpremire" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <p><h2><b> The ZHM Premiere Padang </b></h2></p>
                        <p class="article-text">
                            Berjarak kurang dari 1 km dari Masjid Raya Ganting, hotel kontemporer yang memesona ini berjarak 10 km dari Pantai Air Manis dan 24 km dari Bandara Internasional Minangkabau.
                            Kamar-kamar modern cantik dengan lantai kayu dan dilengkapi Wi-Fi gratis, TV layar datar, dan fasilitas pembuat teh dan kopi, serta brankas dan minibar. Suite dilengkapi bak mandi, ruang keluarga/ruang makan, dan meja.
                            Fasilitas gratis mencakup parkir dan sarapan prasmanan yang disajikan di restoran penuh gaya. Ada juga pusat kebugaran, spa, dan bar mewah, serta musala dan ruang konferensi.
                        </p>
                    </div>
                </div>
                <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                <!-- Peta Statis -->
                <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.675930368922!2d100.3389534!3d-0.48406319999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd52511ad703429%3A0x3ff84aeffea561b!2sXakapa!5e0!3m2!1sid!2sid!4v1701306751420!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal mercure -->
<div class="modal fade" id="modalmercure" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Cafetaria Buat Enjoy??</b></h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselmercure" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/mercure.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/mercure (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/mercure (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/mercure (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselmercure" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselmercure" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <p><h2><b> Mercure Padang </b></h2></p>
                        <p class="article-text">
                            Di gedung ultramodern dengan panorama sungai dan gunung, hotel kontemporer ini berjarak 3 menit berjalan kaki dari Samudra Hindia, 3 km dari Padang Convention Center, dan 4 km dari stasiun kereta Padang.
                            Memiliki dekorasi trendi dan lantai kayu, kamar mewah dilengkapi Wi-Fi gratis, sofa, dan meja ergonomis. Semuanya menawarkan TV layar datar, bar mini, dan panorama gunung atau kolam renang. Suite memiliki ruang keluarga. Room service tersedia 24 jam.
                            Ada restoran sederhana, serta bar di lobi dan di samping kolam renang outdoor. Fasilitas lainnya meliputi gym, business center, dan ruang acara yang terdiri dari sebuah ruang serbaguna dan 5 ruang pertemuan. Parkir termasuk.
                        </p>
                    </div>
                </div>
                <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                <!-- Peta Statis -->
                <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2860566789764!2d100.3527424!3d-0.9358996999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b92d0923fdcb%3A0x8349d6b0424d4685!2sHotel%20Mercure%20Padang!5e0!3m2!1sid!2sid!4v1701419842343!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal rockyplaza -->
<div class="modal fade" id="modalrockyplaza" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Cafetaria Buat Enjoy??</b></h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselrockyplaza" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/rockyplaza.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                </div><div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/rockyplaza (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/rockyplaza (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/rockyplaza (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselrockyplaza" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselrockyplaza" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p><h2><b> Rocky Plaza Hotel Padang</b></h2></p>
                        <p class="article-text">
                            Hotel mewah yang berada di jalan yang ramai ini berjarak 2 km dari Pantai Padang, 3 km dari pameran sejarah budaya di Museum Adityawarman, dan 23 km dari Bandara Internasional Minangkabau.
                            Kamar yang didekorasi dengan nuansa hangat menawarkan Wi-Fi gratis, TV layar datar, dan brankas. Kamar di kelas yang lebih tinggi memiliki lantai kayu. 
                            Terdapat restoran bernuansa cerah dengan tangga mewah, serta bar modern dengan lounge. Fasilitas tambahan meliputi kolam renang outdoor, ruang pertemuan, dan ruang serbaguna.
                        </p>
                    </div>
                </div>
                <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                <!-- Peta Statis -->
                <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.2734843993817!2d100.3567178!3d-0.9468886!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b937da157d93%3A0x217a9e523e61287a!2sRocky%20Plaza%20Hotel%20Padang!5e0!3m2!1sid!2sid!4v1701420001938!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal pangeran -->
<div class="modal fade" id="modalpangeran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Cafetaria Buat Enjoy??</b></h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselpangeran" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/pangeran.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/pangeran (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/pangeran (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/pangeran (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselpangeran" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselpangeran" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                             </div>
                         </div>
                         <div class="col-md-6">
                            <p><h2><b>Hotel Pangeran Beach Padang</b></h2></p>
                            <p class="article-text">
                                Hotel kasual yang berada di tepi pantai ini berjarak 4 km dari Masjid Al-Irsyad dan pameran budaya di Museum Adityawarman. Hotel ini juga berjarak 14 km dari patung legendaris Malin Kundang di Pantai Air Manis.
                                Kamar sederhana dilengkapi dengan Wi-Fi gratis dan TV layar datar; beberapa di antaranya memiliki pemandangan laut. Kamar suite yang dilengkapi dengan furnitur bernuansa hangat memiliki area tempat duduk terpisah.
                                Fasilitas hotel ini meliputi restoran santai, kolam renang outdoor, pusat kebugaran, dan lounge. Juga tersedia 2 ruang konvensi.
                            </p>
                        </div>
                    </div>
                    <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                <!-- Peta Statis -->
                <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.2992447214197!2d100.3484554!3d-0.9242322!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8d4a5ce7ec7%3A0xff8eb167ad7224e9!2sHotel%20Pangeran%20Beach!5e0!3m2!1sid!2sid!4v1701420110032!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal basko -->
<div class="modal fade" id="modalbasko" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Cafetaria Buat Enjoy??</b></h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselbasko" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/basko.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/basko (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/basko (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/basko (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselbasko" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#carouselbasko" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p><h2><b>Grand Basko Hotel</b></h2></p>
                        <p class="article-text">
                            Hotel modern yang terletak 16 km dari Pantai Air Manis ini berjarak 7 km dari Masjid Al-Irsyad kubik dan 7 km dari Museum Adityawarman.
                            Kamar berdekorasi hangat menawarkan Wi-Fi gratis, kamar mandi dalam, dan brankas. Suite memiliki ruang keluarga; sebagian dengan dapur. Room service tersedia 24 jam.
                            Fasilitas meliputi restoran mewah, bar, kolam renang outdoor, dan kolam renang anak-anak. Ada juga kedai kopi, area lounge/TV bersama, spa, ruang kebugaran, dan bak mandi air panas.
                        </p>
                    </div>
                </div>
                <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                <!-- Peta Statis -->
                <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.324271794384!2d100.35079800000001!3d-0.9016757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8b2c1d97673%3A0xad965d099441f5b9!2sGrand%20Basko%20Hotel!5e0!3m2!1sid!2sid!4v1701420171255!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal axana -->
<div class="modal fade" id="modalaxana" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Cafetaria Buat Enjoy??</b></h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselaxana" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/axana.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/axana (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/axana (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/axana (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselaxana" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselaxana" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p><h2><b>The Axana Hotel</b></h2></p>
                        <p class="article-text">
                            Di bulevar yang rindang, hotel kelas atas yang terinspirasi kolonial Belanda ini berjarak 2 km dari Masjid Agung Ganting bersejarah dan 25 km dari Bandara Internasional Minangkabau.
                            Kamar yang luas memiliki nuansa mewah, furnitur sederhana, dan balkon atau teras. Semua dilengkapi TV layar datar, minibar, serta alat pembuat teh dan kopi. Kamar di kelas yang lebih tinggi menawarkan panorama kota. Suite memiliki ruang keluarga terpisah, sedangkan suite di kelas yang lebih tinggi memiliki kamar mandi marmer dan ruang pertemuan. Akses Wi-Fi dan room service 24 jam tersedia.
                            Sarapan tersedia. Ada restoran yang terang dengan bar, serta kolam renang rooftop dan gym. Business center dan ruang konferensi ditawarkan.</p>
                        </div>
                    </div>
                    <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                <!-- Peta Statis -->
                <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2648031233693!2d100.3591407!3d-0.9544026999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b94f09f55e93%3A0xea0edd6d6b094c0c!2sThe%20Axana%20Hotel!5e0!3m2!1sid!2sid!4v1701420278326!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!--Modal daimahotel -->
<div class="modal fade" id="modaldaimahotel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Cafetaria Buat Enjoy??</b></h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouseldaimahotel" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/daimahotel.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/daimahotel (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/daimahotel (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/daimahotel (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouseldaimahotel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouseldaimahotel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <p><h2><b>Daima Hotel Padang</b></h2></p>
                        <p class="article-text">
                        Hotel santai yang terletak di jalan perumahan di pusat kota ini berjarak 2 km dari pusat petualangan Taman Budaya dan Masjid Raya Ganting, serta 9 km dari pantai Pantai Air Manis yang ramai.
                        Kamar berdekorasi nuansa hangat dilengkapi dengan Wi-Fi gratis, TV layar datar, dan kulkas mini, serta alat pembuat teh dan kopi. Semua kamar memiliki area duduk. Kamar keluarga berkapasitas hingga 4 tamu. Room service tersedia 24 jam.
                        Terdapat restoran simpel dan lounge yang menampilkan musik live. Fasilitas lainnya meliputi kolam renang outdoor, spa, dan pusat kebugaran. Sarapan dan tempat parkir ditawarkan.
                    </p>
                </div>
            </div>
            <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                <!-- Peta Statis -->
                <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.27687949223!2d100.36192349999999!3d-0.9439337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b939c66dcdeb%3A0xc1922dbeeaacce90!2sDaima%20Hotel%20Padang!5e0!3m2!1sid!2sid!4v1701420357517!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!--Modal unphotel -->
<div class="modal fade" id="modalunphotel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Cafetaria Buat Enjoy??</b></h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselunphotel" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/unphotel.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/unphotel (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/unphotel (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/unphotel (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselunphotel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselunphotel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p><h2><b>Unp Hotel & Convention</b></h2></p>
                        <p class="article-text">
                            Di bulevar yang rindang, hotel kelas atas yang terinspirasi kolonial Belanda ini berjarak 2 km dari Masjid Agung Ganting bersejarah dan 25 km dari Bandara Internasional Minangkabau.
                            Kamar yang luas memiliki nuansa mewah, furnitur sederhana, dan balkon atau teras. Semua dilengkapi TV layar datar, minibar, serta alat pembuat teh dan kopi. Kamar di kelas yang lebih tinggi menawarkan panorama kota. Suite memiliki ruang keluarga terpisah, sedangkan suite di kelas yang lebih tinggi memiliki kamar mandi marmer dan ruang pertemuan. Akses Wi-Fi dan room service 24 jam tersedia.
                            Sarapan tersedia. Ada restoran yang terang dengan bar, serta kolam renang rooftop dan gym. Business center dan ruang konferensi ditawarkan.</p>
                        </div>
                    </div>
                    <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>


                <!-- Peta Statis -->
                <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.326889307177!2d100.3504387!3d-0.8992838999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b9b99ecb30d3%3A0x3c7db301ca9ad219!2sUNP%20Hotel%20%26%20Convention%20Center!5e0!3m2!1sid!2sid!4v1701420397044!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!--Modal ibisthotel -->
<div class="modal fade" id="modalibisthotel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Cafetaria Buat Enjoy??</b></h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselibisthotel" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/ibisthotel.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/ibisthotel (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/ibisthotel (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/ibisthotel (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselibisthotel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselibisthotel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p><h2><b>Hotel Ibis Padang</b></h2></p>
                        <p class="article-text">
                            Hotel modern di bangunan bergaya industri yang modern ini berjarak 3,5 km dari Museum Adityawarman, 3,9 km dari Masjid Raya Ganting, dan 13 km dari Pantai Air Manis.
                            Kamar sederhana & kontemporer dengan panorama gunung dan/atau laut dilengkapi Wi-Fi gratis, TV layar datar, alat pembuat teh dan kopi, serta brankas dan TV. Kamar di kelas yang lebih tinggi memililki ruang keluarga terpisah dan TV yang lebih besar. Room service tersedia.
                            Ada restoran di lantai atas yang buka 24 jam dengan panorama laut dan gunung. Fasilitas tambahan meliputi kolam renang, business center, bar, layanan spa, dan 3 ruang pertemuan. Tempat parkir tersedia.
                        </p>
                    </div>
                </div>
                <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>


                <!-- Peta Statis -->
                <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.293222887932!2d100.3630845!3d-0.9295779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b92796e06c9b%3A0x542d9a241285a63f!2sHotel%20ibis%20Padang!5e0!3m2!1sid!2sid!4v1701420437112!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


<!--Modal grandsari -->
<div class="modal fade" id="modalgrandsari" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Cafetaria Buat Enjoy??</b></h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselgrandsari" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/grandsari.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/grandsari (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                </div>
                                <div class="carousel-item"><img src="{{ asset('kuliner/images/DATA_HOTEL/grandsari (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/grandsari (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselgrandsari" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselgrandsari" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p><h2><b>Grand Sari Hotel</b></h2></p>
                        <p class="article-text">
                            Hotel informal di jalanan ramai dengan banyak pompa bensin dan restoran ini berjarak 5 menit berjalan kaki dari halte bus terdekat, 2 km dari Museum Adityawarman, dan 8 km dari Pantai Air Manis yang populer.
                            Kamar-kamar simpel penuh warna dilengkapi Wi-Fi gratis, TV layar datar, serta alat pembuat teh dan kopi. Kamar-kamar di kelas lebih tinggi menawarkan kulkas mini, dan suite memiliki area duduk.
                            Fasilitas meliputi restoran kasual dan musala, plus kolam renang outdoor semarak yang dilengkapi air terjun dan seluncuran air anak-anak. Ada juga ruang konferensi. Tersedia pijat dan tempat parkir.
                        </p>
                    </div>
                </div>
                <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                <!-- Peta Statis -->
                <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.675930368922!2d100.3389534!3d-0.48406319999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd52511ad703429%3A0x3ff84aeffea561b!2sXakapa!5e0!3m2!1sid!2sid!4v1701306751420!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!--Modal favehotel -->
<div class="modal fade" id="modalfavehotel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Cafetaria Buat Enjoy??</b></h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselfavehotel" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/favehotel.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/favehotel (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/favehotel (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/favehotel (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselfavehotel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselfavehotel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p><h2><b>Favehotel Olo Padang</b></h2></p>
                        <p class="article-text">
                            Hotel santai yang menawarkan pemandangan gunung ini berjarak 2 km dari Monumen Merpati Perdamaian yang terbuat dari metal dan bergaya origami, serta tempat berselancar di Pantai Padang di pesisir Samudra Hindia. Hotel ini juga berjarak 3 km dari Masjid Al-Irsyad yang berbentuk kotak.
                            Kamar santai dilengkapi dengan furnitur kayu, Wi-Fi gratis, dan TV layar datar. Kamar ini juga memiliki alat pembuat teh dan kopi, minibar, serta pemandangan laut, gunung, atau kota. Kamar suite memiliki ruang keluarga.
                            Sarapan gratis. Terdapat juga restoran internasional dan lounge di lobi. Ruang pertemuan tersedia.
                        </p>
                    </div>
                </div>
                <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                <!-- Peta Statis -->
                <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.675930368922!2d100.3389534!3d-0.48406319999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd52511ad703429%3A0x3ff84aeffea561b!2sXakapa!5e0!3m2!1sid!2sid!4v1701306751420!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!--Modal kawana -->
<div class="modal fade" id="modalkawana" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Cafetaria Buat Enjoy??</b></h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselkawana" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/kawana.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/kawana (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/kawana (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/kawana (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselkawana" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselkawana" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p><h2><b>Kawana Hotel</b></h2></p>
                        <p class="article-text">
                            Hotel santai berfasad indah ini berjarak 3 km dari Pantai Padang dan 4 km dari Masjid Raya Sumatera Barat. Hotel ini berjarak 24 km dari Bandara Internasional Minangkabau.
                            Kamar simpel memiliki Wi-Fi, TV layar datar, minibar, serta alat pembuat teh dan kopi. Beberapa kamar menyediakan area duduk. Room service tersedia 24/7.
                            Fasilitas terdiri dari restoran, kolam renang outdoor, lounge di lobi, parkir valet, dan layanan antar-jemput bandara.
                        </p>
                    </div>
                </div>
                <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                <!-- Peta Statis -->
                <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.675930368922!2d100.3389534!3d-0.48406319999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd52511ad703429%3A0x3ff84aeffea561b!2sXakapa!5e0!3m2!1sid!2sid!4v1701306751420!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


<!--Modal whizprime -->
<div class="modal fade" id="modalwhizprime" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Cafetaria Buat Enjoy??</b></h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselwhizprime" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/whizprime.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/whizprime (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/whizprime (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/whizprime (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselwhizprime" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselwhizprime" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p><h2><b>Whiz Prime Hotel</b></h2></p>
                        <p class="article-text">
                            Berada di jalan yang ramai dengan pertokoan dan restoran, hotel kontemporer ini berjarak 18 menit berjalan kaki dari Masjid Raya Sumatra Barat, dan 5 km baik dari Pantai Padang maupun Stasiun Padang.
                            Hotel sederhana dengan jendela setinggi langit-langit dan panorama kota dilengkapi Wi-Fi gratis, TV layar datar, serta alat pembuat teh dan kopi. Fasilitas meliputi restoran luas & trendi serta area lounge di atap.
                        </p>
                    </div>
                </div>
                <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                <!-- Peta Statis -->
                <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.675930368922!2d100.3389534!3d-0.48406319999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd52511ad703429%3A0x3ff84aeffea561b!2sXakapa!5e0!3m2!1sid!2sid!4v1701306751420!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!--Modal kyriadhotel -->
<div class="modal fade" id="modalkyriadhotel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Cafetaria Buat Enjoy??</b></h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselkyriadhotel" class="carousel slide mb-4" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/kyriadhotel.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/kyriadhotel (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/kyriadhotel (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('kuliner/images/DATA_HOTEL/kyriadhotel (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselkyriadhotel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselkyriadhotel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p><h2><b>Kyriad Bumiminang</b></h2></p>
                        <p class="article-text">
                            Hotel santai dengan atap menjulang di kedua ujungnya ini berjarak 5 menit berjalan kaki dari Museum Adityawarman, 2 km dari Pantai Padang di Samudra Hindia, dan 16 menit berjalan kaki dari Jembatan Siti Nurbaya yang ramai.
                            Kamar sederhana yang dilengkapi dengan panel ukiran menawarkan Wi-Fi gratis, TV layar datar, kulkas mini, serta fasilitas untuk membuat teh dan kopi. Kamar suite memiliki ruang keluarga.
                            Fasilitas hotel ini meliputi restoran dan lounge, serta kolam renang outdoor dan 2 bar. Terdapat juga spa dan ruang serbaguna. Sarapan prasmanan dan tempat parkir tersedia.
                        </p>
                    </div>
                </div>
                <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                <!-- Peta Statis -->
                <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.675930368922!2d100.3389534!3d-0.48406319999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd52511ad703429%3A0x3ff84aeffea561b!2sXakapa!5e0!3m2!1sid!2sid!4v1701306751420!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let slides = document.querySelectorAll('.slide-hotel');

         slides.forEach((slide) => {
            slide.addEventListener('click', () => {
                clearActiveClasses();
                slide.classList.add('active-hotel');
            });
        });

        function clearActiveClasses() {
            slides.forEach((slide) => {
                slide.classList.remove('active-hotel');
            });
        }
    });
</script>
@endsection