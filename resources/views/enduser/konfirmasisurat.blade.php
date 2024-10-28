@extends('layouts.userlayout')
@section('child')
<div class="d-flex justify-content-center align-items-center " style="margin-top:6rem">
    <div class="container shadow-lg p-4" style="max-width: 400px;">
        <p>Silahkan masukkan NIK anda untuk dicek</p>
        <form action="/konfirmasi-surat" method="POST" class="d-flex flex-column align-items-center">
            @csrf
            <input type="text" value="{{ $jenis_surat }}" hidden>
            <input type="text" name="nik" class="form-control border border-success">
            <button class="btn btn-primary my-2 mx-auto" type="submit">Cek</button>
        </form>
    </div>
</div>

@endsection
