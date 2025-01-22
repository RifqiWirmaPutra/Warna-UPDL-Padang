<!-- resources/views/layouts/booking/success.blade.php -->
@extends('layouts.dashboard.header')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Payment Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <script>
        // Function to copy text to clipboard
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function () {
                alert('Copied to clipboard: ' + text);
            }, function (err) {
                console.error('Could not copy text: ', err);
            });
        }

        // Redirect to booking page after 30 minutes
        function redirectToBooking() {
            window.location.href = "{{ route('layouts.booking.create', ['id' => $penginapans->id ?? 1]) }}";
        }

        // Set timer for 30 minutes (30 * 60 * 1000 milliseconds)
        setTimeout(redirectToBooking, 30 * 60 * 1000);

        // Countdown Timer
        function startCountdown(duration, display) {
            let timer = duration, minutes, seconds;
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
            let thirtyMinutes = 30 * 60,
                display = document.querySelector('#time');
            startCountdown(thirtyMinutes, display);
        };
    </script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="max-w-lg mx-auto mt-10 p-4 bg-white shadow-md rounded-lg">
        <div class="bg-blue-600 text-white text-center py-2 rounded-t-lg">
            <p>
                We're holding this price for you! Complete your payment within
                <span class="font-bold" id="time">30:00</span>
            </p>
        </div>
        <div class="bg-green-100 text-green-700 p-2 mt-4 rounded flex items-center">
            <i class="fas fa-check-circle mr-2"></i>
            <p>Silahkan tunggu konfirmasi dari Call Center +62 811-624-370</p>
        </div>

        <!-- Booking Details -->
        <div class="mt-6">
            <h2 class="text-lg font-bold">Booking Confirmation</h2>
            <p class="text-gray-700 mt-2">
                Your booking is confirmed! Below are your booking details:
            </p>
            <div class="bg-white p-4 mt-4 rounded-lg shadow-sm">
                <p><strong>Booking ID:</strong> {{ $booking->id }}</p>
                <p><strong>Email:</strong> {{ $booking->email }}</p>
                <p><strong>Check-in Date:</strong> {{ $booking->tanggalMasuk }}</p>
                <p><strong>Check-out Date:</strong> {{ $booking->tanggalKeluar }}</p>
                <p><strong> Type Room :</strong> {{ $roomType }}</p>
                <p><strong>Total Price:</strong> Rp. {{ number_format($totalPrice, 0, ',', '.') }}</p>
            </div>
        </div>

        <!-- Payment Information -->
        <div class="mt-6">
            <h2 class="text-lg font-bold">Please Transfer to</h2>
            <div class="bg-blue-50 p-4 mt-2 rounded-lg">
                <div class="flex justify-between items-center">
                    <h3 class="text-blue-700 font-bold">BRI Virtual Account</h3>
                    <img alt="BRIVA logo" height="20" src="https://febi.uinsaid.ac.id/wp-content/uploads/2020/11/Logo-BRI-Bank-Rakyat-Indonesia-PNG-Terbaru.png" width="50"/>
                </div>
                <p class="text-sm text-gray-500 mt-1">You can only transfer from BRI account</p>
                <div class="mt-4">
                    <div class="flex justify-between items-center">
                        <p class="font-bold">Account Number:</p>
                        <button class="text-blue-600" onclick="copyToClipboard('160301010823506')">
                            Copy
                        </button>
                    </div>
                    <p class="text-gray-700">160301010823506</p>
                    <div class="flex justify-between items-center mt-2">
                        <p class="font-bold">Account Holder Name:</p>
                    </div>
                    <p class="text-gray-700">UPDL PADANG</p>
                    <div class="flex justify-between items-center mt-2">
                        <p class="font-bold">Transfer Amount:</p>
                        <button class="text-blue-600" onclick="copyToClipboard('{{ number_format($totalPrice, 0, ',', '.') }}')">
                            Copy
                        </button>
                    </div>
                    <p class="text-gray-700">Rp {{ number_format($totalPrice, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>

        <!-- Payment Confirmation Buttons -->
        <div class="mt-6">
            <h2 class="text-lg font-bold">Completed your payment?</h2>
            <p class="text-gray-700 mt-2">
                Setelah pembayaran Anda dikonfirmasi, e-ticket dan tanda terima akan dikirimkan setelah konfirmasi lebih lanjut melalui call center UPDL PADANG.
            </p>
            <a class="mt-4 bg-blue-600 text-white py-2 px-4 rounded" href="{{ route('layouts.booking.create', ['id' => $penginapans->id ?? 1]) }}">
                Yes, I Have Paid
            </a>
            <a class="mt-4 bg-blue-600 text-white py-2 px-4 rounded" href="{{ route('layouts.booking.create', ['id' => $penginapans->id ?? 1]) }}">
                Kembali ke halaman booking
            </a>
        </div>
    </div>
</body>
</html>
@endsection
