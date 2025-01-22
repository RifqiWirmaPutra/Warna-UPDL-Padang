@extends('jdl.layouts.penginapan')

@section('content')
    <style>
        /* (Gaya CSS yang sudah ada) */
    </style>

    <div class="header">
        PT PLN UPDL Padang<br>
        Unit Pelaksana Pendidikan Dan Pelatihan Padang (Learning Unit)
    </div>

    <div class="container">
        @foreach ($penginapans as $penginapan)
            <div class="room-card">
                <div class="room-image">
                    <h3 class="tipeRuangan" style="padding: 10px">{{ $penginapan->tipePenginapan }}</h3>
                    <img id="carousel-image" src="{{ $penginapan->fotoPenginapan }}" alt="{{ $penginapan->tipePenginapan }}">
                    <div class="arrow left" onclick="prevImage()">&#10094;</div>
                    <div class="arrow right" onclick="nextImage()">&#10095;</div>
                </div>
                <div class="room-info">
                    <table>
                        <tr>
                            <div style="font-weight: bold">Pilihan Kamar</div>
                            <td>
                                <div class="button-group">
                                    <div class="button"
                                        onclick="updatePrice('{{ $penginapan->hargadpln }}', '{{ $penginapan->id }}')">Daily
                                        PLN Group</div>
                                    <div class="button"
                                        onclick="updatePrice('{{ $penginapan->hargampln }}', '{{ $penginapan->id }}')">
                                        Monthly PLN Group</div>
                                </div>
                                <div class="button-group">
                                    <div class="button"
                                        onclick="updatePrice('{{ $penginapan->hargadnonpln }}', '{{ $penginapan->id }}')">
                                        Daily Non PLN Group</div>
                                    <div class="button"
                                        onclick="updatePrice('{{ $penginapan->hargamnonpln }}', '{{ $penginapan->id }}')">
                                        Monthly Non PLN Group</div>
                                </div>
                            </td>
                            <td class="room-price">
                                <div id="price-display-{{ $penginapan->id }}" class="price">Harga: -</div>
                                <a href="{{ route('layouts.booking.create') }}">
                                    <div id="button-container-booking" class="button-container">
                                        <button class="price-button">Pilih</button>
                                    </div>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        @endforeach
    </div>

    <script>
        function updatePrice(price, penginapanId) {
            // Mengupdate tampilan harga untuk penginapan tertentu
            document.getElementById('price-display-' + penginapanId).innerText = 'Harga: ' + price;
        }
    </script>
@endsection
