@extends('layouts.dashboard.header')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{route('wlcm')}}">Beranda</a></li>
                <li>Tentang Kami</li>
            </ol>
            <h2>Tentang Kami</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <iframe class="mb-4 mb-lg-0" src="https://www.youtube.com/embed/_pSJxARxImY?autoplay=1&mute=1" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>PLN UPDL Padang</h3>
                    <h5><p class="fst-italic">
                        VISI
                    </p></h5>
                    <p>
                        Menjadi Pusat pengembangan kompetensi energi dan ketenagalistrikan bertaraf internasional serta mampu memberikan nilai tambah bagi indonesia.
                    </p>

                    <h5><p class="fst-italic">
                        MISI
                    </p></h5>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Mengembangkan, Memelihara dan Meningkatkan Kualitas Tenaga Kerja Sektor Ketenagalistrikan melalui Penyelengaraan Pembelajaran, Asesmen, Sertifikasi, dan Manajemen Pengetahuan.</li>
                        <li><i class="bi bi-check-circle"></i> Melakukan Konsultasi Sistem Management untuk  Mewujudkan Nilai Tambah bagi Pemangku Kepentingan.</li>
                        <li><i class="bi bi-check-circle"></i> Memfasilitasi progres perubahan dan transformasi bisnis perusahaan untuk mendukung upaya menjaga keberlangsungan.</li>
                        <li><i class="bi bi-check-circle"></i> Memberikan pengetahuan ketenagalistrikan dan energi ramah lingkungan kepada masyarakat indonesia.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->
</main><!-- End #main -->
@endsection