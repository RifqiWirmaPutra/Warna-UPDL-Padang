<?php $__env->startSection('content'); ?>
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold">Daftar Jenis Penginapan</h1>
            <a href="<?php echo e(route('admin.jenisPenginapan.create')); ?>" class="btn btn-primary">Tambah Jenis Penginapan</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead class="table-light">
                    <tr>
                        <th class="text-center">Nama dan Nomor Kamar</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $jenisPenginapans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenisPenginapan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="align-middle text-center">
                                <?php echo e($jenisPenginapan->nama); ?> - <?php echo e($jenisPenginapan->nomorKamar); ?>

                            </td>
                            <td class="text-center align-middle">
                                <a href="<?php echo e(route('admin.jenisPenginapan.edit', $jenisPenginapan->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <form action="<?php echo e(route('admin.jenisPenginapan.destroy', $jenisPenginapan->id)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Hapus data ini?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="2" class="text-center">Belum ada data jenis penginapan.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\qi\Project Warna\1\Warna-Udiklat\resources\views/admin/jenisPenginapan/index.blade.php ENDPATH**/ ?>