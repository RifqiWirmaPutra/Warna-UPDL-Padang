<?php $__env->startSection('content'); ?>
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">Form Pemilihan Kamar</h1>
            <a href="<?php echo e(route('admin.monitoring.index')); ?>" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>

        <form action="<?php echo e(route('admin.monitoring.store')); ?>" method="POST" class="bg-light p-4 rounded shadow-sm">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="booking_id" value="<?php echo e($booking->id); ?>">

            
            <div class="mb-3">
                <label for="jenisPenginapan" class="form-label">Jenis Penginapan</label>
                <select name="jenisPenginapan" id="jenisPenginapan" class="form-select" required>
                    <option value="Standar">Standar</option>
                    <option value="Family">Family</option>
                </select>
            </div>

            
            <div class="mb-3">
                <label for="namaKamar" class="form-label">Nama Kamar</label>
                <select name="namaKamar" id="namaKamar" class="form-select" required>
                    <option value="Kerinci">Kerinci</option>
                    <option value="Merapi">Merapi</option>
                    <option value="Up">Up</option>
                </select>
            </div>

            
            <div class="mb-3">
                <label for="nomorKamar" class="form-label">Nomor Kamar</label>
                <select name="nomorKamar" id="nomorKamar" class="form-select" required>
                    <optgroup label="Lantai 1">
                        <?php for($i = 101; $i <= 107; $i++): ?>
                            <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                        <?php endfor; ?>
                    </optgroup>
                    <optgroup label="Lantai 2">
                        <?php for($i = 201; $i <= 207; $i++): ?>
                            <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                        <?php endfor; ?>
                    </optgroup>
                    <optgroup label="Kamar Khusus">
                        <?php for($i = 1; $i <= 7; $i++): ?>
                            <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                        <?php endfor; ?>
                    </optgroup>
                </select>
            </div>


            
            <div class="d-grid">
                <button type="submit" class="btn btn-success text-dark shadow-sm border-0 rounded-pill">
                    <i class="bi bi-check-circle me-2"></i> Simpan Data
                </button>
            </div>

        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Magang\vkita\Iklat\warna rizky\Warna_terbaru\Warna-Udiklat\resources\views/admin/monitoring/create.blade.php ENDPATH**/ ?>