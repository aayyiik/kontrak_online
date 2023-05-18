@extends('templates.master')
@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Bagian</h4>
      <form action="/bagian/store" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputText">Bagian</label>
          <input type="text" class="form-control" name="nama_bagian" id="exampleInputText" placeholder="Nama Bagian">
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
@endsection