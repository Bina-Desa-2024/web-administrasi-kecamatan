@extends('layouts.userlayout')
@section('child')
    <div class="container">
        <h2 class="mt-5 text-center text-success">Form Informasi Surat</h2>
    </div>
    <div class="container py-5" style="min-height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form action="/suket-usaha" method="POST" class="card shadow border-0">
                    @csrf
                    <!-- Body Card -->
                    <div class="card-body px-5">
                        <!-- Informasi Pribadi -->
                        <h6 class="text-success mb-4"><i class="fas fa-user me-2"></i> Informasi Pribadi</h6>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control"
                                    placeholder="Masukkan Nama Lengkap" required
                                    value="{{ session('penduduk') ? session('penduduk')->nama : '' }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Nik</label>
                                <input type="text" name="nik" class="form-control" placeholder="Masukkan Kecamatan"
                                    required value="{{ session('penduduk') ? session('penduduk')->nik : '' }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Pekerjaan</label>
                                <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan"
                                    required value="{{ session('penduduk') ? session('penduduk')->pekerjaan : '' }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Tempat, Tgl Lahir</label>
                                <input type="text" name="tempat"
                                    value="{{ session('penduduk') ? session('penduduk')->tempat : '' }}" hidden>
                                <input type="text" name="tgl_lahir"
                                    value="{{ session('penduduk') ? session('penduduk')->tgl_lahir : '' }}" hidden>
                                <input type="text" name="tempat_tgl_lahir" class="form-control"
                                    placeholder="Masukkan Tempat, Tgl Lahir" required
                                    value="{{ session('penduduk') ? session('penduduk')->tempat . ' ' . session('penduduk')->tgl_lahir : '' }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Alamat</label>
                                <input type="text" class="form-control"
                                    placeholder="Masukkan Kecamatan" required
                                    value="{{ session('penduduk') ? session('penduduk')->alamat : '' }}">
                            </div>
                        </div>

                        <!-- Pembatas Informasi Usaha -->
                        <hr class="my-4">
                        <h6 class="text-success mb-4"><i class="fas fa-store me-2"></i> Adalah orang tua/wali dari:</h6>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Nama</label>
                                <input type="text" name="nama_tidak_mampu" class="form-control"
                                    placeholder="Masukkan Nama" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Tempat</label>
                                <input type="text" name="tempat_tidak_mampu" class="form-control"
                                    placeholder="Masukkan Tempat" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Tanggal Lahir</label>
                                <input type="text" name="tgl_lahir_tidak_mampu" class="form-control"
                                    placeholder="Masukkan Tanggal lahir" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Nik</label>
                                <input type="text" name="nik_tidak_mampu" class="form-control"
                                    placeholder="Masukkan Jenis Tempat Usaha" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Alamat</label>
                                <textarea name="alamat_tidak_mampu" class="form-control" rows="2" placeholder="Masukkan Alamat Usaha" required></textarea>
                            </div>
                        </div>
                    </div>
                    <input type="text" name="jenis_surat" value="{{ session('jenis_surat') }}" hidden>
                    <!-- Footer Card (Action Buttons) -->
                    <div class="card-footer bg-light text-center py-4">
                        <button type="reset" class="btn btn-warning me-2">Batal</button>
                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
