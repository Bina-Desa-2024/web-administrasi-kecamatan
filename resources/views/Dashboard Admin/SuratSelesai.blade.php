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
                <th>Tanggal Selesai</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jenis Surat</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($suratCompleted as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jenis_surat }}</td>
                    <td><label class="badge badge-success">Completed</label></td>
                    <td>
                        <a href="/cetak-surat/{{ $item->id }}/{{ $item->jenis_surat }}" class="btn btn-outline-info btn-icon-text"> Print <i class="ti-printer btn-icon-append"></i></a>
                    </td>
                </tr>
                @endforeach
                
                
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


@endsection