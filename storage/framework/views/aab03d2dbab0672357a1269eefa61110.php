<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <!-- Formulir Pencarian Tanggal -->
            <form id="dateSearchForm">
                <div class="form-row align-items-center">
                    <div class="col-md-3">
                        <label for="startDate">Tanggal Mulai:</label>
                        <input type="date" id="startDate" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="endDate">Tanggal Selesai:</label>
                        <input type="date" id="endDate" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-outline-primary" onclick="searchByDate()">Cari</button>
                    </div>
                </div>
            </form>

            <!-- <a href="#" class="btn btn-info mb-2">Download</a> -->
            <div class="card">
                <div class="card-header">
                    Informasi Pembelajaran
                </div>
                <div class="card-body small">
                    <div class="table-responsive">
                        <?php if(Session::has('success')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(Session::get('success')); ?>

                            </div>
                        <?php endif; ?>
                        <table class="table table-hover" id="table1">
                            <thead>
                                <tr style="background-color: #f8f9fa; color: #333;">
                                    <th style="min-width: 70px;">No</th>
                                    <th style="min-width: 150px;">Tanggal Mulai</th>
                                    <th style="min-width: 150px;">Tanggal Selesai</th>
                                    <th style="min-width: 120px;">Judul</th>
                                    <th style="min-width: 150px;">Angkatan</th>
                                    <th style="min-width: 200px;">Jenis Pelaksanaan Diklat</th>
                                </tr>
                            </thead>
                            <tbody class="scrolling-content">
                                <?php
                                    $sortedData = $arp->sortBy('tanggal_mulai');
                                ?>
                                <?php if($sortedData->count() > 0): ?>
                                    <?php $__currentLoopData = $sortedData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr style="transition: background-color 0.3s ease; cursor: pointer;">
                                            <td class="align-middle text-center"><?php echo e($key + 1); ?></td>
                                            <td class="align-middle text-center"><?php echo e(date_format(date_create($rs->tanggal_mulai), 'Y-m-d')); ?></td>
                                            <td class="align-middle text-center"><?php echo e(date_format(date_create($rs->tanggal_selesai), 'Y-m-d')); ?></td>
                                            <td class="align-middle" style="max-width: 500px; overflow: hidden; text-overflow: ellipsis;"><?php echo e($rs->judul); ?></td>
                                            <td class="align-middle text-center"><?php echo e($rs->angkatan); ?></td>
                                            <td class="align-middle text-center"><?php echo e($rs->jenis_pelaksanaan_diklat); ?></td>
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
            </div>
        </div>
    </div>

    <script>
        function searchByDate() {
            var startDate = document.getElementById("startDate").value;
            var endDate = document.getElementById("endDate").value;
            var table = document.querySelector(".table tbody");
            var rows = table.querySelectorAll("tr");

            rows.forEach(function(row) {
                var startDateCell = row.querySelector("td:nth-child(2)").textContent;
                var endDateCell = row.querySelector("td:nth-child(3)").textContent;

                if (startDateCell >= startDate && endDateCell <= endDate) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\qi\Project Warna\1\Warna-Udiklat\resources\views/admin/aip/aip.blade.php ENDPATH**/ ?>