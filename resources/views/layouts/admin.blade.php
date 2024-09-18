<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Halaman Admin - Warna</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconly/bold.css') }}">
    <link href="{{ asset('landing_page/img/paneladmin.png') }}" rel="icon">

    <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('assets/vendors/simple-datatables/style.css')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">




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
 <!-- Add this within the <head> section of your HTML -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
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
        });
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div id="loading2" class="text-center">
    <div class="spinner-border" role="status">
    </div>
    <p>Loading...</p>
</div>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="{{route('admin.dashboard')}}"><img src="{{asset('assets/images/mockup2.1.png')}}" alt="Logo Warna" srcset="" style="min-width: 8rem; min-height: 5rem;"></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>

                <div class="sidebar-menu">
                    <ul class="menu">

                        <li class="sidebar-item">
                            <a href="{{route('admin.dashboard')}}" class='sidebar-link'>
                                <i class="bi bi-house-door-fill"></i>
                                <span class="small">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="{{ route('admin.aip.view') }}" class='sidebar-link'>
                                <!-- <i class="bi bi-stack"></i> -->
                                <!-- <i class="fa-solid fa-chalkboard-user"></i> -->
                                <i class="bi bi-pencil-fill"></i> <i class="bi bi-journal"></i>
                                <span class="text-truncate small">Informasi Pembelajaran</span>
                            </a>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-folder-fill"></i>
                                <span class="small">Management</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item">
                                    <a href="{{ route('arp.index') }}">Rendiklat</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ route('Adh.index') }}">Daftar Hadir Peserta</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{route('penginapan.index')}}">Informasi Penginapan (COMING SOON)</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('index.arsip')}}" class='sidebar-link'>
                                <i class="bi bi-archive-fill"></i>
                                <span class="small">Arsip Data Selesai</span>
                            </a>
                        </li>
                        @php
                            use App\Models\Admin;
                            $userRole = auth()->user()->role;
                        @endphp
                        @if($userRole === Admin::ROLE_SUPERADMIN)
                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <!-- <i class="bi bi-collection-fill"></i> -->
                                <i class="bi bi-server"></i>
                                <span class="small">Data Master</span>
                            </a>
                            <ul class="submenu ">
                            <li class="submenu-item ">
                                    <a href="{{ route('contactadmin.index') }}">Contact</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="{{ route('kelas.index') }}">Kelas</a>
                                </li>

                                <li class="submenu-item ">
                                    <a href="{{ route('wisma.index') }}">Wisma</a>
                                </li>

                                <li class="submenu-item ">
                                    <a href="{{ route('sarana.admin') }}">Sarana & Prasarana</a>
                                </li>

                                <li class="submenu-item ">
                                    <a href="{{ route('informasiadmin.admin') }}">Informasi</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        <li class="sidebar-item">
                            <a href="{{ route('feedbackadmin.index') }}"  class='sidebar-link'>
                                <i class="bi bi-headset"></i>
                                <span class="small"> Layanan Testimoni</span>
                            </a>
                        </li>
                        @if(in_array($userRole, [Admin::ROLE_SUPERADMIN, Admin::ROLE_AdminJar]))
                        <li class="sidebar-item">
                            <a href="{{route('adh.pengajuan')}}" class='sidebar-link'>
                                <!-- <i class="bi bi-check-square-fill"></i> -->
                                <i class="bi bi-calendar-check-fill"></i>
                                <span class="small">Pengajuan Kehadiran</span>
                            </a>
                        </li>
                        @endif
                        @if($userRole === Admin::ROLE_SUPERADMIN)
                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <!-- <i class="bi bi-collection-fill"></i> -->
                                <i class="bi bi-telephone-plus-fill"></i>
                                <span class="small">Jasa Dan Layanan</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item">
                                    <a href="{{ route('admin.penginapan.index') }}">Informasi Penginapan</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ route('admin.ruangan.index') }}">Ruangan</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="{{ route('admin.peralatan.index') }}">Peralatan</a>
                                </li>

                                <li class="submenu-item ">
                                    <a href="{{ route('wisma.index') }}">Pembelajaran</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        @if($userRole === Admin::ROLE_SUPERADMIN)
                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                {{-- <i class="bi bi-clipboard-check-fill"></i> --}}
                                <span class="small">Booking</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{route('admin.bookings.index')}}">Penginapan</a>
                                </li>.
                                {{-- <li class="submenu-item ">
                                    <a href="{{ route('admin.bookingRuangan.index') }}">Ruangan</a>
                                </li> --}}
                            </ul>
                        </li>
                        @endif
                        <li class="sidebar-item">
                        </li>

                        {{-- <!-- @if($userRole === Admin::ROLE_SUPERADMIN)
                        <li class="sidebar-item">
                            <a href="{{ route('sarana.admin') }}" class='sidebar-link'>
                                <i class="bi bi-hexagon-fill"></i>
                                <span class="small">Sarana dan Prasarana</span>
                            </a>

                        </li>
                        @endif --> --}}

                        @if(in_array($userRole, [Admin::ROLE_SUPERADMIN, Admin::ROLE_AdminJar]))
                        <li class="sidebar-item">
                            <a href="{{ route('settings.absensi') }}" class='sidebar-link'>
                                <!-- <i class="bi bi-person-plus-fill"></i> -->
                                <i class="bi bi-clock-fill"></i>

                                <span class="small">Setting Absensi</span>
                            </a>
                        </li>
                        @endif


                        @if($userRole === Admin::ROLE_SUPERADMIN)
                        <li class="sidebar-item">


                            <a href="{{ route('accounts.create') }}" class='sidebar-link'>
                                <i class="bi bi-person-plus-fill"></i>
                                <span class="small">Create Admin</span>
                            </a>
                        </li>
                        @endif
                    </ul>

                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

        <div id="main">
            <header class="mb-0">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3">
                    </i>
                </a>
                @include('layouts.navigation_admin')

            </header>


            <main class="py-4">

                @yield('content')
            </main>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                <div class="copyright">
                    &copy; Copyright <strong><span>PLN UPDL Padang</span></strong>
                </div>

                </div>
            </footer>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
     {{-- <script src="{{ asset('assets/vendors/apexcharts/apexcharts.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script> --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
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
