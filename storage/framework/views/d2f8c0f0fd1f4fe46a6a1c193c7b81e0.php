<!-- resources/views/peralatans/index.blade.php -->

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Daftar Peralatan
            </div>
            <div class="card-body small">
                <div class="table-responsive">
                    <?php if(Session::has('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                    <?php endif; ?>
                    <div class="btn btn-primary mb-3">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#formTambah">Tambah Data</button>
                    </div>
                    <!-- Modal Tambah Data -->
                    <div class="modal fade text-left" id="formTambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Tambah Peralatan</h4>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <i data-feather="x"></i>
                                    </button>
                                </div>
                                <form action="<?php echo e(route('admin.peralatan.store')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="modal-body">
                                        <label>Nama Alat: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan Nama Alat" class="form-control" name="namaAlat" required>
                                        </div>
                                        <label>Jumlah Tersedia: </label>
                                        <div class="form-group">
                                            <input type="number" placeholder="Masukkan Jumlah Tersedia" class="form-control" name="jumlahTersedia" required>
                                        </div>
                                        <label>Harga: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan Harga" class="form-control" name="harga" required>
                                        </div>
                                        <label>Tanggal Pinjam: </label>
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="tanggalPinjam" required>
                                        </div>
                                        <label>Tanggal Kembali: </label>
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="tanggalKembali" required>
                                        </div>
                                        <label>Booking: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan Status Booking" class="form-control" name="booking" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Batal</span>
                                        </button>
                                        <button type="submit" class="btn btn-light-primary ml-1">
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Tambah</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal Tambah Data -->

                    <table class="table table-bordered table-striped mb-0" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Alat</th>
                                <th>Jumlah Tersedia</th>
                                <th>Harga</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Booking</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $peralatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                                <td class="align-middle"><?php echo e($item->namaAlat); ?></td>
                                <td class="align-middle"><?php echo e($item->jumlahTersedia); ?></td>
                                <td class="align-middle"><?php echo e($item->harga); ?></td>
                                <td class="align-middle"><?php echo e($item->tanggalPinjam); ?></td>
                                <td class="align-middle"><?php echo e($item->tanggalKembali); ?></td>
                                <td class="align-middle"><?php echo e($item->booking); ?></td>
                                <td class="align-middle">
                                    <div class="btn btn-primary">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#formEdit<?php echo e($item->id); ?>">Edit</button>
                                    </div>
                                    <div class="btn btn-danger">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#deletePeralatan<?php echo e($item->id); ?>">Hapus</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal Edit Data -->
                            <div class="modal fade text-left" id="formEdit<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Edit Peralatan</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <form action="<?php echo e(route('admin.peralatan.update', $item->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
                                            <div class="modal-body">
                                                <label>Nama Alat: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Masukkan Nama Alat" class="form-control" name="namaAlat" value="<?php echo e($item->namaAlat); ?>" required>
                                                </div>
                                                <label>Jumlah Tersedia: </label>
                                                <div class="form-group">
                                                    <input type="number" placeholder="Masukkan Jumlah Tersedia" class="form-control" name="jumlahTersedia" value="<?php echo e($item->jumlahTersedia); ?>" required>
                                                </div>
                                                <label>Harga: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Masukkan Harga" class="form-control" name="harga" value="<?php echo e($item->harga); ?>" required>
                                                </div>
                                                <label>Tanggal Pinjam: </label>
                                                <div class="form-group">
                                                    <input type="date" class="form-control" name="tanggalPinjam" value="<?php echo e($item->tanggalPinjam); ?>" required>
                                                </div>
                                                <label>Tanggal Kembali: </label>
                                                <div class="form-group">
                                                    <input type="date" class="form-control" name="tanggalKembali" value="<?php echo e($item->tanggalKembali); ?>" required>
                                                </div>
                                                <label>Booking: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Masukkan Status Booking" class="form-control" name="booking" value="<?php echo e($item->booking); ?>" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Batal</span>
                                                </button>
                                                <button type="submit" class="btn btn-light-primary ml-1">
                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Simpan</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Edit Data -->

                            <!-- Modal Hapus Peralatan -->
                            <div class="modal fade text-left" id="deletePeralatan<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Konfirmasi Hapus Data</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus peralatan ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                                            <form action="<?php echo e(route('admin.peralatan.destroy', $item->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Hapus Peralatan -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Magang\vkita\Iklat\Warna-Udiklat\resources\views/admin/peralatan/index.blade.php ENDPATH**/ ?>