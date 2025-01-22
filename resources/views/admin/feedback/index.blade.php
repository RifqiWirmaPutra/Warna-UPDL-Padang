@extends('layouts.admin')
@section('content')

<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Feedback
                </div>
                <div class="card-body small">
                    <div class="table-responsive">
                        @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        <table class="table table-bordered table-striped mb-0" id="table1">
                            <thead>
                                <tr>
                                <th style="min-width: 70px;">No</th>
                                    <th style="min-width: 150px;">Nama</th>
                                    <th style="min-width: 150px;">Email</th>
                                    <th style="min-width: 150px;">Subject</th>
                                    <th style="min-width: 150px;">Pesan</th>
                                    <th style="min-width: 150px;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($feedbacks as $feedback)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $feedback->nama_visit }}</td>
                                    <td class="align-middle">{{ $feedback->email_visit }}</td>
                                    <td class="align-middle">{{ $feedback->subject }}</td>
                                    <td class="align-middle">{{ $feedback->pesan }}</td>
                                    <td class="align-middle" id="status-{{ $feedback->id }}" data-status="{{ $feedback->status }}" style="cursor: pointer;" onclick="markAsRead({{ $feedback->id }})">
                                        <span class="badge {{ $feedback->status == 1 ? 'bg-success' : 'bg-danger' }} text-white">
                                            {{ $feedback->status == 1 ? 'Sudah Dibaca' : 'Belum Dibaca' }}
                                        </span>
                                    </td>

                                
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan ini di bagian bawah view -->
    <script>
        function markAsRead(id) {
            fetch(`/admin/feedback/mark-as-read/${id}`, {
    method: 'POST',
    headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}',
        'Content-Type': 'application/json',
        'Accept': 'application/json',
    },
})
.then(response => response.json())
.then(data => {
    if (data.success) {
        // Update tampilan di sisi klien
        const statusElement = document.querySelector(`#status-${id}`);
        
        // Mengambil elemen dengan kelas .badge di dalam elemen status
        const badgeElement = statusElement.querySelector('.badge');
        
        // Mengubah teks dalam elemen .badge menjadi 'Sudah Dibaca'
        badgeElement.innerText = 'Sudah Dibaca';

        // Update atribut data-status ke elemen untuk menyimpan status di sisi klien
        statusElement.setAttribute('data-status', '1');

        // Optional: Tambahkan perubahan visual jika diperlukan
        badgeElement.classList.remove('bg-danger', 'text-white'); // Menghapus warna latar belakang merah dan teks putih
        badgeElement.classList.add('bg-success');   // Menambahkan warna latar belakang hijau

        // Simpan status di local storage (gunakan JSON.stringify untuk mengonversi menjadi string)
        localStorage.setItem(`status-${id}`, JSON.stringify(1));

        // Menampilkan pesan sukses
        alert('Feedback berhasil ditandai sebagai sudah dibaca.');
    } else {
        // Menampilkan pesan gagal jika server mengembalikan false
        alert('Gagal menandai feedback sebagai sudah dibaca.');
    }
})
.catch(error => {
    // Menampilkan pesan jika terjadi kesalahan dalam proses
    console.error('Error:', error);
});

    }


    </script>


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

    <script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

@endsection
