@extends('layout.main')

@section('content')
<h3>Data Murid</h3>
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm btn-primary">
        <i class="fas fa-plus-circle"></i> Add New Data
      </button>
    </div>
    <div class="card-body">
      <table class="table table-sm table-stripped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No Hp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($murid as $row)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $row->NIK }}</td>
                    <td>{{ $row->namalengkap}}</td>
                    <td>{{ ($row->jeniskelamin=='P') ? 'Pria' : 'Wanita' }}</td>
                    <td>{{ $row->alamat}}</td>
                    <td>{{ $row->nohp}}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection