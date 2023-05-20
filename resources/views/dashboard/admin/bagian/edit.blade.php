@extends('templates.master')
@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">FORM EDIT</h4>
      <p class="card-description"> EDIT ...... </p>
      <form action="/bagian/{{$bagian->id}}/update" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputText1">Nama Bagian</label>
          <input type="text" class="form-control" id="exampleInputText1" name="nama_bagian" value="{{ $bagian->nama_bagian }}">
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
@endsection