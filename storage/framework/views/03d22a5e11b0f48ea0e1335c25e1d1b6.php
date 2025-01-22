<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-heading text-center">
        <h2>Pengaturan Konfirmasi dan Absensi</h2>
    </div>
    <!-- success -->
    <?php if(Session::has('success')): ?>
    <div class="alert alert-success alert-dismissible show fade" role="alert"><?php echo e(Session::get('success')); ?><button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button></div>
    <?php endif; ?>
    <!-- error -->
    <?php if(Session::has('error')): ?>
    <div class="alert alert-danger alert-dismissible show fade" role="alert"><?php echo e(Session::get('error')); ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
    <?php endif; ?>
    <div class="card">
        <div class="card-body">
            <form action="<?php echo e(route('settings.absensi.update')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="confirmation_start_time">Waktu Mulai Konfirmasi:</label>
                            <input type="time" name="confirmation_start_time" id="confirmation_start_time" class="form-control" value="<?php echo e(\App\Models\SettingHari::get('confirmation_start_time')); ?>" >
                        </div>    
                        <div class="form-group">
                            <label for="confirmation_end_time">Waktu Akhir Konfirmasi:</label>
                            <input type="time" name="confirmation_end_time" id="confirmation_end_time" class="form-control" value="<?php echo e(\App\Models\SettingHari::get('confirmation_end_time')); ?>" >
                        </div>
                        <div class="form-group">
                            <label for="absence_start_time">Waktu Mulai Absensi:</label>
                            <input type="time" name="absence_start_time" id="absence_start_time" class="form-control" value="<?php echo e(\App\Models\SettingHari::get('absence_start_time')); ?>" >
                        </div>
                        <div class="form-group">
                            <label for="absence_end_time">Waktu Akhir Absensi:</label>
                            <input type="time" name="absence_end_time" id="absence_end_time" class="form-control" value="<?php echo e(\App\Models\SettingHari::get('absence_end_time')); ?>" >
                        </div>
                    </div><p>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hari yang Diizinkan:</label><br>
                                <?php
                                $checkedDays = explode(',', \App\Models\SettingHari::get('allowed_days'));
                                ?>
                                <label><input type="checkbox" name="allowed_days[]" value="0" <?php echo e(in_array('0', $checkedDays) ? 'checked' : ''); ?>> Minggu</label>
                                <label><input type="checkbox" name="allowed_days[]" value="1" <?php echo e(in_array('1', $checkedDays) ? 'checked' : ''); ?>> Senin</label>
                                <label><input type="checkbox" name="allowed_days[]" value="2" <?php echo e(in_array('2', $checkedDays) ? 'checked' : ''); ?>> Selasa</label>
                                <label><input type="checkbox" name="allowed_days[]" value="3" <?php echo e(in_array('3', $checkedDays) ? 'checked' : ''); ?>> Rabu</label>
                                <label><input type="checkbox" name="allowed_days[]" value="4" <?php echo e(in_array('4', $checkedDays) ? 'checked' : ''); ?>> Kamis</label>
                                <label><input type="checkbox" name="allowed_days[]" value="5" <?php echo e(in_array('5', $checkedDays) ? 'checked' : ''); ?>> Jum'at</label>
                                <label><input type="checkbox" name="allowed_days[]" value="6" <?php echo e(in_array('6', $checkedDays) ? 'checked' : ''); ?>> Sabtu</label>
                            </div>
                        </div>
                    </div><p>
                        <button type="button" class="btn btn-secondary bg-secondary" id="resetTimes">Reset Waktu</button>
                        <button type="submit" class="btn btn-primary bg-primary">Simpan Pengaturan</button>
                    </form>
                </div>
            </div>
        </div>
        <script>
        document.getElementById('resetTimes').addEventListener('click', function() {
        // Reset nilai kolom waktu ke kosong (null)
        document.getElementById('confirmation_start_time').value = '';
        document.getElementById('confirmation_end_time').value = '';
        document.getElementById('absence_start_time').value = '';
        document.getElementById('absence_end_time').value = '';
        });
        </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\qi\Project Warna\1\Warna-Udiklat\resources\views/admin/setting_hari.blade.php ENDPATH**/ ?>