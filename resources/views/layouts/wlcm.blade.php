<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Pembelajaran</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{asset('assets/vendors/simple-datatables/style.css')}}">
    <!-- Scripts -->
</head>
<body>
    <nav class="navbar navbar-light">
        <div class="container d-block">
            <a href="{{route('wlcm')}}"><i class="bi bi-chevron-left"></i></a>
            <a class="navbar-brand ms-3" href="{{ route('wlcm') }}">
                <!-- <img src="{{asset('assets/images/Logopln.png')}}" alt="Logo"> -->
                <span class="card-title">Kembali</span>
            </a>
        </div>
    </nav>
    <div class="container">
        <div class="card">
            <div class="card-body">
            <main class="py-1">
                @yield('content')
            </main>
            </div>     
        </div>
    </div>
</body>
</html>