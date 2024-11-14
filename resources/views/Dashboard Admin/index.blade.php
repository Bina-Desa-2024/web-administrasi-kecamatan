@extends('layouts.Dashboardlayout')
@section('child')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body d-flex">
                <div class="icon me-3">
                    <!-- Tempat untuk ikon, jika ada -->
                    <i class="bi bi-people-fill fs-2 text-primary"></i>
                </div>
                <div>
                    <h5 class="card-title">Total Penduduk</h5>
                    <h3>{{ $pendudukCount }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body d-flex">
                <div class="icon me-3">
                    <!-- Tempat untuk ikon, jika ada -->
                    <i class="bi bi-hourglass-split fs-2 text-warning"></i>
                </div>
                <div>
                    <h5 class="card-title">Total Surat Usaha Pending</h5>
                    <h3>{{ $pendingCount }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body d-flex">
                <div class="icon me-3">
                    <!-- Tempat untuk ikon, jika ada -->
                    <i class="bi bi-check-circle-fill fs-2 text-success"></i>
                </div>
                <div>
                    <h5 class="card-title">Total Surat Usaha Selesai</h5>
                    <h3>{{ $completedCount }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
