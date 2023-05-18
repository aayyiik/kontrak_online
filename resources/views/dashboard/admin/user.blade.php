@extends('templates.master')
@section('content')
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
              <a href="/edit" class="btn btn-warning">Edit</a>
              <a href="/delete" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        </tbody>
          @endforeach
      </table>
    </div>
  </div>
@endsection