<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Halaman Peserta - Warna</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/iconly/bold.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{asset('assets/vendors/simple-datatables/style.css')}}">
        <link href="{{ asset('landing_page/img/paneluser.png') }}" rel="icon">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
        .active-menu {
            background-color: #fff000;
            border-radius: 10px; /* Adjust the radius as needed */
            padding: 10px;
        }
        .sidebar-item.active-menu{
            background-color: #fff000;
            border-radius: 10px;
        }
        #loading2 {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7); /* Latar belakang semi-transparan */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999; /* Atur z-index untuk menempatkan elemen loading di atas konten lain */
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var currentURL = window.location.href;
            $('.sidebar-item a').each(function() {
                var menuItemURL = $(this).attr('href');
                if (currentURL.includes(menuItemURL)) {
                    $(this).addClass('active-menu');
                    $(this).closest('.sidebar-item').addClass('active-menu');
                }
            });
        });
    </script>
    </head>

    <body class="font-sans antialiased">
        <div id="loading2" class="text-center">
            <div class="spinner-border" role="status"></div>
            <p>Loading...</p>
        </div>
        <div class="min-h-screen bg-gray-100">
            {{-- @include('layouts.navigation') --}}
            
            <!-- Page Content -->
            <div id="app">
                <div id="sidebar" class="active">
                    <div class="sidebar-wrapper active">
                        <div class="sidebar-header">
                            <div class="d-flex justify-content-between">
                                <div class="logo">
                                    <a href="{{route('dashboard')}}"><img src="{{asset('assets/images/mockup2.1.png')}}" alt="Logo" srcset="" style="width: 10rem; height: auto;"></a>
                                </div>
                                <div class="toggler">
                                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                                </div>
                            </div>
                        </div>

                        @auth
                        <!-- <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <i class="bi-person-fill"></i> <div>{{ Auth::user()->name }}</div>
                        </div> -->
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <div style="background-image: url('{{ asset('landing_page/img/person.png') }}'); width: 35px; height: 35px; background-size: cover; margin-right: 8px;"></div>
                            <div style="display: flex; align-items: center;"><b>{{ Auth::user()->name }}</b></div>
                        </div>
                        @endauth

                        <div class="sidebar-menu">
                            <ul class="menu">
                                <li class="sidebar-item">
                                    <a href="{{route('profile.edit')}}" class='sidebar-link'>
                                        <i class="bi bi-person-fill"></i>
                                        <span class="small">Profile</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{route('uip.viewindex')}}" class='sidebar-link'>
                                        <i class="bi bi-pencil-fill"></i> <i class="bi bi-journal"></i>
                                        <span class="text-truncate small">Informasi Pembelajaran</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ route('udh.index') }}" class='sidebar-link'>
                                        <i class="bi-person-fill"></i>
                                        <span class="text-truncate small">Konfirmasi Kehadiran</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ route('absensi.store')}}" class='sidebar-link'>
                                        <i class="bi-person-check-fill"></i>
                                        <span class="text-truncate small">Daftar Hadir</span>
                                    </a>
                                </li>
                                <!-- <li class="sidebar-item">
                                    <a href="" class='sidebar-link'>
                                        <i class="bi bi-grid-1x2-fill"></i>
                                        <span class="small">Check-in Penginapan</span>
                                    </a>
                                </li> -->
                                <li class="sidebar-item  ">
                                    <a href="{{route('layout.index')}}" class='sidebar-link'>
                                        <i class="bi bi-geo-fill"></i>
                                        <span class="small">Lihat Denah UPDL</span>
                                    </a>
                                </li>
                                <li class="sidebar-item  ">
                                    <a href="{{route('infosarapan.index')}}" class='sidebar-link'>
                                        <i class="bi bi-egg-fried"></i>
                                        <span class="small">Lihat Jadwal Makan</span>
                                    </a>
                                </li>
                                <li class="sidebar-item  ">
                                    <a href="{{route('feedback.index')}}" class='sidebar-link'>
                                        <i class="bi bi-chat-dots"></i>
                                        <span class="small">Testimoni Anda</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
                    </div>
                </div>

                <div id="main">
                    <header class="mb-3">
                        <a href="#" class="burger-btn d-block d-xl-none">
                            <i class="bi bi-justify fs-3"></i>
                        </a>
                    </header>
                    
                    <main class="py-4">
                        @yield('content')
                    </main>
                    
                    <footer>
                        <div class="footer clearfix mb-0 text-muted">
                            <div class="float-start">
                                <p>PLN UPDL Padang 2023</p>
                            </div>
                            <div class="float-end">
                                <span class="text-danger"><i class="bi bi-heart"></i></span><span style="padding-left: 3px;">Version 1.0</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>

        <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        {{-- <!-- <script src="{{ asset('assets/vendors/apexcharts/apexcharts.js') }}"></script><script src="{{ asset('assets/js/pages/dashboard.js') }}"></script> --> --}}
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Tampilkan elemen loading saat halaman dimuat
                document.getElementById('loading2').style.display = 'none';

                // Get the current URL
                var currentURL = window.location.href;

                // Loop through each menu item and compare its href with the current URL
                $('.sidebar-item a').each(function() {
                    var menuItemURL = $(this).attr('href');
                    if (currentURL.includes(menuItemURL)) {
                        $(this).addClass('active-menu');
                        $(this).closest('.sidebar-item').addClass('active-menu');
                    }
                });

                // Sembunyikan elemen loading setelah halaman selesai dimuat
                window.addEventListener('load', function() {
                    document.getElementById('loading2').style.display = 'none';
                });
            });
        </script>
    </body>
</html>
