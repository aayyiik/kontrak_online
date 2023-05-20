@extends('templates.master')
@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Tambah Kota</h4>
    <form action="/kota/store" method="POST">
      @csrf
      <div class="form-group">
        <label for="exampleInputText">Kode Kota</label>
        <input type="text" class="form-control" name="kode_bagian" id="exampleInputText1" placeholder="Kode Kota">
      </div>
      <div class="form-group">
        <label for="exampleInputText">Kota</label>
        <input type="text" class="form-control" name="nama_bagian" id="exampleInputText2" placeholder="Nama Kota">
      </div>
      <div class="form-group">
        <label for="exampleSelectGender">Negara</label>
        <select class="form-control" id="exampleSelectGender">
          <option>Male</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
    </form>
  </div>
</div>
<br>

<div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Kota</h4>
      </p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Kota</th>
            <th>Negara</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no= 1; ?>
          @foreach ($kota as $item)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$item->nama_kota}}</td>
            <td>{{$item->negara->nama_negara}}</td>
            <td>
              <a href="/kota/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
              <a href="/kota/{{$item->id}}/delete" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        </tbody>
          @endforeach
      </table>
    </div>
  </div>
@endsection