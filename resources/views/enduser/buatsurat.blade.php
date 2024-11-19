@extends('layouts.userlayout')

@section('child')
<div class="container py-5">
    <!-- Heading Section -->
    <h3 class="text-center text-success mb-4">Pilih Surat yang Ingin Anda Buat</h3>
    <p class="text-center text-muted mb-5">
        Pilih jenis surat yang sesuai dengan kebutuhan Anda. Anda bisa membuat berbagai jenis surat di sini dengan mudah.
    </p>

    <!-- Surat Cards Section -->
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            @foreach ($daftar_surat as $surat)
            <div class="col">
                <div class="card shadow-lg border-0 rounded-lg h-100">
                    <div class="card-body d-flex flex-column align-items-center text-center p-4">
                        <!-- Icon Section -->
                        <div class="icon-container mb-3">
                            <i class="fa-solid fa-envelope fs-2 text-success"></i>
                        </div>
                        <!-- Card Title -->
                        <h5 class="card-title font-weight-bold text-dark mb-3">{{ $surat->nama_surat }}</h5>
                        <!-- Button -->
                        <a href="{{ url('/buat-surat/' . $surat->nama_surat) }}" class="btn btn-success w-100">
                            Buat Surat
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Inline Styles -->
<style>
    /* Heading and Text */
    h3, p {
        font-family: 'Poppins', sans-serif;
    }

    /* Card Adjustments */
    .card {
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: translateY(-10px);
    }

    .icon-container {
        background-color: #e8f5e9;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Mobile Responsive Adjustments */
    @media (max-width: 768px) {
        h3 {
            font-size: 1.5rem;
        }

        p {
            font-size: 0.9rem;
            margin-bottom: 2rem;
        }

        .icon-container {
            width: 50px;
            height: 50px;
        }

        .card-title {
            font-size: 1rem;
        }

        .btn {
            font-size: 0.9rem;
        }
    }

    @media (max-width: 576px) {
        .card-body {
            padding: 20px;
        }

        .btn {
            font-size: 0.8rem;
            padding: 8px 12px;
        }
    }
</style>
@endsection
