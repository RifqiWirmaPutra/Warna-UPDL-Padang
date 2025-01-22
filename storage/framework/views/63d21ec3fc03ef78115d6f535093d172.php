<<<<<<< HEAD
=======

>>>>>>> df8c089bbb22f01aebda973dff238feab8c40530
<?php $__env->startSection('content'); ?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <ol>
<<<<<<< HEAD
        <li><a href="<?php echo e(route('wlcm')); ?>">Beranda</a></li>
=======
        <li><a href="<?php echo e(route('wlcm')); ?>">Beranda</a></li>
>>>>>>> df8c089bbb22f01aebda973dff238feab8c40530
        <li>Peralatan</li>
      </ol>
      <h2>Peralatan</h2>
    </div>
  </section><!-- End Breadcrumbs -->

<<<<<<< HEAD
  

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container">
          <div class="section-title">
            <h2>Info Peralatan Kami</h2>
            <p>Temukan Info Peralatan Kami</p>
          </div>
        </div>
      </section>
      
      <?php $__env->stopSection(); ?>
=======
  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="section-title">
        <h2>Info Peralatan Kami</h2>
        <p>Temukan Info Peralatan Kami</p>
      </div>

      <!-- Tabel Peralatan -->
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Alat</th>
              <th>Jumlah Tersedia</th>
              <th>Harga Sewa Per pcs</th>
              <th>Tanggal Mulai Pakai</th>
              <th>Tanggal Kembali</th>
              <th>Boking</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $peralatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $alat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <!-- Warna kuning, diisi dari backend -->
              <td><?php echo e($index + 1); ?></td>
              <td><?php echo e($alat->nama); ?></td>
              <td><?php echo e($alat->jumlah_tersedia); ?></td>
              <td>Rp. <?php echo e(number_format($alat->harga_sewa_per_pcs, 0, ',', '.')); ?></td>

              <!-- Warna hijau, diisi oleh pelanggan -->
              <td>
                <input type="date" name="tanggal_mulai_pakai_<?php echo e($alat->id); ?>" class="form-control">
              </td>
              <td>
                <input type="date" name="tanggal_kembali_<?php echo e($alat->id); ?>" class="form-control">
              </td>

              <!-- Warna biru, otomatis dari sistem -->
              <td>
                <a href="<?php echo e(route('booking', $alat->id)); ?>" class="btn btn-primary">Booking</a>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>

      <!-- Bagian Footer untuk Total Peralatan dan Biaya Sewa -->
      <div class="row mt-3">
        <div class="col-md-6">
          <p>Jumlah Peralatan: <strong><?php echo e($jumlah_peralatan); ?> pcs</strong></p>
        </div>
        <div class="col-md-6">
          <p>Jumlah Biaya Sewa: <strong>Rp. <?php echo e(number_format($jumlah_biaya_sewa, 0, ',', '.')); ?></strong></p>
        </div>
      </div>

      <!-- Tombol Booking -->
      <div class="text-center">
        <a href="<?php echo e(route('booking')); ?>" class="btn btn-success">Booking</a>
      </div>

    </div>
  </section><!-- End Portfolio Section -->

</main><!-- End #main -->

<?php $__env->stopSection(); ?>
>>>>>>> df8c089bbb22f01aebda973dff238feab8c40530

<?php echo $__env->make('layouts.dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\part 2\Warna-Udiklat\resources\views/layouts/dashboard/peralatandashboard.blade.php ENDPATH**/ ?>