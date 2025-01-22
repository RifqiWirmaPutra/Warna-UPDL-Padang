<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Daftar Ruangan
            </div>
            <div class="card-body small">
                <div class="table-responsive">
                    <?php if(Session::has('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                    <?php endif; ?>
                    <div class="btn btn-primary">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#formTambah">Tambah Data</button>
                    </div>
                    <!-- Modal Tambah Data -->
                    <div class="modal fade text-left" id="formTambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Tambah Ruangan</h4>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <i data-feather="x"></i>
                                    </button>
                                </div>
                                <form action="<?php echo e(route('admin.ruangan.store')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="modal-body">
                                        <label>Tipe Lab: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan Tipe Lab" class="form-control" name="tipeLab" required>
                                        </div>
                                        <label>Jumlah Peserta: </label>
                                        <div class="form-group">
                                            <input type="number" placeholder="Masukkan Jumlah Peserta" class="form-control" name="jumlahPeserta" required>
                                        </div>
                                        <label>Harga: </label>
                                        <div class="form-group">
                                            <input type="number" placeholder="Masukkan Harga" class="form-control" name="harga" required>
                                        </div>
                                        <label>Foto Ruangan: </label>
                                        <div class="form-group">
                                            
                                            <input type="file" class="form-control-file" id="uploadKTP" name="uploadKTP" required>
                                        </div>
                                        <label>Keterangan: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan Keterangan" class="form-control" name="keterangan" required>
                                        </div>
                                        <label>Tanggal Masuk: </label>
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="tanggalMasuk" required>
                                        </div>
                                        <label>Tanggal Keluar: </label>
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="tanggalKeluar" required>
                                        </div>
                                        <label>Email: </label>
                                        <div class="form-group">
                                            <input type="email" placeholder="Masukkan Email" class="form-control" name="email" required>
                                        </div>
                                        <label>No HP: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan No HP" class="form-control" name="noHP" required>
                                        </div>
                                        <label>Upload KTP: </label>
                                        <div class="form-group">
                                            
                                            <input type="file" class="form-control-file" id="uploadKTP" name="uploadKTP" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                            <span class="d-none d-sm-block">Batal</span>
                                        </button>
                                        <button type="submit" class="btn btn-light-primary ml-1">
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
                                <th>Tipe Lab</th>
                                <th>Jumlah Peserta</th>
                                <th>Harga</th>
                                <th>Foto</th>
                                <th>Keterangan</th>
                                <th>Tanggal Masuk</th>
                                <th>Tanggal Keluar</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $ruangans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                                <td class="align-middle"><?php echo e($item->tipeLab); ?></td>
                                <td class="align-middle"><?php echo e($item->jumlahPeserta); ?></td>
                                <td class="align-middle"><?php echo e($item->harga); ?></td>
                                <td class="align-middle"><img src="<?php echo e($item->foto); ?>" alt="Foto Ruangan" style="width: 100px;"></td>
                                <td class="align-middle"><?php echo e($item->keterangan); ?></td>
                                <td class="align-middle"><?php echo e($item->tanggalMasuk); ?></td>
                                <td class="align-middle"><?php echo e($item->tanggalKeluar); ?></td>
                                <td class="align-middle"><?php echo e($item->email); ?></td>
                                <td class="align-middle"><?php echo e($item->noHP); ?></td>
                                <td class="align-middle">
                                    <div class="btn btn-primary">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#formEdit<?php echo e($item->id); ?>">Edit</button>
                                    </div>
                                    <div class="btn btn-danger">
                                        <button type="button" data-toggle="modal" data-target="#deleteRuangan<?php echo e($item->id); ?>">Hapus</button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal Edit Data -->
                            <div class="modal fade text-left" id="formEdit<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Edit Ruangan</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <form action="<?php echo e(route('admin.ruangan.edit', $item->id)); ?>" method="POST" enctype="multipart/form-data">

                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
                                            <div class="modal-body">
                                                <label>Tipe Lab: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Masukkan Tipe Lab" class="form-control" name="tipeLab" value="<?php echo e($item->tipeLab); ?>" required>
                                                </div>
                                                <label>Jumlah Peserta: </label>
                                                <div class="form-group">
                                                    <input type="number" placeholder="Masukkan Jumlah Peserta" class="form-control" name="jumlahPeserta" value="<?php echo e($item->jumlahPeserta); ?>" required>
                                                </div>
                                                <label>Harga: </label>
                                                <div class="form-group">
                                                    <input type="number" placeholder="Masukkan Harga" class="form-control" name="harga" value="<?php echo e($item->harga); ?>" required>
                                                </div>
                                                <label>Foto: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="URL Foto" class="form-control" name="foto" value="<?php echo e($item->foto); ?>" required>
                                                </div>
                                                <label>Keterangan: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Masukkan Keterangan" class="form-control" name="keterangan" value="<?php echo e($item->keterangan); ?>" required>
                                                </div>
                                                <label>Tanggal Masuk: </label>
                                                <div class="form-group">
                                                    <input type="date" class="form-control" name="tanggalMasuk" value="<?php echo e($item->tanggalMasuk); ?>" required>
                                                </div>
                                                <label>Tanggal Keluar: </label>
                                                <div class="form-group">
                                                    <input type="date" class="form-control" name="tanggalKeluar" value="<?php echo e($item->tanggalKeluar); ?>" required>
                                                </div>
                                                <label>Email: </label>
                                                <div class="form-group">
                                                    <input type="email" placeholder="Masukkan Email" class="form-control" name="email" value="<?php echo e($item->email); ?>" required>
                                                </div>
                                                <label>No HP: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Masukkan No HP" class="form-control" name="noHP" value="<?php echo e($item->noHP); ?>" required>
                                                </div>
                                                <label>Upload KTP: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="URL KTP" class="form-control" name="uploadKTP" value="<?php echo e($item->uploadKTP); ?>" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                    <span class="d-none d-sm-block">Batal</span>
                                                </button>
                                                <button type="submit" class="btn btn-light-primary ml-1">
                                                    <span class="d-none d-sm-block">Simpan</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Edit Data -->

                            <!-- Modal Hapus Ruangan -->
                            <div class="modal fade text-left" id="deleteRuangan<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Konfirmasi Hapus Data</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus ruangan ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                                            <form action="<?php echo e(route('admin.ruangan.destroy', $item->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Hapus Ruangan -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Magang\vkita\Iklat\warna rizky\Warna_terbaru\Warna-Udiklat\resources\views/admin/ruangan/index.blade.php ENDPATH**/ ?>