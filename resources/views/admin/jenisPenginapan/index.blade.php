@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold">Daftar Jenis Penginapan</h1>
            <a href="{{ route('admin.jenisPenginapan.create') }}" class="btn btn-primary">Tambah Jenis Penginapan</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead class="table-light">
                    <tr>
                        <th class="text-center">Nama dan Nomor Kamar</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($jenisPenginapans as $jenisPenginapan)
                        <tr>
                            <td class="align-middle text-center">
                                {{ $jenisPenginapan->nama }} - {{ $jenisPenginapan->nomorKamar }}
                            </td>
                            <td class="text-center align-middle">
                                <a href="{{ route('admin.jenisPenginapan.edit', $jenisPenginapan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.jenisPenginapan.destroy', $jenisPenginapan->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="text-center">Belum ada data jenis penginapan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

{{-- @extends('layouts.admin')

@section('content')
<div class="container my-5">
    <h1>Jenis Penginapan</h1>
    <a href="{{ route('admin.jenisPenginapan.create') }}" class="btn btn-primary mb-3">Tambah Jenis Penginapan</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nomor Kamar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jenisPenginapans as $jenisPenginapan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $jenisPenginapan->nama }}</td>
                    <td>{{ $jenisPenginapan->nomorKamar }}</td>
                    <td>
                        <a href="{{ route('admin.jenisPenginapan.edit', $jenisPenginapan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.jenisPenginapan.destroy', $jenisPenginapan->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection --}}
