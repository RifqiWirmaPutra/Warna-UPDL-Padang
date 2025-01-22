<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Daftar Penginapan
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <?php if(Session::has('success')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(Session::get('success')); ?>

                            </div>
                        <?php endif; ?>
                        <div class="btn btn-primary mb-3">
                            <a href="<?php echo e(route('admin.penginapan.create')); ?>" class="btn btn-primary">Tambah Penginapan</a>
                        </div>
                        <table class="table table-bordered table-striped mb-0" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tipe Penginapan</th>
                                    <th class="text-center">Foto Penginapan</th>
                                    <th>Harga Daily PLN</th>
                                    <th>Harga Monthly PLN</th>
                                    <th>Harga Daily Non PLN</th>
                                    <th>Harga Monthly Non PLN</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $penginapans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->tipePenginapan); ?></td>
                                        <td class="text-center">
                                            <!-- Menampilkan foto penginapan dengan ukuran yang sesuai -->
                                            <?php if($item->fotoPenginapan): ?>
                                                <img src="<?php echo e(asset('storage/storage/assets/penginapan/' . $item->fotoPenginapan)); ?>"
                                                    alt="Foto Penginapan"
                                                    style="width: 150px; height: auto; object-fit: cover;">
                                            <?php else: ?>
                                                Tidak Ada Foto
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($item->hargadpln); ?></td>
                                        <td><?php echo e($item->hargampln); ?></td>
                                        <td><?php echo e($item->hargadnonpln); ?></td>
                                        <td><?php echo e($item->hargamnonpln); ?></td>
                                        <td><?php echo e($item->keterangan); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('admin.penginapan.edit', $item->id)); ?>"
                                                class="btn btn-warning">Edit</a>
                                            <form action="<?php echo e(route('admin.penginapan.destroy', $item->id)); ?>"
                                                method="POST" style="display: inline">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .table-responsive {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            max-width: none;
        }

        .table th,
        .table td {
            white-space: nowrap;
        }

        /* Atur ukuran kolom foto */
        .table td img {
            max-width: 150px;
            height: auto;
        }

        /* Atur kolom action agar lebih rapi */
        .table td form {
            display: inline-block;
        }

        /* Tambahkan padding agar tabel tidak terlalu padat */
        .table th,
        .table td {
            padding: 10px;
            vertical-align: middle;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\qi\magang\Warna-Udiklat\resources\views/admin/penginapan/index.blade.php ENDPATH**/ ?>