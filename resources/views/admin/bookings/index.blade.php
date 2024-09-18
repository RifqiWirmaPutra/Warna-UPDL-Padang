@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Daftar Pemesanan
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <table class="table table-bordered table-striped mb-0" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Masuk</th>
                                <th>Tanggal Keluar</th>
                                <th>Email</th>
                                <th>Nomor HP</th>
                                <th>Upload KTP</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($bookings as $booking)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $booking->tanggalMasuk->format('Y-m-d') }}</td>
                                <td>{{ $booking->tanggalKeluar->format('Y-m-d') }}</td>
                                <td>{{ $booking->email }}</td>
                                <td>{{ $booking->noHP }}</td>
                                <td>
                                    @if($booking->uploadKTP)
                                        <a href="{{ Storage::url($booking->uploadKTP) }}" target="_blank">Lihat KTP</a>
                                    @else
                                        Tidak Ada KTP
                                    @endif
                                </td>
                                <td>
                                    <!-- Add actions if needed -->
                                    <!-- Example action: -->
                                    <!-- <a href="{{ route('admin.bookings.edit', $booking->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('admin.bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form> -->
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">No bookings found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .table-responsive {
        overflow-x: auto;
    }

    .table {
        width: 100%;
        max-width: none;
    }

    .table th,
    .table td {
        white-space: nowrap;
    }
</style>
@endsection
