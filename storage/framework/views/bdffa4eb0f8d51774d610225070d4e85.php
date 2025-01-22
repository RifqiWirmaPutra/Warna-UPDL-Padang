<?php
use App\Models\Admin;
$userRole = auth()->user()->role;
?>

<?php $__env->startSection('content'); ?>


    <div class="row">
        <div class="col-12">
            <?php if(in_array($userRole, [Admin::ROLE_SUPERADMIN, Admin::ROLE_AdminJar])): ?>
            <div class="btn btn-info btn-group dropend me-1 mb-1">
                <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opsi Tindakan</button>
                <div class="dropdown-menu">
                    <h6 class="dropdown-header">Opsi Tindakan</h6>
                    <a class="dropdown-item" href="<?php echo e(route('arp.create')); ?>">Tambah Data</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#downloadArp">Download Data</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#downloadFormModal" data-form-type="rencana">Download Form</a>
                </div>
            </div>
            <div class="btn btn-info btn-group dropend me-1 mb-1">
                <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Upload Rendiklat</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#uploadDiklat" data-form-type="rencana">Upload Rendiklat CSV</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#uploadDiklatExcel" data-form-type="rencana">Upload Rendiklat XLS, XLSX</a>
                </div>
            </div>
            <?php endif; ?>
            <!-- upload rendiklat CSV-->
            <div class="modal fade" id="uploadDiklat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title white" id="myModalLabel130">
                                Upload Rencana Diklat CSV
                            </h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo e(route('arp.uploadRendiklat')); ?>" method="POST" enctype="multipart/form-data" class="d-inline-block">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="file">Choose File:</label>
                                    <input type="file" name="file" id="file" class="form-control-file">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-outline-primary" id="uploadBtn">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end upload rendiklat CSV -->
            <!-- upload rendiklat Excel-->
            <div class="modal fade" id="uploadDiklatExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title white" id="myModalLabel130">
                                Upload Rencana Diklat XLS, XLSX
                            </h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/arp/import_excel" method="POST" enctype="multipart/form-data" class="d-inline-block">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="fileexcel">Choose File:</label>
                                    <input type="file" name="fileexcel" id="fileexcel" class="form-control-file">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-outline-primary" id="uploadBtn">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php if($errors->has('file')): ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($errors->first('file')); ?></strong>
            </span>
            <?php endif; ?>
    
            
            <?php if($sukses = Session::get('sukses')): ?>
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong><?php echo e($sukses); ?></strong>
            </div>
            <?php endif; ?>

            
            <?php if($selesai = Session::get('sukses')): ?>
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong><?php echo e($sukses); ?></strong>
            </div>
            <?php endif; ?>
            <!-- end upload rendiklat Excel -->

            <div class="card">
                <!-- Modal untuk download form -->
                <div class="modal fade" id="downloadFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Pilih Jenis Form yang Akan Diunduh</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="text-center">
                                    <a href="<?php echo e(route('download.form', ['type' => 'rencana'])); ?>" class="btn btn-outline-primary">Download Form Rencana Diklat</a>
                                    <a href="<?php echo e(route('download.form', ['type' => 'peserta'])); ?>" class="btn btn-outline-primary">Download Form Peserta</a>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir modal untuk download form -->

                <!-- Modal Download Arp -->
                <div class="modal fade" id="downloadArp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <a href="<?php echo e(url('/arp/download/excel')); ?>" class="btn btn-outline-primary">Download Excel</a>
                                <a href="<?php echo e(url('/arp/download/pdf')); ?>" class="btn btn-outline-primary">Download PDF</a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- akhir modal download arp -->

                <div class="card-header fw-bold">
                    Rencana dan Realisasi Pembelajaran
                </div>
                <div class="container">
                <form action="<?php echo e(route('arp.index')); ?>" method="get">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Tanggal Mulai</label>
                                <input type="date" name="date_from" class="form-control" value="<?php echo e(old('date_from')); ?>">
                                <!-- Menggunakan old() untuk menampilkan kembali nilai jika form gagal disubmit -->
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Tanggal Selesai</label>
                                <input type="date" name="date_to" class="form-control" value="<?php echo e(old('date_to')); ?>">
                                <!-- Menggunakan old() untuk menampilkan kembali nilai jika form gagal disubmit -->
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary bg-primary" value="Cari">
                        <a href="<?php echo e(route('arp.index')); ?>" class="btn btn-secondary">Reset</a>
                    </div>
                </form>
                </div>
                <div class="card-body small">
                    <div class="table-responsive">
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
                        
                        <table class="table table-bordered table-hover" id="table1">
                            <thead class="table-light">
                                <tr>
                                    <?php if(in_array($userRole, [Admin::ROLE_SUPERADMIN, Admin::ROLE_AdminJar])): ?>
                                    <th style="min-width: 70px;">Selesai</th>
                                    <?php endif; ?>
                                    <th style="min-width: 70px;">No</th>
                                    <th style="min-width: 150px;">Tanggal Mulai</th>
                                    <th style="min-width: 150px;">Tanggal Selesai</th>
                                    <th style="min-width: 150px;">Kode</th>
                                    <th style="min-width: 250px;">Judul</th>
                                    <th style="min-width: 200px;">Jenis Permintaan Diklat</th>
                                    <th style="min-width: 200px;">Jenis Pelaksanaan Diklat</th>
                                    <th style="min-width: 150px;">Angkatan</th>
                                    <th style="min-width: 150px;">Instruktur</th>
                                    <th style="min-width: 150px;">Rencana Peserta</th>
                                    <th style="min-width: 150px;">Realisasi Peserta</th>
                                    <th style="min-width: 150px;">Kelas</th>
                                    <th style="min-width: 150px;">Wisma</th>
                                    <th style="min-width: 150px;">Persiapan</th>
                                    <th style="min-width: 150px;">Pelaksanaan</th>
                                    <th style="min-width: 150px;">Pasca</th>
                                    <th style="min-width: 150px;">Realisasi Biaya</th>
                                    <?php if(in_array($userRole, [Admin::ROLE_SUPERADMIN, Admin::ROLE_AdminJar])): ?>
                                    <th style="min-width: 150px;">Aksi</th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($arp->count() > 0): ?>
                                <?php $__currentLoopData = $arp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- Input hidden untuk menyimpan ID dari data yang sedang diperbarui -->
                                    <input type="hidden" name="id" value="<?php echo e($rs->id); ?>">
                                    <tr>
                                        <?php if (! ($rs->arsip)): ?>
                                        <?php endif; ?>
                                        <?php if(in_array($userRole, [Admin::ROLE_SUPERADMIN, Admin::ROLE_AdminJar])): ?>
                                        <td class="align-middle">
                                            <div class="btn-group" role="group" aria-label="Basic example" style="white-space: nowrap;">
                                                <div class="btn btn-info">
                                                    <button id="btnSelesai<?php echo e($rs->id); ?>" type="button" data-toggle="modal" data-target="#selesaiModal<?php echo e($rs->id); ?>" <?php if($rs->arsip): ?> disabled <?php endif; ?>>Tandai Selesai</button>
                                                </div>
                                            </div>
                                        </td>
                                        <?php endif; ?>
                                        <td class="align-middle text-center"><?php echo e($loop->iteration); ?></td>
                                        <td class="align-middle">
                                            <?php echo e(date_format(date_create($rs->tanggal_mulai), 'd-m-Y')); ?>

                                            <input type="hidden" name="tanggal_mulai" value="<?php echo e(date_format(date_create($rs->tanggal_mulai), 'Y-m-d')); ?>" readonly>
                                        </td>
                                        <td class="align-middle">
                                            <?php echo e(date_format(date_create($rs->tanggal_selesai), 'd-m-Y')); ?>

                                            <input type="hidden" name="tanggal_selesai" value="<?php echo e(date_format(date_create($rs->tanggal_selesai), 'Y-m-d')); ?>" readonly>
                                        </td>
                                        <td class="align-middle">
                                            <?php echo e($rs->kode); ?>

                                            <input type="hidden" name="kode" value="<?php echo e($rs->kode); ?>">
                                        </td>
                                        <td class="align-middle">
                                            <?php echo e($rs->judul); ?>

                                            <input type="hidden" name="judul" value="<?php echo e($rs->judul); ?>">
                                        </td>
                                        <td class="align-middle">
                                            <?php echo e($rs->jenis_permintaan_diklat); ?>

                                            <input type="hidden" name="jenis_permintaan_diklat" value="<?php echo e($rs->jenis_permintaan_diklat); ?>">
                                        </td>
                                        <td class="align-middle">
                                            <?php echo e($rs->jenis_pelaksanaan_diklat); ?>

                                            <input type="hidden" name="jenis_pelaksanaan_diklat" value="<?php echo e($rs->jenis_pelaksanaan_diklat); ?>">
                                        </td>
                                        <td class="align-middle">
                                            <?php echo e($rs->angkatan); ?>

                                            <input type="hidden" name="angkatan" value="<?php echo e($rs->angkatan); ?>">
                                        </td>
                                        <td class="align-middle">
                                            <?php echo e($rs->instruktur); ?>

                                            <input type="hidden" name="instruktur" value="<?php echo e($rs->instruktur); ?>">
                                        </td>
                                        <td class="align-middle">
                                            <a href="<?php echo e(route('arp.peserta', $rs->id)); ?>">
                                                <?php echo e($rs->users->count()); ?>

                                                
                                                (<?php echo e($rs->confirmed_count); ?> konfirmasi) <!-- jumlah yang sudah konfirmasi -->
                                            </a>
                                            <input type="hidden" name="rencana_peserta" value="<?php echo e($rs->users->count()); ?>">
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="<?php echo e(route('show.realisasi', $rs->id)); ?>">
                                                <?php echo e($rs->hitungAbsensiCount()); ?>

                                                <input type="hidden" name="realisasi_peserta" value="<?php echo e($rs->hitungAbsensiCount()); ?>">
                                            </a>
                                        </td>
                                        <td class="align-middle">
                                            <?php if(in_array($userRole, [Admin::ROLE_SUPERADMIN, Admin::ROLE_AdminJar])): ?>
                                                <button type="button" data-toggle="modal" data-target="#editModalkelas<?php echo e($rs->id); ?>"><?php echo e($rs->kelas); ?></button>
                                            <?php else: ?>
                                                <?php echo e($rs->kelas); ?>

                                            <?php endif; ?>
                                            
                                        </td>
                                        <td class="align-middle">
                                            <?php if(in_array($userRole, [Admin::ROLE_SUPERADMIN, Admin::ROLE_AdminPelayanan])): ?>
                                                <button type="button" data-toggle="modal" data-target="#editModalWisma<?php echo e($rs->id); ?>"><?php echo e($rs->wisma); ?></button>
                                            <?php else: ?>
                                                <?php echo e($rs->wisma); ?>

                                            <?php endif; ?>   
                                        </td>
                                        <!-- Kolom Persentase Persiapan (menggunakan fungsi pada model) -->
                                        <td class="align-middle">
                                            <a href="<?php echo e(route('persiapan.index', $rs->id)); ?>">
                                                <?php echo e($rs->persentasePersiapan()); ?> %
                                                <input type="hidden" name="persiapan" value="<?php echo e($rs->persentasePersiapan()); ?>">
                                            </a>
                                        </td>
                                        <td class="align-middle">
                                            <a href="<?php echo e(route('pelaksanaan.index', $rs->id)); ?>">
                                                <?php echo e($rs->persentasePelaksanaan()); ?> %
                                                <input type="hidden" name="pelaksanaan" value="<?php echo e($rs->persentasePelaksanaan()); ?>">
                                            </a>
                                        </td>
                                        <!-- Kolom Persentase Pasca -->
                                        <td class="align-middle">
                                            <a href="<?php echo e(route('pasca.index', $rs->id)); ?>">
                                                <?php echo e($rs->persentasePasca()); ?> %
                                                <input type="hidden" name="pasca" value="<?php echo e($rs->persentasePasca()); ?>">
                                            </a>
                                        </td>

                                        <!-- Kolom Total Realisasi Biaya -->
                                        <td class="align-middle">
                                            <a href="<?php echo e(route('realisasiBiaya.index', $rs->id)); ?>">
                                                Rp. <?php echo e(number_format($rs->totalRealisasiBiaya(), 0, ',', '.')); ?>

                                                <input type="hidden" name="realisasi_biaya" value="<?php echo e($rs->totalRealisasiBiaya()); ?>">
                                            </a>
                                        </td>

                                        <?php if(in_array($userRole, [Admin::ROLE_SUPERADMIN, Admin::ROLE_AdminJar])): ?>
                                        <td class="align-middle">
                                            <div class="btn-group" role="group" aria-label="Basic example" style="white-space: nowrap;">
                                                <div class="btn btn-warning">
                                                    <a href="<?php echo e(route('arp.edit', $rs->id)); ?>" type="button">Edit</a>
                                                </div>
                                                <div class="btn btn-primary">
                                                    <button type="button" data-toggle="modal" data-target="#editModal<?php echo e($rs->id); ?>">Simpan</button>
                                                </div>
                                                <div class="btn btn-danger">
                                                    <button type="button" data-toggle="modal" data-target="#deleteModal<?php echo e($rs->id); ?>">Hapus</button>
                                                </div>
                                                <div class="btn btn-info">
                                                    <button type="button" data-toggle="modal" data-target="#uploadModal" data-arpid="<?php echo e($rs->id); ?>">Upload Peserta</button>
                                                </div>
                                            </div>
                                        </td>
                                        <?php endif; ?>
                                    </tr>
                                    
                                    <div class="modal fade" id="selesaiModal<?php echo e($rs->id); ?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo e($rs->id); ?>" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered " style="max-width: 30%">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel<?php echo e($rs->id); ?>">Pembelajaran Selesai</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo e(route('store.arsip', $rs->id)); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>
                                                        <input type="hidden" name="tanggal_mulai" value="<?php echo e(date_format(date_create($rs->tanggal_mulai), 'Y-m-d')); ?>" readonly>
                                                        <input type="hidden" name="tanggal_selesai" value="<?php echo e(date_format(date_create($rs->tanggal_selesai), 'Y-m-d')); ?>" readonly>
                                                        <input type="hidden" name="kode" value="<?php echo e($rs->kode); ?>" readonly>
                                                        <input type="hidden" name="judul" value="<?php echo e($rs->judul); ?>" readonly>
                                                        <input type="hidden" name="jenis_permintaan_diklat" value="<?php echo e($rs->jenis_permintaan_diklat); ?>" readonly>
                                                        <input type="hidden" name="jenis_pelaksanaan_diklat" value="<?php echo e($rs->jenis_pelaksanaan_diklat); ?>" readonly>
                                                        <input type="hidden" name="angkatan" value="<?php echo e($rs->angkatan); ?>" readonly>
                                                        <input type="hidden" name="instruktur" value="<?php echo e($rs->instruktur); ?>" readonly>
                                                        <input type="hidden" name="rencana_peserta" value="<?php echo e($rs->users->count()); ?>" readonly>
                                                        <input type="hidden" name="realisasi_peserta" value="<?php echo e($rs->hitungAbsensiCount()); ?>" readonly>
                                                        <input type="hidden" name="kelas" value="<?php echo e($rs->kelas); ?>" readonly>
                                                        <input type="hidden" name="wisma" value="<?php echo e($rs->wisma); ?>" readonly>
                                                        <input type="hidden" name="persiapan" value="<?php echo e($rs->persentasePersiapan()); ?>" readonly>
                                                        <input type="hidden" name="pelaksanaan" value="<?php echo e($rs->persentasePelaksanaan()); ?>" readonly>
                                                        <input type="hidden" name="pasca" value="<?php echo e($rs->persentasePasca()); ?>" readonly>
                                                        <input type="hidden" name="realisasi_biaya" value="<?php echo e($rs->totalRealisasiBiaya()); ?>" readonly>
                                                        <input type="hidden" name="arp_id" value="<?php echo e($rs->id); ?>" readonly>
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary bg-primary">Simpan Perubahan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="modal text-left" id="editModalkelas<?php echo e($rs->id); ?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo e($rs->id); ?>" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-dark text-white">
                                                    <h5 class="modal-title text-white" id="editModalLabel<?php echo e($rs->id); ?>">Simpan Data Kelas</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo e(route('arp.updatekelas', $rs->id)); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>
                                                        <input type="hidden" name="kelas" value="<?php echo e($rs->kelas); ?>" readonly>
                                                        <div class="container-fluid">
                                                            <label for="kelas">Kelas</label>
                                                            <select class="form-control" id="kelas" name="kelas">
                                                                <?php $__currentLoopData = $kelasOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $namakelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($id); ?>"><?php echo e($namakelas); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary bg-dark mt-3">Simpan Perubahan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="modal text-left" id="editModalWisma<?php echo e($rs->id); ?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo e($rs->id); ?>" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-dark text-white">
                                                    <h5 class="modal-title text-white" id="editModalLabel<?php echo e($rs->id); ?>">Simpan Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo e(route('arp.updatewisma', $rs->id)); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>
                                                        <input type="hidden" name="wisma" value="<?php echo e($rs->wisma); ?>" readonly>
                                                        <div class="container-fluid">
                                                            <label for="wisma">Wisma</label><br>
                                                            <?php $__currentLoopData = $wismaOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $nama_wisma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="<?php echo e($id); ?>" id="wisma_<?php echo e($id); ?>" name="wisma[]">
                                                                <label class="form-check-label" for="wisma_<?php echo e($id); ?>">
                                                                    <?php echo e($nama_wisma); ?>

                                                                </label>
                                                            </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary bg-dark mt-3">Simpan Perubahan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Modal Simpan -->
                                    <div class="modal fade" id="editModal<?php echo e($rs->id); ?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo e($rs->id); ?>" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered " style="max-width: 30%">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel<?php echo e($rs->id); ?>">Simpan Data Id <?php echo e($rs->id); ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo e(route('arp.update', $rs->id)); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>
                                                        <input type="hidden" name="tanggal_mulai" value="<?php echo e(date_format(date_create($rs->tanggal_mulai), 'Y-m-d')); ?>" readonly>
                                                        <input type="hidden" name="tanggal_selesai" value="<?php echo e(date_format(date_create($rs->tanggal_selesai), 'Y-m-d')); ?>" readonly>
                                                        <input type="hidden" name="kode" value="<?php echo e($rs->kode); ?>" readonly>
                                                        <input type="hidden" name="judul" value="<?php echo e($rs->judul); ?>" readonly>
                                                        <input type="hidden" name="jenis_permintaan_diklat" value="<?php echo e($rs->jenis_permintaan_diklat); ?>" readonly>
                                                        <input type="hidden" name="jenis_pelaksanaan_diklat" value="<?php echo e($rs->jenis_pelaksanaan_diklat); ?>" readonly>
                                                        <input type="hidden" name="angkatan" value="<?php echo e($rs->angkatan); ?>" readonly>
                                                        <input type="hidden" name="instruktur" value="<?php echo e($rs->instruktur); ?>" readonly>
                                                        <input type="hidden" name="rencana_peserta" value="<?php echo e($rs->users->count()); ?>" readonly>
                                                        <input type="hidden" name="realisasi_peserta" value="<?php echo e($rs->hitungAbsensiCount()); ?>" readonly>
                                                        <input type="hidden" name="kelas" value="<?php echo e($rs->kelas); ?>" readonly>
                                                        <input type="hidden" name="wisma" value="<?php echo e($rs->wisma); ?>" readonly>
                                                        
                                                        <input type="hidden" name="persiapan" value="<?php echo e($rs->persentasePersiapan()); ?>" readonly>
                                                        <input type="hidden" name="pelaksanaan" value="<?php echo e($rs->persentasePelaksanaan()); ?>" readonly>
                                                        <input type="hidden" name="pasca" value="<?php echo e($rs->persentasePasca()); ?>" readonly>
                                                        <input type="hidden" name="realisasi_biaya" value="<?php echo e($rs->totalRealisasiBiaya()); ?>" readonly>
                                                        <div class="text-center">
                                                            <button id="btnSimpan<?php echo e($rs->id); ?>" type="submit" class="btn btn-primary bg-primary">Simpan Perubahan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Konfirmasi Penghapusan -->
                                    <div class="modal fade" id="deleteModal<?php echo e($rs->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger">
                                                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Penghapusan ARP ID: <?php echo e($rs->id); ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menghapus Data ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                                                    <form action="<?php echo e(route('arp.destroy', $rs->id)); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-info">
                                                    <h5 class="modal-title" id="exampleModalLabel">Upload File for ARP
                                                        ID: <span id="arpIdSpan"></span></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?php echo e(route('arp.uploadPeserta')); ?>" method="POST" enctype="multipart/form-data">
                                                            <?php echo csrf_field(); ?>
                                                            <!-- Add a hidden input to store the ARP ID -->
                                                            <input type="hidden" name="arp_id" id="arp_id" value="">
                                                            <div class="form-group">
                                                                <label for="file_peserta">Choose File:</label>
                                                                <input type="file" name="file_peserta" id="file_peserta" class="form-control-file">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-outline-primary" id="uploadBtn">Upload</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="modal fade" id="ArsipUpdateModal<?php echo e($rs->id); ?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo e($rs->id); ?>" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered " style="max-width: 30%">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel<?php echo e($rs->id); ?>">Pembelajaran Selesai</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo e(route('update.arsip', $rs->id)); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>
                                                        <input type="text" name="tanggal_mulai" value="<?php echo e(date_format(date_create($rs->tanggal_mulai), 'Y-m-d')); ?>" readonly>
                                                        <input type="text" name="tanggal_selesai" value="<?php echo e(date_format(date_create($rs->tanggal_selesai), 'Y-m-d')); ?>" readonly>
                                                        <input type="text" name="kode" value="<?php echo e($rs->kode); ?>" readonly>
                                                        <input type="text" name="judul" value="<?php echo e($rs->judul); ?>" readonly>
                                                        <input type="text" name="jenis_permintaan_diklat" value="<?php echo e($rs->jenis_permintaan_diklat); ?>" readonly>
                                                        <input type="text" name="jenis_pelaksanaan_diklat" value="<?php echo e($rs->jenis_pelaksanaan_diklat); ?>" readonly>
                                                        <input type="text" name="angkatan" value="<?php echo e($rs->angkatan); ?>" readonly>
                                                        <input type="text" name="instruktur" value="<?php echo e($rs->instruktur); ?>" readonly>
                                                        <input type="text" name="rencana_peserta" value="<?php echo e($rs->users->count()); ?>" readonly>
                                                        <input type="text" name="realisasi_peserta" value="<?php echo e($rs->hitungAbsensiCount()); ?>" readonly>
                                                        <input type="text" name="kelas" value="<?php echo e($rs->kelas); ?>" readonly>
                                                        <input type="text" name="wisma" value="<?php echo e($rs->wisma); ?>" readonly>
                                                        <input type="text" name="persiapan" value="<?php echo e($rs->persentasePersiapan()); ?>" readonly>
                                                        <input type="text" name="pelaksanaan" value="<?php echo e($rs->persentasePelaksanaan()); ?>" readonly>
                                                        <input type="text" name="pasca" value="<?php echo e($rs->persentasePasca()); ?>" readonly>
                                                        <input type="text" name="realisasi_biaya" value="<?php echo e($rs->totalRealisasiBiaya()); ?>" readonly>
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-outline-primary">Simpan Perubahan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var filePesertaInput = document.getElementById('file_peserta');
            var arpIdInput = document.getElementById('arp_id');
            var originalFilePesertaValue = filePesertaInput.value;
            $('#arpIdSpan').text(arpIdInput);
            filePesertaInput.addEventListener('change', function() {

            });

            $('#uploadModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var arpId = button.data('arpid');
                arpIdInput.value = arpId;
                $('#arpIdSpan').text(arpId);
            });

            $('#uploadModal').on('hidden.bs.modal', function() {
                filePesertaInput.value = originalFilePesertaValue;
                arpIdInput.value = '';
            });

            $('#uploadBtn').click(function() {
                $('#uploadModal').modal('hide');
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

        
        .menu-position {
		  max-width: 320px;
		  width: 100%;
		  margin: 0;
		  /*transform: translate(-50%,0) rotate(180deg);*/
		  transform: translate(-50%, 0);
		  position: fixed;
		  bottom: 0px;
		  left: 50%;
          z-index: 9999;
		}
        
		.menu-wrapper {
		  position: relative;
		  height: 0;
		  width: 100%;
		  /* any width you want */
		  padding-top: 50%;
		  /* if the menu is in full circle mode. 50% if it is in semi-circle mode. */
		}
        #menu {
		  position: absolute;
		  top: 0;
		  left: 0;
		  width: 100%;
		  display: block;
		  margin: 0 auto;
		  overflow: visible;
		  /* uncomment this if you are using bouncing animations*/
		}
        a {
		  cursor: pointer;
		  /* SVG <a> elements don't get this by default, so you need to explicitly set it */
		  outline: none;
		}
        .item .sector {
		  transition: transform .1s ease-out, fill 0.6s ease-out;
		  fill: #fff;
		  stroke: transparent;
		  transform-origin: 250px 250px;
		}
        .item:hover .sector,
		.item:focus .sector {
		  fill: #509227;
		  transform: scale(1.05);
		}
		
		.item .use-icon {
		  fill: currentColor;
		  color: #4C423A;
		}
		
		.item:hover .use-icon {
		  fill: currentColor;
		  color: #fff;
		}
		
		.item:hover .icon path {
		  fill: #fff;
		}
		
		.menu-trigger {
		  fill: #509227;
		  transform-origin: 250px 250px;
		  transition: all .2s ease-out;
		  pointer-events: auto;
		}
        .menu-trigger:hover {
		  transform: scale(1.2);
		  fill: #00452E;
		}
        .menu-trigger:hover,
		.menu-trigger:focus {
		  cursor: pointer;
		}
		
		symbol {
		  overflow: visible;
		}
    </style>
    <script src="<?php echo e(asset('assets/js/circular-menu/menu.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.5.1/snap.svg-min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            <?php if($selesai): ?>
                document.getElementById('btnSelesai<?php echo e($rs->id); ?>').disabled = false; // Mengaktifkan tombol "Selesai"
                document.getElementById('btnSelesai<?php echo e($rs->id); ?>').classList.remove('btn-secondary'); // Menghapus kelas 'btn-secondary'
                document.getElementById('btnSelesai<?php echo e($rs->id); ?>').classList.add('btn-primary'); // Menambahkan kelas 'btn-primary'
            <?php endif; ?>
        });
    </script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\qi\Project Warna\1\Warna-Udiklat\resources\views/admin/arp/arp.blade.php ENDPATH**/ ?>