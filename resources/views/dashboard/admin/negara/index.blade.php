@extends('templates.master')
@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Tambah Negara</h4>
    <form action="/negara/store" method="POST">
      @csrf
      <div class="form-group">
        <label for="exampleInputText">Kode Negara</label>
        <input type="text" class="form-control" name="kode_negara" id="exampleInputText1" placeholder="Kode Negara">
      </div>
      <div class="form-group">
        <label for="exampleInputText">Nama Negara</label>
        <input type="text" class="form-control" name="nama_negara" id="exampleInputText2" placeholder="Nama Negara">
      </div>
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
    </form>
  </div>
</div>
<br>

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
              <a href="/negara/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
              <a href="/negara/{{$item->id}}/delete" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        </tbody>
          @endforeach
      </table>
    </div>
  </div>
@endsection