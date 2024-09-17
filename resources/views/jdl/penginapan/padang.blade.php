@extends('jdl.layouts.penginapan')

@section('content')
    <style>
        /* Styling untuk Container Utama */
        .container {
            width: 80%;
            margin: 0 auto;
        }

        /* Styling untuk Bagian Background Header */
        .header {
            background-image: url('/penginapan/images/data-updl/updl padang/front.jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
        }



        /* Styling untuk Ruangan */
        .room-card {
            display: flex;
            flex-direction: row;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px;
            overflow: hidden;
            background-color: #fff;
            margin: 20px 0;
            gap: 20px;
            position: relative;
        }

        .room-image img {
            width: 100%;
            /* Menjaga gambar memenuhi kontainer */
            height: 140px;
            /* Menetapkan tinggi gambar tetap */
            object-fit: cover;
            /* Mengatur agar gambar menyesuaikan tanpa merusak rasio aspek */
            border-radius: 10px;
        }

        .room-image {
            width: 25%;
            position: relative;
        }

        /* .room-image img {
                            width: 100%;
                            height: auto;
                            object-fit: cover;
                            border-radius: 10px;
                        } */

        /* Arrow buttons inside the image */
        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
            /* Ukuran panah lebih kecil */
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 5px;
            /* Padding lebih kecil */
            cursor: pointer;
            border-radius: 50%;
            z-index: 10;
        }

        .arrow.left {
            left: 10px;
            scale:
                /* Position on the left inside the image */
        }

        .arrow.right {
            right: 10px;
            /* Position on the right inside the image */
        }

        /* Styling untuk Informasi Ruangan */
        .room-info {
            text-align: left;
            padding: 10px 0;
        }

        .room-info h3 {
            margin: 0;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px;
            font-family: Arial, sans-serif;
            gap: 20px;
        }

        td {
            width: 700px;
            border: 1px solid #dddddd;
            padding: 15px;
            text-align: left;
        }

        .button-group {
            display: flex;
            width: 100%;
            flex-direction: row;
            gap: 15px;
            padding: 5px;
        }

        .button {
            border: 1px solid #ccc;
            border-radius: 25px;
            padding: 8px 16px;
            cursor: pointer;
            background-color: #f2f2f2;
        }

        .button:hover {
            background-color: #e0e0e0;
        }

        .price-section {
            text-align: right;
        }

        .price-section button {
            padding: 10px 20px;
            border: none;
            background-color: #eaeaea;
            cursor: pointer;
        }

        .price-section .price {
            margin-top: 10px;
            font-weight: bold;
            color: #4CAF50;
        }

        .room-price {
            width: 30%;
            text-align: center;
            padding: 50px 0;
        }

        .price {
            font-size: 24px;
            margin-bottom: 20px;
            color: #4CAF50;
        }

        .price-button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .price-button:hover {
            background-color: #45a049;
        }
    </style>

    <div class="header">
        PT PLN UPDL Padang<br>
        Unit Pelaksana Pendidikan Dan Pelatihan Padang (Learning Unit)
    </div>

    <div class="container">
        <!-- Room Card 1 -->
        <div class="room-card">
            <div class="room-image">
                <h3 class="tipeRuangan" style="padding: 10px">Family Room</h3>
                <img id="carousel-image" src="/penginapan/images/DATA_HOTEL/axana.jpg" alt="Family Room">

                <!-- Arrow Left -->
                <div class="arrow left" onclick="prevImage()">&#10094;</div>
                <!-- Arrow Right -->
                <div class="arrow right" onclick="nextImage()">&#10095;</div>
            </div>
            <div class="room-info">
                <table>
                    <tr>
                        <td>
                            <div>Pilihan Kamar</div>
                            <div class="button-group">
                                <div class="button" onclick="changePrice(250000)">Daily PLN Group</div>
                                <div class="button" onclick="changePrice(3400000)">Monthly PLN Group</div>
                            </div>
                            <div class="button-group">
                                <div class="button" onclick="changePrice(350000)">Daily Non PLN Group</div>
                                <div class="button" onclick="changePrice(3800000)">Monthly Non PLN Group</div>
                            </div>
                        </td>
                        <td class="room-price">
                            <div>
                                <span class="price">Rp <span id="price">250.000</span></span>
                            </div>
                            <button class="price-button">Pilih</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script>
        // Daftar gambar untuk carousel
        const images = [
            "/penginapan/images/DATA_HOTEL/axana.jpg",
            "/penginapan/images/DATA_HOTEL/basko.jpg",
            "/penginapan/images/DATA_HOTEL/favehotel.jpg",
        ];

        let currentIndex = 0;

        function nextImage() {
            currentIndex = (currentIndex + 1) % images.length;
            document.getElementById('carousel-image').src = images[currentIndex];
        }

        function prevImage() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            document.getElementById('carousel-image').src = images[currentIndex];
        }

        function changePrice(price) {
            document.getElementById('price').innerHTML = price.toLocaleString('id-ID');
        }
    </script>
@endsection
