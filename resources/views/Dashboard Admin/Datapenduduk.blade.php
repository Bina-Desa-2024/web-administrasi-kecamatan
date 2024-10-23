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
                    <td>
                        <button type="button" class="btn btn-outline-warning btn-fw">Edit</button>
                        <button type="button" class="btn btn-outline-danger btn-fw">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>1122334455</td>
                    <td>Rina Susanti</td>
                    <td>Semarang, 20-08-1992</td>
                    <td>Perempuan</td>
                    <td>Hindu</td>
                    <td>Jl. Sumber Rejeki No. 5</td>
                    <td>
                        <button type="button" class="btn btn-outline-warning btn-fw">Edit</button>
                        <button type="button" class="btn btn-outline-danger btn-fw">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>2233445566</td>
                    <td>Joko Prabowo</td>
                    <td>Yogyakarta, 30-10-1988</td>
                    <td>Laki-laki</td>
                    <td>Islam</td>
                    <td>Jl. Cinta No. 15</td>
                    <td>
                        <button type="button" class="btn btn-outline-warning btn-fw">Edit</button>
                        <button type="button" class="btn btn-outline-danger btn-fw">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>3344556677</td>
                    <td>Dinda Kartika</td>
                    <td>Surabaya, 12-12-1995</td>
                    <td>Perempuan</td>
                    <td>Buddha</td>
                    <td>Jl. Harmoni No. 8</td>
                    <td>
                        <button type="button" class="btn btn-outline-warning btn-fw">Edit</button>
                        <button type="button" class="btn btn-outline-danger btn-fw">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>4455667788</td>
                    <td>Agus Riyanto</td>
                    <td>Medan, 25-03-1980</td>
                    <td>Laki-laki</td>
                    <td>Islam</td>
                    <td>Jl. Merdeka No. 25</td>
                    <td>
                        <button type="button" class="btn btn-outline-warning btn-fw">Edit</button>
                        <button type="button" class="btn btn-outline-danger btn-fw">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>5566778899</td>
                    <td>Fina Sari</td>
                    <td>Palembang, 18-07-1993</td>
                    <td>Perempuan</td>
                    <td>Kristen</td>
                    <td>Jl. Bunga No. 30</td>
                    <td>
                        <button type="button" class="btn btn-outline-warning btn-fw">Edit</button>
                        <button type="button" class="btn btn-outline-danger btn-fw">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>6677889900</td>
                    <td>Andi Setiawan</td>
                    <td>Makassar, 05-11-1987</td>
                    <td>Laki-laki</td>
                    <td>Islam</td>
                    <td>Jl. Laut No. 12</td>
                    <td>
                        <button type="button" class="btn btn-outline-warning btn-fw">Edit</button>
                        <button type="button" class="btn btn-outline-danger btn-fw">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>7788990011</td>
                    <td>Lila Anastasya</td>
                    <td>Jakarta, 22-04-1994</td>
                    <td>Perempuan</td>
                    <td>Hindu</td>
                    <td>Jl. Cendana No. 2</td>
                    <td>
                        <button type="button" class="btn btn-outline-warning btn-fw">Edit</button>
                        <button type="button" class="btn btn-outline-danger btn-fw">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>8899001122</td>
                    <td>Rudi Hartono</td>
                    <td>Bogor, 29-06-1986</td>
                    <td>Laki-laki</td>
                    <td>Buddha</td>
                    <td>Jl. Suka Damai No. 17</td>
                    <td>
                        <button type="button" class="btn btn-outline-warning btn-fw">Edit</button>
                        <button type="button" class="btn btn-outline-danger btn-fw">Hapus</button>
                    </td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


@endsection