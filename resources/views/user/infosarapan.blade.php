@extends('layouts.appUser')
@section('content')
<style>
    /* Gaya untuk tabel */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th, td {
        padding: 15px;
        border: 1px solid #ddd;
        text-align: left;
        font-size: 14px;
    }

    th {
        background-color: #00008B;
        color: #fff;
        font-size: 16px;
    }

    /* Gaya untuk heading */
    h4 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 22px;
    }

    /* Gaya untuk baris genap */
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    /* Gaya saat hover */
    tr:hover {
        background-color: #e0e0e0;
    }

    /* Gaya untuk teks warna hitam */
    .black-text {
        color: black;
    }
</style>

<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title black-text">Makan lah lu, Bia paruik Kanyang</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        
                        <div>
                            <!-- Tabel 1: Jadwal Waktu Makan -->
                            <h4 class="black-text">Jadwal Waktu Makan</h4>
                            <table>
                                <tr>
                                    <th>Makanan</th>
                                    <th>Waktu</th>
                                </tr>
                                <tr>
                                    <td>Makan Pagi</td>
                                    <td>06:30 - 07:30</td>
                                </tr>
                                <tr>
                                    <td>Makan Siang</td>
                                    <td>12:00 - 13:30</td>
                                </tr>
                                <tr>
                                    <td>Makan Malam</td>
                                    <td>18:00 - 20:00</td>
                                </tr>
                            </table>

                            <!-- Tabel 2: Jadwal Waktu Coffee Break -->
                            <h4 class="black-text">Jadwal Waktu Coffee Break</h4>
                            <table>
                                <tr>
                                    <th>Coffee Break</th>
                                    <th>Waktu</th>
                                </tr>
                                <tr>
                                    <td>Coffee Break Pagi</td>
                                    <td>10:00 - 10:30</td>
                                </tr>
                                <tr>
                                    <td>Coffee Break Sore</td>
                                    <td>15:00 - 15:30</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
