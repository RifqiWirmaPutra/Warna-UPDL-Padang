@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="page-heading text-center">
        <h2>Pengaturan Konfirmasi dan Absensi</h2>
    </div>
    <!-- success -->
    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible show fade" role="alert">{{ Session::get('success') }}<button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button></div>
    @endif
    <!-- error -->
    @if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible show fade" role="alert">{{ Session::get('error') }}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
    @endif
    <div class="card">
        <div class="card-body">
            <form action="{{ route('settings.absensi.update') }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="confirmation_start_time">Waktu Mulai Konfirmasi:</label>
                            <input type="time" name="confirmation_start_time" id="confirmation_start_time" class="form-control" value="{{ \App\Models\SettingHari::get('confirmation_start_time') }}" >
                        </div>    
                        <div class="form-group">
                            <label for="confirmation_end_time">Waktu Akhir Konfirmasi:</label>
                            <input type="time" name="confirmation_end_time" id="confirmation_end_time" class="form-control" value="{{ \App\Models\SettingHari::get('confirmation_end_time') }}" >
                        </div>
                        <div class="form-group">
                            <label for="absence_start_time">Waktu Mulai Absensi:</label>
                            <input type="time" name="absence_start_time" id="absence_start_time" class="form-control" value="{{ \App\Models\SettingHari::get('absence_start_time') }}" >
                        </div>
                        <div class="form-group">
                            <label for="absence_end_time">Waktu Akhir Absensi:</label>
                            <input type="time" name="absence_end_time" id="absence_end_time" class="form-control" value="{{ \App\Models\SettingHari::get('absence_end_time') }}" >
                        </div>
                    </div><p>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hari yang Diizinkan:</label><br>
                                @php
                                $checkedDays = explode(',', \App\Models\SettingHari::get('allowed_days'));
                                @endphp
                                <label><input type="checkbox" name="allowed_days[]" value="0" {{ in_array('0', $checkedDays) ? 'checked' : '' }}> Minggu</label>
                                <label><input type="checkbox" name="allowed_days[]" value="1" {{ in_array('1', $checkedDays) ? 'checked' : '' }}> Senin</label>
                                <label><input type="checkbox" name="allowed_days[]" value="2" {{ in_array('2', $checkedDays) ? 'checked' : '' }}> Selasa</label>
                                <label><input type="checkbox" name="allowed_days[]" value="3" {{ in_array('3', $checkedDays) ? 'checked' : '' }}> Rabu</label>
                                <label><input type="checkbox" name="allowed_days[]" value="4" {{ in_array('4', $checkedDays) ? 'checked' : '' }}> Kamis</label>
                                <label><input type="checkbox" name="allowed_days[]" value="5" {{ in_array('5', $checkedDays) ? 'checked' : '' }}> Jum'at</label>
                                <label><input type="checkbox" name="allowed_days[]" value="6" {{ in_array('6', $checkedDays) ? 'checked' : '' }}> Sabtu</label>
                            </div>
                        </div>
                    </div><p>
                        <button type="button" class="btn btn-secondary bg-secondary" id="resetTimes">Reset Waktu</button>
                        <button type="submit" class="btn btn-primary bg-primary">Simpan Pengaturan</button>
                    </form>
                </div>
            </div>
        </div>
        <script>
        document.getElementById('resetTimes').addEventListener('click', function() {
        // Reset nilai kolom waktu ke kosong (null)
        document.getElementById('confirmation_start_time').value = '';
        document.getElementById('confirmation_end_time').value = '';
        document.getElementById('absence_start_time').value = '';
        document.getElementById('absence_end_time').value = '';
        });
        </script>
@endsection
