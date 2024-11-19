@extends('layouts.Dashboardlayout')
@section('child')
    <div class="container">
        <h2 class="mt-5 text-center text-success">Form Informasi Surat Keterangan Tidak Mampu</h2>
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
                                    value="{{ $sukettidakmampu->nama }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Nik</label>
                                <input type="text" name="nik" class="form-control" placeholder="Masukkan Kecamatan"
                                    required value="{{ $sukettidakmampu->nik }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Pekerjaan</label>
                                <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan"
                                    required value="{{ $sukettidakmampu->pekerjaan }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Tempat Lahir</label>
                                <input class="form-control" type="text" name="tempat" placeholder="Masukkan Tempat Lahir"
                                    value="{{ $sukettidakmampu->tempat }}" >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Tanggal Lahir</label>
                                <input class="form-control" type="date" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir"
                                    value="{{ $sukettidakmampu->tgl_lahir }}" >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Alamat Lengkap</label>
                                <textarea name="alamat" class="form-control" placeholder="Masukkan Dusun, RT, RW, Desa, Kec, Kab" required>{{ $sukettidakmampu->alamat }}</textarea>
                            </div>
                        </div>

                        <!-- Pembatas Informasi Usaha -->
                        <hr class="my-4">
                        <h6 class="text-success mb-4"><i class="fas fa-store me-2"></i> Adalah orang tua/wali dari:</h6>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Nama</label>
                                <input type="text" name="nama_tidak_mampu" class="form-control"
                                    placeholder="Masukkan Nama" required value="{{ $sukettidakmampu->nama_tidak_mampu }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Tempat</label>
                                <input type="text" name="tempat_tidak_mampu" class="form-control"
                                    placeholder="Masukkan Tempat Lahir" required value="{{ $sukettidakmampu->tempat_tidak_mampu }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir_tidak_mampu" class="form-control"
                                    placeholder="Masukkan Tanggal lahir" required value="{{ $sukettidakmampu->tgl_lahir_tidak_mampu }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Nik</label>
                                <input type="text" name="nik_tidak_mampu" class="form-control"
                                    placeholder="Masukkan Nik" required value="{{ $sukettidakmampu->nik_tidak_mampu }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Alamat Lengkap</label>
                                <textarea name="alamat_tidak_mampu" class="form-control" rows="2" placeholder="Masukkan Dusun, RT, RW, Desa, Kec, Kab" required>{{ $sukettidakmampu->alamat_tidak_mampu }}</textarea>
                            </div>
                        </div>
                    </div>
                    <input type="text" name="status_surat" value="completed" hidden>
                    <input type="text" name="jenis_surat" value="{{ $sukettidakmampu->jenis_surat }}" hidden>
                    <input type="text" name="id" value="{{ $sukettidakmampu->id }}" hidden>
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
