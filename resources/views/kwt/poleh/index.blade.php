<!-- IKO UNTUAK TAMPILAN GAMBAR GAMBAR E MAH -->
@extends('layouts.kwt.poleh.poleh')
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

    <style>
        #heros {
            background-image: url('{{ asset('kuliner/images/DATA_OLEH/Dashboard_POO/poleholeh.jpg') }}');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-family: Arial, sans-serif;
            text-align: center;
            margin-bottom: 10px; /* Sesuaikan jarak antara hero dan menu kuliner */
        }

        #heros h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        #heros p {
            font-size: 1.5em;
            margin-bottom: 30px;
        }
        /* Styling tambahan dapat ditambahkan di sini */
    </style>


    <div id="heros">
        <!-- Konten di dalam heros bisa Anda tambahkan sesuai kebutuhan -->
    </div>

    <div class=" kuliner-menu">
        <div class="container text-center pt-5 pb-3">
            <h1 class="fade-in-out">DAFTAR PUSAT OLEH-OLEH TERENAK SEKITAR UPDL PADANG</h1>
        </div>

        <!-- awal tampilan gambar -->
        <div class="container-fluid">
            <div class="row text-center">

                <!-- Kolom pertama -->
                <div class="col-sm-4 mb-4">
                    <div class="card border-0 position-relative">
                        <div class="img-container position-relative">
                            <img src="{{ asset('kuliner/images/DATA_OLEH/DATA/christinehakim.jpg') }}" alt="christinehakim" class="card-img-top">
                            <div class="overlay"></div> <!-- Efek overlay -->
                        </div>
                        <div class="card-body text-left overlay-content">
                            <h6 class="card-title"><b>Christine Hakim</b></h6>
                            <p>Jl. Khatib Sulaiman No.99, Ulak Karang Sel., Kec. Padang Utara, Kota Padang</p>
                        </div>
                    </div>
                </div>

                <!-- Kolom kedua -->
                <div class="col-sm-4 mb-4">
                    <div class="card border-0 position-relative">
                        <div class="img-container position-relative">
                            <img src="{{ asset('kuliner/images/DATA_OLEH/DATA/kripikshirley.jpg') }}" alt="kripikshirley" class="card-img-top">
                            <div class="overlay"></div> <!-- Efek overlay -->
                        </div>
                        <div class="card-body text-left overlay-content">
                            <h6 class="card-title"><b>Kripik Shirley</b></h6>
                            <p>Jl. Khatib Sulaiman No.99, Ulak Karang Sel., Kec. Padang Utara, Kota Padang</p>
                        </div>
                    </div>
                </div>

                <!-- Kolom ketiga -->
                <div class="col-sm-4 mb-4">
                    <div class="card border-0 position-relative">
                        <div class="img-container position-relative">
                            <img src="{{ asset('kuliner/images/DATA_OLEH/DATA/minangsepakat.jpg') }}" alt="minangsepakat" class="card-img-top">
                            <div class="overlay"></div> <!-- Efek overlay -->
                        </div>
                        <div class="card-body text-left overlay-content">
                            <h6 class="card-title"><b>Minang Sepakat</b></h6>
                            <p>Jl. Khatib Sulaiman No.99, Ulak Karang Sel., Kec. Padang Utara, Kota Padang</p>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan kolom-kolom lain sesuai kebutuhan -->
            </div>
        </div>

        <style>
            .card {
                transition: transform 0.3s;
                position: relative;
                overflow: hidden;
                border: none;
            }

            .card:hover {
                transform: scale(1.05); /* Efek scaling pada hover */
            }

            .overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5); /* Warna overlay */
                opacity: 0;
                transition: opacity 0.3s;
            }

            .img-container:hover .overlay {
                opacity: 1;
            }

            .overlay-content {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                padding: 15px;
                color: #fff;
                text-align: left;
                transition: transform 0.3s;
                transform: translateY(100%);
            }

            .img-container:hover .overlay-content {
                transform: translateY(0);
            }

            .card-img-top {
                max-width: 100%;
                height: auto;
            }

            .card-body {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                padding: 15px;
                color: #fff;
                text-align: left;
                transform: translateY(100%);
                transition: transform 0.3s;
            }

            .card:hover .card-body {
                transform: translateY(0);
            }
        </style>
        <!-- akhir tampilan gambar -->
    </div>
@endsection
