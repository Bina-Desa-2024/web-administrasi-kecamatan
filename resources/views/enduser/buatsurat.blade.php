@extends('layouts.userlayout')

@section('child')
<div class="container py-5">
    <!-- Heading Section -->
    <h3 class="text-center text-success mb-4">Pilih Surat yang Ingin Anda Buat</h3>
    <p class="text-center text-muted mb-5">Pilih jenis surat yang sesuai dengan kebutuhan Anda. Anda bisa membuat berbagai jenis surat di sini dengan mudah.</p>

    <!-- Surat Cards Section -->
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            @foreach ($daftar_surat as $surat)
                
            <div class="col">
                <div class="card shadow-lg border-0 rounded-lg h-100">
                    <div class="card-body d-flex flex-column align-items-center text-center p-4">
                        <div class="icon-container mb-3">
                            <i class="fa-solid fa-envelope fs-2 text-success"></i>
                        </div>
                        <h5 class="card-title font-weight-bold text-dark mb-3">{{ $surat->nama_surat }}</h5>
                        {{-- <p class="card-text text-muted mb-3">Pilih untuk membuat surat jenis ini dengan mudah.</p> --}}
                        <a href="{{ url('/buat-surat/' . $surat->nama_surat) }}" class="btn btn-success w-100">Buat Surat</a>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- @for ($i = 1; $i <= 8; $i++)
            @endfor --}}
        </div>
    </div>
</div>
@endsection
