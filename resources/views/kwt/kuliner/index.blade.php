@extends('layouts.kwt.kuliner.kuliner')
@section('content')

    <style>
        .custom-margin {
            margin-top: 50px; /* Sesuaikan dengan jarak yang diinginkan */
        }
    </style>

    <style>
        @keyframes fadeInOut {
            0% { opacity: 0; }
            50% { opacity: 1; }
            100% { opacity: 0; }
        }

        .fade-in-out {
            animation: fadeInOut 4s infinite; /* Sesuaikan durasi animasi sesuai keinginan */
        }

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

<section id="hero">
    <div class="container mt-0">
        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-md-5">
                    <h2>TEMUKAN SELERAMU</h2>
                    <h5>DIRUMAH MAKAN PADANG</h5>
                </div>
                <div class="col-md-7">
                  <img src="{{ asset('kuliner/images/kuliner/6.png')}}" class="img-fluid" alt="kuliner">
                </div>
            </div>
        </div>
    </div>
</section>

<div class=" kuliner-menu">
    <div class="container text-center pt-5 pb-3">
        <h5>MAKANAN KHAS PADANG</h5>
    </div>
    <div class="container-fluid">
        <div class="row text-center">

            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/lontong-gulai.png') }}" alt="lontong gulai" class="img-fluid">
                        <h6 class="card-title">LONTONG GULAI</h6>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalLontongGulai" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/dendeng-balado.png') }}" alt="dendeng balado" class="img-fluid">
                        <h6 class="card-title">DENDENG BALADO</h6>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalDendengBalado" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/itiak-balado.png') }}" alt="itiak balado" class="img-fluid">
                        <h6 class="card-title">ITIAK LADO HIJAU</h6>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalItiakLadoHijau" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/6.png') }}" alt="rendang" class="img-fluid">
                        <h6 class="card-title">RENDANG</h6>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalRendang" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/ikan-pedas.png') }}" alt="ikan asam pedas" class="img-fluid">
                        <h6 class="card-title">IKAN ASAM PEDAS</h6>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalIkanAsam" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/sate-padang.png') }}" alt="sate padang" class="img-fluid">
                        <h6 class="card-title">SATE PADANG</h6>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalSatePadang" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr style="border-top: 2px solid black;"></hr>

