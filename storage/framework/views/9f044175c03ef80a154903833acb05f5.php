<?php $__env->startSection('content'); ?>
<div class="page-heading">
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <a href="#" class="btn btn-info mb-2" data-toggle="modal" data-target="#download">Download</a>
            <div class="modal fade" id="download" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pilih Tipe File yang Akan Diunduh</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="text-center">
                            <a href="<?php echo e(url('admin/daftarhadir/download/excel')); ?>" class="btn btn-outline-primary">Download Excel</a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Daftar Hadir
            </div>
            <div class="card-body small">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th style="min-width: 50px;">No</th>
                            <th style="min-width: 150px;">Nip</th>
                            <th style="min-width: 150px;">Nama</th>
                            <th style="min-width: 150px;">Judul</th>
                            <th style="min-width: 150px;">Jenis Permintaan Diklat</th>
                            <th style="min-width: 150px;">Tanggal Kehadiran</th>
                            <th style="min-width: 150px;">Penggantian Kuota</th>
                            <th style="min-width: 150px;">No HP</th>
                            <th style="min-width: 150px;">Kehadiran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($absensiPeserta->count() > 0): ?>
                        <?php $__currentLoopData = $absensiPeserta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                            <td class="align-middle"><?php echo e($rs->nip); ?></td>
                            <td class="align-middle"><?php echo e($rs->nama); ?></td>
                            <td class="align-middle"><?php echo e($rs->judul); ?></td>
                            <td class="align-middle"><?php echo e($rs->jenis_permintaan_diklat); ?></td>
                            <td class="align-middle"><?php echo e($rs->tanggal_absensi); ?></td>
                            <td class="align-middle"><?php echo e($rs->penggantian_kuota); ?></td>
                            <td class="align-middle"><?php echo e($rs->no_hp); ?></td>
                            <td class="align-middle"><?php echo e($rs->absensi); ?></td>
                            
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <tr>
                            <td class="text-center" colspan="5"> Data Tidak Ditemukan</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\qi\Project Warna\1\Warna-Udiklat\resources\views/admin/adh/adh.blade.php ENDPATH**/ ?>