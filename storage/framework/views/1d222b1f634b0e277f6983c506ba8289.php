<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Daftar Pemesanan
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <?php if(Session::has('success')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(Session::get('success')); ?>

                            </div>
                        <?php endif; ?>
                        <table class="table table-bordered table-striped mb-0" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Tanggal Keluar</th>
                                    <th>Email</th>
                                    <th>Nomor HP</th>
                                    <th>Nomor NIK</th>
                                    <th>Nomor NIP</th>
                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($booking->tanggalMasuk->format('Y-m-d')); ?></td>
                                        <td><?php echo e($booking->tanggalKeluar->format('Y-m-d')); ?></td>
                                        <td><?php echo e($booking->email); ?></td>
                                        <td><?php echo e($booking->noHP); ?></td>
                                        <td><?php echo e($booking->nik); ?></td>
                                        <td><?php echo e($booking->nip); ?></td>
                                        
                                        <td>
                                            <!-- Add actions if needed -->
                                            <!-- Example action: -->
                                            
                                            <form action="<?php echo e(route('admin.bookings.destroy', $booking->id)); ?>"
                                                method="POST" style="display:inline;">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                        
                                        <td>
                                            <?php if($booking->status == 0): ?>
                                                <form action="<?php echo e(route('admin.bookings.confirm', $booking->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit">Confirm</button>
                                                </form>
                                            <?php else: ?>
                                                <span>Already Confirmed</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="7" class="text-center">No bookings found.</td>
                                    </tr>
                                <?php endif; ?>
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
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Magang\vkita\Iklat\Warna-Udiklat\resources\views/admin/bookings/index.blade.php ENDPATH**/ ?>