@extends('layouts.userlayout')
@section('child')
    <div>buat surat apa</div>
    @if (session('penduduk'))
        <h2>Data Penduduk</h2>
        <p>NIK: {{ session('penduduk')->nik }}</p>
        <p>Nama: {{ session('penduduk')->nama }}</p>
        <!-- tampilkan data lainnya sesuai kebutuhan -->
    @endif
@endsection
