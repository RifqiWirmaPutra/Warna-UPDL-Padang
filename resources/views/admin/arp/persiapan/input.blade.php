{{-- @extends('layouts.admin')
@section('content')
<form action="{{ route('persiapan.input') }}" method="POST">
    @csrf
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th style="min-width: 150px;">N0</th>
                <th style="min-width: 150px;">Kegiatan</th>
                <th style="min-width: 150px;">PIC</th>
                <th style="min-width: 150px;">Ceklist</th>
                <th style="min-width: 150px;">Keterangan</th>
            </tr>
        </thead>

        <tbody>
            @foreach($kegiatans as $kegiatan)
            <tr>
                <td class="align-middle">{{ $loop->iteration }}</td>
                <td class="align-middle">{{ $kegiatan->kegiatan }}</td>
                <td class="align-middle">{{ $kegiatan->pic }}</td>
                <td class="align-middle">{{ $kegiatan->ceklist }}</td>
                <td class="align-middle">{{ $kegiatan->keterangan }}</td>
            </tr>
            @endforeach
            <tr>
                <td class="align-middle">{{ $kegiatans->count() + 1 }}</td>
                <td class="align-middle">
                    <input type="text" name="kegiatan[]" placeholder="Kegiatan Baru">
                </td>
                <td class="align-middle">
                <select name="pic[]" class="form-control" required>
                    <option value="{{ App\Models\Admin::ROLE_SUPERADMIN }}">Super Admin</option>
                    <option value="{{ App\Models\Admin::ROLE_AdminJar }}">Admin Pengajar</option>
                    <option value="{{ App\Models\Admin::ROLE_AdminPelayanan }}">Admin Pelayanan</option>
                    <option value="{{ App\Models\Admin::ROLE_AdminKeuangan }}">Admin Keuangan</option>
                    <option value="{{ App\Models\Admin::ROLE_AdminPmk }}">Admin PMK</option>
                </select>
                </td>

                <td class="align-middle">
                    <select name="ceklist[]" class="form-control" required>
                        <option value="Selesai">Selesai</option>
                        <option value="Belum Selesai">Belum Selesai</option>
                    </select>
                </td>
                <td class="align-middle">
                    <input type="text" name="keterangan[]" placeholder="Keterangan Baru">
                </td>
            </tr>
        </tbody>
    </table>
    <button type="submit" class="btn btn-outline-primary">Save</button>
</form>
@endsection --}}