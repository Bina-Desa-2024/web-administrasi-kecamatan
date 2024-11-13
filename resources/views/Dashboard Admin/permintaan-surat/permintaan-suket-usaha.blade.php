@extends('layouts.userlayout')
@section('child')
    <div class="container py-5" style="min-height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form action="/selesai-surat" method="POST" class="card shadow border-0">
                    @method('put')
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
                                        placeholder="Masukkan Nama Lengkap" readonly
                                        value="{{ $suketusaha->nama}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Tempat, Tgl Lahir</label>
                                    <input type="text" name="tempat" value="{{ $suketusaha->tempat}}" hidden>
                                    <input type="text" name="tgl_lahir" value="{{ $suketusaha->tgl_lahir}}" hidden>
                                    <input type="text" class="form-control"
                                        placeholder="Masukkan Tempat, Tgl Lahir" required readonly
                                        value="{{ $suketusaha->tgl_lahir}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control" 
                                    value="{{ $suketusaha->pekerjaan}}"
                                        placeholder="Masukkan Pekerjaan" required readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Alamat</label>
                                    {{-- <input type="text" name="dusun" value="{{ session('penduduk') ? session('penduduk')->dusun : '' }}" hidden>
                                    <input type="text" name="rt" value="{{ session('penduduk') ? session('penduduk')->rt : '' }}" hidden>
                                    <input type="text" name="rw" value="{{ session('penduduk') ? session('penduduk')->rw : '' }}" hidden> --}}
                                    <input type="text" class="form-control"
                                        placeholder="Masukkan Tempat, Tgl Lahir" required readonly
                                        value="{{ $suketusaha->dusun}}">
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Desa/Kel</label>
                                    <input type="text" name="desa" class="form-control"
                                        placeholder="Masukkan Desa/Kel" required readonly value="{{ $suketusaha->desa}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Kecamatan</label>
                                    <input type="text" name="kecamatan" class="form-control"
                                        placeholder="Masukkan Kecamatan" required readonly value="{{ $suketusaha->kecamatan}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Kabupaten/Kota</label>
                                    <input type="text" name="kota" class="form-control"
                                        placeholder="Masukkan Kabupaten/Kota" required readonly value="{{ $suketusaha->kota}}">
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
                                        placeholder="Masukkan Nama Usaha" required 
                                        value="{{ $suketusaha->nama_usaha}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Alamat Usaha</label>
                                    <input type="text" name="alamat_usaha" class="form-control"
                                        placeholder="Masukkan Nama Usaha" required 
                                        value="{{ $suketusaha->alamat_usaha}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Desa</label>
                                    <input type="text" name="desa_usaha" class="form-control"
                                        placeholder="Masukkan Desa Usaha" required
                                        value="{{ $suketusaha->desa_usaha}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Kecamatan</label>
                                    <input type="text" name="kecamatan_usaha" class="form-control"
                                        placeholder="Masukkan Kecamatan Usaha" required
                                        value="{{ $suketusaha->kecamatan_usaha}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Bidang Usaha</label>
                                    <input type="text" name="bidang_usaha" class="form-control"
                                        placeholder="Masukkan Bidang Usaha" required
                                        value="{{ $suketusaha->bidang_usaha}}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Jenis Tempat Usaha</label>
                                    <input type="text" name="jenis_tempat" class="form-control"
                                        placeholder="Masukkan Jenis Tempat Usaha" required
                                        value="{{ $suketusaha->jenis_tempat}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Status Tempat Usaha</label>
                                    <input type="text" name="status_tempat" class="form-control"
                                        placeholder="Masukkan Status Tempat Usaha" required
                                        value="{{ $suketusaha->status_tempat}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Bentuk Usaha</label>
                                    <input type="text" name="bentuk_usaha" class="form-control"
                                        placeholder="Masukkan Bentuk Usaha" required
                                        value="{{ $suketusaha->bentuk_usaha}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Modal Usaha</label>
                                    <input type="text" name="modal_usaha" class="form-control"
                                        placeholder="Masukkan Modal Usaha" required
                                        value="{{ $suketusaha->modal_usaha}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Jumlah Tenaga Kerja</label>
                                    <input type="text" name="tenaga_kerja" class="form-control"
                                        placeholder="Masukkan Jumlah Tenaga Kerja" required
                                        value="{{ $suketusaha->tenaga_kerja}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Mulai Usaha Sejak</label>
                                    <input type="date" name="mulai_usaha" class="form-control"
                                        placeholder="Masukkan Tahun Mulai Usaha" required
                                        value="{{ $suketusaha->mulai_usaha}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="text" name="status_surat" value="completed" hidden>
                    <input type="text" name="jenis_surat" value="{{ $suketusaha->jenis_surat }}" hidden>
                    <input type="text" name="id" value="{{ $suketusaha->id }}" hidden>
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
