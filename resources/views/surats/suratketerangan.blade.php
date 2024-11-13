@extends('layouts.userlayout')
@section('child')

<div class="container">
    <h2 class="mt-5 text-center text-success">Form Informasi Surat</h2>
</div>
<div class="container py-5" style="min-height: 100vh;">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow border-0">
                <!-- Body Card -->
                <div class="card-body px-5">
                    <!-- Informasi Pribadi -->
                    <h6 class="text-success mb-4"><i class="fas fa-user me-2"></i> Informasi Pribadi</h6>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Nama Lengkap</label>
                            <input type="text" name="fnama" class="form-control" placeholder="Masukkan Nama Lengkap" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Tempat, Tgl Lahir</label>
                            <input type="text" name="ftempat_tgl_lahir" class="form-control" placeholder="Masukkan Tempat, Tgl Lahir" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Pekerjaan</label>
                            <input type="text" name="fpekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Kecamatan</label>
                            <input type="text" name="fkecamatan" class="form-control" placeholder="Masukkan Kecamatan" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Alamat</label>
                            <textarea name="falamat" class="form-control" rows="2" placeholder="Masukkan Alamat" required></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Kabupaten/Kota</label>
                            <input type="text" name="fkabupaten_kota" class="form-control" placeholder="Masukkan Kabupaten/Kota" required>
                        </div>
                    </div>

                    <!-- Pembatas Informasi Usaha -->
                    <hr class="my-4">
                    <h6 class="text-success mb-4"><i class="fas fa-store me-2"></i> Informasi Usaha</h6>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Nama Usaha</label>
                            <input type="text" name="fnama_usaha" class="form-control" placeholder="Masukkan Nama Usaha" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Desa Usaha</label>
                            <input type="text" name="fdesa_usaha" class="form-control" placeholder="Masukkan Desa Usaha" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Kecamatan Usaha</label>
                            <input type="text" name="fkecamatan_usaha" class="form-control" placeholder="Masukkan Kecamatan Usaha" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Jenis Tempat Usaha</label>
                            <input type="text" name="fjenis_tempat" class="form-control" placeholder="Masukkan Jenis Tempat Usaha" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Status Tempat Usaha</label>
                            <input type="text" name="fstatus_tempat" class="form-control" placeholder="Masukkan Status Tempat Usaha" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Bentuk Usaha</label>
                            <input type="text" name="fbentuk_usaha" class="form-control" placeholder="Masukkan Bentuk Usaha" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Modal Usaha</label>
                            <input type="text" name="fmodal_usaha" class="form-control" placeholder="Masukkan Modal Usaha" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Jumlah Tenaga Kerja</label>
                            <input type="text" name="fjumlah_tenaga_kerja" class="form-control" placeholder="Masukkan Jumlah Tenaga Kerja" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Mulai Usaha Sejak</label>
                            <input type="text" name="fmulai_usaha" class="form-control" placeholder="Masukkan Tahun Mulai Usaha" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Alamat Usaha</label>
                            <textarea name="falamat_usaha" class="form-control" rows="2" placeholder="Masukkan Alamat Usaha" required></textarea>
                        </div>
                    </div>
                </div>

                <!-- Footer Card (Action Buttons) -->
                <div class="card-footer bg-light text-center py-4">
                    <button type="reset" class="btn btn-warning me-2">Batal</button>
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
