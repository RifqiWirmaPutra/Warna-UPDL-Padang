<?php $__env->startSection('content'); ?>
<div class="container my-5">
    <h1>Tambah Jenis Penginapan</h1>
    <form action="<?php echo e(route('admin.jenisPenginapan.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <!-- Dropdown Nama -->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <select name="nama" id="nama" class="form-select" required>
                <option value="Merapi">Merapi</option>
                <option value="Kerinci">Kerinci</option>
                <option value="UP">UP</option>
            </select>
        </div>

        <!-- Dropdown Nomor Kamar -->
        <div class="mb-3">
            <label for="nomorKamar" class="form-label">Nomor Kamar</label>
            <select name="nomorKamar" id="nomorKamar" class="form-select" required>
                <optgroup label="Lantai 1 dan 2">
                    <?php for($i = 101; $i <= 110; $i++): ?>
                        <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                    <?php endfor; ?>
                </optgroup>
                <optgroup label="Khusus UP">
                    <?php for($i = 1; $i <= 7; $i++): ?>
                        <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                    <?php endfor; ?>
                </optgroup>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\qi\Project Warna\1\Warna-Udiklat\resources\views/admin/jenisPenginapan/create.blade.php ENDPATH**/ ?>