@extends('templates.master')
@section('content')
<a href="{{ url()->previous() }}" class="btn btn-warning"><i class=" mdi mdi-arrow-left-bold"></i>Kembali</a>
<br><br>
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Tambah Unit</h4>
    <form action="/status/store" method="POST">
      @csrf
      <div class="form-group">
        <label for="exampleInputText">Kode Unit</label>
        <input type="text" class="form-control" name="kode_status" id="exampleInputText1" placeholder="Kode Status">
      </div>
      <div class="form-group">
        <label for="exampleInputText">Bagian</label>
        <input type="text" class="form-control" name="nama_status" id="exampleInputText2" placeholder="Nama Status">
      </div>
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
    </form>
  </div>
</div>
<br>

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
              <a href="/unit/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
              <a href="/unit/{{$item->id}}/delete" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        </tbody>
          @endforeach
      </table>
    </div>
  </div>
@endsection