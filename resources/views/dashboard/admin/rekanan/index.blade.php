@extends('templates.master')
@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Role</h4>
      </p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>No Rekanan</th>
            <th>Nama Rekanan</th>
            <th>Alamat</th>
            <th>No SAP</th>
            <th>Nama Direktur</th>
            <th>Email Perusahaan</th>
            <th>Status Rekanan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no= 1; ?>
          @foreach ($rekanan as $item)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$item->no_rekanan}}</td>
            <td>{{$item->nama_rekanan}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->no_sap}}</td>
            <td>{{$item->nama_direktur}}</td>
            <td>{{$item->email_perusahaan}}</td>
            <td>{{$item->status_rekanan}}</td>
            <td>
              <a href="/rekanan/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
              <a href="/rekanan/{{$item->id}}/delete" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        </tbody>
          @endforeach
      </table>
    </div>
  </div>
@endsection