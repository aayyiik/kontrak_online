@extends('templates.master')
@section('content')
<a href="{{ url()->previous() }}" class="btn btn-warning"><i class=" mdi mdi-arrow-left-bold"></i>Kembali</a>
<br>
<br>
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Tambah User</h4>
    <form action="/user/store" method="POST">
      @csrf
      <div class="form-group">
        <label for="exampleInputText">NIK</label>
        <input type="text" class="form-control" name="nik" id="exampleInputText1" placeholder="No Rekanan">
      </div>
      <div class="form-group">
        <label for="exampleInputText">Nama</label>
        <input type="text" class="form-control" name="nama" id="exampleInputText2" placeholder="Nama">
      </div>
      <div class="form-group">
        <label for="exampleSelectGender">Role</label>
        <select class="form-control" id="exampleSelectGender" name="kode_role">
          <option selected="">--Pilih--</option>
          @foreach ($role as $item)
              <option value="{{$item->kode_role}}">{{$item->nama_role}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleSelectGender">Unit</label>
        <select class="form-control" id="exampleSelectGender" name="kode_unit">
          <option selected="">--Pilih--</option>
          @foreach ($unit as $item)
              <option value="{{$item->kode_unit}}">{{$item->nama_unit}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleSelectGender">Status</label>
        <select class="form-control" id="exampleSelectGender" name="status">
          <option selected="">--Pilih--</option>
          <option value="1">Aktif</option>
          <option value="0">Non-Aktif</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
    </form>
  </div>
</div>
<br>

<div class="card">
    <div class="card-body">
      <h4 class="card-title">Data User</h4>
      </p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Role Kerja</th>
            <th>Unit Kerja</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no= 1; ?>
          @foreach ($user as $item)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$item->nik}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->role->nama_role}}</td>
            <td>{{$item->unit->nama_unit ?? "-"}}</td>
            <td><span class="label {{ ($item->status == 1) ? 'badge rounded-pill bg-primary text-white' : 'badge rounded-pill bg-warning text-white'}}">{{ ($item->status == 1)
              ? 'Aktif' : 'Non-Aktif' }}</span></td>
            <td>
              <a href="/status/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
              <a href="/status/{{$item->id}}/delete" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        </tbody>
          @endforeach
      </table>
    </div>
  </div>
@endsection