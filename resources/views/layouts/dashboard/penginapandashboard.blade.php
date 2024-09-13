@extends('layouts.jdl.penginapan.penginapan')

@section('content')
    <div id="slide">

        <div class="item"
            style="background-image: url('{{ asset('penginapan/images/data-updl/updl pandaan/front.jpg') }}');">
            <div class="content">
                <div class="name">PLN UPDL Pandaan</div>
                <div class="des">Pusat pendidikan di Jawa Timur</div>
                <div class="des"><i class="fas fa-map-marker-alt"></i> Karang Kepuh, Karang Jati, Kec. Pandaan, Pasuruan,
                    Jawa Timur</div>
                {{-- <a href="{{ route('admin.penginapan.index') }}">
                    <div id="button-container-daftarpenginapan" class="button-container">
                        <button class="primary-button">Cek Penginapan !<span class="round"></span>
                        </button>
                    </div>
                </a> --}}
            </div>
        </div>

        <div class="item"
            style="background-image: url('{{ asset('penginapan/images/data-updl/updl padang/front.jpg') }}');">
            <div class="content">
                <div class="name">PLN UPDL Padang</div>
                <div class="des">Unit Pelaksana Pendidikan Dan Pelatihan Padang (Learning Unit)</div>
                <div class="des"><i class="fas fa-map-marker-alt"></i>Sintuak, Kec. Sintuk Toboh Gadang,
                    Kabupaten Padang Pariaman, Sumatera Barat </div>
                <a href="{{ route('penginapan.padang') }}">
                    <div id="button-container-maninjau" class="button-container">
                        <button class="primary-button">Cek Penginapan !<span class="round"></span>
                        </button>
                    </div>
                </a>
            </div>
        </div>

        <div class="item"
            style="background-image: url('{{ asset('penginapan/images/data-updl/updl suralaya/front.jpg') }}');">
            <div class="content">
                <div class="name">PLN UPDL Suralaya</div>
                <div class="des">Renewable Energy Academy</div>
                <div class="des"><i class="fas fa-map-marker-alt"></i> Suralaya, Kec. Pulomerak, Kota Cilegon, Banten
                </div>
                <a href="{{ route('penginapan.suralaya') }}">
                    <div id="button-container-singkarak" class="button-container">
                        <button class="primary-button">Cek Selengkapnya !<span class="round"></span>
                        </button>
                    </div>
                </a>
            </div>
        </div>


        <div class="item"
            style="background-image: url('{{ asset('penginapan/images/data-updl/updl jakarta/front.jpg') }}');">
            <div class="content">
                <div class="name">PLN UPDL Jakarta</div>
                <div class="des">Pusat pelatihan di Jakarta Barat</div>
                <div class="des"><i class="fas fa-map-marker-alt"></i> Slipi, Kec. Palmerah, Kota Jakarta Barat, Daerah
                    Khusus Ibukota Jakarta</div>
                {{-- <a href="{{ route('pagaruyuang') }}">
                    <div id="button-container-pagaruyuang" class="button-container">
                        <button class="primary-button">Cek Selengkapnya !<span class="round"></span>
                        </button>
                    </div>
                </a> --}}
            </div>
        </div>

        <div class="item"
            style="background-image: url('{{ asset('penginapan/images/data-updl/updl semarang/front.jpg') }}');">
            <div class="content">
                <div class="name">PLN UPDL Semarang</div>
                <div class="des"> PLN Unit Pelaksana Pendidikan dan Pelatihan (UPDL Semarang)</div>
                <div class="des"><i class="fas fa-map-marker-alt"></i> Sambiroto, Kec. Tembalang, Kota Semarang, Jawa
                    Tengah</div>
                {{-- <a href="{{ route('jamgadang') }}">
                    <div id="button-container-jam" class="button-container">
                        <button class="primary-button">Cek Selengkapnya !<span class="round"></span>
                        </button>
                    </div>
                </a> --}}
            </div>
        </div>

        <div class="item"
            style="background-image: url('{{ asset('penginapan/images/data-updl/updl bogor/front.jpg') }}');">
            <div class="content">
                <div class="name">PLN UPDL Bogor</div>
                <div class="des">Pusat pendidikan di Megamendung, Jawa Barat</div>
                <div class="des"><i class="fas fa-map-marker-alt"></i> Cipayung Datar, Kec. Megamendung, Kabupaten Bogor,
                    Jawa Barat
                </div>
                {{-- <a href="{{ route('tirtaAlami') }}">
                    <div id="button-container-alami" class="button-container">
                        <button class="primary-button">Cek Selengkapnya !<span class="round"></span>
                        </button>
                    </div>
                </a> --}}
            </div>
        </div>

        <div class="buttons">
            {{-- <button id="prev"><i class="fa-solid fa-angle-left"></i></button> --}}
            <button id="prev"><i class="bi bi-caret-left-square-fill"></i></button>
            {{-- <button id="next"><i class="fa-solid fa-angle-right"></i></button> --}}
            <button id="next"><i class="bi bi-caret-right-square-fill"></i></button>
        </div>
    @endsection
