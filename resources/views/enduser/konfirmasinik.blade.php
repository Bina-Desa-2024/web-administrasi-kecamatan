@extends('layouts.userlayout')

@section('child')
    @if (session('error'))
    <div class="d-flex justify-content-center">
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width: 450px;">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif
    <div class="d-flex justify-content-center mb-5 mt-5" style="height: 65vh;">
        <form action="/konfirmasi-nik" class="bg-white container shadow p-5 rounded" style="max-width: 450px;"
            enctype="multipart/form-data" method="POST">
            @csrf
            <div class="text-center mb-4">
                <img src="{{ asset('img/rb_3334.png') }}" style="max-width: 200px;">
            </div>
            <p class="text-muted text-center mb-4">Silahkan Masukan NIK </p>
            <input type="text" value="{{ $jenis_surat }}" name="jenis_surat" hidden>
            <input type="text" name="nik" class="form-control border border-success">
            <button type="submit" class="btn btn-success w-100 mt-4">Kirim Formulir</button>
        </form>
    </div>
    </div>
@endsection
