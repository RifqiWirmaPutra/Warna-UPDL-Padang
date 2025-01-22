<?php $__env->startSection('content'); ?>
<!-- Basic Form section start -->
<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">KONFIRMASI KEHADIRAN</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="<?php echo e(route('udh.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nip">NIP</label>
                                        <input type="text" id="nip" class="form-control" name="nip" placeholder="NIP" value="<?php echo e(auth()->user()->nip); ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama" value="<?php echo e(auth()->user()->name); ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="konfirmasi">Konfirmasi Kehadiran</label><br>
                                        <input type="radio" id="iya" name="konfirmasi" value="iya" required>
                                        <label for="iya">Iya</label><br>
                                        <input type="radio" id="tidak" name="konfirmasi" value="tidak" required>
                                        <label for="tidak">Tidak</label>
                                    </div>
                                </div>
                                <!-- success -->
                                <?php if(Session::has('success')): ?>
                                <div class="alert alert-success alert-dismissible show fade" role="alert">
                                    <?php echo e(Session::get('success')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button>
                                </div>
                                <?php endif; ?>
                                <!-- error -->
                                <?php if(Session::has('error')): ?>
                                <div class="alert alert-danger alert-dismissible show fade" role="alert">
                                    <?php echo e(Session::get('error')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <?php endif; ?>
                                <div class="col-12 d-flex justify-content-end">
                                    <span class="mr-5">Konfirmasi Kehadiran Anda</span>
                                    <button type="submit" class="btn btn-primary bg-primary me-1 mb-1">Submit</button>
                                    <!-- <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Basic Form section end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\part 2\Warna-Udiklat\resources\views/user/udh.blade.php ENDPATH**/ ?>