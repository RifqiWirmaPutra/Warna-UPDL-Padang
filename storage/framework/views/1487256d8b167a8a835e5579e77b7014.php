<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Feedback
                </div>
                <div class="card-body small">
                    <div class="table-responsive">
                        <?php if(Session::has('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(Session::get('success')); ?>

                        </div>
                        <?php endif; ?>
                        <table class="table table-bordered table-striped mb-0" id="table1">
                            <thead>
                                <tr>
                                <th style="min-width: 70px;">No</th>
                                    <th style="min-width: 150px;">Nama</th>
                                    <th style="min-width: 150px;">Email</th>
                                    <th style="min-width: 150px;">Subject</th>
                                    <th style="min-width: 150px;">Pesan</th>
                                    <th style="min-width: 150px;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                                    <td class="align-middle"><?php echo e($feedback->nama_visit); ?></td>
                                    <td class="align-middle"><?php echo e($feedback->email_visit); ?></td>
                                    <td class="align-middle"><?php echo e($feedback->subject); ?></td>
                                    <td class="align-middle"><?php echo e($feedback->pesan); ?></td>
                                    <td class="align-middle" id="status-<?php echo e($feedback->id); ?>" data-status="<?php echo e($feedback->status); ?>" style="cursor: pointer;" onclick="markAsRead(<?php echo e($feedback->id); ?>)">
                                        <span class="badge <?php echo e($feedback->status == 1 ? 'bg-success' : 'bg-danger'); ?> text-white">
                                            <?php echo e($feedback->status == 1 ? 'Sudah Dibaca' : 'Belum Dibaca'); ?>

                                        </span>
                                    </td>

                                
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan ini di bagian bawah view -->
    <script>
        function markAsRead(id) {
            fetch(`/admin/feedback/mark-as-read/${id}`, {
    method: 'POST',
    headers: {
        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>',
        'Content-Type': 'application/json',
        'Accept': 'application/json',
    },
})
.then(response => response.json())
.then(data => {
    if (data.success) {
        // Update tampilan di sisi klien
        const statusElement = document.querySelector(`#status-${id}`);
        
        // Mengambil elemen dengan kelas .badge di dalam elemen status
        const badgeElement = statusElement.querySelector('.badge');
        
        // Mengubah teks dalam elemen .badge menjadi 'Sudah Dibaca'
        badgeElement.innerText = 'Sudah Dibaca';

        // Update atribut data-status ke elemen untuk menyimpan status di sisi klien
        statusElement.setAttribute('data-status', '1');

        // Optional: Tambahkan perubahan visual jika diperlukan
        badgeElement.classList.remove('bg-danger', 'text-white'); // Menghapus warna latar belakang merah dan teks putih
        badgeElement.classList.add('bg-success');   // Menambahkan warna latar belakang hijau

        // Simpan status di local storage (gunakan JSON.stringify untuk mengonversi menjadi string)
        localStorage.setItem(`status-${id}`, JSON.stringify(1));

        // Menampilkan pesan sukses
        alert('Feedback berhasil ditandai sebagai sudah dibaca.');
    } else {
        // Menampilkan pesan gagal jika server mengembalikan false
        alert('Gagal menandai feedback sebagai sudah dibaca.');
    }
})
.catch(error => {
    // Menampilkan pesan jika terjadi kesalahan dalam proses
    console.error('Error:', error);
});

    }


    </script>


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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\qi\Project Warna\1\Warna-Udiklat\resources\views/admin/feedback/index.blade.php ENDPATH**/ ?>