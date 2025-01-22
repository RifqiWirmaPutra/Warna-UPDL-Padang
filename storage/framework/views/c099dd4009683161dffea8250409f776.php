<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Warna - PLN Udiklat Padang</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(asset('landing_page/img/resize.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('landing_page/img/resize.png')); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('landing_page/vendor/animate.css/animate.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('landing_page/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('landing_page/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('landing_page/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('landing_page/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('landing_page/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('landing_page/css/style.css')); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna
  * Updated: Aug 25 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <!-- fungsi aktif menu -->
  <style>
    .navbar .menu .navbar-item.active a {
    color: #00A2B9; 
  }
  #loading2 {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.7); /* Latar belakang semi-transparan */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999; /* Atur z-index untuk menempatkan elemen loading di atas konten lain */
    }
  </style>
  </head>
  <body>
  <div id="loading2" class="text-center">
    <div class="spinner-border" role="status">
    </div>
    <p>Loading...</p>
</div>
    <section id="topbar" class="d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">udiklat.padang@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>(+62) 821-7278-5770</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://instagram.com/pln.updl.padang" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="https://youtube.com/@updlpadang6399" class="youtube"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
    </section>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="logo" >
          <!-- <h1><a href="index.html">Eterna</a></h1> -->
          <!-- Uncomment below if you prefer to use an image logo -->
          <a href="<?php echo e(route('wlcm')); ?>"><img src="<?php echo e(asset('assets/images/mockup2.1.png')); ?>" alt="" class="img-fluid"></a>
        </div>
        <nav id="navbar" class="navbar active">
          <ul class="menu">
            <li class="navbar-item <?php echo e(request()->is('/*') ? 'active' : ''); ?>"><a href="<?php echo e(route('wlcm')); ?>">Beranda</a></li>
            <li class="navbar-item <?php echo e(request()->is('about*') ? 'active' : ''); ?>"><a href="<?php echo e(route('about.index')); ?>">Tentang</a></li>
            <li class="navbar-item <?php echo e(request()->is('contact*') ? 'active' : ''); ?>"><a href="<?php echo e(route('contact.index')); ?>">Hubungi Kami</a></li>
            <li class="navbar-item <?php echo e(request()->is('informasi-dashboard*') ? 'active' : ''); ?>"><a href="<?php echo e(route('informasi.index')); ?>">Informasi</a></li>
            <li class="navbar-item <?php echo e(request()->is('komunitas*') ? 'active' : ''); ?>"><a href="<?php echo e(route('komunitas.index')); ?>">Komunitas</a></li>



             


            
            <?php if(Route::has('login')): ?>
            <li class="nav-item dropdown">
              <?php if(auth()->guard()->check()): ?>
              <a href="<?php echo e(url('dashboard')); ?>" class="btn btn-outline-primary nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <?php echo e(Auth::user()->name); ?>

                <i class="bi bi-chevron-down"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo e(url('dashboard')); ?>">Dasbor</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a></li>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
              </form>
            </ul>
            <?php else: ?>
            <a href="" class="dropdown">
              Masuk
              <i class="bi bi-chevron-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo e(route('login')); ?>">Masuk Sebagai Peserta</a></li>
              <li><a class="dropdown-item" href="<?php echo e(route('admin.login')); ?>">Masuk Sebagai Admin</a></li>
              
            </ul>
            <?php endif; ?>
          </li>
          <?php endif; ?>
          <li class="navbar-item"><a href=""></a></li>
          <li class="navbar-item"><a href=""></a></li>
        </ul>        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->
  <main class="py-4">
    <?php echo $__env->yieldContent('content'); ?>
  </main>
  
  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('landing_page/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
  <script src="<?php echo e(asset('landing_page/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('landing_page/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('landing_page/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('landing_page/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('landing_page/vendor/waypoints/noframework.waypoints.js')); ?>"></script>
  <!-- <script src="<?php echo e(asset('landing_page/vendor/php-email-form/validate.js')); ?>"></script> -->

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('landing_page/js/main.js')); ?>"></script>
  <!-- fungsi aktif menu -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
      $(document).ready(function () {
          $(".navbar-item a").click(function () {
              // Hapus kelas 'active' dari semua elemen menu
              $(".navbar-item").removeClass("active");

              // Tambahkan kelas 'active' pada elemen menu yang diklik
              $(this).parent().addClass("active");
          });
      });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Tampilkan elemen loading saat halaman dimuat
        document.getElementById('loading2').style.display = 'none';

        // Get the current URL
        var currentURL = window.location.href;

        // Loop through each menu item and compare its href with the current URL
        $('.sidebar-item a').each(function() {
            var menuItemURL = $(this).attr('href');
            if (currentURL.includes(menuItemURL)) {
                $(this).addClass('active-menu');
                $(this).closest('.sidebar-item').addClass('active-menu');
            }
        });

        // Sembunyikan elemen loading setelah halaman selesai dimuat
        window.addEventListener('load', function() {
            document.getElementById('loading2').style.display = 'none';
        });
    });
</script>

</body>
</html>
<?php echo $__env->make('layouts.dashboard.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\Warna_terbaru\Warna-Udiklat\resources\views/layouts/dashboard/header.blade.php ENDPATH**/ ?>