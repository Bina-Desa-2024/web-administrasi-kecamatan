@extends('layouts.Dashboardlayout')
@section('child')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Permintaan Surat</h3>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Jenis Surat</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1234567890</td>
                    <td>Siti Aisyah</td>
                    <td>Jakarta, 01-01-1990</td>
                    <td><label class="badge badge-warning">In progress</label></td>
                    <td>
                        <button type="button" class="btn btn-outline-success btn-icon-text"><i class="ti-file btn-icon-prepend"></i> Konfirmasi </button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>1122334455</td>
                    <td>Rina Susanti</td>
                    <td>Semarang, 20-08-1992</td>
                    <td><label class="badge badge-warning">In progress</label></td>
                    <td>
                        <button type="button" class="btn btn-outline-success btn-icon-text"><i class="ti-file btn-icon-prepend"></i> Konfirmasi </button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>2233445566</td>
                    <td>Joko Prabowo</td>
                    <td>Yogyakarta, 30-10-1988</td>
                    <td><label class="badge badge-warning">In progress</label></td>
                    <td>
                        <button type="button" class="btn btn-outline-success btn-icon-text"><i class="ti-file btn-icon-prepend"></i> Konfirmasi </button>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td>5</td>
                    <td>3344556677</td>
                    <td>Dinda Kartika</td>
                    <td>Surabaya, 12-12-1995</td>
                    <td><label class="badge badge-warning">In progress</label></td>
                    <td>
                        <button type="button" class="btn btn-outline-success btn-icon-text"><i class="ti-file btn-icon-prepend"></i> Konfirmasi </button>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td>6</td>
                    <td>4455667788</td>
                    <td>Agus Riyanto</td>
                    <td>Medan, 25-03-1980</td>
                    <td><label class="badge badge-warning">In progress</label></td>
                    <td>
                        <button type="button" class="btn btn-outline-success btn-icon-text"><i class="ti-file btn-icon-prepend"></i> Konfirmasi </button>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td>7</td>
                    <td>5566778899</td>
                    <td>Fina Sari</td>
                    <td>Palembang, 18-07-1993</td>
                    <td><label class="badge badge-warning">In progress</label></td>
                    <td>
                        <button type="button" class="btn btn-outline-success btn-icon-text"><i class="ti-file btn-icon-prepend"></i> Konfirmasi </button>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td>8</td>
                    <td>6677889900</td>
                    <td>Andi Setiawan</td>
                    <td>Makassar, 05-11-1987</td>
                    <td><label class="badge badge-warning">In progress</label></td>
                    <td>
                        <button type="button" class="btn btn-outline-success btn-icon-text"><i class="ti-file btn-icon-prepend"></i> Konfirmasi </button>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td>9</td>
                    <td>7788990011</td>
                    <td>Lila Anastasya</td>
                    <td>Jakarta, 22-04-1994</td>
                    <td><label class="badge badge-warning">In progress</label></td>
                    <td>
                        <button type="button" class="btn btn-outline-success btn-icon-text"><i class="ti-file btn-icon-prepend"></i> Konfirmasi </button>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td>10</td>
                    <td>8899001122</td>
                    <td>Rudi Hartono</td>
                    <td>Bogor, 29-06-1986</td>
                    <td><label class="badge badge-warning">In progress</label></td>
                    <td>
                        <button type="button" class="btn btn-outline-success btn-icon-text"><i class="ti-file btn-icon-prepend"></i> Konfirmasi </button>
                    </td>
                </tr>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


@endsection