@extends('templates.master')
@section('content')
<a href="{{ url()->previous() }}" class="btn btn-warning"><i class=" mdi mdi-arrow-left-bold"></i>Kembali</a>
<br><br>
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Tambah Role</h4>
    <form action="/role/store" method="POST">
      @csrf
      <div class="form-group">
        <label for="exampleInputText">Kode Role</label>
        <input type="text" class="form-control" name="kode_role" id="exampleInputText1" placeholder="Kode Role">
      </div>
      <div class="form-group">
        <label for="exampleInputText">Nama Role</label>
        <input type="text" class="form-control" name="nama_role" id="exampleInputText2" placeholder="Nama Role">
      </div>
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
    </form>
  </div>
</div>
<br>

<div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Role</h4>
      </p>
      <table id="myTable" class="display" style="width:100%">
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
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection