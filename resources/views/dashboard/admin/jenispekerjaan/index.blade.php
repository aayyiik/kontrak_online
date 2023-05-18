@extends('templates.master')
@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Bagian</h4>
      </p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Jenis Pekerjaan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no= 1; ?>
          @foreach ($jepe as $item)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$item->jenis_pekerjaan}}</td>
            <td>
              <a href="/jenispekerjaan/{{$item->id_jepe}}/edit" class="btn btn-warning">Edit</a>
              <a href="/jenispekerjaan/{{$item->id_jepe}}/delete" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        </tbody>
          @endforeach
      </table>
    </div>
  </div>
@endsection