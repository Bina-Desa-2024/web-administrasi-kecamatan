@extends('layouts.userlayout')
@section('child')
    <div class="container py-5" style="min-height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form action="/suket-usaha" method="POST" class="card shadow border-0">
                    @csrf
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
                                    <input type="text" name="nama" class="form-control"
                                        placeholder="Masukkan Nama Lengkap" 
                                        value="{{ session('penduduk') ? session('penduduk')->nama : '' }}" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Tempat Lahir</label>
                                    <input placeholder="Masukkan Tempat Lahir"  class="form-control" type="text" name="tempat" value="{{ session('penduduk') ? session('penduduk')->tempat : '' }}" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Tanggal Lahir</label>
                                    <input placeholder="Masukkan Tanggal Lahir"  class="form-control" type="text" name="tgl_lahir" value="{{ session('penduduk') ? session('penduduk')->tgl_lahir : '' }}" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control" value="{{ session('penduduk') ? session('penduduk')->pekerjaan : '' }}"
                                        placeholder="Masukkan Pekerjaan" required >
                                </div>
                                
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Alamat</label>
                                    <textarea name="alamat" class="form-control" placeholder="Masukkan Dusun, RT, RW" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Desa/Kelurahan</label>
                                    <input type="text" name="desa" class="form-control"
                                        placeholder="Masukkan Desa/Kelurahan" required  >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Kecamatan</label>
                                    <input type="text" name="kecamatan" class="form-control"
                                        placeholder="Masukkan Kecamatan" required  >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Kabupaten/Kota</label>
                                    <input type="text" name="kota" class="form-control"
                                        placeholder="Masukkan Kabupaten/Kota" required  >
                                </div>
                            </div>
                        </div>

                        <!-- Informasi Usaha -->
                        <h6 class="text-primary mt-4 mb-3"><i class="fas fa-store me-2"></i>Informasi Usaha</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Nama Usaha</label>
                                    <input type="text" name="nama_usaha" class="form-control"
                                        placeholder="Masukkan Nama Usaha" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Alamat Usaha</label>
                                    <textarea name="alamat_usaha" class="form-control" rows="2" placeholder="Masukkan Alamat Usaha" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Desa</label>
                                    <input type="text" name="desa_usaha" class="form-control"
                                        placeholder="Masukkan Desa Usaha" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Kecamatan</label>
                                    <input type="text" name="kecamatan_usaha" class="form-control"
                                        placeholder="Masukkan Kecamatan Usaha" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Bidang Usaha</label>
                                    <input type="text" name="bidang_usaha" class="form-control"
                                        placeholder="Masukkan Bidang Usaha" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Jenis Tempat Usaha</label>
                                    <select name="jenis_tempat" class="form-control" required>
                                        <option value="" disabled {{ old('jenis_tempat') ? '' : 'selected' }}>--Pilih Jenis Tempat Usaha--</option>
                                        <option value="Menetap" {{ old('jenis_tempat') == 'Menetap' ? 'selected' : '' }}>Menetap</option>
                                        <option value="Bergerak" {{ old('jenis_tempat') == 'Bergerak' ? 'selected' : '' }}>Bergerak</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Status Tempat Usaha</label>
                                    <select name="status_tempat" class="form-control" required>
                                        <option value="" disabled {{ old('status_tempat') ? '' : 'selected' }}>--Pilih Status Tempat Usaha--</option>
                                        <option value="Milik Sendiri" {{ old('status_tempat') == 'Milik Sendiri' ? 'selected' : '' }}>Milik Sendiri</option>
                                        <option value="Sewa" {{ old('status_tempat') == 'Sewa' ? 'selected' : '' }}>Sewa</option>
                                        <option value="Pinjam" {{ old('status_tempat') == 'Pinjam' ? 'selected' : '' }}>Pinjam</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Bentuk Usaha</label>
                                    <input type="text" name="bentuk_usaha" class="form-control"
                                        placeholder="Masukkan Bentuk Usaha" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Modal Usaha (Rupiah)</label>
                                    <input type="number" name="modal_usaha" class="form-control"
                                        placeholder="Masukkan Modal Usaha (Rupiah)" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Jumlah Tenaga Kerja</label>
                                    <input type="number" name="tenaga_kerja" class="form-control"
                                        placeholder="Masukkan Jumlah Tenaga Kerja" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Mulai Usaha Sejak (Tahun)</label>
                                    <input type="number" name="mulai_usaha" class="form-control"
                                        placeholder="Masukkan Tahun Mulai Usaha" required>
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
