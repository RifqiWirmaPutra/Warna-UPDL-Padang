<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Warna - PLN Udiklat Padang</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('landing_page/img/resize.png') }}" rel="icon">
    <link href="{{ asset('landing_page/img/resize.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landing_page/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->

    <link href="{{ asset('kuliner/css/app.css') }}" rel="stylesheet">

    <!-- fungsi aktif menu -->
    <style>
        .navbar .menu .navbar-item.active a {
            color: #00A2B9;
        }
    </style>
</head>

<body>
    <div class="menu-circular">
        <input type="checkbox" id="toggle" />
        <label id="show-menu" for="toggle">
            <div class="btn">
                <i class="material-icons md-36 toggleBtn menuBtn">menu</i>
                <i class="material-icons md-36 toggleBtn closeBtn">close</i>
            </div>
            <a href="{{ route('wisata') }}" class="btn">
                <img src="{{ asset('penginapan/images/icon-menu/10.png') }}" alt="icon penginapan"
                    class="material-icons md-36 img-fluid">
            </a>
            <a href="{{ route('kuliner') }}" class="btn">
                <img src="{{ asset('penginapan/images/icon-menu/9.png') }}" alt="icon kelas"
                    class="material-icons md-36 img-fluid">
            </a>
            <a href="{{ route('kafe') }}" class="btn">
                <img src="{{ asset('penginapan/images/icon-menu/8.png') }}" alt="icon peralatan"
                    class="material-icons md-36 img-fluid">
            </a>
            <a href="{{ route('hotel') }}" class="btn">
                <img src="{{ asset('penginapan/images/icon-menu/11.png') }}" alt="icon pembelajaran"
                    class="material-icons md-36 img-fluid">
            </a>
        </label>
    </div>


    <script src="{{ asset('kuliner/js/main.js') }}"></script>
    <script>
        // Menginisialisasi Hammer.js pada elemen .menu-circular
        const mc = new Hammer(menu);

        mc.on("pan", (e) => {
            if (isDragging) {
                const deltaX = e.deltaX;
                const deltaY = e.deltaY;

                menu.style.left = parseFloat(getComputedStyle(menu).left) + deltaX + 'px';
                menu.style.top = parseFloat(getComputedStyle(menu).top) + deltaY + 'px';
            }
        });
    </script>
</body>

</html>
