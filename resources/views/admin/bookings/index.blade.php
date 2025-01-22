@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Daftar Pemesanan</h5>
                    <span class="badge bg-light text-dark">{{ $bookings->count() }} Total Booking</span>
                </div>
                <div class="card-body">

                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Pencarian -->
                    <div class="form-group mb-3">
                        <label for="tipePenginapan">Filter Berdasarkan Tipe Penginapan:</label>
                        <select id="tipePenginapan" name="tipePenginapan" class="form-control">
                            <option value="">All Type Room</option>
                            <option value="Family Room">Family Room</option>
                            <option value="Standard Room">Standard Room</option>
                        </select>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-striped align-middle mb-0" id="table1">
                            <thead class="table-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Tanggal Keluar</th>
                                    <th>Tipe Kamar</th>
                                    <th>Pilihan Kamar</th>
                                    <th>Harga per-Kamar</th>
                                    <th>Total Harga</th>
                                    <th>Email</th>
                                    <th>Nomor HP</th>
                                    <th>Nomor NIK</th>
                                    <th>Nomor NIP</th>
                                    <th>Action</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($bookings as $booking)
                                    <tr class="booking-row" data-room-type="{{ $booking->penginapan->tipePenginapan ?? 'N/A' }}">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $booking->tanggalMasuk->format('Y-m-d') }}</td>
                                        <td>{{ $booking->tanggalKeluar->format('Y-m-d') }}</td>
                                        <td>{{ $booking->penginapan->tipePenginapan ?? 'N/A' }}</td>
                                        <td>{{ $booking->pilihanKamar ?? 'N/A' }}</td>
                                        <td>Rp {{ number_format($booking->harga, 0, ',', '.') }}</td>
                                        <td>Rp {{ number_format($booking->totalHarga, 0, ',', '.') }}</td>
                                        <td>{{ $booking->email }}</td>
                                        <td>{{ $booking->noHP }}</td>
                                        <td>{{ $booking->nik }}</td>
                                        <td>{{ $booking->nip }}</td>
                                        <td>
                                            <form action="{{ route('admin.bookings.destroy', $booking->id) }}"
                                                method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                                    title="Hapus Booking">
                                                    <i class="bi bi-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <select class="form-select form-select-sm"
                                                onchange="updateStatus(this, {{ $booking->id }})">
                                                <option value="0" {{ $booking->status == 0 ? 'selected' : '' }}>
                                                    Pending</option>
                                                <option value="1" {{ $booking->status == 1 ? 'selected' : '' }}>
                                                    Confirmed</option>
                                                <option value="2" {{ $booking->status == 2 ? 'selected' : '' }}>Cancel
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="12" class="text-center text-muted">No bookings found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Function to filter bookings based on selected room type
        document.getElementById('tipePenginapan').addEventListener('change', function() {
            const selectedRoomType = this.value.toLowerCase();
            const rows = document.querySelectorAll('.booking-row');

            rows.forEach(row => {
                const roomType = row.getAttribute('data-room-type').toLowerCase();
                if (selectedRoomType === '' || roomType.includes(selectedRoomType)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        function updateStatus(selectElement, bookingId) {
            const status = selectElement.value;
            fetch(`/admin/bookings/${bookingId}/status`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-Token': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        status: status
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Status berhasil diubah!');
                    } else {
                        alert('Gagal mengubah status.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>

    <style>
        .table-responsive {
            overflow-x: auto;
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }

        .card-header h5 {
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-control {
            padding: 0.75rem;
        }

        /* Add more styling to make the table look clean */
        .table th {
            text-align: center;
        }

        .table td {
            text-align: center;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }

        .table-striped tbody tr:nth-of-type(even) {
            background-color: #ffffff;
        }
    </style>
@endsection
