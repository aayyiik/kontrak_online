@extends('templates.master')
@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Bagian</h4>
      <a type="button" class="btn btn-primary btn-fw" href="/bagian/create">Tambah</a>
      </p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama Bagian</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no= 1; ?>
          @foreach ($bagian as $item)
          <tr>
            <td>{{$item->id_bagian}}</td>
            <td>{{$item->nama_bagian}}</td>
            <td>
              <a href="/bagian/{{$item->id_bagian}}/edit" class="btn btn-warning">Edit</a>
              <a href="/bagian/{{$item->id_bagian}}/delete" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        </tbody>
          @endforeach
      </table>
    </div>
  </div>
@endsection