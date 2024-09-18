{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking System</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Booking System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('booking.create') }}">Book a Room</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html> --}}
<html>

<head>
    <title>
        Warna - PT PLN UPDL Padang
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center">
                <button class="text-gray-500 focus:outline-none lg:hidden">
                    <i class="fas fa-bars">
                    </i>
                </button>
                <a class="text-2xl font-bold text-gray-800 ml-4" href="#">
                    WARNA
                </a>
            </div>
            <div class="hidden lg:flex lg:items-center">
                <a class="text-gray-600 mr-6" href="mailto:udiklat.padang@gmail.com">
                    udiklat.padang@gmail.com
                </a>
                <a class="text-gray-600 mr-6" href="tel:+6282172785770">
                    (+62) 821-7278-5770
                </a>
                <a class="text-gray-600" href="#">
                    Kembali ke Halaman Sebelumnya
                </a>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <main class="container mx-auto mt-6">
        <div class="relative">
            <img alt="Aerial view of PT PLN UPDL Padang" class="w-full h-64 object-cover rounded-lg shadow-md"
                height="400"
                src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-Hh5RPsKhtBPsWCFSiEKnUJ6x/user-8qgiVpCV0U0b7zDjfFInHgjl/img-FSNdAUScdNfJQ4PqSUpS4IlB.png?st=2024-09-17T03%3A24%3A49Z&amp;se=2024-09-17T05%3A24%3A49Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-16T23%3A20%3A28Z&amp;ske=2024-09-17T23%3A20%3A28Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=TPZm8EwS0zTGFz0ygyaUdc1W8ItnYmY1n8MfyDrMbis%3D"
                width="1200" />
            <div class="absolute inset-0 flex items-center justify-center">
                <h1 class="text-white text-3xl font-bold text-center bg-black bg-opacity-50 p-4 rounded-lg">
                    PT PLN UPDL Padang
                    <br />
                    Unit Pelaksana Pendidikan Dan Pelatihan Padang (Learning Unit)
                </h1>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg mt-6 p-6">
            <h2 class="text-xl font-bold mb-4">
                Family Room
            </h2>
            <div class="flex">
                <img alt="Image of a hotel building" class="w-1/3 rounded-lg shadow-md" height="150"
                    src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-Hh5RPsKhtBPsWCFSiEKnUJ6x/user-8qgiVpCV0U0b7zDjfFInHgjl/img-GQYVMPRJLFufbILRm7k5bkwO.png?st=2024-09-17T03%3A24%3A50Z&amp;se=2024-09-17T05%3A24%3A50Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-16T23%3A18%3A09Z&amp;ske=2024-09-17T23%3A18%3A09Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=zXlHsMynG4tW5c/rDhOQ/MvBrZ9frP2FwbuX%2B31iaJI%3D"
                    width="200" />
                <div class="w-2/3 pl-6">
                    <h3 class="text-lg font-semibold mb-2">
                        Pilihan Kamar
                    </h3>
                    <div class="flex flex-wrap mb-4">
                        <button
                            class="bg-gray-200 text-gray-700 py-2 px-4 rounded-full mr-2 mb-2 hover:bg-gray-300 transition duration-300">
                            Daily PLN Group
                        </button>
                        <button
                            class="bg-gray-200 text-gray-700 py-2 px-4 rounded-full mr-2 mb-2 hover:bg-gray-300 transition duration-300">
                            Monthly PLN Group
                        </button>
                        <button
                            class="bg-gray-200 text-gray-700 py-2 px-4 rounded-full mr-2 mb-2 hover:bg-gray-300 transition duration-300">
                            Daily Non PLN Group
                        </button>
                        <button
                            class="bg-gray-200 text-gray-700 py-2 px-4 rounded-full mr-2 mb-2 hover:bg-gray-300 transition duration-300">
                            Monthly Non PLN Group
                        </button>
                    </div>
                    <div class="flex items-center">
                        <span class="text-2xl font-bold text-green-500">
                            Rp 250.000
                        </span>
                        {{-- <form action="{{ route('layout.booking.store') }}" method="POST" class="inline">
                            @csrf
                             <button type="submit"
                                class="bg-green-500 text-white py-2 px-4 rounded-full ml-4 hover:bg-green-600 transition duration-300">
                                Pilih
                            </button>
                        </form> --}}
                        <a href="{{ route('layout.booking.create') }}" class="bg-green-500 text-white py-2 px-4 rounded-full ml-4 hover:bg-green-600 transition duration-300">
                            Pilih
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
