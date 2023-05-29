@extends('templates.master')
@section('content')
<a href="{{ url()->previous() }}" class="btn btn-warning"><i class=" mdi mdi-arrow-left-bold"></i>Kembali</a>
<br><br>
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Tambah Jenis Pekerjaan</h4>
    <form action="/jepe/store" method="POST">
      @csrf
      <div class="form-group">
        <label for="exampleInputText">Kode Jenis Pekerjaan</label>
        <input type="text" class="form-control" name="kode_jepe" id="exampleInputText1" placeholder="Kode Jenis Pekerjaan">
      </div>
      <div class="form-group">
        <label for="exampleInputText">Jenis Pekerjaan</label>
        <input type="text" class="form-control" name="nama_jepe" id="exampleInputText2" placeholder="Nama Jenis Pekerjaan">
      </div>
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
    </form>
  </div>
</div>
<br>

<div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Jenis Pekerjaan</h4>
      <table id="myTable" class="display" style="width:100%">
        <thead>
          <tr>
            <th>#</th>
            <th>Jenis Pekerjaan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no= 1; ?>
          @foreach ($jepe as $item)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$item->jenis_pekerjaan}}</td>
            <td>
              <a href="/jenispekerjaan/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
              <a href="/jenispekerjaan/{{$item->id}}/delete" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <script>
        $(document).ready(function () {
            $('#example').DataTable();
        })
      </script>
    </div>
  </div>
@endsection