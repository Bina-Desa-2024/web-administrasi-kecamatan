@extends('layouts.userlayout')
@section('child')
<div class="container py-5" style="min-height: 100vh;">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow border-0">
                <!-- Header Card -->
                <div class="card-header bg-success text-white text-center py-3">
                    <h4 class="mb-0"><i class="fas fa-envelope me-2"></i> Informasi Usaha</h4>
                </div>

                <!-- Body Card -->
                <div class="card-body px-5">
                    <!-- Informasi Pemilik -->
                    <h6 class="text-primary mb-3"><i class="fas fa-user me-2"></i>Informasi Pemilik</h6>
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Tempat, Tgl Lahir</label>
                                <input type="text" name="tempat_tgl_lahir" class="form-control" placeholder="Masukkan Tempat, Tgl Lahir" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Pekerjaan</label>
                                <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Alamat</label>
                                <textarea name="alamat" class="form-control" rows="2" placeholder="Masukkan Alamat" required></textarea>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Desa/Kel</label>
                                <input type="text" name="desa" class="form-control" placeholder="Masukkan Desa/Kel" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Kecamatan</label>
                                <input type="text" name="kecamatan" class="form-control" placeholder="Masukkan Kecamatan" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Kabupaten/Kota</label>
                                <input type="text" name="kabupaten" class="form-control" placeholder="Masukkan Kabupaten/Kota" required>
                            </div>
                        </div>
                    </div>

                    <!-- Informasi Usaha -->
                    <h6 class="text-primary mt-4 mb-3"><i class="fas fa-store me-2"></i>Informasi Usaha</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nama Usaha</label>
                                <input type="text" name="nama_usaha" class="form-control" placeholder="Masukkan Nama Usaha" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Alamat Usaha</label>
                                <textarea name="alamat_usaha" class="form-control" rows="2" placeholder="Masukkan Alamat Usaha" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Desa</label>
                                <input type="text" name="desa_usaha" class="form-control" placeholder="Masukkan Desa Usaha" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Kecamatan</label>
                                <input type="text" name="kecamatan_usaha" class="form-control" placeholder="Masukkan Kecamatan Usaha" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Bidang Usaha</label>
                                <input type="text" name="bidang_usaha" class="form-control" placeholder="Masukkan Bidang Usaha" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Jenis Tempat Usaha</label>
                                <input type="text" name="jenis_tempat" class="form-control" placeholder="Masukkan Jenis Tempat Usaha" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Status Tempat Usaha</label>
                                <input type="text" name="status_tempat" class="form-control" placeholder="Masukkan Status Tempat Usaha" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Bentuk Usaha</label>
                                <input type="text" name="bentuk_usaha" class="form-control" placeholder="Masukkan Bentuk Usaha" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Modal Usaha</label>
                                <input type="text" name="modal_usaha" class="form-control" placeholder="Masukkan Modal Usaha" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Jumlah Tenaga Kerja</label>
                                <input type="text" name="tenaga_kerja" class="form-control" placeholder="Masukkan Jumlah Tenaga Kerja" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Mulai Usaha Sejak</label>
                                <input type="text" name="mulai_usaha" class="form-control" placeholder="Masukkan Tahun Mulai Usaha" required>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Card (Action Buttons) -->
                <div class="card-footer bg-light text-center py-3">
                    <button type="reset" class="btn btn-warning me-2">Batal</button>
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
