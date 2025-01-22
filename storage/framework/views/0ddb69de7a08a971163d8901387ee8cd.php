<?php $__env->startSection('content'); ?>
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">Daftar Booking</h1>
            <a href="<?php echo e(route('admin.monitoring.list')); ?>" class="btn btn-secondary shadow-sm">
                <i class="bi bi-list"></i> Lihat Daftar Monitoring
            </a>
        </div>

        
        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="table-responsive shadow rounded-3 p-3 bg-white">
            <table class="table table-striped table-hover shadow-sm">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Jenis Penginapan dan Kamar</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Keluar</th>
                        <th>Total Hari</th>
                        <th>Email</th>
                        <th>No. HP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="text-center">
                                <span class="fw-bold text-primary">
                                    <?php echo e($booking->penginapan->tipePenginapan); ?>

                                </span> &
                                <span class="fw-bold text-primary">
                                    <?php echo e($booking->pilihanKamar); ?>

                                </span>
                            </td>
                            <td class="text-center"><?php echo e($booking->tanggalMasuk); ?></td>
                            <td class="text-center"><?php echo e($booking->tanggalKeluar); ?></td>
                            <td class="text-center">
                                <?php
                                    try {
                                        $tanggalMasuk = \Carbon\Carbon::parse($booking->tanggalMasuk);
                                        $tanggalKeluar = \Carbon\Carbon::parse($booking->tanggalKeluar);
                                        $totalHari = $tanggalMasuk->diffInDays($tanggalKeluar);
                                    } catch (\Exception $e) {
                                        $totalHari = 'Tidak valid';
                                    }
                                ?>
                                <?php echo e($totalHari); ?> hari
                            </td>
                            <td class="text-center"><?php echo e($booking->email); ?></td>
                            <td class="text-center"><?php echo e($booking->noHP); ?></td>


                            <td class="text-center">
                                <a href="<?php echo e(route('admin.monitoring.create', $booking->id)); ?>" class="btn btn-primary btn-sm">
                                    <i class="bi bi-door-open"></i> Pilih Kamar
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5" class="text-center text-muted">Belum ada data booking.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\qi\Project Warna\1\Warna-Udiklat\resources\views/admin/monitoring/index.blade.php ENDPATH**/ ?>