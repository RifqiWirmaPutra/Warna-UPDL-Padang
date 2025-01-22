<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <!-- Container sebelah kiri -->
            <div class="col-md-4">

                <div class="card shadow-sm mb-4">
                    <!-- Gambar Wisma -->
                    <img src="<?php echo e(asset('storage/storage/assets/penginapan/' . $penginapans->fotoPenginapan)); ?>"
                        class="card-img-top">

                    <div class="card-body">
                        <!-- Nama Wisma -->
                        <?php if(session('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo e(session('success')); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>
                        <h4 class="card-title font-weight-bold mb-2"><?php echo e($penginapans->tipePenginapan); ?></h4>

                        <!-- Detail Kamar -->
                        <p class="text-sm font-weight-bold mb-2">(1x) Wisma <?php echo e($penginapans->tipePenginapan); ?></p>
                        <ul class="list-unstyled mb-3">
                            <?php $__currentLoopData = $fasilitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fasilitasItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check text-secondary mr-2"></i>
                                    <span><?php echo e(trim($fasilitasItem)); ?></span> <!-- Menghapus spasi tambahan -->
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>

                        <!-- Total Harga -->
                        <div class="d-flex justify-content-between align-items-center">
                            <?php if(session('price')): ?>
                                <p>Total Harga: Rp <?php echo e(number_format(session('price'))); ?></p>
                            <?php else: ?>
                                <p>Total Harga: Rp 0</p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Container sebelah kanan (form booking) -->
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Book a Room</h3>
                    </div>

                    <div class="card-body">
                        <?php if(session('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo e(session('success')); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        <?php endif; ?>


                    <form action="<?php echo e(route('layouts.booking.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="tanggalMasuk" class="form-label">Check-In Date</label>
                            <input type="date" id="tanggalMasuk" name="tanggalMasuk" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggalKeluar" class="form-label">Check-Out Date</label>
                            <input type="date" id="tanggalKeluar" name="tanggalKeluar" class="form-control" required>
                        </div>

                        <!-- Hidden Input untuk Jenis Kamar dan Pilihan Kamar -->
                        <input type="hidden" name="tipeKamar" value="<?php echo e($penginapans->id); ?>">
                        <input type="hidden" name="pilihanKamar"
                            value="<?php echo e(session('price') == $penginapans->hargadpln
                                ? 'Daily PLN Group'
                                : (session('price') == $penginapans->hargampln
                                    ? 'Monthly PLN Group'
                                    : (session('price') == $penginapans->hargadnonpln
                                        ? 'Daily Non-PLN Group'
                                        : (session('price') == $penginapans->hargamnonpln
                                            ? 'Monthly Non-PLN Group'
                                            : '')))); ?>">
                        <input type="hidden" name="harga" value="<?php echo e(session('price') ?? 0); ?>">

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="noHP" class="form-label">Phone Number</label>
                            <input type="text" id="noHP" name="noHP" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" id="nik" name="nik" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="nip" class="form-label">NIP</label>
                            <input type="text" id="nip" name="nip" class="form-control" required>
                        </div>

                            <!-- Checkbox Kebijakan Privasi -->
                            

                            <!-- Checkbox Syarat dan Ketentuan -->
                            

                            <button type="submit" class="btn btn-success w-100" id="submitButton">Submit
                                Booking</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kebijakan Privasi -->
    <div id="kebijakanModal"
        class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-lg max-w-lg max-h-96 overflow-y-auto">
            <h2 class="text-lg font-bold mb-4">Kebijakan Privasi</h2>
            <p>Isi kebijakan privasi yang panjang untuk memicu scroll...</p>
            <p>Isi kebijakan privasi yang panjang untuk memicu scroll...</p>
            <p>Isi kebijakan privasi yang panjang untuk memicu scroll...</p>
            <p>Isi kebijakan privasi yang panjang untuk memicu scroll...</p>
            <p>Isi kebijakan privasi yang panjang untuk memicu scroll...</p>
            <p>Isi kebijakan privasi yang panjang untuk memicu scroll...</p>
            <p>Isi kebijakan privasi yang panjang untuk memicu scroll...</p>
            <p>Isi kebijakan privasi yang panjang untuk memicu scroll...</p>
            <p>Isi kebijakan privasi yang panjang untuk memicu scroll...</p>
            <p>Isi kebijakan privasi yang panjang untuk memicu scroll...</p>
            <p>Isi kebijakan privasi yang panjang untuk memicu scroll...</p>
            <p>Isi kebijakan privasi yang panjang untuk memicu scroll...</p>
            <p>Isi kebijakan privasi yang panjang untuk memicu scroll...</p>
            <p>Isi kebijakan privasi yang panjang untuk memicu scroll...</p>
            <p>Isi kebijakan privasi yang panjang untuk memicu scroll...</p>
            <p>Isi kebijakan privasi yang panjang untuk memicu scroll...</p>
            <p>Isi kebijakan privasi yang panjang untuk memicu scroll...</p>

            <button onclick="closeModal('kebijakanModal', 'kebijakanCheckbox')" id="kebijakanButton" disabled
                class="bg-blue-600 text-white px-4 py-2 rounded mt-4">Paham</button>
        </div>
    </div>

    <!-- Modal Syarat dan Ketentuan -->
    <div id="syaratModal"
        class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-lg max-w-lg max-h-96 overflow-y-auto border-5 border-black shadow-sm">
            <h2 class="text-lg font-bold mb-4">Syarat dan Ketentuan</h2>
            <p>
                <strong>ATURAN DAN LARANGAN PENGGUNA ASRAMA</strong><br><br>
                <strong>1. Jam Malam:</strong><br>
                ➢ Pintu gerbang akan dikunci pada pukul 22.30 WIB. Jika terlambat, harap konfirmasi ke Satpam.<br><br>

                <strong>2. Tamu:</strong><br>
                ✓ Tamu hanya diperbolehkan berkunjung hingga pukul 21.00 WIB.<br>
                ✓ Tamu dilarang menginap tanpa izin tertulis dari Pengelola Asrama.<br>
                ✓ Dilarang membawa tamu lawan jenis/pasangan yang belum menikah ke dalam kamar.<br><br>

                <strong>3. Kebersihan:</strong><br>
                ✓ Penghuni wajib menjaga kebersihan kamar dan area umum kos/penginapan.<br>
                ✓ Sampah harus dibuang di tempat yang telah disediakan.<br>
                ✓ Dilarang membuang sampah ke dalam toilet.<br><br>

                <strong>4. Penggunaan Fasilitas:</strong><br>
                ✓ Penghuni bertanggung jawab atas penggunaan fasilitas bersama.<br>
                ✓ Penggunaan listrik dan air harus bijaksana. Dilarang menghidupkan AC, kipas angin, kulkas, atau kompor
                listrik saat penghuni tidak berada di ruangan.<br><br>

                <strong>5. Keamanan:</strong><br>
                ✓ Penghuni harus menjaga barang-barang pribadi dengan baik.<br>
                ✓ Dilarang membawa barang-barang berbahaya seperti senjata tajam, bahan peledak, narkoba, atau barang
                terlarang lainnya.<br>
                ✓ Dilarang memasak di dalam kamar yang dapat menyebabkan kebakaran atau bau tidak sedap.<br><br>

                <strong>6. Ketenangan:</strong><br>
                ✓ Dilarang membuat kebisingan yang mengganggu penghuni lain, terutama setelah pukul 22.00 WIB.<br>
                ✓ Dilarang memainkan musik atau alat musik dengan volume tinggi di kamar.<br>
                ✓ Dilarang membawa hewan peliharaan.<br><br>

                <strong>7. Larangan Merokok dan Minuman Keras:</strong><br>
                ✓ Dilarang merokok di dalam kamar dan area umum kos kecuali di lokasi yang telah ditentukan.<br>
                ✓ Penghuni dilarang membawa, menyimpan, atau mengonsumsi minuman keras di area kos/penginapan.<br><br>

                <strong>8. Kelalaian dan Kerusakan:</strong><br>
                ✓ Kejadian yang disebabkan kelalaian penghuni tidak menjadi tanggung jawab PLN UPDL Padang.<br>
                ✓ Penghuni dilarang melakukan perubahan atau renovasi kamar tanpa izin tertulis dari pengelola
                kos/penginapan.<br>
                ✓ Kerusakan yang disebabkan oleh penghuni akan dikenakan biaya perbaikan.<br><br>

                <strong>9. Pembayaran Sewa:</strong><br>
                Nama Bank: BRI<br>
                Nama Rekening: RECEIPT PT PLN PERSERO<br>
                Nomor Rekening: 0339-0100-0171-301<br><br>

                <strong>10. Pemutusan Hubungan Sewa:</strong><br>
                ✓ Penghuni harus memberikan pemberitahuan setidaknya 1 bulan sebelum berhenti menyewa kamar.<br>
                ✓ Uang deposit akan dikembalikan setelah dipotong biaya perbaikan (jika ada) dan tagihan lain yang belum
                dibayar.<br><br>

                <strong>SANKSI PELANGGARAN:</strong><br>
                ➢ Setiap pelanggaran terhadap aturan di atas akan dikenakan sanksi, mulai dari peringatan, denda, hingga
                pemutusan hubungan sewa secara sepihak oleh pengelola kos/penginapan.<br>
                ➢ Dengan menandatangani di bawah ini, saya menyatakan telah membaca, memahami, dan setuju untuk mematuhi
                semua aturan dan larangan yang telah ditetapkan oleh pengelola kos.
            </p>
            <button onclick="closeModal('syaratModal', 'syaratCheckbox')" id="syaratButton" disabled
                class="bg-blue-600 text-white px-4 py-2 rounded mt-4">Paham</button>
        </div>
    </div>





    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .card-header h4,
        .card-header h3 {
            font-weight: bold;
        }

        .list-unstyled li {
            font-size: 14px;
        }

        /* Gaya Modal */
        .modal.hidden {
            display: none;
        }

        .modal {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal .max-h-96 {
            max-height: 24rem;
            overflow-y: auto;
        }
    </style>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.remove('hidden');

            const button = modal.querySelector("button");
            button.disabled = true;

            modal.querySelector('.max-h-96').addEventListener('scroll', function() {
                if (this.scrollTop + this.clientHeight >= this.scrollHeight) {
                    button.disabled = false;
                }
            });
        }

        function closeModal(modalId, checkboxId) {
            const modal = document.getElementById(modalId);
            modal.classList.add('hidden');

            const checkbox = document.getElementById(checkboxId);
            checkbox.disabled = false;
            checkbox.checked = true;

            checkFormReady();
        }

        function checkFormReady() {
            const kebijakanChecked = document.getElementById('kebijakanCheckbox').checked;
            const syaratChecked = document.getElementById('syaratCheckbox').checked;
            const submitButton = document.getElementById('submitButton');

            if (kebijakanChecked && syaratChecked) {
                submitButton.disabled = false;
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\qi\Project Warna\1\Warna-Udiklat\resources\views/layouts/booking/create.blade.php ENDPATH**/ ?>