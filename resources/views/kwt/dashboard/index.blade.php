@extends('layouts.kwt.dashboard.index')

@section('content')
    <!-- ======= Featured Section ======= -->
    <section id="fitur" class="fitur">
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
          <div class="icon-box text-center p-3">
            <a href="{{ route('wisata') }}">
              <img src="{{ asset('kuliner/images/1.png')}}" alt="Icon 1" class="img-fluid mb-3" style="max-width: 100px;">
              <h5 class="text-dark mb-0" style="font-size: 16px;">Wisata</h5>
              <!-- <p class="text-muted" style="font-size: 14px;">Lihat Informasi Pembelajaran Disini</p> -->
            </a>
          </div>
        </div>

        <div class="col-lg-2">
          <div class="icon-box text-center p-3">
            <a href="{{route('kuliner')}}">
              <img src="{{ asset('kuliner/images/2.png')}}" alt="Icon 1" class="img-fluid mb-3" style="max-width: 100px;">
              <h5 class="text-dark mb-0" style="font-size: 16px;">Kuliner</h5>
              <!-- <p class="text-muted" style="font-size: 14px;">Lihat Informasi Pembelajaran Disini</p> -->
            </a>
          </div>
        </div>

        <div class="col-lg-2">
          <div class="icon-box text-center p-3">
              <a href="{{ route('kafe') }}">
                  <img src="{{ asset('kuliner/images/3.png')}}" alt="Icon 1" class="img-fluid mb-3" style="max-width: 100px;">
                  <h5 class="text-dark mb-0" style="font-size: 16px;">Kafe</h5>
                  <!-- <p class="text-muted" style="font-size: 14px;">Lihat Informasi Pembelajaran Disini</p> -->
              </a>
          </div>
      </div>

        <div class="col-lg-2">
          <div class="icon-box text-center p-3">
            <a href="{{route('hotel')}}">
              <img src="{{ asset('kuliner/images/4.png')}}" alt="Icon 2" class="img-fluid mb-3" style="max-width: 100px;">
              <h5 class="text-dark mb-0" style="font-size: 16px;">Hotel</h5>
              <!-- <h6 style="font-size: 18px; color: #000000; font-weight: bold;">Coming Soon!</h6> -->
            </a>
          </div>
        </div>

        <div class="col-lg-2">
          <div class="icon-box text-center p-3">
            <a href="{{route('transportasi')}}">
              <img src="{{ asset('kuliner/images/6-1.png')}}" alt="Icon 3" class="img-fluid mb-3" style="max-width: 100px;">
              <h5 class="text-dark mb-0" style="font-size: 16px;">Transportasi</h5>
              <!-- <p class="text-muted" style="font-size: 14px;">Lihat Sarana & Prasarana Disini</p> -->
            </a>
          </div>
        </div>

        <div class="col-lg-2">
          <div class="icon-box text-center p-3">
            <a href="{{ route('poleh') }}">
              <img src="{{ asset('kuliner/images/5.png')}}" alt="Icon 4" class="img-fluid mb-3" style="max-width: 100px;">
              <h5 class="text-dark mb-0" style="font-size: 16px;">Pusat Oleh-Oleh</h5>
              <!-- <p class="text-muted" style="font-size: 14px;">Cari Kuliner Pilihan Terbaik di Sekitar Anda</p> -->
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection