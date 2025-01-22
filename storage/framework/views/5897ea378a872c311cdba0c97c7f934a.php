<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Daftar Pemesanan</h5>
                    <span class="badge bg-light text-dark"><?php echo e($bookings->count()); ?> Total Booking</span>
                </div>
                <div class="card-body">
                    <?php if(Session::has('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo e(Session::get('success')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table class="table table-hover table-striped align-middle mb-0" id="table1">
                            <thead class="table-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Tanggal Keluar</th>
                                    <th>Tipe Kamar</th>
                                    <th>Pilihan Kamar</th>
                                    <th>Harga</th>
                                    <th>Email</th>
                                    <th>Nomor HP</th>
                                    <th>Nomor NIK</th>
                                    <th>Nomor NIP</th>
                                    <th>Action</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($booking->tanggalMasuk->format('Y-m-d')); ?></td>
                                        <td><?php echo e($booking->tanggalKeluar->format('Y-m-d')); ?></td>
                                        <td><?php echo e($booking->penginapan->tipePenginapan ?? 'N/A'); ?></td>
                                        <td><?php echo e($booking->pilihanKamar ?? 'N/A'); ?></td>
                                        <td><?php echo e($booking->harga ?? '0'); ?></td>

                                        <td><?php echo e($booking->email); ?></td>
                                        <td><?php echo e($booking->noHP); ?></td>
                                        <td><?php echo e($booking->nik); ?></td>
                                        <td><?php echo e($booking->nip); ?></td>
                                        <td>
                                            <form action="<?php echo e(route('admin.bookings.destroy', $booking->id)); ?>"
                                                method="POST" style="display:inline;">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                                    title="Hapus Booking">
                                                    <i class="bi bi-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <select class="form-select form-select-sm"
                                                onchange="updateStatus(this, <?php echo e($booking->id); ?>)">
                                                <option value="0" <?php echo e($booking->status == 0 ? 'selected' : ''); ?>>
                                                    Pending</option>
                                                <option value="1" <?php echo e($booking->status == 1 ? 'selected' : ''); ?>>
                                                    Confirmed</option>
                                                <option value="2" <?php echo e($booking->status == 2 ? 'selected' : ''); ?>>Cancel
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="9" class="text-center text-muted">No bookings found.</td>
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
        function updateStatus(selectElement, bookingId) {
            const status = selectElement.value;
            fetch(`/admin/bookings/${bookingId}/status`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-Token': '<?php echo e(csrf_token()); ?>'
                    },
                    body: JSON.stringify({
                        status: status
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Status berhasil diubah!');
                    } else {
                        alert('Gagal mengubah status.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>

    <style>
        .table-responsive {
            overflow-x: auto;
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }

        .card-header h5 {
            font-weight: 600;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\part 2\Warna-Udiklat\resources\views/admin/bookings/index.blade.php ENDPATH**/ ?>