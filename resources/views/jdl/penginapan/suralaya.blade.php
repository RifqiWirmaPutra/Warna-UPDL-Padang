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
        }

        .room-image {
            width: 25%;
        }

        .room-image img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
        }

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
                <h3 class="tipeRuangan" style="padding: 5px">Family Room</h3>
                <img src="/penginapan/images/data-updl/updl padang/front.jpg" alt="Family Room">
            </div>
            <div class="room-info">
                <table>
                    <tr>
                        <td>
                            <div class>Pilihan Kamar</div>
                            <div class="button-group">
                                <div class="button">Daily PLN Group</div>
                                <div class="button">Monthly PLN Group</div>
                            </div>
                            <div class="button-group">
                                <div class="button">Daily Non PLN Group</div>
                                <div class="button">Monthly Non PLN Group</div>
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
        function changePrice(price) {
            document.getElementById('price').innerHTML = price.toLocaleString('id-ID');
        }
    </script>
@endsection
