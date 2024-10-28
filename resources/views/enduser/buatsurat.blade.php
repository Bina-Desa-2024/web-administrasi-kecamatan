@extends('layouts.userlayout')
@section('child')
<div class="container">
    <h3 class="mt-5 text-center text-success">Pilih Surat yang Ingin Anda Buat</h3>
    <p class="text-center text-muted mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque laboriosam maxime animi minus atque, suscipit quaerat tempora cupiditate nostrum asperiores. Ipsa, facilis. Fugiat nobis deserunt consequatur pariatur recusandae quos sequi.</p>

    <div class="container-fluid">
        <div class="container-custom">
            <div class="row mt-4 justify-content-center">
                @for ($i = 1; $i <= 20; $i++)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4 d-flex">
                        <div class="card align-items-center d-flex flex-column border-0 shadow-lg w-100">
                            <div class="card-body text-center d-flex flex-column p-3">
                                <div class="d-flex justify-content-center align-items-center mb-3">
                                    <i class="fa-solid fa-envelope fs-1 text-success"></i>
                                </div>
                                <h5 class="card-title font-weight-bold mb-2">Surat {{ strtolower(chr(96 + $i)) }}</h5> <!-- Generate a-z for card titles -->
                                <p class="small text-muted">Deskripsi singkat surat {{ strtolower(chr(96 + $i)) }}.</p>
                            </div>
                            <a href="{{ url('/buat-surat/' . strtolower(chr(96 + $i))) }}" class="btn btn-success w-75 mb-4">Buat Surat</a> <!-- URL with {jenis} parameter -->
                        </div>
                    </div>

                    @if ($i % 4 == 0)
                        </div><div class="row mt-4 justify-content-center"> <!-- Start a new row after every 4 cards -->
                    @endif
                @endfor
            </div>
        </div>
    </div>
</div>
@endsection
