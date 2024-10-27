@extends('layouts.userlayout')
@section('child')
    <div class="container min-vh-100">
        <h1>Buat {{ $jenis_surat }}</h1>
        <p>Formulir untuk membuat {{ $jenis_surat }} akan ditampilkan di sini.</p>
        <form action="">
            <input type="text" value="{{ $jenis_surat }}" hidden>
            <input type="text" name="nik" class="form-control border border-success">
        </form>

    </div>
@endsection
