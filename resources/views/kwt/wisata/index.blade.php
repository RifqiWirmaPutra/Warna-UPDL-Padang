@extends('layouts.kwt.wisata.wisata')

@section('content')
        <div id="slide">
            <div class="item" style="background-image: url('{{ asset('kuliner/images/data-wisata/air terjun lubuk bonta/m.png') }}');">
                <div class="content">
                    <div class="name">Air Terjun Lubuk Bonta</div>
                    <div class="des">Eksplorasi Keajaiban Air Terjun Lubuk Bonta</div>
                    <div class="des"><i class="fas fa-map-marker-alt"></i>  Kayu Tanam, Kabupaten Padang Pariaman</div>
                    <a href="{{ route('lubuk-bonta') }}">
                        <div id="button-container-lubuk-bonta" class="button-container">
                            <button class="primary-button">Cek Selengkapnya !<span class="round"></span>
                            </button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item" style="background-image: url('{{ asset('kuliner/images/data-wisata/danau maninjau/m.jpg') }}');">
                <div class="content">
                    <div class="name">Danau Maninjau</div>
                    <div class="des">Keindahan Danau Maninjau yang Memikat Hati</div>
                    <div class="des"><i class="fas fa-map-marker-alt"></i> Kec. Tanjung Raya, Kabupaten Agam</div>
                    <a href="{{ route('maninjau') }}">
                        <div id="button-container-maninjau" class="button-container">
                            <button class="primary-button">Cek Selengkapnya !<span class="round"></span>
                            </button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item" style="background-image: url('{{ asset('kuliner/images/data-wisata/danau singkarak/m.jpg') }}');">
                <div class="content">
                    <div class="name">Danau Singkarak</div>
                    <div class="des">Pesona Danau Singkarak yang Menakjubkan</div>
                    <div class="des"><i class="fas fa-map-marker-alt"></i> Perbatasan Solok dan Tanah Datar</div>
                    <a href="{{ route('singkarak') }}">
                        <div id="button-container-singkarak" class="button-container">
                            <button class="primary-button">Cek Selengkapnya !<span class="round"></span>
                            </button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item" style="background-image: url('{{ asset('kuliner/images/data-wisata/Istano Basa Pagaruyung/m.jpg') }}');">
                <div class="content">
                    <div class="name">Istano Baso Pagaruyuang</div>
                    <div class="des">Keagungan Istano Baso Pagaruyuang yang menyimpan Cerita Kuno</div>
                    <div class="des"><i class="fas fa-map-marker-alt"></i> Kabupaten Tanah Datar</div>
                    <a href="{{ route('pagaruyuang') }}">
                        <div id="button-container-pagaruyuang" class="button-container">
                            <button class="primary-button">Cek Selengkapnya !<span class="round"></span>
                            </button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item" style="background-image: url('{{ asset('kuliner/images/data-wisata/jam gadang/m.jpeg') }}');">
                <div class="content">
                    <div class="name">Jam Gadang</div>
                    <div class="des"> Menyaksikan Waktu di Bawah Bayang Jam Gadang yang Megah.</div>
                    <div class="des"><i class="fas fa-map-marker-alt"></i> Kota Bukittinggi</div>
                    <a href="{{ route('jamgadang') }}">
                        <div id="button-container-jam" class="button-container">
                            <button class="primary-button">Cek Selengkapnya !<span class="round"></span>
                            </button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item" style="background-image: url('{{ asset('kuliner/images/data-wisata/kolam tirta alami/m.jpg') }}');">
                <div class="content">
                    <div class="name">Kolam Tirta Alami</div>
                    <div class="des">Merenungi Kesejukan di Kolam Tirta Alami yang Menyegarkan</div>
                    <div class="des"><i class="fas fa-map-marker-alt"></i> Kec. 2 X 11 Kayu Tanam, Kabupaten Padang Pariaman</div>
                    <a href="{{ route('tirtaAlami') }}">
                        <div id="button-container-alami" class="button-container">
                            <button class="primary-button">Cek Selengkapnya !<span class="round"></span>
                            </button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item" style="background-image: url('{{ asset('kuliner/images/data-wisata/LEMBAH ANAI/m.jpg') }}');">
                <div class="content">
                    <div class="name">Lembah Anai</div>
                    <div class="des">Menikmati Kesejukan di Lembah Anai yang Menyajikan Kecantikan Alam yang Damai</div>
                    <div class="des"><i class="fas fa-map-marker-alt"></i> Kec. 2 X 11 Kayu Tanam, Kabupaten Padang Pariaman</div>
                    <a href="{{ route('lembahAnai') }}">
                        <div id="button-container-anai" class="button-container">
                            <button class="primary-button">Cek Selengkapnya !<span class="round"></span>
                            </button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item" style="background-image: url('{{ asset('kuliner/images/data-wisata/masjid raya sumbar/m.jpg') }}');">
                <div class="content">
                    <div class="name">Masjid Raya Sumatera Barat</div>
                    <div class="des">Mengagumi Keindahan Arsitektur Islam di Masjid Raya Sumatera Barat yang Penuh Makna Sejarah</div>
                    <div class="des"><i class="fas fa-map-marker-alt"></i> Kec. 2 X 11 Kayu Tanam, Kabupaten Padang Pariaman</div>
                    <a href="{{ route('mesjidRaya') }}">
                        <div id="button-container-mesjid" class="button-container">
                            <button class="primary-button">Cek Selengkapnya !<span class="round"></span>
                            </button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item" style="background-image: url('{{ asset('kuliner/images/data-wisata/pantai air manis/m.jpg') }}');">
                <div class="content">
                    <div class="name">Pantai Air Manis</div>
                    <div class="des">Menikmati Kelembutan Pasir dan Kesejukan Ombak</div>
                    <div class="des"><i class="fas fa-map-marker-alt"></i> Kec. 2 X 11 Kayu Tanam, Kabupaten Padang Pariaman</div>
                    <a href="{{ route('airManis') }}">
                        <div id="button-container-manis" class="button-container">
                            <button class="primary-button">Cek Selengkapnya !<span class="round"></span>
                            </button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item" style="background-image: url('{{ asset('kuliner/images/data-wisata/pantai gundoriah/m.jpg') }}');">
                <div class="content">
                    <div class="name">Pantai gondariah</div>
                    <div class="des">Merasakan Pesona Pantai Gondariah dengan Pasir Putih dan Pemandangan Laut yang Spektakuler</div>
                    <div class="des"><i class="fas fa-map-marker-alt"></i> Kec. 2 X 11 Kayu Tanam, Kabupaten Padang Pariaman</div>
                    <a href="{{ route('gondariah') }}">                    
                        <div id="button-container-gondoriah" class="button-container">
                            <button class="primary-button">Cek Selengkapnya !<span class="round"></span>
                            </button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item" style="background-image: url('{{ asset('kuliner/images/data-wisata/pantai pasir jambak/m.jpeg') }}');">
                <div class="content">
                    <div class="name">Pantai Pasir Jambak</div>
                    <div class="des">Menghayati Keindahan Pantai Pasir Jambak dengan Suasana Romantis dan Pasir yang Lembut</div>
                    <div class="des"><i class="fas fa-map-marker-alt"></i> Kec. 2 X 11 Kayu Tanam, Kabupaten Padang Pariaman</div>
                    <a href="{{ route('pasirJambak') }}">
                        <div id="button-container-jambak" class="button-container">
                            <button class="primary-button">Cek Selengkapnya !<span class="round"></span>
                            </button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item" style="background-image: url('{{ asset('kuliner/images/data-wisata/puncak lawang/m.jpg') }}');">
                <div class="content">
                    <div class="name">Puncak Lawang</div>
                    <div class="des">Menyaksikan Keelokan Alam dari Ketinggian</div>
                    <div class="des"><i class="fas fa-map-marker-alt"></i> Kec. 2 X 11 Kayu Tanam, Kabupaten Padang Pariaman</div>
                    <a href="{{ route('lawang') }}">
                        <div id="button-container-lawang" class="button-container">
                            <button class="primary-button">Cek Selengkapnya !<span class="round"></span>
                            </button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item" style="background-image: url('{{ asset('kuliner/images/data-wisata/Taman Wisata Lembah Harau/m.jpg') }}');">
                <div class="content">
                    <div class="name">Lembah Harau</div>
                    <div class="des">Terpana oleh Keunikan Lembah Harau dengan Tebing Batu dan Air Terjun yang Menakjubkan</div>
                    <div class="des"><i class="fas fa-map-marker-alt"></i> Kabupaten Limapuluh Koto, Payakumbuh</div>
                    <a href="{{ route('harau') }}">
                        <div id="button-container-harau" class="button-container">
                            <button class="primary-button">Cek Selengkapnya !<span class="round"></span>
                            </button>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="buttons">
            {{-- <button id="prev"><i class="fa-solid fa-angle-left"></i></button> --}}
            <button id="prev"><i class="bi bi-caret-left-square-fill"></i></button>
            {{-- <button id="next"><i class="fa-solid fa-angle-right"></i></button> --}}
            <button id="next"><i class="bi bi-caret-right-square-fill"></i></button>
        </div>
@endsection