<?php $__env->startSection('content'); ?>
    <style>
        /* Styling untuk Container Utama */
        .container {
            width: 80%;
            margin: 0 auto;
        }

        /* Styling untuk Bagian Background Header */
        .header {
            background-image: url('/penginapan/images/data-updl/updl padang/front.jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
        }

        /* Styling Tipe Ruangan */
        .tipeRuangan {
            border-radius: 5px;
            font-size: 22px;
            font-weight: bold;
        }

        /* Styling untuk Ruangan */
        .room-card {
            display: flex;
            flex-direction: row;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px;
            overflow: hidden;
            background-color: #fff;
            margin: 20px 0;
            gap: 20px;
            position: relative;
        }

        .room-image img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-radius: 10px;
        }

        .room-image {
            width: 25%;
            position: relative;
        }

        .facilities {
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
            color: #555;
        }

        .facilities p {
            margin: 5px 0;
        }

        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 5px;
            cursor: pointer;
            border-radius: 50%;
            z-index: 10;
        }

        .arrow.left {
            left: 10px;
        }

        .arrow.right {
            right: 10px;
        }

        .facilities {
            margin-top: 30px;
            /* Jarak antara foto dan fasilitas */
            font-size: 14px;
            color: #555;
        }


        /* Styling untuk Informasi Ruangan */
        .room-info {
            text-align: left;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .room-info h3 {
            margin: 0;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0px;
            margin: 20px;
            font-family: Arial, sans-serif;
            gap: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        td {
            width: 700px;
            border: 1px solid #dddddd;
            padding: 15px;
            text-align: left;
        }

        .button-group {
            display: flex;
            width: 100%;
            flex-direction: row;
            gap: 15px;
            padding: 5px;
        }

        .button {
            border: 1px solid #ccc;
            border-radius: 25px;
            padding: 8px 16px;
            cursor: pointer;
            background-color: #f2f2f2;
        }

        .button:hover {
            background-color: #e0e0e0;
        }

        .price-section {
            text-align: right;
        }

        .room-price {
            width: 30%;
            text-align: center;
            padding: 50px 0;
        }

        .price {
            font-size: 24px;
            margin-bottom: 20px;
            color: #4CAF50;
        }

        .price-button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            opacity: 0.5;
            /* Tombol tidak aktif */
        }

        .price-button:hover {
            background-color: #45a049;
        }

        .price-button.active {
            opacity: 1;
            /* Tombol aktif */
        }
    </style>

    <div class="header">
        PT PLN UPDL Padang<br>
        Unit Pelaksana Pendidikan Dan Pelatihan Padang (Learning Unit)
    </div>

    <div class="container">
        <?php $__currentLoopData = $penginapans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penginapan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Room Card -->
            <div class="room-card">
                <div class="room-image">
                    <h3 class="tipeRuangan" style="padding: 10px"><?php echo e($penginapan->tipePenginapan); ?></h3>
                    <img id="carousel-image"
                        src="<?php echo e(asset('storage/storage/assets/penginapan/' . $penginapan->fotoPenginapan)); ?>"
                        alt="<?php echo e($penginapan->tipePenginapan); ?>">

                    

                    <div class="facilities" style="margin-top: 10px; font-size: 14px; color: #555;">
                        <p><strong>Fasilitas:</strong> <?php echo e($penginapan->fasilitas); ?></p>
                        
                    </div>
                </div>

                <div class="room-info">
                    <table>
                        <tr>
                            <div style="font-weight: bold">Pilihan Kamar</div>
                            <td>
                                <div class="button-group">
                                    <div class="button"
                                        onclick="updatePrice('hargadpln', <?php echo e($penginapan->hargadpln); ?>, <?php echo e($penginapan->id); ?>)">
                                        Daily PLN Group</div>
                                    <div class="button"
                                        onclick="updatePrice('hargampln', <?php echo e($penginapan->hargampln); ?>, <?php echo e($penginapan->id); ?>)">
                                        Monthly PLN Group</div>
                                </div>
                                <div class="button-group">
                                    <div class="button"
                                        onclick="updatePrice('hargadnonpln', <?php echo e($penginapan->hargadnonpln); ?>, <?php echo e($penginapan->id); ?>)">
                                        Daily Non PLN Group</div>
                                    <div class="button"
                                        onclick="updatePrice('hargamnonpln', <?php echo e($penginapan->hargamnonpln); ?>, <?php echo e($penginapan->id); ?>)">
                                        Monthly Non PLN Group</div>
                                </div>

                            </td>
                            <td class="room-price">
                                <div class="price" id="price-<?php echo e($penginapan->id); ?>">Rp 0</div>
                                <a href="<?php echo e(route('layouts.booking.create', ['id' => $penginapan->id])); ?>">
                                    <?php
                                        session(['price' => 0]); // Menginisialisasi harga session
                                    ?>
                                    <div id="button-container-booking" class="button-container">
                                        <button id="booking-button-<?php echo e($penginapan->id); ?>" class="price-button"
                                            disabled>Pilih</button>
                                    </div>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <script>
        function updatePrice(priceType, price, id) {
            // Mengupdate harga pada elemen
            const priceElement = document.getElementById('price-' + id);
            priceElement.innerText = 'Rp ' + price.toLocaleString(); // Format dan update harga
            // Mengirim harga ke server untuk disimpan di session
            fetch('/update-price', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>',
                    },
                    body: JSON.stringify({
                        price: price,
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data.message); // Cek jika harga berhasil disimpan di session
                })
                .catch(error => console.error('Error:', error));

            // Mengaktifkan tombol "Pilih"
            const bookingButton = document.getElementById('booking-button-' + id);
            bookingButton.classList.add('active');
            bookingButton.removeAttribute('disabled'); // Mengaktifkan tombol
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('jdl.layouts.penginapan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\qi\Project Warna\1\Warna-Udiklat\resources\views/jdl/penginapan/padang.blade.php ENDPATH**/ ?>