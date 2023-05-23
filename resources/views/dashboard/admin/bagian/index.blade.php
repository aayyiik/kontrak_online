@extends('templates.master')
@section('content')
<a href="{{ url()->previous() }}" class="btn btn-warning"><i class=" mdi mdi-arrow-left-bold"></i>Kembali</a>
<br><br>
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Tambah Bagian</h4>
    <form action="/bagian/store" method="POST">
      @csrf
      <div class="form-group">
        <label for="exampleInputText">Kode Bagian</label>
        <input type="text" class="form-control" name="kode_bagian" id="exampleInputText" placeholder="Kode Bagian">
      </div>
      <div class="form-group">
        <label for="exampleInputText">Bagian</label>
        <input type="text" class="form-control" name="nama_bagian" id="exampleInputText" placeholder="Nama Bagian">
      </div>
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
    </form>
  </div>
</div>
<br>
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Bagian</h4>
      </p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Kode Bagian</th>
            <th>Nama Bagian</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no= 1; ?>
          @foreach ($bagian as $item)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$item->kode_bagian}}</td>
            <td>{{$item->nama_bagian}}</td>
            <td>
              <a href="/bagian/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
              <a href="/bagian/{{$item->id}}/delete" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        </tbody>
          @endforeach
      </table>
    </div>
  </div>
@endsection