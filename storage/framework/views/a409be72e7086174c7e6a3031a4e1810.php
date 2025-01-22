<!-- resources/views/layouts/booking/success.blade.php -->


<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
 <head>
  <title>Payment Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <script>
   // Function to redirect after 30 minutes
   function redirectToBooking() {
    window.location.href = "<?php echo e(route('layouts.booking.create', ['id' => $penginapans->id ?? 1])); ?>";
   }

   // Set timer for 30 minutes (30 * 60 * 1000 milliseconds)
   setTimeout(redirectToBooking, 30 * 60 * 1000);

   // Function to update the countdown timer
   function startCountdown(duration, display) {
     var timer = duration, minutes, seconds;
     setInterval(function () {
       minutes = parseInt(timer / 60, 10);
       seconds = parseInt(timer % 60, 10);

       minutes = minutes < 10 ? "0" + minutes : minutes;
       seconds = seconds < 10 ? "0" + seconds : seconds;

       display.textContent = minutes + ":" + seconds;

       if (--timer < 0) {
         timer = duration;
       }
     }, 1000);
   }

   window.onload = function () {
     var thirtyMinutes = 30 * 60,
       display = document.querySelector('#time');
     startCountdown(thirtyMinutes, display);
   };

   // Function to toggle the visibility of the slide-down content
   function toggleSlide(slideId, arrowId) {
     var slide = document.getElementById(slideId);
     var arrow = document.getElementById(arrowId);
     slide.classList.toggle('hidden');
     arrow.classList.toggle('fa-chevron-down');
     arrow.classList.toggle('fa-chevron-up');
   }
  </script>
 </head>
 <body class="bg-gray-100 font-sans">
  <div class="max-w-lg mx-auto mt-10 p-4 bg-white shadow-md rounded-lg">
   <div class="bg-blue-600 text-white text-center py-2 rounded-t-lg">
    <p>
     We're holding this price for you! Let's complete your payment in
     <span class="font-bold" id="time">30:00</span>
    </p>
   </div>
   <div class="bg-green-100 text-green-700 p-2 mt-4 rounded flex items-center">
    <i class="fas fa-check-circle mr-2"></i>
    <p>
     Silahkan tunggu konfirmasi dari Call Center 110.
    </p>
   </div>

   <!-- Informasi Pemesanan -->
   <div class="mt-6">
    <h2 class="text-lg font-bold">Booking Confirmation</h2>
    <p class="text-gray-700 mt-2">
     Your booking is confirmed! Below are your booking details:
    </p>
    <div class="bg-white p-4 mt-4 rounded-lg shadow-sm">
        <p><strong>Booking ID:</strong> <?php echo e($booking->id); ?></p>
        <p><strong>Email:</strong> <?php echo e($booking->email); ?></p>
        <p><strong>Check-in Date:</strong> <?php echo e($booking->tanggalMasuk); ?></p>
        <p><strong>Check-out Date:</strong> <?php echo e($booking->tanggalKeluar); ?></p>
        <p><strong>Room Type:</strong> <?php echo e($booking->penginapan->tipePenginapan ?? 'N/A'); ?></p>
        <p><strong>Room Choice:</strong> <?php echo e($booking->pilihanKamar); ?></p>
    </div>
   <!-- Informasi Pembayaran -->
   <div class="mt-6">
    <h2 class="text-lg font-bold">Please Transfer to</h2>
    <div class="bg-blue-50 p-4 mt-2 rounded-lg">
     <div class="flex justify-between items-center">
      <h3 class="text-blue-700 font-bold">
       BRI Virtual Account
      </h3>
      <img alt="BRIVA logo" height="20" src="https://febi.uinsaid.ac.id/wp-content/uploads/2020/11/Logo-BRI-Bank-Rakyat-Indonesia-PNG-Terbaru.png" width="50"/>
     </div>
     <p class="text-sm text-gray-500 mt-1">
      You can only transfer from BRI account
     </p>
     <div class="mt-4">
      <div class="flex justify-between items-center">
       <p class="font-bold">
        Account Number:
       </p>
       <button class="text-blue-600">
        Copy
       </button>
      </div>
      <p class="text-gray-700">
       160301010823506
      </p>
      <div class="flex justify-between items-center mt-2">
       <p class="font-bold">
        Account Holder Name:
       </p>
      </div>
      <p class="text-gray-700">
       UPDL PADANG
      </p>
      <div class="flex justify-between items-center mt-2">
        <p class="font-bold">
            Transfer Amount:
        </p>
        <button class="text-blue-600" onclick="copyToClipboard('<?php echo e(number_format($booking->harga, 0, ',', '.')); ?>')">
            Copy
        </button>
    </div>
    <p class="text-gray-700">
        Rp <?php echo e(number_format($booking->harga, 0, ',', '.')); ?>

    </p>
     </div>
    </div>
   </div>

   <!-- Tombol Konfirmasi Pembayaran -->
   <div class="mt-6">
    <h2 class="text-lg font-bold">Completed your payment?</h2>
    <p class="text-gray-700 mt-2">
     Setelah pembayaran Anda dikonfirmasi, e-ticket dan tanda terima akan dikirimkan setelah konfirmasi lebih lanjut melalui call center UPDL PADANG.
    </p>
    <a class="mt-4 bg-blue-600 text-white py-2 px-4 rounded" href="<?php echo e(route('layouts.booking.create', ['id' => $penginapans->id ?? 1])); ?>">
     Yes, I Have Paid
    </a>
    <a class="mt-4 bg-blue-600 text-white py-2 px-4 rounded" href="<?php echo e(route('layouts.booking.create', ['id' => $penginapans->id ?? 1])); ?>">
        Kembali ke halaman booking
    </a>
   </div>
  </div>
 </body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\Warna_terbaru\Warna-Udiklat\resources\views/layouts/booking/success.blade.php ENDPATH**/ ?>