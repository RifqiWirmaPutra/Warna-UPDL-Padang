@extends('layouts.appUser')

@section('content')
<h1>Selamat datang, <b>{{ Auth::user()->name }}!</b> <p>
    Anda Sekarang ada di Halaman Peserta. Untuk memulai, Silakan klik Menu Profile untuk merubah password Anda.</h1>

<style>
    h1, h2, p, a {
        font-family: sans-serif;
        font-weight: normal;
    }

    .jam-digital-malasngoding {
        overflow: hidden;
        width: 330px;
        margin: 20px auto;
        border: 5px solid #efefef;
        display: flex;
        justify-content: space-around;
    }

    .kotak {
        width: 100px;
        height: 100px;
        background-color: #189fff;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .jam-digital-malasngoding p {
        color: #fff;
        font-size: 36px;
    }
</style>

<div class="jam-digital-malasngoding">
    <div class="kotak">
        <p id="jam"></p>
    </div>
    <div class="kotak">
        <p id="menit"></p>
    </div>
    <div class="kotak">
        <p id="detik"></p>
    </div>
</div>


@if (Session::has('success'))
<div class="alert alert-success alert-dismissible show fade" role="alert">
    {{ Session::get('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button>
</div>
@endif
<!-- error -->
@if (Session::has('error'))
<div class="alert alert-danger alert-dismissible show fade" role="alert">
    {{ Session::get('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<script>
    window.setTimeout("waktu()", 1000);

    function waktu() {
        var waktu = new Date();
        setTimeout("waktu()", 1000);
        document.getElementById("jam").innerHTML = waktu.getHours();
        document.getElementById("menit").innerHTML = waktu.getMinutes();
        document.getElementById("detik").innerHTML = waktu.getSeconds();
    }
</script>

@endsection
