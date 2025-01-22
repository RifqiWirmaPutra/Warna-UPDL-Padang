<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header fw-bold">
                Berikut Informasi Pembelajaran Anda
            </div>

            <div class="card-body small">
                <div class="table-responsive">
                    <?php if(Session::has('success')): ?>
                        <div class="alert alert-success alert-dismissible show fade" role="alert">
                            <?php echo e(Session::get('success')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <?php if(Session::has('error')): ?>
                        <div class="alert alert-danger alert-dismissible show fade" role="alert">
                            <?php echo e(Session::get('error')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <table class="table table-striped table-hover" id="table1">
                        <thead style="background-color: #00008B; color: white;">
                            <tr>
                                <th style="min-width: 70px;">No</th>
                                <th style="min-width: 150px;">Tanggal Mulai</th>
                                <th style="min-width: 150px;">Tanggal Selesai</th>
                                <th style="min-width: 150px;">Kode</th>
                                <th style="min-width: 250px;">Judul</th>
                                <th style="min-width: 200px;">Jenis Permintaan Diklat</th>
                                <th style="min-width: 200px;">Jenis Pelaksanaan Diklat</th>
                                <th style="min-width: 150px;">Instruktur</th>
                                <th style="min-width: 150px;">Kelas</th>
                                <th style="min-width: 150px;">Wisma</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $loggedInUser = Auth::user();
                                $arp = $loggedInUser->arp;
                            ?>

                            <?php if($arp): ?>
                                <tr>
                                    <td class="align-middle text-center">1</td>
                                    <td class="align-middle"><?php echo e(date_format(date_create($arp->tanggal_mulai), 'd-m-Y')); ?></td>
                                    <td class="align-middle"><?php echo e(date_format(date_create($arp->tanggal_selesai), 'd-m-Y')); ?></td>
                                    <td class="align-middle"><?php echo e($arp->kode); ?></td>
                                    <td class="align-middle"><?php echo e($arp->judul); ?></td>
                                    <td class="align-middle"><?php echo e($arp->jenis_permintaan_diklat); ?></td>
                                    <td class="align-middle"><?php echo e($arp->jenis_pelaksanaan_diklat); ?></td>
                                    <td class="align-middle"><?php echo e($arp->instruktur); ?></td>
                                    <td class="align-middle"><?php echo e($arp->kelas); ?></td>
                                    <td class="align-middle"><?php echo e($arp->wisma); ?></td>
                                </tr>
                            <?php else: ?>
                                <tr>
                                    <td class="text-center" colspan="13"> Data Tidak Ditemukan</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- ini script yang membuat table No sampai Tanggal Selesai bisa freeze -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/3.3.3/js/dataTables.fixedColumns.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.3.3/css/fixedColumns.dataTables.min.css">

<script>
    $(document).ready(function() {
        var table = $('#table1').DataTable({
            scrollX: true,
            fixedColumns: {
                leftColumns: 3 // Kolom "No", "Tanggal Mulai", dan "Tanggal Selesai" di-freeze
            }
        });
    });
</script>

<style>
    .table-responsive {
        overflow-x: auto;
    }

    .table {
        width: 100%;
        max-width: none;
    }

    .table th {
        white-space: nowrap;
    }
</style>

<script src="<?php echo e(asset('assets/js/circular-menu/menu.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.5.1/snap.svg-min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\part 2\Warna-Udiklat\resources\views/user/uip.blade.php ENDPATH**/ ?>