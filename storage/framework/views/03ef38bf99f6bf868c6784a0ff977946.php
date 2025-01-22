<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title>Halaman Login</title>
        <link href="<?php echo e(asset('landing_page/img/login.png')); ?>" rel="icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/app.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/pages/auth.css')); ?>">
        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="<?php echo e(route('wlcm')); ?>"><img src="<?php echo e(asset('assets/images/mockup2.1.png')); ?>" alt="Logo" style="min-width: 8rem; min-height: 5rem;" ></a>
                    </div>   
                    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                        <?php echo e($slot); ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>
    </div>
    </body>
</html>
<?php /**PATH C:\Users\USER\Downloads\part 2\Warna-Udiklat\resources\views/layouts/guest.blade.php ENDPATH**/ ?>