<?php $__env->startSection('content'); ?>
    <div class="container my-5">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 text-primary">
                <i class="bi bi-house-door-fill"></i> Monitoring Ketersediaan Kamar
            </h1>
            <a href="<?php echo e(route('admin.monitoring.index')); ?>" class="btn btn-secondary shadow-sm">
                <i class="bi bi-arrow-left-circle"></i> Kembali
            </a>
        </div>

        
        <?php if(session('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                <i class="bi bi-exclamation-triangle-fill"></i> <?php echo e(session('error')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                <i class="bi bi-check-circle-fill"></i> <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        
        <div class="table-responsive shadow rounded-3 p-3 bg-white">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Jenis Penginapan</th>
                        <th>Nama Kamar</th>
                        <th>Nomor Kamar</th>
                        <th>Status</th>
                        <th>Email</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Keluar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="text-center text-primary"><?php echo e($room['jenisPenginapan']); ?></td>
                            <td class="text-center"><?php echo e($room['namaKamar']); ?></td>
                            <td class="text-center"><?php echo e($room['nomorKamar']); ?></td>
                            <td class="text-center">
                                <span class="badge
                                    <?php echo e($room['status'] == 1 ? 'bg-danger' : ($room['status'] == 2 ? 'bg-warning' : 'bg-success')); ?>">
                                    <?php echo e($room['statusLabel']); ?>

                                </span>
                            </td>
                            <td class="text-center"><?php echo e($room['email']); ?></td>
                            <td class="text-center"><?php echo e($room['tanggalMasuk']); ?></td>
                            <td class="text-center"><?php echo e($room['tanggalKeluar']); ?></td>
                            <td class="text-center">
                                <?php if(!$room['status'] || $room['status'] == 2): ?>
                                    <?php
                                        $conflict = collect($rooms)
                                            ->where('nomorKamar', $room['nomorKamar'])
                                            ->where('jenisPenginapan', $room['jenisPenginapan'])
                                            ->where('status', 1)
                                            ->count();
                                    ?>
                                    <?php if($conflict == 0): ?>
                                        <form action="<?php echo e(route('admin.monitoring.updateStatus', $room['id'])); ?>" method="POST" class="d-inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PATCH'); ?>
                                            <input type="hidden" name="status" value="1">
                                            <button type="submit" class="btn btn-warning btn-sm text-dark shadow-sm me-2">
                                                <i class="bi bi-check-circle"></i> Tandai Booking
                                            </button>
                                        </form>
                                    <?php else: ?>
                                        <span class="text-danger">Nomor kamar <?php echo e($room['nomorKamar']); ?> untuk jenis <?php echo e($room['jenisPenginapan']); ?> sudah dibooking.</span>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <form action="<?php echo e(route('admin.monitoring.destroy', $room['id'])); ?>" method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm text-dark shadow-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">
                                <i class="bi bi-info-circle"></i> Data kamar belum tersedia.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\qi\Project Warna\1\Warna-Udiklat\resources\views/admin/monitoring/list.blade.php ENDPATH**/ ?>