@extends('layouts.Dashboardlayout')

@section('child')
<div class="container py-4">
    <!-- Card Row -->
    <div class="row g-4">
        <!-- Card: Total Penduduk -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center">
                    <div class="icon me-3 bg-light p-3 rounded-circle">
                        <i class="bi bi-people-fill fs-2 text-primary"></i>
                    </div>
                    <div>
                        <h5 class="card-title text-muted mb-1">Total Penduduk</h5>
                        <h3 class="text-dark font-weight-bold">{{ $pendudukCount }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card: Total Surat Usaha Pending -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center">
                    <div class="icon me-3 bg-light p-3 rounded-circle">
                        <i class="bi bi-hourglass-split fs-2 text-warning"></i>
                    </div>
                    <div>
                        <h5 class="card-title text-muted mb-1">Surat Pending</h5>
                        <h3 class="text-dark font-weight-bold">{{ $pendingCount }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card: Total Surat Usaha Selesai -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center">
                    <div class="icon me-3 bg-light p-3 rounded-circle">
                        <i class="bi bi-check-circle-fill fs-2 text-success"></i>
                    </div>
                    <div>
                        <h5 class="card-title text-muted mb-1">Surat Selesai</h5>
                        <h3 class="text-dark font-weight-bold">{{ $completedCount }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Inline Styles -->
<style>
    /* Card Styling */
    .card {
        border-radius: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    /* Icon Styling */
    .icon {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        h5.card-title {
            font-size: 1rem;
        }

        h3 {
            font-size: 1.5rem;
        }

        .icon {
            width: 50px;
            height: 50px;
        }

        .fs-2 {
            font-size: 1.5rem;
        }
    }

    @media (max-width: 576px) {
        h3 {
            font-size: 1.3rem;
        }

        h5.card-title {
            font-size: 0.9rem;
        }

        .icon {
            width: 45px;
            height: 45px;
        }
    }
</style>
@endsection
