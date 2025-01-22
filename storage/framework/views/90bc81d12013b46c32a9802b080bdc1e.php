<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <!-- Container sebelah kiri -->
            <div class="col-md-4">
                <div class="card shadow-sm mb-4">
                    <!-- Gambar Wisma -->
                    <img src="<?php echo e(asset('assets/storage/penginapan/1726539531.png')); ?>" alt="Room Image"
                        class="img-fluid rounded-top mb-4" style="height: 200px; object-fit: cover; width: 100%;" />

                    <div class="card-body">
                        <!-- Nama Wisma -->
                        <?php if(session('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo e(session('success')); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        <?php endif; ?>
                        <h4 class="card-title font-weight-bold mb-2">Wisma UP 7</h4>
                        <p class="text-muted mb-4">Family Room</p>

                        <!-- Tanggal Check-in dan Check-out -->
                        <form action="<?php echo e(route('layouts.booking.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row mb-4">
                                
                                
                            </div>
                        </form>

                        <!-- Detail Kamar -->
                        <p class="text-sm font-weight-bold mb-2">(1x) Wisma UP 7.2 Twin Bed</p>
                        <ul class="list-unstyled mb-3">
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-user-friends text-secondary mr-2"></i>
                                <span>2 Tamu</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-bed text-secondary mr-2"></i>
                                <span>2 Single Bed</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-wifi text-secondary mr-2"></i>
                                <span>WiFi</span>
                            </li>
                        </ul>

                        <!-- Total Harga -->
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="mb-0 font-weight-bold">Total Harga Kamar</p>
                            <p class="mb-0 font-weight-bold">Rp 350.000</p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Container sebelah kanan (form booking) -->
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Book a Room</h3>
                    </div>

                    <div class="card-body">
                        <?php if(session('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo e(session('success')); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <form action="<?php echo e(route('layouts.booking.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="tanggalMasuk" class="form-label">Check-In Date</label>
                                <input type="date" id="tanggalMasuk" name="tanggalMasuk" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggalKeluar" class="form-label">Check-Out Date</label>
                                <input type="date" id="tanggalKeluar" name="tanggalKeluar" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="noHP" class="form-label">Phone Number</label>
                                <input type="text" id="noHP" name="noHP" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" id="nik" name="nik" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="nip" class="form-label">NIP</label>
                                <input type="text" id="nip" name="nip" class="form-control" required>
                            </div>
                            <div class="mb-4">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" required />
                                    <span class="ml-2 text-sm">Saya setuju dengan <a href="#"
                                            class="text-blue-600">Kebijakan dan Privasi</a></span>
                                </label>
                            </div>
                            <div class="mb-4">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" required />
                                    <span class="ml-2 text-sm">Saya setuju dengan <a href="#"
                                            class="text-blue-600">Syarat dan Ketentuan</a></span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Submit Booking</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .date-input {
            font-size: 0.80rem;
            line-height: 1.00rem;
        }

        .card-header h4,
        .card-header h3 {
            font-weight: bold;
        }

        .list-group-item {
            font-size: 14px;
        }
    </style>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php $__env->stopSection(); ?>








<?php echo $__env->make('layouts.dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Magang\vkita\Iklat\Warna-Udiklat\resources\views/layouts/booking/create.blade.php ENDPATH**/ ?>