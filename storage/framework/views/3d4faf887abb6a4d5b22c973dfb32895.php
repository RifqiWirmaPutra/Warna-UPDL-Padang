<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title>Halaman Peserta - Warna</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/iconly/bold.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/app.css')); ?>">
        <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.svg')); ?>" type="image/x-icon">
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/simple-datatables/style.css')); ?>">
        <link href="<?php echo e(asset('landing_page/img/paneluser.png')); ?>" rel="icon">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

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
            
            
            <!-- Page Content -->
            <div id="app">
                <div id="sidebar" class="active">
                    <div class="sidebar-wrapper active">
                        <div class="sidebar-header">
                            <div class="d-flex justify-content-between">
                                <div class="logo">
                                    <a href="<?php echo e(route('dashboard')); ?>"><img src="<?php echo e(asset('assets/images/mockup2.1.png')); ?>" alt="Logo" srcset="" style="width: 10rem; height: auto;"></a>
                                </div>
                                <div class="toggler">
                                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                                </div>
                            </div>
                        </div>

                        <?php if(auth()->guard()->check()): ?>
                        <!-- <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <i class="bi-person-fill"></i> <div><?php echo e(Auth::user()->name); ?></div>
                        </div> -->
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <div style="background-image: url('<?php echo e(asset('landing_page/img/person.png')); ?>'); width: 35px; height: 35px; background-size: cover; margin-right: 8px;"></div>
                            <div style="display: flex; align-items: center;"><b><?php echo e(Auth::user()->name); ?></b></div>
                        </div>
                        <?php endif; ?>

                        <div class="sidebar-menu">
                            <ul class="menu">
                                <li class="sidebar-item">
                                    <a href="<?php echo e(route('profile.edit')); ?>" class='sidebar-link'>
                                        <i class="bi bi-person-fill"></i>
                                        <span class="small">Profile</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo e(route('uip.viewindex')); ?>" class='sidebar-link'>
                                        <i class="bi bi-pencil-fill"></i> <i class="bi bi-journal"></i>
                                        <span class="text-truncate small">Informasi Pembelajaran</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo e(route('udh.index')); ?>" class='sidebar-link'>
                                        <i class="bi-person-fill"></i>
                                        <span class="text-truncate small">Konfirmasi Kehadiran</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo e(route('absensi.store')); ?>" class='sidebar-link'>
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
                                    <a href="<?php echo e(route('layout.index')); ?>" class='sidebar-link'>
                                        <i class="bi bi-geo-fill"></i>
                                        <span class="small">Lihat Denah UPDL</span>
                                    </a>
                                </li>
                                <li class="sidebar-item  ">
                                    <a href="<?php echo e(route('infosarapan.index')); ?>" class='sidebar-link'>
                                        <i class="bi bi-egg-fried"></i>
                                        <span class="small">Lihat Jadwal Makan</span>
                                    </a>
                                </li>
                                <li class="sidebar-item  ">
                                    <a href="<?php echo e(route('feedback.index')); ?>" class='sidebar-link'>
                                        <i class="bi bi-chat-dots"></i>
                                        <span class="small">Testimoni Anda</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Authentication -->
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.responsive-nav-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault(); this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('responsive-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault(); this.closest(\'form\').submit();']); ?>
                                <?php echo e(__('Log Out')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
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
                        <?php echo $__env->yieldContent('content'); ?>
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

        <script src="<?php echo e(asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
        
        <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
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
<?php /**PATH C:\Users\USER\Downloads\part 2\Warna-Udiklat\resources\views/layouts/appUser.blade.php ENDPATH**/ ?>