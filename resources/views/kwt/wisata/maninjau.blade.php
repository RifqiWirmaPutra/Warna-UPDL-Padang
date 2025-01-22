@extends('layouts.kwt.wisata.wisata')
@section('content')
    <style>
        /* Gaya untuk tata letak */
        /* body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                justify-content: center;
                align-items: center;
            } */

        .card {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            width: 100%;
        }

        #photo-slider {
            overflow: hidden;
            position: relative;
        }

        #map {
            width: 100%;
            height: 400px;
            margin-left: 1px;
            margin-right: 80px;
        }

        #mu {
            width: 100%;
            height: 400px;
            margin-left: 1px;
            margin-right: 80px;
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            box-sizing: border-box;
            overflow: hidden;
        }

        .slide img {
            width: 100%;
            height: auto;
            max-width: 100%;
            height: 70vh;
        }

        .arrow {
            position: absolute;
            top: 50%;
            font-size: 24px;
            cursor: pointer;
            z-index: 1;
            user-select: none;
        }

        .arrow.left {
            left: 10px;
        }

        .arrow.right {
            right: 10px;
        }

        #info,
        #map {
            box-sizing: border-box;
            padding: 20px;
        }

        #info h2 {
            margin-bottom: 10px;
        }

        #info p {
            margin-bottom: 20px;
        }

        #info .advantage {
            float: right;
            width: 100%;
        }

        /* Gaya untuk tombol deskripsi */
        #showDescription {
            cursor: pointer;
            color: #007BFF;
            text-decoration: underline;
            margin-top: 10px;
            display: inline-block;
            padding: 5px 10px;
            border: 1px solid #007BFF;
            border-radius: 4px;
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        /* Gaya untuk modal deskripsi */
        #descriptionModal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        #descriptionContent {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            max-width: 800px;
            margin: 0 auto;
        }

        #closeModal {
            cursor: pointer;
            color: #007BFF;
            text-align: right;
            margin-top: 10px;
            font-size: 20px;
        }
    </style>

    <!-- Bagian Foto Slider -->
    <!-- <div class="col-md-6"> -->
    <div id="mu">
        <div id="hehe" class="carousel slide card" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('kuliner/images/data-wisata/danau maninjau/m.jpg') }}" class="d-block w-100"
                        alt="Wisata 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('kuliner/images/data-wisata/danau maninjau/n.jpg') }}" class="d-block w-100"
                        alt="Wisata 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('kuliner/images/data-wisata/danau maninjau/o.jpg') }}" class="d-block w-100"
                        alt="Wisata 3">
                </div>
                <!-- Tambahkan lebih banyak item carousel jika diperlukan -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#hehe" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hehe" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Bagian Informasi -->
    <div id="info" class="card">
        <h2>Danau Maninjau</h2>
        <p><strong><i class="fas fa-map-marker-alt"></i></i> Alamat :</strong> Kecamatan Tanjung Raya, Kabupaten Agam,
            provinsi Sumatera Barat, Indonesia.</p>
        <p><strong><i class="fas fa-location-arrow"></i> Jarak :</strong> 81,4 KM</p>
        <div class="advantage">
            <p><strong>Keunggulan Wisata:</strong> Deskripsi keunggulan wisata dengan tampilan yang bagus.</p>
        </div>
        <p><strong>Deskripsi Wisata:</strong>
            <!-- Tombol untuk menampilkan modal deskripsi -->
            <span id="showDescription" onclick="openDescriptionModal()">Lihat Deskripsi</span>
        </p>
        <p><strong>Sumber:</strong> <a
                href="https://indonesiakaya.com/pustaka-indonesia/danau-maninjau-danau-legendaris-di-jantung-agam/#:~:text=Menurut%20sejarahnya%2C%20danau%20ini%20terbentuk,dan%20Danau%20Batur%20di%20Bali."
                target="_blank">https://indonesiakaya.com/</a></p>
    </div>

    <!-- Bagian Google Maps -->
    <div id="map">
        <!-- Sematkan iframe Google Maps dengan lokasi -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127672.0923272644!2d100.10545526713337!3d-0.3281459907637223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd51493dd7c7663%3A0xdc30ab6afb30d576!2sDanau%20Maninjau!5e0!3m2!1sid!2sid!4v1699341246909!5m2!1sid!2sid"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>

    <!-- Modal Deskripsi -->
    <div id="descriptionModal">
        <div id="descriptionContent">
            <div id="closeModal" onclick="closeDescriptionModal">&#10006; Tutup</div>
            <h2>Danau Maninjau</h2>
            <!-- Tambahkan deskripsi lengkap di sini -->
            <p>
                Danau Maninjau merupakan sebuah danau vulkanik yang berada tepat di jantung Kabupaten Agam, Sumatera Barat.
                Terletak di ketinggian kurang lebih 460 meter di atas permukaan laut, danau ini membentang seluas 100 km
                persegi dengan kedalaman rata-rata 105 meter. ...
            </p>
        </div>
    </div>

    <script>
        const descriptionModal = document.getElementById('descriptionModal');
        const closeModalButton = document.getElementById('closeModal');
        const showDescriptionButton = document.getElementById('showDescription');

        closeModalButton.addEventListener('click', closeDescriptionModal);

        function openDescriptionModal() {
            descriptionModal.style.display = 'flex';
            clearInterval(slideInterval);
        }

        function closeDescriptionModal() {
            descriptionModal.style.display = 'none';
            startSlider();
        }

        showDescriptionButton.addEventListener('click', openDescriptionModal);
    </script>
@endsection
