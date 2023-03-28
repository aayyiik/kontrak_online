@extends('templates.master')

@section('content')
<div class="card">
    <div class="card-body">
      <form action="/cetak" method="GET" target="_blank" class="forms-sample">
        <div class="form-group">
          <label for="exampleInputName1">Nama Rekanan</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="nama_rekanan">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail3">Nama Pengadaan</label>
          <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Email" name="nama_pengadaan">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">No Kontrak By DOF</label>
          <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Password" name="no_kontrak_dof">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">Nama Pekerjaan</label>
          <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Password" name="nama_pekerjaan">
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>    
@endsection