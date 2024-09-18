@extends('jdl.layouts.penginapan')

@section('content')

    <head>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet" />
        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
    </head>
    <body class="bg-gray-50">
        <div class="max-w-5xl mx-auto p-4">
            <h1 class="text-2xl font-bold mb-2">
                Pemesanan Akomodasi
            </h1>
            <p class="text-gray-600 mb-6">
                Pastikan anda mengisi semua informasi pada halaman ini untuk melanjutkan transaksi
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img alt="Room Image" class="w-full rounded-lg mb-4" height="200"
                        src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-LmQ09WWGIGwOeeA4ArnRw0x5/user-uJPET5fjNenSso8wCETWVNOp/img-k5u2LWGemP5xaOlbDI0vpJs3.png?st=2024-09-18T00%3A51%3A19Z&amp;se=2024-09-18T02%3A51%3A19Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-17T23%3A24%3A51Z&amp;ske=2024-09-18T23%3A24%3A51Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=DnciIBwweMt68iSwkZs3zXDhSWiBmyXru39VycBtlq4%3D"
                        width="300" />
                    <h2 class="text-lg font-bold mb-2">
                        Wisma UP 7
                    </h2>
                    <p class="text-gray-600 mb-4">
                        Family Room
                    </p>
                    <div class="flex justify-between items-center mb-2">
                        <div>
                            <p class="text-sm text-gray-500">
                                Check in
                            </p>
                            <p class="text-sm font-semibold">
                                Jum, 6 Sep 2024
                            </p>
                            <p class="text-sm text-gray-500">
                                Dari 14:00
                            </p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">
                                Check out
                            </p>
                            <p class="text-sm font-semibold">
                                Sab, 7 Sep 2024
                            </p>
                            <p class="text-sm text-gray-500">
                                Sebelum 12:00
                            </p>
                        </div>
                    </div>
                    <p class="text-sm font-semibold mb-2">
                        (1x) Wisma UP 7.2 Twin Bed
                    </p>
                    <div class="flex items-center mb-2">
                        <i class="fas fa-user-friends text-gray-500 mr-2">
                        </i>
                        <p class="text-sm">
                            2 Tamu
                        </p>
                    </div>
                    <div class="flex items-center mb-2">
                        <i class="fas fa-bed text-gray-500 mr-2">
                        </i>
                        <p class="text-sm">
                            2 Single Bed
                        </p>
                    </div>
                    <div class="flex items-center mb-2">
                        <i class="fas fa-wifi text-gray-500 mr-2">
                        </i>
                        <p class="text-sm">
                            WiFi
                        </p>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <p class="text-sm font-semibold">
                            Total Harga kamar
                        </p>
                        <p class="text-sm font-semibold">
                            Rp 350.000
                        </p>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                        <h2 class="text-lg font-bold mb-4">
                            Data Pemesanan
                        </h2>
                        <p class="text-sm text-gray-600 mb-4">
                            Isi semua kolom dengan benar untuk memastikan kamu dapat menerima voucher konfirmasi pemesanan
                            di email yang dicantumkan.
                        </p>
                        <form>
                            <div class="mb-4">
                                <label class="block text-sm font-semibold mb-2" for="nama">
                                    Nama Lengkap
                                </label>
                                <input class="w-full p-2 border border-gray-300 rounded-lg" id="nama"
                                    placeholder="Isi nama pemesan sesuai dengan KTP/Paspor/SIM (Tanpa tanda baca/gelar)"
                                    type="text" />
                            </div>
                            <div class="mb-4">
                                <label class="block text-sm font-semibold mb-2" for="email">
                                    Email
                                </label>
                                <input class="w-full p-2 border border-gray-300 rounded-lg" id="email"
                                    placeholder="Email yang akan menerima E-Voucher" type="email" />
                            </div>
                            <div class="mb-4">
                                <label class="block text-sm font-semibold mb-2" for="no_hp">
                                    No HP
                                </label>
                                <div class="flex">
                                    <select class="p-2 border border-gray-300 rounded-l-lg">
                                        <option>
                                            +62
                                        </option>
                                    </select>
                                    <input class="w-full p-2 border border-gray-300 rounded-r-lg" id="no_hp"
                                        placeholder="+628123456789, untuk Kode Negara (+62) dan No. Handphone 081234567"
                                        type="text" />
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="block text-sm font-semibold mb-2" for="nik">
                                    NIK
                                </label>
                                <input class="w-full p-2 border border-gray-300 rounded-lg" id="nik"
                                    placeholder="Masukkan NIK sesuai dengan di KTP" type="text" />
                            </div>
                        </form>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                        <h2 class="text-lg font-bold mb-4">
                            Beritahu disini jika ada permintaan khusus
                        </h2>
                        <p class="text-sm text-gray-600">
                            Ketersediaan permintaanmu akan dikonfirmasikan pada waktu check-in. Biaya tambahan mungkin akan
                            dikenakan tapi kamu masih bisa membatalkannya nanti.
                        </p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-lg font-bold mb-4">
                            Rincian Harga
                        </h2>
                        <p class="text-sm text-gray-600 mb-4">
                            Ketersediaan permintaanmu akan dikonfirmasikan pada waktu check-in. Biaya tambahan mungkin akan
                            dikenakan tapi kamu masih bisa membatalkannya nanti.
                        </p>
                        <div class="mb-4">
                            <p class="text-sm font-semibold">
                                Harga Kamar
                            </p>
                            <div class="flex justify-between items-center">
                                <p class="text-sm">
                                    (1x) Wisma UP 7.2 Twin Bed
                                </p>
                                <p class="text-sm">
                                    Rp 250.000
                                </p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <p class="text-sm font-semibold">
                                Pajak dan Biaya
                            </p>
                            <div class="flex justify-between items-center">
                                <p class="text-sm">
                                    Rp 100.000
                                </p>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="text-lg font-bold">
                                Harga Total
                            </p>
                            <p class="text-lg font-bold text-blue-600">
                                Rp 350.000
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
