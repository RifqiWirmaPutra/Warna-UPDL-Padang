@extends('layouts.admin')
@section('content')
<h1>Konfirmasi</h1>
    <p>Data dengan email {{ $confirmationData['email'] }} sudah ada. Apakah Anda ingin memperbaruinya?</p>
    
    <form method="post" action="{{ route('konfirmasi') }}">
        @csrf\
        <input type="hidden" name="email" value="{{ $confirmationData['email'] }}">
        <button type="submit">Ya</button>
        <a href="{{ route('batal') }}">Tidak</a>
    </form>
@endsection