<div class=" kuliner-menu">
    <div class="container text-center pt-5 pb-3">
        <h3><marquee behavior="scroll" direction="left">AYO BURUAN KUNJUNGI!</marquee></h3>
        <h1 class="fade-in-out">DAFTAR RUMAH MAKAN TERBAIK SEKITAR UPDL PADANG</h1>
    </div>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-sm-2 mb-3">
                <div class="#">
                    <div class="#">
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/awal-lamunombak.jpeg') }}" alt="Lamun Ombak" class="img-fluid"><p>
                        <h6 class="card-title"><b>LAMUN OMBAK</b></h6>
                        <p style="text-align: left;">Jl. Khatib Sulaiman No.99, Ulak Karang Sel., Kec. Padang Utara, Kota Padang</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalLamunOmbak" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/awal-banun.jpg') }}" alt="Upiak Banun" class="img-fluid"><p>
                        <h6 class="card-title"><b>RM UPIAK BANUN</b></h6>
                        <p class="card-text">JL. Kayu Tanam, Kec. 2 X 11 Kayu Tanam, Kabupaten Padang Pariaman</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalUpiakBanun" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/awal-fuja.jpg') }}" alt="RM Fuja" class="img-fluid"><p>
                        <h6 class="card-title"><b>RM FUJA</b></h6>
                        <p class="card-text">Jl. Samudera No.24, Purus, Kec. Padang Barat., Kota Padang</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalFuja" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/awal-piaman.jpg') }}" alt="Pauh Piaman" class="img-fluid"><p>
                        <h6 class="card-title"><b>RM PAUH PIAMAN</b></h6>
                        <p class="card-text"> Jl. Khatib Sulaiman No.63, Lolong Belanti, Kec. Padang Utara, Kota Padang</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalPauhPiaman" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3">
                <div class="#">
                    <div class="#">
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3 custom-margin">
                <div class="#">
                    <div class="#">
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3 custom-margin">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/awal-bungsu.jpg') }}" alt="SI Bungsu" class="img-fluid"><p>
                        <h6 class="card-title"><b>PONDOK NASI SI BUNGSU</b></h6>
                        <p class="card-text">Jl. Ulakan, Kec. Ulakan Tapakis, Kabupaten Padang Pariaman</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalSibungsu" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3 custom-margin">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/awal-naimah.jpg') }}" alt="Naimah" class="img-fluid"><p>
                        <h6 class="card-title"><b>KATUPEK GULAI TUNJANG NAIMAH</b></h6>
                        <p class="card-text">JL. Pariaman-Sicincin, Pasar Balai Baru Balah Aia, Kec VII Koto Sungai Sarik, Balah Aia, VII Koto Sungai Sariak, Kabupaten Padang Pariaman</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalNaimah" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3 custom-margin">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/awal-malabar.jpg') }}" alt="Malabar" class="img-fluid"><p>
                        <h6 class="card-title"><b>MARTABAK MALABAR ARHAM</b></h6>
                        <p class="card-text">Jl. Thamrin No.1, Belakang Pondok, Padang Selatan, Kota Padang</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalArham" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3 custom-margin">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/awal-devi.jpg') }}" alt="Devi" class="img-fluid"><p>
                        <h6 class="card-title"><b>PD MAKAN DEVI SPECIAL SEAFOOD</b></h6>
                        <p class="card-text">Jl. 4 Tabing, Koto Tangah, Parupuk Tabing, Koto Tangah, Padang City</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalDevi" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3">
                <div class="#">
                    <div class="#">
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3 custom-margin">
                <div class="#">
                    <div class="#">
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3 custom-margin">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/awal-apuak.jpg') }}" alt="Apuak" class="img-fluid"><p>
                        <h6 class="card-title"><b>RM MAK APUAK</b></h6>
                        <p class="card-text">Jl. Pasie Nan Tigo, Kec. Koto Tangah, Kota Padang</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalMakApuak" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3 custom-margin">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/awal-appolo.jpg') }}" alt="Apollo" class="img-fluid"><p>
                        <h6 class="card-title"><b>APOLLO SEAFOOD</b></h6>
                        <p class="card-text">Jl. Hos. Cokroaminoto No.36-A, Kp. Pd., Kec. Padang Barat., Kota Padang</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalApolloSefood" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3 custom-margin">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/awal-djoni.jpg') }}" alt="Djoni/Kun" class="img-fluid"><p>
                        <h6 class="card-title"><b>IKAN BAKAR DJONI/KUN</b></h6>
                        <p class="card-text">Jl. Pulau Air No 1AKel, Kp. Pd., Kec. Padang Barat., Kota Padang</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalDjonikun" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
           
            <div class="col-sm-2 mb-3">
                <div class="#">
                    <div class="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Modal Lontong Gulai -->
    <div class="modal fade" id="modalLontongGulai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>ANEKA MASAKAN PADANG</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="{{ asset('kuliner/images/kuliner/lontong-gulai.png') }}" alt="Lontong Gulai" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b>Lontong Gulai</b></h2>
                            </p>
                            <p class="article-text">
                                Lontong ini identik dengan kuah santan yang memiliki bumbu kental khas 
                                masakan Minang. Kuah santan yang kaya bumbu rempah sudah dikenal sebagai 
                                salah satu cara memasak ala masakan Minang. Beberapa lontong gulai ini 
                                antara lain; lontong gulai paku, lontong gulai tauco, lontong gulai cubadak. 
                                Makanan ini disajikan dengan telur bulat, mie goreng dan yang khas adalah 
                                lontong ini disajikan dengan kerupuk merah.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Dendeng Balado -->
    <div class="modal fade" id="modalDendengBalado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>ANEKA MASAKAN PADANG</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="{{ asset('kuliner/images/kuliner/dendeng-balado.png') }}" alt="Dendeng Balado" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b>"Dendeng Balado"</b></h2>
                            </p>
                            <p class="article-text">
                            Dendeng balado adalah hidangan daging sapi tipis dan lebar yang direbus, dijemur, 
                            dan digoreng hingga kering. Sambal dendeng balado terbuat dari cabai merah, bawang merah, 
                            dan garam, yang ditumis hingga menghasilkan minyak berwarna kemerahan. Dendeng biasanya 
                            dikeringkan dengan metode pengawetan, kemudian dipukul-pukul hingga pipih agar bumbu 
                            dapat meresap ke dalam daging.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal Itiak Lado Hijau -->
    <div class="modal fade" id="modalItiakLadoHijau" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>ANEKA MASAKAN PADANG</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="{{ asset('kuliner/images/kuliner/itiak-balado.png') }}" alt="Itiak Lado Hijau" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b>"Itiak Lado Hijau"</b></h2>
                            </p>
                            <p class="article-text">
                            Itiak Lado Hijau/Mudo merupakan masakan olahan daging itiak (bebek) dan bumbu-bumbu 
                            khusus serta dicampur dengan lado mudo (cabe hijau keriting) yang telah digiling. 
                            Itiak lado mudo dikenal di beberapa daerah di Bukittinggi seperti di Koto Gadang dan 
                            Sianok, sedangkan untuk daerah Ampek Angkek itiak lado mudo dikenal dengan nama itiak.
                            lado hijau.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Rendang -->
    <div class="modal fade" id="modalRendang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>ANEKA MASAKAN PADANG</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="{{ asset('kuliner/images/kuliner/6.png') }}" alt="Rendang" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b>"Rendang"</b></h2>
                            </p>
                            <p class="article-text">
                            Rendang adalah hidangan berbahan dasar daging yang dihasilkan dari proses memasak suhu 
                            rendah dalam waktu lama dengan menggunakan aneka rempah-rempah dan santan. Proses 
                            memasaknya memakan waktu berjam-jam (biasanya sekitar empat jam) hingga yang tinggal 
                            hanyalah potongan daging berwarna hitam pekat dan dedak. Dalam suhu ruangan, rendang 
                            dapat bertahan hingga berminggu-minggu. Rendang yang dimasak dalam waktu yang lebih 
                            singkat dan santannya belum mengering disebut kalio, berwarna cokelat terang keemasan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Ikan Asam Pedas -->
    <div class="modal fade" id="modalIkanAsam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>ANEKA MASAKAN PADANG</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="{{ asset('kuliner/images/kuliner/ikan-pedas.png') }}" alt="Ikan Pangek Asin" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b>"Ikan Asam Pedas"</b></h2>
                            </p>
                            <p class="article-text">
                            Hidangan ini merupakan varian dari gulai dengan bahan dasar utamanya adalah dari ikan. 
                            Ikan yang digunakan bisa ikan air laut maupun ikan air tawar, tetapi yang umum dipakai 
                            antara lain tongkol, tenggiri, kakap, dan ikan mas. Ciri khas yang menonjol dari hidangan 
                            ini adalah warna kuahnya yang kuning kental yang muncul karena penggunaan kunyit. 
                            Selain itu hidangan ini memiliki rasa yang kompleks mulai dari gurih, sedikit asam, 
                            sedikit asin, sedikit manis, dan pedas terdapat dalam hidangan ini.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Sate Padang -->
    <div class="modal fade" id="modalSatePadang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>ANEKA MASAKAN PADANG</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="{{ asset('kuliner/images/kuliner/sate-padang.png') }}" alt="Ikan Pangek Asin" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b>"Sate Padang"</b></h2>
                            </p>
                            <p class="article-text">
                            Ada tiga jenis varian sate di Sumatera Barat, yaitu sate padang, sate padang panjang dan sate pariaman.
                            Sate padang memakai bahan daging sapi, lidah, biji atau jeroan (jantung, usus, dan tetelan) dengan bumbu 
                            kuah kacang kental yang ditambah dengan cabai yang banyak sehingga rasanya pedas.
                            Sate padang panjang dibedakan dengan kuah satenya yang berwarna kuning. Sedangkan sate pariaman kuahnya berwarna .
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

   <!-- Modal Lamun Ombak -->
    <div class="modal fade" id="modalLamunOmbak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>RUMAH MAKAN</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselExample" class="carousel slide mb-4" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak2.jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak3.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak4.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b> Aneka Masakan Khas Minangkabau </b></h2>
                            </p>
                            <p class="article-text">
                            Rumah Makan <i>Lamun Ombak</i> menyajikan berbagai masakan Minangkabau yang lezat. Semua menu disajikan di meja makan sesuai dengan prosedur operasional biasa di restoran Padang lainnya.
                            <i>Gulai ikan kakap, ayam goreng, ayam pop, sop daging sapi, daging sapi asam pedas, udang kelong, ikan bakar, cah kangkung, cincang kembang, gado-gado atau lotek</i> adalah beberapa pilihan makanan yang luar biasa di restoran ini.
                            </p>
                        </div>
                    </div>

                    <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                    <!-- Peta Statis -->
                    <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.316673260722!2d100.34875926998347!3d-0.9085833332760996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b90b8d6e7df5%3A0xf20fc6f22d8f2fc4!2sRM%20Lamun%20Ombak!5e0!3m2!1sid!2sid!4v1701073480892!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Upiak Banun -->
    <div class="modal fade" id="modalUpiakBanun" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>RUMAH MAKAN</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselExampleBanun" class="carousel slide mb-4" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/upiakbanun.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/upiakbanun2.jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/upiakbanun4.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleBanun" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleBanun" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b> Aneka Masakan Khas Minangkabau </b></h2>
                            </p>
                            <p class="article-text">
                            Rumah Makan <i>Upiak Banun</i> berada di tempat bersih di pinggir jalan raya yang cocok untk istirahat sejenak. Memiliki makanan dengan jumlah porsi yang banyak.
                            <i>Es Cendol Durian, Es Pokat, Tempe Goreng Lambok, Tongseng Sapi dan Menu-menu lain</i> menjadi andalan yang sangat wenakk! tentunya.
                            </p>
                        </div>
                    </div>

                    <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                    <!-- Peta Statis -->
                    <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1021393.4870673486!2d100.22499848868809!3d0.004347619214163549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd521f49dd53703%3A0xe3b853bf63129410!2sPondok%20Makan%20Upiak%20Banun!5e0!3m2!1sid!2sid!4v1701157831388!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Fuja -->
    <div class="modal fade" id="modalFuja" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>RUMAH MAKAN</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselExampleFuja" class="carousel slide mb-4" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/fuja.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/fuja2.jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/fuja3.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFuja" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFuja" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b> Aneka Masakan Khas Minangkabau </b></h2>
                            </p>
                            <p class="article-text">
                            <i>Rumah Makan Fuja</i> merupakan salah satu restoran <i>Seafood</i> yang menjadi perburuan para wisatawan yang berlibur ke Padang. 
                            Untuk harga <i>seafood</i> nya cukup terjangkau kantong dan stabil, baik di hari-hari biasa maupun liburan.
                            Selain itu, menu rumah makan ini mempunyai banyak varian. Ada berbagai jenis ikan sampai udang yang rasanya sangat lezat. Bumbunya, terutama pada sambalnya mencerminkan cita rasa khas rumah makan ini.
                            Kalau ingin lebih menikmati makanan ini, datanglah pada <i>pukul 17.30</i> dan pilih tepat makan di dekat laut. Sehingga, anda bisa menyantap makanan, sambil menikmati indahnya laut di senja hari. Deburan ombak menjadi alunan musik alami yang menenangkan telinga.
                            </p>
                        </div>
                    </div>

                    <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                    <!-- Peta Statis -->
                    <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2797278027488!2d100.34912847404352!3d-0.941447535344526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b9336ceec2fd%3A0xf9bbd37781b90dc6!2sRumah%20Makan%20Fuja!5e0!3m2!1sid!2sid!4v1701157922947!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Pauh Piaman -->
    <div class="modal fade" id="modalPauhPiaman" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>RUMAH MAKAN</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselExamplePiaman" class="carousel slide mb-4" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/pauhpiaman.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/pauhpiaman2.jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/pauhpiaman3.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExamplePiaman" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExamplePiaman" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b> Aneka Masakan Khas Minangkabau </b></h2>
                            </p>
                            <p class="article-text">
                                Dengan slogannya <i>The Most Excellence Taste of "Gulai Ikan"</i>, Kedai Nasi Pauh menawarkan bagi Anda pecinta masakan gulai. Ikan yang digunakan di restoran ini merupakan 100 persen ikan laut yang dibawa langsung dari Padang, 
                                seperti ikan kerang, ikan kakap dan ikan kerapu. Berbeda dengan Rumah Makan Padang lainnya, disini tidak menyediakan <b>Rendang</b>
                                tapi ada daging kalio. <i>Daging kalio</i> merupakan salah satu proses memasak sebelum gulai menjadi rendang.
                                Berikut adalah 5 menu Kedai Nasi Pauh Piaman yang wajib Anda cicipi yaitu
                                Gulai Kepala Ikan, Ayam <i>Panas, Dendeng, Kalio Daging, dan juga ada Ikan pangek padeh.</i>
                                
                            </p>
                        </div>
                    </div>

                    <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                    <!-- Peta Statis -->
                    <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15957.241624746946!2d100.33973035541987!3d-0.9142413000000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8c9369e34bd%3A0x9d1fa4f29bf7e7a1!2sRM%20Pauh%20Piaman!5e0!3m2!1sid!2sid!4v1701158016516!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal PD Nasi Si Bungsu -->
    <div class="modal fade" id="modalSibungsu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>RUMAH MAKAN</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselExampleBungsu" class="carousel slide mb-4" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/pondoksibungsu.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/pondoksibungsu2.jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/pondoksibungsu3.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleBungsu" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleBungsu" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b>"Pondok Nasi Si Bungsu"</b></h2>
                            </p>
                            <p class="article-text">
                            Ada beberapa hal yang bisa anda dapatkan :
                            <ul>
                                <li>Menu Bervariasi</li>
                                <li>Tempat yang Indah</li>
                                <li>Tempat Makan Populer</li>
                            </ul>
                        </p>
                        </div>
                    </div>

                    <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                    <!-- Peta Statis -->
                    <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.5060179293896!2d100.19591356998056!3d-0.716888433642682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4e64437c79fe5%3A0x263e35fd557f3030!2sPondok%20Nasi%20si%20BUNGSU!5e0!3m2!1sid!2sid!4v1701158063207!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Naimah -->
    <div class="modal fade" id="modalNaimah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>RUMAH MAKAN</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselExampleNaimah" class="carousel slide mb-4" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/tunjangnaimah.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/tunjangnaimah2.jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/tunjangnaimah3.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleNaimah" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleNaimah" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b>"Katupek Naimah"</b></h2>
                            </p>
                            <p class="article-text">
                            Ada beberapa hal yang bisa anda dapatkan :
                            <ul>
                                <li>Menu Bervariasi</li>
                                <li>Tempat yang Indah</li>
                                <li>Tempat Makan Populer</li>
                            </ul>
                        </p>
                        </div>
                    </div>

                    <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                    <!-- Peta Statis -->
                    <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.5942493831835!2d100.19032486997915!3d-0.6072337338794254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4e1bb1bddbe1b%3A0xad9a9bbb2fd3d491!2sKatupek%20Gulai%20Tunjang%20Naimah!5e0!3m2!1sid!2sid!4v1701158232774!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Malabar Arham -->
    <div class="modal fade" id="modalArham" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>RUMAH MAKAN</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselExampleArham" class="carousel slide mb-4" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/malabararham2.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/malabararham2.jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/malabararham3.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleArham" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleArham" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b>"Martabak Malabar Arham"</b></h2>
                            </p>
                            <p class="article-text">
                            Ada beberapa hal yang bisa anda dapatkan :
                            <ul>
                                <li>Menu Bervariasi</li>
                                <li>Tempat yang Indah</li>
                                <li>Tempat Makan Populer</li>
                            </ul>
                        </p>
                        </div>
                    </div>

                    <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                    <!-- Peta Statis -->
                    <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31914.235597958927!2d100.33786379503199!3d-0.9416905288901694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b9451350a8db%3A0x9d1da1766c9695eb!2sMartabak%20Malabar%20Arham!5e0!3m2!1sid!2sid!4v1701158164782!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Devi Seafood -->
    <div class="modal fade" id="modalDevi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>RUMAH MAKAN</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselExampleDevi" class="carousel slide mb-4" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/devispesial.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/devispesial2.jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/devispesial3.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDevi" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDevi" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b>"Devi Special Seafood"</b></h2>
                            </p>
                            <p class="article-text">
                            Ada beberapa hal yang bisa anda dapatkan :
                            <ul>
                                <li>Menu Bervariasi</li>
                                <li>Tempat yang Indah</li>
                                <li>Tempat Makan Populer</li>
                            </ul>
                        </p>
                        </div>
                    </div>

                    <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                    <!-- Peta Statis -->
                    <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3446098626277!2d100.34251557404323!3d-0.8829210353163646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4c0adc260f415%3A0x9498b7706e67540c!2sPondok%20Makan%20Devi%20Special%20Seafood!5e0!3m2!1sid!2sid!4v1701158283100!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Mak Apuak -->
    <div class="modal fade" id="modalMakApuak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>RUMAH MAKAN</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselExampleApuak" class="carousel slide mb-4" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/makapuak.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/makapuak2.jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/makapuak3.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleApuak" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleApuak" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b>"RM Mak Apuak"</b></h2>
                            </p>
                            <p class="article-text">
                            Ada beberapa hal yang bisa anda dapatkan :
                            <ul>
                                <li>Menu Bervariasi</li>
                                <li>Tempat yang Indah</li>
                                <li>Tempat Makan Populer</li>
                            </ul>
                        </p>
                        </div>
                    </div>

                    <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                    <!-- Peta Statis -->
                    <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.385766499305!2d100.31695697404305!3d-0.8436942353006198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4c11084c6db2d%3A0xbb243b0a19de14d9!2sRM%20Mak%20Apuak!5e0!3m2!1sid!2sid!4v1701158328162!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Apollo Seafod -->
    <div class="modal fade" id="modalApolloSefood" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>RUMAH MAKAN</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselExampleApollo" class="carousel slide mb-4" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/appolo.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/appolo2.jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/appolo3.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleApollo" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleApollo" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b>"Apollo Seafod"</b></h2>
                            </p>
                            <p class="article-text">
                            Ada beberapa hal yang bisa anda dapatkan :
                            <ul>
                                <li>Menu Bervariasi</li>
                                <li>Tempat yang Indah</li>
                                <li>Tempat Makan Populer</li>
                            </ul>
                        </p>
                        </div>
                    </div>

                    <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                    <!-- Peta Statis -->
                    <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.259394441794!2d100.35765937404366!3d-0.9590544353540924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b950fb174dbf%3A0x9553a836e1f2f38f!2sApollo%20Seafood!5e0!3m2!1sid!2sid!4v1701158380392!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Djonikun -->
    <div class="modal fade" id="modalDjonikun" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>RUMAH MAKAN</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselExampleDjoni" class="carousel slide mb-4" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/djoni.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/djoni2.jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/baru/djoni3.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDjoni" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDjoni" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b>"Ikan Bakar Djoni/Kun"</b></h2>
                            </p>
                            <p class="article-text">
                            Ada beberapa hal yang bisa anda dapatkan :
                            <ul>
                                <li>Menu Bervariasi</li>
                                <li>Tempat yang Indah</li>
                                <li>Tempat Makan Populer</li>
                            </ul>
                        </p>
                        </div>
                    </div>

                    <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                    <!-- Peta Statis -->
                    <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.255685474334!2d100.3616802740437!3d-0.9622313353558624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b959730a65e1%3A0x34cb9d725a8df37d!2sIkan%20Bakar%20Djoni%2FKun!5e0!3m2!1sid!2sid!4v1701158425684!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

@endsection
