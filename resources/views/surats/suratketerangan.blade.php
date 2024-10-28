@extends('layouts.userlayout')
@section('child')
<div class="container" style="max-height:cover; padding-top:30px;  padding-bottom:60px; position:relative; min-height: 100%;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header"><i class="fas fa-envelope"></i> INFORMASI SURAT</h5>
                <br>
                <div class="container-fluid">
                    <div class="row">
                        <h5 class="col-sm-6"><b>SURAT KETERANGAN</b></h5>
                        <h5 class="col-sm-6"><b>NOMOR SURAT : -</b></h5>
                    </div>
                </div>
                <hr>
                <form method="post" action="">
                    <h6 class="container-fluid" ><i class="fas fa-user"></i> Informasi Pribadi</h6><hr width="97%">
                    <div class="row" style="padding: 0 20px 0 20px">
                        <div class="col-sm-6">
                            <div class="form-group">
                                   <label class="col-sm-12 mt-3" style="font-weight: 500;">Nama Lengkap</label>
                                   <div class="col-sm-12 mt-1">
                                       <input type="text" name="fnama" class="form-control" style="text-transform: capitalize;" value="" readonly>
                                   </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                   <label class="col-sm-12 mt-3" style="font-weight: 500;">Jenis Kelamin</label>
                                   <div class="col-sm-12 mt-1">
                                       <input type="text" name="fjenis_kelamin" class="form-control" style="text-transform: capitalize;" value="" readonly>
                                   </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                   <label class="col-sm-12 mt-3" style="font-weight: 500;">Tempat, Tgl Lahir</label>
                                   <div class="col-sm-12 mt-1">
                                       <input type="text" name="ftempat_tgl_lahir" class="form-control" style="text-transform: capitalize;" value="" readonly>
                                   </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                   <label class="col-sm-12 mt-3" style="font-weight: 500;">Agama</label>
                                   <div class="col-sm-12 mt-1">
                                       <input type="text" name="fagama" class="form-control" style="text-transform: capitalize;" value="" readonly>
                                   </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding: 0 20px 0 20px">
                        <div class="col-sm-6">
                            <div class="form-group">
                                   <label class="col-sm-12 mt-3" style="font-weight: 500;">Pekerjaan</label>
                                   <div class="col-sm-12 mt-1">
                                       <input type="text" name="fpekerjaan" class="form-control" style="text-transform: capitalize;" value="" readonly>
                                   </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="form-group">
                                   <label class="col-sm-12 mt-3" style="font-weight: 500;">NIK</label>
                                   <div class="col-sm-12 mt-1">
                                       <input type="text" name="fnik" class="form-control" value="" readonly>
                                   </div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                   <label class="col-sm-12 mt-3" style="font-weight: 500;">Alamat</label>
                                   <div class="col-sm-12 mt-1">
                                       <textarea type="text" name="falamat" class="form-control" style="text-transform: capitalize;" readonly></textarea>
                                   </div>
                            </div>
                          </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                   <label class="col-sm-12 mt-3" style="font-weight: 500;">Kewarganegaraan</label>
                                   <div class="col-sm-12 mt-1">
                                       <input type="text" name="fkewarganegaraan" class="form-control" style="text-transform: uppercase;" value="" readonly>
                                   </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h6 class="container-fluid" ><i class="fas fa-edit"></i> Formulir Surat</h6><hr width="97%">
                    <div class="row" style="padding: 0 20px 0 20px">
                          <div class="col-sm-12">
                              <div class="form-group">
                                   <label class="col-sm-12" style="font-weight: 500;">Keperluan Surat</label>
                                   <div class="col-sm-12">
                                       <input type="text" name="fkeperluan" class="form-control" style="text-transform: capitalize;" placeholder="Masukkan Keperluan Surat" required>
                                   </div>
                            </div>
                          </div>
                    </div>
                    <hr width="97%">
                    <div class="container-fluid" style="padding-bottom: 20px;">
                        <input type="reset" class="btn btn-warning" value="Batal" style="margin-right:15px">
                        <input type="submit" name="submit" class="btn btn-info" value="Submit">
                      </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection