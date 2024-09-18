@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h2>Book a Room</h2>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('layout.booking.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="tanggalMasuk">Check-In Date</label>
                        <input type="date" id="tanggalMasuk" name="tanggalMasuk" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggalKeluar">Check-Out Date</label>
                        <input type="date" id="tanggalKeluar" name="tanggalKeluar" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="noHP">Phone Number</label>
                        <input type="text" id="noHP" name="noHP" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="uploadKTP">Upload KTP</label>
                        <input type="file" id="uploadKTP" name="uploadKTP" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Booking</button>
                </form>
            </div>
        </div>
    </div>
@endsection
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Room</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Booking System</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('booking.create') }}">Book a Room</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h2>Book a Room</h2>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="tanggalMasuk">Check-In Date</label>
                        <input type="date" id="tanggalMasuk" name="tanggalMasuk" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggalKeluar">Check-Out Date</label>
                        <input type="date" id="tanggalKeluar" name="tanggalKeluar" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="noHP">Phone Number</label>
                        <input type="text" id="noHP" name="noHP" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="uploadKTP">Upload KTP</label>
                        <input type="file" id="uploadKTP" name="uploadKTP" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Booking</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> --}}
