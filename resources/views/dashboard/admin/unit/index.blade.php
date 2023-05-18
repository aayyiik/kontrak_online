@extends('templates.master')
@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Unit Kerja</h4>
      </p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama Unit Kerja</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no= 1; ?>
          @foreach ($unit as $item)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$item->nama_unit}}</td>
            <td>
              <a href="/unit/{{$item->id_unit}}/edit" class="btn btn-warning">Edit</a>
              <a href="/unit/{{$item->id_unit}}/delete" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        </tbody>
          @endforeach
      </table>
    </div>
  </div>
@endsection