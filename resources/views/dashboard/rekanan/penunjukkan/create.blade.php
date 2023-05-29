@extends('templates.master')
@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Form Penunjukkan</h4>
      <form action="/store-penunjukkan" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">No Kontrak</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="No Kontrak" name="no_kontrak">
        </div>
        <div class="form-group">
          <label for="exampleInputTanggalKontrak2">Tanggal Kontrak</label>
          <input type="date" class="form-control" id="exampleInputDate2" placeholder="Tanggal Kontrak" name="tgl_kontrak">
        </div>
        <div class="form-group">
          <label for="exampleInputSIB3">SIK</label>
          <div class="input-group">
            <input type="file" class="form-control" id="inputGroupFile02" name="sik">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputNIB4">NIB</label>
          <div class="input-group">
            <input type="file" class="form-control" id="inputGroupFile02" name="nib">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
@endsection