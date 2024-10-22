@extends('layouts.userlayout')
@section('child')
<div class="container-fluid">
    <div style="min-height: 100vh" class="row mt-4">
        <div class="col-md-4">
            <div class="card align-items-center d-flex flex-column justify-content-center" style="width: 18rem;">
                <img src="{{ url('/img/menu-surat.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                  <h5 class="card-title">SURAT NIKAH</h5>
                  <a href="#" class="btn btn-primary mt-3">BUAT</a>
                </div>
              </div>
        </div>
    
    </div>
</div>
    
@endsection