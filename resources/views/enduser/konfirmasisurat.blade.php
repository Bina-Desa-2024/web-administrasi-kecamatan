@extends('layouts.userlayout')
@section('child')
    <div class="container min-vh-100">
        <h1>Buat {{ $jenis_surat }}</h1>
        <p>Formulir untuk membuat {{ $jenis_surat }} akan ditampilkan di sini.</p>
        <form action="/konfirmasi-surat" method="POST">
            @csrf
            <input type="text" value="{{ $jenis_surat }}" hidden>
            <input type="text" name="nik" class="form-control border border-success">
            <button class="btn btn-primary my-2" type="submit">Cek</button>
        </form>

    </div>
@endsection
