<?php $__env->startSection('content'); ?>
    <style>
        /* (Gaya CSS yang sudah ada) */
    </style>

    <div class="header">
        PT PLN UPDL Padang<br>
        Unit Pelaksana Pendidikan Dan Pelatihan Padang (Learning Unit)
    </div>

    <div class="container">
        <?php $__currentLoopData = $penginapans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penginapan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="room-card">
                <div class="room-image">
                    <h3 class="tipeRuangan" style="padding: 10px"><?php echo e($penginapan->tipePenginapan); ?></h3>
                    <img id="carousel-image" src="<?php echo e($penginapan->fotoPenginapan); ?>" alt="<?php echo e($penginapan->tipePenginapan); ?>">
                    <div class="arrow left" onclick="prevImage()">&#10094;</div>
                    <div class="arrow right" onclick="nextImage()">&#10095;</div>
                </div>
                <div class="room-info">
                    <table>
                        <tr>
                            <div style="font-weight: bold">Pilihan Kamar</div>
                            <td>
                                <div class="button-group">
                                    <div class="button"
                                        onclick="updatePrice('<?php echo e($penginapan->hargadpln); ?>', '<?php echo e($penginapan->id); ?>')">Daily
                                        PLN Group</div>
                                    <div class="button"
                                        onclick="updatePrice('<?php echo e($penginapan->hargampln); ?>', '<?php echo e($penginapan->id); ?>')">
                                        Monthly PLN Group</div>
                                </div>
                                <div class="button-group">
                                    <div class="button"
                                        onclick="updatePrice('<?php echo e($penginapan->hargadnonpln); ?>', '<?php echo e($penginapan->id); ?>')">
                                        Daily Non PLN Group</div>
                                    <div class="button"
                                        onclick="updatePrice('<?php echo e($penginapan->hargamnonpln); ?>', '<?php echo e($penginapan->id); ?>')">
                                        Monthly Non PLN Group</div>
                                </div>
                            </td>
                            <td class="room-price">
                                <div id="price-display-<?php echo e($penginapan->id); ?>" class="price">Harga: -</div>
                                <a href="<?php echo e(route('booking.form')); ?>">
                                    <div id="button-container-booking" class="button-container">
                                        <button class="price-button">Pilih</button>
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
        function updatePrice(price, penginapanId) {
            // Mengupdate tampilan harga untuk penginapan tertentu
            document.getElementById('price-display-' + penginapanId).innerText = 'Harga: ' + price;
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('jdl.layouts.penginapan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Magang\vkita\Iklat\Warna-Udiklat\resources\views/jdl/booking/booking.blade.php ENDPATH**/ ?>