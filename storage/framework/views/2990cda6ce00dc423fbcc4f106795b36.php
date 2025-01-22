<?php $__env->startSection('content'); ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <a href="#" class="btn btn-info mb-2">Download</a>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                Daftar Hadir
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

            <div class="card-body small">
                <form action="<?php echo e(route('adh.terimaAjukan')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th style="min-width: 50px;">No</th>
                                <th style="min-width: 150px;">Nip</th>
                                <th style="min-width: 150px;">Nama</th>
                                <th style="min-width: 150px;">Judul</th>
                                <th style="min-width: 150px;">Kehadiran</th>
                                <th style="min-width: 150px;">Alasan</th>
                                <th style="min-width: 150px;">Jenis Permintaan Diklat</th>
                                <th style="min-width: 150px;">Tanggal Absensi</th>
                                <th style="min-width: 150px;">Penggantian Kuota</th>
                                <th style="min-width: 150px;">No HP</th>
                                <th style="min-width: 150px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php if($telatAbsen->count() > 0): ?>
                            <?php $__currentLoopData = $telatAbsen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <input type="hidden" name="id" value="<?php echo e($rs->id); ?>">
                            <tr>
                                <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                                <td class="align-middle">
                                    <?php echo e($rs->nip); ?>

                                    <input type="hidden" name="nip" value="<?php echo e($rs->nip); ?>" readonly>
                                </td>
                                <td class="align-middle">
                                    <?php echo e($rs->nama); ?>

                                    <input type="hidden" name="nama" value="<?php echo e($rs->nama); ?>" readonly>
                                </td>
                                <td class="align-middle">
                                    <?php echo e($rs->judul); ?>

                                    <input type="hidden" name="judul" value="<?php echo e($rs->judul); ?>" readonly>
                                </td>
                                <td class="align-middle">
                                    <?php echo e($rs->absensi); ?>

                                </td>
                                <td class="align-middle">
                                    <?php echo e($rs->alasan); ?>

                                    <input type="hidden" name="alasan" value="<?php echo e($rs->alasan); ?>" readonly>
                                </td>
                                <td class="align-middle">
                                    <?php echo e($rs->jenis_permintaan_diklat); ?>

                                    <input type="hidden" name="alasan_permintaan_diklat" value="<?php echo e($rs->jenis_permintaan_diklat); ?>" readonly>
                                </td>
                                <td class="align-middle">
                                    <?php echo e($rs->tanggal_absensi); ?>

                                    <input type="hidden" name="tanggal_absensi" value="<?php echo e($rs->tanggal_absensi); ?>" readonly>
                                </td>
                                <td class="align-middle">
                                    <?php echo e($rs->penggantian_kuota); ?>

                                    <input type="hidden" name="penggantian_kuota" value="<?php echo e($rs->penggantian_kuota); ?>" readonly>
                                </td>
                                <td class="align-middle">
                                    <?php echo e($rs->no_hp); ?>

                                    <input type="hidden" name="no_hp" value="<?php echo e($rs->no_hp); ?>" readonly>
                                </td>
                                <td class="align-middle">
                                    <?php echo e($rs->arp_id); ?>

                                    <input type="hidden" name="arp_id" value="<?php echo e($rs->arp_id); ?>" readonly>
                                </td>
                                <td class="align-middle">
                                    <input type="hidden" name="absensi" value="hadir" readonly>
                                    <button type="submit" class="btn btn-primary bg-primary">Terima</button>
                                </td>
                                <td class="align-middle">
                                    <input type="hidden" name="user_id" value="<?php echo e($rs->user_id); ?>" readonly>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <tr>
                                <td class="text-center" colspan="5"> Data Tidak Ditemukan</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Magang\vkita\Iklat\warna rizky\Warna_terbaru\Warna-Udiklat\resources\views/admin/adh/pengajuan/index.blade.php ENDPATH**/ ?>