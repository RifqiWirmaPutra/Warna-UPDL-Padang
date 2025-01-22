<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Informasi Lainnya
            </div>
            <div class="card-body small">
                <div class="table-responsive">
                    <?php if(Session::has('success')): ?>
                    <div class="alert alert-success alert-dismissible show fade" role="alert">
                            <?php echo e(Session::get('success')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <div class="btn btn-primary">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#formTambah">Tambah Data</button>
                    </div>
                        <!-- desain modal -->
                    <div class="modal fade text-left" id="formTambah" tabindex="-1"
                        role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                            role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Tambah Informasi </h4>
                                    <button type="button" class="close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <i data-feather="x"></i>
                                    </button>
                                </div>
                                <form action="<?php echo e(route('informasiadmin.store')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="modal-body">
                                        <label>Judul: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan Judul" class="form-control" name="judul" required>
                                        </div>

                                        <label>Foto: </label>
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="foto" required>
                                        </div>

                                        <label>Lokasi: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan Lokasi" class="form-control" name="lokasi" required>
                                        </div>

                                        <label>Keterangan: </label>
                                        <div class="form-group">
                                            <textarea placeholder="Keterangan" class="form-control" name="keterangan" required></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-secondary"
                                            data-bs-dismiss="modal">
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
                    <!-- end desain modal -->
                    <table class="table table-bordered table-striped mb-0" id="table1">
                        <thead>
                            <tr>
                                <th style="min-width: 70px;">No</th>
                                <th style="min-width: 150px;">Judul</th>
                                <th style="min-width: 150px;">Foto</th>
                                <th style="min-width: 150px;">Lokasi</th>
                                <th style="min-width: 150px;">Keterangan</th>
                                <th style="min-width: 150px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $informasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $informasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                                <td class="align-middle"><?php echo e($informasi->judul); ?></td>
                                <td class="align-middle">
                                <img src="<?php echo e(asset('storage/' . str_replace('public/', '', $informasi->foto))); ?>" alt="<?php echo e($informasi->judul); ?>" width="100">
                                </td>
                                <td class="align-middle"><?php echo e($informasi->lokasi); ?></td>
                                <td class="align-middle"><?php echo e($informasi->keterangan); ?></td>
                                <td class="align-middle">
                                    <div class="btn btn-primary">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#formEdit<?php echo e($informasi->id); ?>">Edit</button>
                                    </div>
                                    <div class="btn btn-danger">
                                        <button type="button" data-toggle="modal" data-target="#deleteInformasi<?php echo e($informasi->id); ?>">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- desain modal Edit-->
                            <div class="modal fade text-left" id="formEdit<?php echo e($informasi->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Edit Data</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <form action="<?php echo e(route('informasiadmin.edit', ['id' => $informasi->id])); ?>" method="POST" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
                                            <div class="modal-body">
                                                <label>Judul: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Masukkan Judul" class="form-control" name="judul" value="<?php echo e($informasi->judul); ?>">
                                                </div>

                                                <label>Foto Saat Ini: </label>
                                                <div class="form-group">
                                                    <img src="<?php echo e(asset('storage/' . str_replace('public/', '', $informasi->foto))); ?>" alt="<?php echo e($informasi->judul); ?>" width="100">
                                                </div>

                                                <label>Upload Foto Baru: </label>
                                                <div class="form-group">
                                                    <input type="file" class="form-control" name="foto" accept="image/*">
                                                </div>

                                                <label>Lokasi: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Masukkan Lokasi" class="form-control" name="lokasi" value="<?php echo e($informasi->lokasi); ?>">
                                                </div>

                                                <label>Keterangan: </label>
                                                <div class="form-group">
                                                    <textarea placeholder="Keterangan" class="form-control" name="keterangan"><?php echo e($informasi->keterangan); ?></textarea>
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
                            <!-- end desain edit modal -->

                            <!-- Modal Delete Kelas -->
                            <div class="modal fade text-left" id="deleteInformasi<?php echo e($informasi->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel33">Konfirmasi Hapus Data</h4>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin ingin menghapus informasi ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                                                <form action="<?php echo e(route('informasiadmin.destroy', $informasi->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal Delete -->
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

<script src="<?php echo e(asset('assets/vendors/simple-datatables/simple-datatables.js')); ?>"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\qi\Project Warna\1\Warna-Udiklat\resources\views/admin/informasi/index.blade.php ENDPATH**/ ?>