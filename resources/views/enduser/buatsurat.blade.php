@extends('layouts.userlayout')
@section('child')
<div class="container">
    <h3 class="mt-5 text-center text-success">Pilih Surat yang Ingin Anda Buat</h3>
    <p class="text-center text-muted mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque laboriosam maxime animi minus atque, suscipit quaerat tempora cupiditate nostrum asperiores. Ipsa, facilis. Fugiat nobis deserunt consequatur pariatur recusandae quos sequi.</p>

    <div class="container-fluid">
        <div class="container-custom">
            <div class="row mt-4">
                <!-- Smartphone Card -->
                <div class="col-md-4 mb-4 d-flex">
                    <div class="card align-items-center d-flex flex-column border-0 shadow-lg w-100 h-100"> <!-- Ensuring same height -->
                        <div class="card-body text-center d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center p-5">
                                <i class="fa-solid fa-envelope fs-1 text-success"></i>
                            </div>
                            <h5 class="card-title font-weight-bold">Surat A</h5>
                            <p class="flex-grow-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat sequi velit adipisci necessitatibus laudantium animi dolores eius pariatur fugiat sapiente. Porro deleniti, temporibus similique alias voluptatum omnis distinctio accusamus non?</p>
                        </div>
                        <a href="/buat-surat/surat-a" class="btn mb-4 btn-success">Buat Surat</a>
                    </div>
                </div>

                <!-- Laptop Card -->
                <div class="col-md-4 mb-4 d-flex">
                    <div class="card align-items-center d-flex flex-column border-0 shadow-lg w-100 h-100">
                        <div class="card-body text-center d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center p-5">
                                <i class="fa-solid fa-envelope fs-1 text-success"></i>
                            </div>
                            <h5 class="card-title font-weight-bold">Surat B</h5>
                            <p class="flex-grow-1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae aspernatur et placeat culpa ab facere, soluta dolor quaerat sint esse ea in, commodi, qui necessitatibus dolores cumque veritatis asperiores unde.</p>
                        </div>
                        <a href="/buat-surat/surat-b" class="btn mb-4 btn-success">Buat Surat</a>
                    </div>
                </div>

                <!-- Computer Card -->
                <div class="col-md-4 mb-4 d-flex">
                    <div class="card align-items-center d-flex flex-column border-0 shadow-lg w-100 h-100">
                        <div class="card-body text-center d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center p-5">
                                <i class="fa-solid fa-envelope fs-1 text-success"></i>
                            </div>
                            <h5 class="card-title font-weight-bold">Surat C</h5>
                            <p class="flex-grow-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus libero magnam dolorum placeat, eveniet eius voluptates iste iusto nesciunt illum veniam nobis aperiam illo dolorem inventore assumenda dolores labore sequi.</p>
                        </div>
                        <a href="/buat-surat/surat-c" class="btn mb-4 btn-success">Buat Surat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
