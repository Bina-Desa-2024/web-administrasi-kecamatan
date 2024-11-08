@extends('layouts.Dashboardlayout')
@section('child')
<div>
    <h3>Total Penduduk: {{ $pendudukCount }}</h3>
    <h3>Total Surat Usaha Pending: {{ $suketusahaPendingCount }}</h3>
    <h3>Total Surat Usaha Selesai: {{ $suketusahaCompletedCount }}</h3>
</div>

@endsection