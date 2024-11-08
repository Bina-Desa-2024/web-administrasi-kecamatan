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
                @foreach ($suratPending as $item)    
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>suket usaha</td>
                    <td><label class="badge badge-warning">In progress</label></td>
                    <td>
                        <button type="button" class="btn btn-outline-success btn-icon-text"><i class="ti-file btn-icon-prepend"></i> Konfirmasi </button>
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