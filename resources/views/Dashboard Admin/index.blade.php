@extends('layouts.Dashboardlayout')
@section('child')
<div>
    <h3>Total Penduduk: {{ $pendudukCount }}</h3>
    <h3>Total Surat Usaha Pending: {{ $pendingCount }}</h3>
    <h3>Total Surat Usaha Selesai: {{ $completedCount }}</h3>
</div>

@endsection