@extends('layouts.userlayout')

@section('child')
    <style>
        body {
            overflow: hidden; /* Mencegah scroll di halaman ini */
        }
        h3 {
            text-align: left; /* Membuat tulisan rata kiri */
        }
        .content-wrapper {
            padding-left: 20px; /* Menambahkan ruang di kiri konten */
            max-width: 800px; 
            width: 100%; /* Membuatnya responsif pada layar kecil */
        }
    </style>

    <div class="min-vh-100 d-flex flex-column justify-content-center container">
        <div class="content-wrapper"> <!-- Konten dibatasi dan tidak terlalu ke kiri -->
            {{-- <img style="width: 200px" src="{{ url('/img/logo-jombang1.png') }}" alt=""> --}}
            <h2 class="text-white mt-4">
                <strong>Selamat Datang di Web Aplikasi Pelayanan Surat Administrasi Desa Rukma Jaya</strong>
            </h2>


            <!-- Button dengan ikon pesan -->
            <a href="/buatsurat" class="btn btn-light text-primary mt-4">
                <i class="fas fa-envelope"></i> Buat Surat
            </a>
        </div>
    </div>
@endsection




