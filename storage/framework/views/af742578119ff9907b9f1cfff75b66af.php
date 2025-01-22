<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            Edit Penginapan
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('admin.penginapan.update', $penginapan->id)); ?>" method="POST"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="form-group">
                    <label for="tipePenginapan">Tipe Penginapan:</label>
                    <input type="text" name="tipePenginapan" class="form-control" value="<?php echo e($penginapan->tipePenginapan); ?>"
                        required>
                </div>

                <div class="form-group">
                    <label for="hargadpln">Harga Daily PLN:</label>
                    <input type="number" name="hargadpln" class="form-control" value="<?php echo e($penginapan->hargadpln); ?>"
                        required>
                </div>

                <div class="form-group">
                    <label for="hargampln">Harga Monthly PLN:</label>
                    <input type="number" name="hargampln" class="form-control" value="<?php echo e($penginapan->hargampln); ?>"
                        required>
                </div>

                <div class="form-group">
                    <label for="hargadnonpln">Harga Daily Non PLN:</label>
                    <input type="number" name="hargadnonpln" class="form-control" value="<?php echo e($penginapan->hargadnonpln); ?>"
                        required>
                </div>

                <div class="form-group">
                    <label for="hargamnonpln">Harga Monthly Non PLN:</label>
                    <input type="number" name="hargamnonpln" class="form-control" value="<?php echo e($penginapan->hargamnonpln); ?>"
                        required>
                </div>

                <div class="form-group">
                    <label for="keterangan">Keterangan:</label>
                    <textarea name="keterangan" class="form-control" required><?php echo e($penginapan->keterangan); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="fotoPenginapan">Foto Penginapan:</label>
                    <input type="file" name="fotoPenginapan" class="form-control">
                    <small>Biarkan kosong jika tidak ingin mengganti foto.</small>
                </div>

                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
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
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Magang\vkita\Iklat\Warna-Udiklat\resources\views/admin/penginapan/edit.blade.php ENDPATH**/ ?>