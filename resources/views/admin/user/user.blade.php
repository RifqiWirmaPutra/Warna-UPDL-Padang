@extends('layouts.admin')
@section('content')
user
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Kelas
            </div>
            <div class="card-body small">
                <form action="{{ route('user.updateAll') }}" method="POST">
                    @csrf
                    @method('PUT')
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
                                <th style="min-width: 150px;">Nip</th>
                                <th style="min-width: 150px;">Nama</th>
                                <th style="min-width: 150px;">Email</th>
                                <th style="min-width: 150px;">Jabatan</th>
                                <th style="min-width: 150px;">Unit Induk</th>
                                <th style="min-width: 150px;">Unit Pelaksana</th>
                                <th style="min-width: 150px;">No Hp</th>
                                <th style="min-width: 150px;">Id Pembelajaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($peserta as $item)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $item->nip }}
                                    <input type="hidden" name="peserta[{{ $item->id }}][nip]" value="{{ $item->nip }}">
                                </td>
                                <td class="align-middle">
                                    {{ $item->name }}
                                    <input type="hidden" name="peserta[{{ $item->id }}][name]" value="{{ $item->name }}">
                                </td>
                                <td class="align-middle">
                                    {{ $item->email }}
                                    <input type="hidden" name="peserta[{{ $item->id }}][email]" value="{{ $item->email }}">
                                </td>
                                <td class="align-middle">
                                    {{ $item->jabatan }}
                                    <input type="hidden" name="peserta[{{ $item->id }}][jabatan]" value="{{ $item->jabatan }}">
                                </td>
                                <td class="align-middle">
                                    {{ $item->unit_induk }}
                                    <input type="hidden" name="peserta[{{ $item->id }}][unit_induk]" value="{{ $item->unit_induk }}">
                                </td>
                                <td class="align-middle">
                                    {{ $item->unit_pelaksana }}
                                    <input type="hidden" name="peserta[{{ $item->id }}][unit_pelaksana]" value="{{ $item->unit_pelaksana }}">
                                </td>
                                <td class="align-middle">
                                    <input type="text" name="peserta[{{ $item->id }}][no_hp]" value="{{ $item->no_hp }}">
                                </td>
                                <td class="align-middle">{{ $item->arp_id }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary bg-primary">Simpan Perubahan</button>
                </div>
                </form>
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