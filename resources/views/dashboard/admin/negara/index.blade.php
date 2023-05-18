@extends('templates.master')
@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Negara</h4>
      </p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Negara</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no= 1; ?>
          @foreach ($negara as $item)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$item->nama_negara}}</td>
            <td>
              <a href="/negara/{{$item->id_negara}}/edit" class="btn btn-warning">Edit</a>
              <a href="/negara/{{$item->id_negara}}/delete" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        </tbody>
          @endforeach
      </table>
    </div>
  </div>
@endsection