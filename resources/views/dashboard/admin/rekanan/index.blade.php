@extends('templates.master')
@section('content')
<a href="{{ url()->previous() }}" class="btn btn-warning"><i class=" mdi mdi-arrow-left-bold"></i>Kembali</a>
<br><br>
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Tambah Rekanan</h4>
    <form action="/negara/store" method="POST">
      @csrf
      <div class="form-group">
        <label for="exampleInputText">No Rekanan</label>
        <input type="text" class="form-control" name="no_rekanan" id="exampleInputText1" placeholder="No Rekanan">
      </div>
      <div class="form-group">
        <label for="exampleInputText">Nama Rekanan</label>
        <input type="text" class="form-control" name="nama_rekanan" id="exampleInputText2" placeholder="Nama Rekanan">
      </div>
      <div class="form-group">
        <label for="exampleInputText">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="exampleInputText2" placeholder="Alamat">
      </div>
      <div class="form-group">
        <label for="exampleInputText">No SAP</label>
        <input type="text" class="form-control" name="no_sap" id="exampleInputText2" placeholder="No SAP">
      </div>
      <div class="form-group">
        <label for="exampleInputText">Nama Direktur</label>
        <input type="text" class="form-control" name="nama_direktur" id="exampleInputText2" placeholder="Nama Direktur">
      </div>
      <div class="form-group">
        <label for="exampleInputText">Email Perusahaan</label>
        <input type="text" class="form-control" name="email_perusahaan" id="exampleInputText2" placeholder="Email Perusahaan">
      </div>
      <div class="form-group">
        <label for="exampleInputText">Status Rekanan</label>
        <input type="text" class="form-control" name="status_rekanan" id="exampleInputText2" placeholder="Status Rekanan">
      </div>
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
    </form>
  </div>
</div>
<br>

<div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Rekanan</h4>
      </p>
      <table id="myTable" class="display" style="width:100%">
        <thead>
          <tr>
            <th>#</th>
            <th>No Rekanan</th>
            <th>Nama Rekanan</th>
            <th>Alamat</th>
            <th>No SAP</th>
            <th>Nama Direktur</th>
            <th>Email Perusahaan</th>
            <th>Status Rekanan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no= 1; ?>
          @foreach ($rekanan as $item)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$item->no_rekanan}}</td>
            <td>{{$item->nama_rekanan}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->no_sap}}</td>
            <td>{{$item->nama_direktur}}</td>
            <td>{{$item->email_perusahaan}}</td>
            <td>{{$item->status_rekanan}}</td>
            <td>
              <a href="/rekanan/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
              <a href="/rekanan/{{$item->id}}/delete" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection