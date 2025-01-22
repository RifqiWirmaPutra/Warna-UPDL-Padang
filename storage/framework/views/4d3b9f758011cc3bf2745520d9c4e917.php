<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Daftar Monitoring</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <a href="<?php echo e(route('admin.monitoring.create')); ?>" class="btn btn-primary mb-3">Tambah Monitoring</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $monitoring; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($data->nama); ?></td>
                    <td><?php echo e($data->tanggal); ?></td>
                    <td><?php echo e($data->status); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.monitoring.edit', $data->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('admin.monitoring.destroy', $data->id)); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\part 2\Warna-Udiklat\resources\views/admin/monitoring/index.blade.php ENDPATH**/ ?>