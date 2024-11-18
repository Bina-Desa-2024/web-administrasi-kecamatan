@extends('layouts.userlayout')
@section('child')
    <div class="container py-5" style="min-height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form action="/surat-izin-keramaian" method="POST" class="card shadow border-0">
                    @csrf
                    <!-- Header Card -->
                    <div class="card-header bg-success text-white text-center py-3">
                        <h4 class="mb-0"><i class="fas fa-envelope me-2"></i> Informasi Keramaian</h4>
                    </div>

                    <!-- Body Card -->
                    <div class="card-body px-5">
                        <!-- Informasi Pemilik -->
                        <h6 class="text-primary mb-3"><i class="fas fa-user me-2"></i>Informasi Mediator</h6>
                        
                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control"
                                        placeholder="Masukkan Nama Lengkap" readonly
                                        value="{{ session('penduduk') ? session('penduduk')->nama : '' }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Tempat, Tgl Lahir</label>
                                    <input type="text" name="tempat" value="{{ session('penduduk') ? session('penduduk')->tempat : '' }}" hidden>
                                    <input type="text" name="tgl_lahir" value="{{ session('penduduk') ? session('penduduk')->tgl_lahir : '' }}" hidden>
                                    <input type="text" class="form-control"
                                        placeholder="Masukkan Tempat, Tgl Lahir" required readonly
                                        value="{{ session('penduduk') ? session('penduduk')->tempat . ', ' . \Carbon\Carbon::parse(session('penduduk')->tgl_lahir)->translatedFormat('d F Y') : '' }}">
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control" value="{{ session('penduduk') ? session('penduduk')->pekerjaan : '' }}"
                                        placeholder="Masukkan Pekerjaan" required readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Alamat</label>
                                    <input type="text" name="alamat" value="{{ session('penduduk') ? session('penduduk')->rw : '' }}" hidden>
                                </div>
                                
                                
                            </div>
                        </div>

                        <!-- Informasi Usaha -->
                        <h6 class="text-primary mt-4 mb-3"><i class="fas fa-store me-2"></i>Informasi Usaha</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Acara Keramaian</label>
                                    <input type="text" name="acara_keramaian" class="form-control"
                                        placeholder="Masukkan Acara" required readonly value="{{ session('penduduk') ? session('penduduk')->desa : '' }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Tanggal Mulai</label>
                                    <input type="text" name="dimulai_keramaian" class="form-control"
                                        placeholder="Masukkan Acara" required readonly value="{{ session('penduduk') ? session('penduduk')->desa : '' }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Tanggal Berakhir</label>
                                    <input type="text" name="berakhir_keramaian" class="form-control"
                                        placeholder="Masukkan Jenis Tempat Usaha" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Lokasi Keramaian</label>
                                    <input type="text" name="lokasi_keramaian" class="form-control"
                                        placeholder="Masukkan Jenis Tempat Usaha" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="text" name="jenis_surat" value="{{ session('jenis_surat') }}" hidden>
                    <!-- Footer Card (Action Buttons) -->
                    <div class="card-footer bg-light text-center py-3">
                        <a href="/buatsurat" class="btn btn-warning me-2">Batal</a>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
