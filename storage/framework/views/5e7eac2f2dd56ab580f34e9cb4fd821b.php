<?php $__env->startSection('content'); ?>

<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="<?php echo e(route('wlcm')); ?>">Beranda</a></li>
        <li>Informasi</li>
      </ol>
      <h2>Informasi</h2>
    </div>
  </section>
  <!-- End Breadcrumbs -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="section-title">
        <h2>Info Kegiatan Kami</h2>
        <p>Temukan Rincian Kegiatan Terbaru Kami</p>
      </div>
      <div class="row portfolio-container">
  <?php $__currentLoopData = $informasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $informasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="margin-bottom: 50px;">
      <div class="portfolio-wrap" style="position: relative; overflow: hidden;">
        <img src="<?php echo e(asset('storage/' . str_replace('public/', '', $informasi->foto))); ?>"
        style="width: 100%; height: 230px; object-fit: cover;" alt="<?php echo e($informasi->judul); ?>">
        <div class="portfolio-info" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0, 0, 0, 0.6); color: #fff; padding: 10px; text-align: center;">
          <h4><?php echo e($informasi->judul); ?></h4>
          <!-- <p><?php echo e($informasi->keterangan); ?></p> -->
          <div class="portfolio-links">
            <a href="<?php echo e(asset('storage/' . str_replace('public/', '', $informasi->foto))); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo e($informasi->judul); ?>" style="color: #fff; margin-right: 5px;"><i class="bi bi-eye-fill"></i></i></a>
            <a href="<?php echo e(route('informasi-details.show', ['id' => $informasi->id])); ?>" title="Lihat Selengkapnya" style="color: #fff;"><i class="bi bi-bookmarks-fill"></i></i></a>
          </div>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </section>
  <!-- End Portfolio Section -->
  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container">

    </div>
  </section>
  <!-- End Clients Section -->
</main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\part 2\Warna-Udiklat\resources\views/layouts/dashboard/informasi.blade.php ENDPATH**/ ?>