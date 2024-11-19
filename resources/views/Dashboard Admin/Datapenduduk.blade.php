@extends('layouts.Dashboardlayout')
@section('child')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Data Penduduk</h3>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tempat/Tgl Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1234567890</td>
                    <td>Siti Aisyah</td>
                    <td>Jakarta, 01-01-1990</td>
                    <td>Perempuan</td>
                    <td>Islam</td>
                    <td>Jl. Kebon Jeruk No. 10</td>
                    <!-- <td>
                        <button type="button" class="btn btn-outline-warning btn-fw">Edit</button>
                        <button type="button" class="btn btn-outline-danger btn-fw">Hapus</button>
                    </td> -->
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


@endsection