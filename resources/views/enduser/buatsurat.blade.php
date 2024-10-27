@extends('layouts.userlayout')
@section('child')
<div class="container">
    <h3 class="mt-5 text-center text-success">Pilih Barang yang Ingin Anda Daur Ulang:</h3>
    <p class="text-center text-muted mb-4">Dukung lingkungan dengan mendaur ulang perangkat elektronik Anda secara bertanggung jawab.</p>

    <div class="container-fluid">
        <div class="container-custom">
            <div class="row mt-4">
                <!-- Smartphone Card -->
                <div class="col-md-4 mb-4 d-flex">
                    <div class="card align-items-center d-flex flex-column border-0 shadow-lg w-100 h-100"> <!-- Ensuring same height -->
                        <div class="card-body text-center d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center p-5">
                                <i class="fa-solid fa-mobile-screen-button fs-1 text-success"></i>
                            </div>
                            <h5 class="card-title font-weight-bold">Smartphone</h5>
                            <p class="flex-grow-1">Daur ulang smartphone lama Anda dengan cara yang aman.

                                Kami memastikan pemisahan dan pengolahan komponen elektronik dengan tepat.
                                
                                Pastikan untuk menghapus semua data pribadi sebelum mendaur ulang.</p>
                        </div>
                        <a href="/recycle/smartphone" class="btn mb-4 btn-success">Daur Ulang Sekarang</a>
                    </div>
                </div>

                <!-- Laptop Card -->
                <div class="col-md-4 mb-4 d-flex">
                    <div class="card align-items-center d-flex flex-column border-0 shadow-lg w-100 h-100">
                        <div class="card-body text-center d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center p-5">
                                <i class="fa-solid fa-laptop fs-1 text-success"></i>
                            </div>
                            <h5 class="card-title font-weight-bold">Laptop</h5>
                            <p class="flex-grow-1">Buang laptop lama Anda dengan cara yang ramah lingkungan.

                                Proses daur ulang kami sesuai dengan standar lingkungan.
                                
                                Pastikan untuk mengeluarkan baterai sebelum mendaur ulang.</p>
                        </div>
                        <a href="/recycle/laptop" class="btn mb-4 btn-success">Daur Ulang Sekarang</a>
                    </div>
                </div>

                <!-- Computer Card -->
                <div class="col-md-4 mb-4 d-flex">
                    <div class="card align-items-center d-flex flex-column border-0 shadow-lg w-100 h-100">
                        <div class="card-body text-center d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center p-5">
                                <i class="fa-solid fa-computer fs-1 text-success"></i>
                            </div>
                            <h5 class="card-title font-weight-bold">Komputer</h5>
                            <p class="flex-grow-1">Daur ulang komputer desktop yang sudah usang secara bertanggung jawab.

                                Layanan kami menjamin penanganan dan pembuangan komponen elektronik secara aman.
                                
                                Harap lepaskan hard drive untuk melindungi data pribadi sebelum mendaur ulang.</p>
                        </div>
                        <a href="/recycle/computer" class="btn mb-4 btn-success">Daur Ulang Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
