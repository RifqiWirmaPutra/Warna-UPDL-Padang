<!-- IKO UNTUAK TAMPILAN GAMBAR GAMBAR E MAH -->
@extends('layouts.kwt.transportasi.transportasi')

@section('content')
<style>
  .dropdown {
    display: none;
    position: absolute;
    bottom: 50px;
    background-color: #fff;
    border: 1px solid #ccc;
    z-index: 1;
  }
  .dropdown.active {
    display: block;
  }
  .menu-transportasi .dropdown{
    margin-left: 20rem;
  }
  .menu-transportasi .card {
    position: relative;
    width: 100%;
    max-width: 50rem;
  }
  .menu-transportasi .dropdown .card .card-head {
    background-color: #00A2B9;
    width: 70%;
    height: 20px;
    position: static;
    /* margin-top: 20px; */
    padding: 0;
    padding-bottom: 25px;
    margin: 20px 0 0 0;
  }
  .menu-transportasi .card .card-head img{
    position: absolute;
    max-width: 5rem;
    top: 0;
    left: 0;
    margin-top: -10px;
  }
  .menu-transportasi .card .card-head h5{
    font-weight: 800;
    text-align: start;
    padding-left: 6rem;
    color: #fff;
  }
  .menu-transportasi .card .container {
    padding-left: 90px;
  }
  .menu-transportasi .card .container .card-body {
    /* text-align: center;
    justify-content: center; */
    position: relative;
    padding-top: 20px;
  }

  /*unyuk tapilan agar ada bayangan card nya*/
  .custom-card {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .custom-card .card-header {
    height: 50px;
    text-align: center;
    background-color: #f8f9fa;
    border-bottom: 1px solid #dee2e6;
    display: flex;
    align-items: center;
  }
  .custom-card .card-body {
    height: calc(100% - 50px);
    overflow-y: auto;
  }
</style>


<div class="banner">
  <div id="captioned-gallery">
    <div class="transportasi-image"></div>
    <div class="container text-wrap">
      <h1 style=" text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); text-transform: uppercase;font-size: 36px; color: #fff;  margin-bottom: 10px; margin-top: 8rem; font-weight: 900">
        TRANSPORTASI
      </h1>
      <p style="font-size: 14px">Temukan Kendaraan Untuk Petualangan-mu.</p>
    </div>
  </div>
</div>


<div class="altmenu">
  <center>
    <ul>
      <!-- <li><a href="" data-target="plane"><i class="fas fa-plane"></i></a></li> -->
      <li><a href="" data-target="carmotor">
        <i class="fas fa-car"></i>
        <i class="fas fa-motorcycle"></i></a>
      </li>
      <li><a href="" data-target="car"><i class="fas fa-car"></i></a></li>
      <li><a href="" data-target="motorcycle"><i class="fas fa-motorcycle"></i></a></li>
      <li><a href="#" data-target="train"><i class="fas fa-train"></i></a></li>
    </ul>
  </center>
</div>

<!-- MENU MENU ICONNYA -->
<div class="menu-transportasi">

<!-- MENU PESAWAT -->
<div class="dropdown" id="carmotor">
  <div class="card">
    <div class="card-head">
      <img src="{{asset('kuliner/images/DATA_TRANSPORTASI/1.png')}}" class="card-img-top" alt="icon travel">
      <h5 class="card-text">SEWA MOBIL DAN MOTOR</h5>
    </div>

    <div class="container"> 
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card shadow custom-card">
            <div class="card-header text-primary">
              <h5 class="card-title mb-0">PT.MITRA MUDA SWARAS</h5>
            </div>
            <div class="card-body text-primary">
              <p class="card-text">
              <p style="color: #808080;">KOMPLEK PARAK KARAKAH, ASRI BLOK C NO.2 KOTA, PADANG</p>
                <i class="fa fa-phone" aria-hidden="true"></i> <b>08116683123</b>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="card shadow custom-card">
            <div class="card-header text-primary">
              <h5 class="card-title mb-0">PT.BRAYEN MOBILINDO WISATA</h5>
            </div>
            <div class="card-body text-primary">
              <p class="card-text">
              <p style="color: #808080;">JL.BATANG ANTOKAN NO.5 GOR HAJI AGUS SALIM, KOTA PADANG</p>
                <i class="fa fa-phone" aria-hidden="true"></i> <b>085355144668</b>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    
    <!-- <div class="card-body">
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card shadow custom-card">
            <div class="card-header text-primary">
              <h5 class="card-title mb-0">PT.MITRA MUDA SWARAS</h5>
            </div>
            <div class="card-body text-primary">
              <p class="card-text">
                <i class="bi bi-info-circle"></i> KOMPLEK PARAK KARAKAH, ASRI BLOK C NO.2 KOTA, PADANG<br>
                <i class="bi bi-whatsapp"></i> 08116683123
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="card shadow custom-card">
            <div class="card-header text-primary">
              <h5 class="card-title mb-0">PT.BRAYEN MOBILINDO WISATA</h5>
            </div>
            <div class="card-body text-primary">
              <p class="card-text">
                <i class="bi bi-info-circle"></i> JL.BATANG ANTOKAN NO.5 GOR HAJI AGUS SALIM, KOTA PADANG<br>
                <i class="bi bi-whatsapp"></i> 085355144668
              </p>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</div>

<!-- MENU CAR -->
<div class="dropdown" id="car">
  <div class="card">
    <div class="card-head">
      <img src="{{asset('kuliner/images/DATA_TRANSPORTASI/2.png')}}" class="card-img-top" alt="icon travel">
      <h5 class="card-text">Mobil</h5>
    </div>
    <div class="container">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card shadow custom-card">
            <div class="card-header text-primary">
              <h5 class="card-title mb-0">ARMADA TRAVEL OKE</h5>
            </div>
            <div class="card-body text-primary">
              <p class="card-text">
              <p style="color: #808080;">LUBUK ALUNG, KEC. LUBUK ALUNG, KABUPATEN PADANG PARIAMAN, SUMATERA BARAT 25582</p>
              <i class="fa fa-phone" aria-hidden="true"></i> <b>082383667733</b>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="card shadow custom-card">
            <div class="card-header text-primary">
              <h5 class="card-title mb-0">MAESTRO TRAVEL</h5>
            </div>
            <div class="card-body text-primary">
              <p class="card-text">
              <p style="color: #808080;">JL. JAMBU AIR NO.45, TALUAK AMPEK SUKU, KEC. BANUHAMPU, KABUPATEN AGAM, SUMATERA BARAT 26181</p>
                <i class="fa fa-phone" aria-hidden="true"></i> <b>085375733888</b>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card shadow custom-card">
            <div class="card-header text-primary">
              <h5 class="card-title mb-0">PT. SIKUMBANG TUR , AWR TOUR TRAVEL</h5>
            </div>
            <div class="card-body text-primary">
              <p class="card-text">
              <p style="color: #808080;">JL. BY PASS, TAROK DIPO, KEC. GUGUK PANJANG, KOTA BUKITTINGGI, SUMATERA BARAT 26181</p>
                <i class="fa fa-phone" aria-hidden="true"></i> <b>(0752)625241</b>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="card shadow custom-card">
            <div class="card-header text-primary">
              <h5 class="card-title mb-0">ERTE OKE TRAVEL</h5>
            </div>
            <div class="card-body text-primary">
              <p class="card-text">
              <p style="color: #808080;">JL. JAMBU AIR NO.58B, TALUAK AMPEK SUKU, KEC. BANUHAMPU, KABUPATEN AGAM, SUMATERA BARAT 26181</p>
                <i class="fa fa-phone" aria-hidden="true"></i> <b>085355161234</b>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>


<!-- MENU Ojek -->
<div class="dropdown" id="motorcycle">
  <div class="card">
    <div class="card-head">
      <img src="{{asset('kuliner/images/DATA_TRANSPORTASI/4.png')}}" class="card-img-top" alt="icon travel">
      <h5 class="card-text">OJEK LOKAL</h5>
    </div>
    <div class="container">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card shadow custom-card">
            <div class="card-header text-primary">
              <h5 class="card-title mb-0">PAK MALIN</h5>
            </div>
            <div class="card-body text-primary">
              <p class="card-text">
              <p style="color: #808080;">Jalan Raya Padang - Bukittinggi KM 37, Lubuk Alung, Sintuak, Kec. Sintuk Toboh Gadang, Kabupaten Padang Pariaman, Sumatera Barat 25584</p>
                <i class="fa fa-phone" aria-hidden="true"></i> <b>085364776592</b>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="card shadow custom-card">
            <div class="card-header text-primary">
              <h5 class="card-title mb-0">BANG NOP</h5>
            </div>
            <div class="card-body text-primary">
              <p class="card-text">
              <p style="color: #808080;">Jalan Raya Padang - Bukittinggi KM 37, Lubuk Alung, Sintuak, Kec. Sintuk Toboh Gadang, Kabupaten Padang Pariaman, Sumatera Barat 25584</p>
                <i class="fa fa-phone" aria-hidden="true"></i> <b>083161958762</b>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  </div>

<!-- MENU Kereta -->
<div class="dropdown" id="train">
  <div class="card">
    <div class="card-head">
      <img src="{{asset('kuliner/images/DATA_TRANSPORTASI/3.png')}}" class="card-img-top" alt="icon travel">
      <h5 class="card-text">STASIUN KERETA</h5>
    </div>
    <div class="container"> 
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card shadow custom-card">
            <div class="card-header text-primary">
              <h5 class="card-title mb-0">Stasiun BIM (Bandara)</h5>
            </div>
            <div class="card-body text-primary">
              <p class="card-text">
              <p style="color: #808080;">KATAPIANG, KEC. BATANG ANAI, KABUPATEN PADANG PARIAMAN, SUMATERA BARAT</p>
                <!-- <i class="fa fa-phone" aria-hidden="true"></i> <b>085364776592</b> -->
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="card shadow custom-card">
            <div class="card-header text-primary">
              <h5 class="card-title mb-0">Stasiun Lubuk Alung</h5>
            </div>
            <div class="card-body text-primary">
              <p class="card-text">
              <p style="color: #808080;">LUBUK ALUNG, KEC. LUBUK ALUNG, KABUPATEN PADANG PARIAMAN, SUMATERA BARAT</p>
                <!-- <i class="fa fa-phone" aria-hidden="true"></i> <b>083161958762</b> -->
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{--  --}}
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const icons = document.querySelectorAll('.altmenu i');
    const dropdowns = document.querySelectorAll('.dropdown');

    icons.forEach(function(icon) {
      icon.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.parentNode.getAttribute('data-target');
        const targetDropdown = document.getElementById(targetId);

        dropdowns.forEach(function(dropdown) {
        dropdown.classList.remove('active');
      });

        targetDropdown.classList.toggle('active');
      });
    });

    document.addEventListener('click', function(e) {
      if (!e.target.matches('.altmenu i')) {
        dropdowns.forEach(function(dropdown) {
          dropdown.classList.remove('active');
        });
      }
    });
});
</script>

@endsection

