<?php $__env->startSection('content'); ?>


 



<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="<?php echo e(route('wlcm')); ?>">Beranda</a></li>
          <li>Jasa & Layanan</li>
        </ol>
        <h2>Jasa & Layanan</h2>
      </div>
    </section><!-- End Breadcrumbs -->

<section id="portfolio" class="portfolio">
    <div class="container">
      <div class="section-title">
        <h2>Info Jasa & Layanan Kami</h2>
        <p>Temukan Rincian Jasa &Layanan Kami</p>
      </div>
    </div>
  </section>

<section id="featured" class="featured">

    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <div class="icon-box">
          <a href="<?php echo e(route('penginapan.index')); ?>">
            <img src="<?php echo e(asset('assets/images/10.png')); ?>" alt="Icon 1" class="img-fluid mb-3" style="max-width: 60px;">
            <h3 class="text-dark">PENGINAPAN</h3>
            <p>Lihat Informasi Penginapan Disini</p>
            </a>
          </div>
        </div>

        <div class="col-lg-3 mt-4 mt-lg-0">
          <div class="icon-box">
          <a href="<?php echo e(route('ruangan.index')); ?>">
            <img src="<?php echo e(asset('assets/images/9.png')); ?>" alt="Icon 2" class="img-fluid mb-3" style="max-width: 60px;">
            <h3 class="text-dark">RUANGAN</h3>
            <p>Lihat Informasi Ruangan Disini</p>
            </a>
          </div>
        </div>

        <div class="col-lg-3 mt-4 mt-lg-0">
          <div class="icon-box">
          <a href="<?php echo e(route('peralatan.index')); ?>">
            <img src="<?php echo e(asset('assets/images/8.png')); ?>" alt="Icon 3" class="img-fluid mb-3" style="max-width: 60px;">
            <h3 class="text-dark">PERALATAN</h3>
            <p>Lihat Informasi Peralatan Disini</p>
            </a>
          </div>
        </div>

        <div class="col-lg-3 mt-4 mt-lg-0">
          <div class="icon-box">
          <a href="<?php echo e(route('pembelajaran.index')); ?>">
            <!-- <i class="bi bi-binoculars"></i> -->
            <img src="<?php echo e(asset('assets/images/11.png')); ?>" alt="Icon 4" class="img-fluid mb-3" style="max-width: 60px;">
            <h3 class="text-dark">PEMBELAJARAN</h3>
            <p>Lihat Informasi Pembelajaran Disini</p>
            </a>
          </div>
        </div>
        
      </div>

    </div>

</section><!-- End Featured Section -->
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\Warna_terbaru\Warna-Udiklat\resources\views/layouts/dashboard/jasa_layanan.blade.php ENDPATH**/ ?>