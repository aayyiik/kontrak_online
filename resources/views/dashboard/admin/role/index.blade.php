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
            <th>Nama Role</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no= 1; ?>
          @foreach ($role as $item)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$item->nama_role}}</td>
            <td>
              <a href="/role/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
              <a href="/role/{{$item->id}}/delete" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        </tbody>
          @endforeach
      </table>
    </div>
  </div>
@endsection