@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Anggota</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <!-- form start -->
<form role="form" action="{{route('insertanggota')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
  <div class="card-body">
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama" placeholder="Isi Nama" name="nama" required>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="text" class="form-control" id="alamat" placeholder="Isi Alamat" name="alamat" required>
    </div>
    <div class="form-group">
      <label for="noktp">No KTP</label>
      <input type="text" class="form-control" id="ktp" placeholder="Isi No KTP" name="ktp" required>
    </div>
    <div class="form-group">
      <label for="notelp">No Telp</label>
      <input type="text" class="form-control" id="telp" placeholder="Isi No Telp" name="telp" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Isi Email" name="email" required>
    </div>
    <div class="form-group">
      <label>Gender</label>
      <div class="custom-control custom-radio">

        <input class="custom-control-input" type="radio" id="lakilaki" name="gender" value="Laki - laki" checked required>
        <label for="lakilaki" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio">
        <input class="custom-control-input" type="radio" id="perempuan" name="gender" value="perempuan" required>
        <label for="perempuan" class="custom-control-label">Perempuan</label>
      </div>
    </div>
    <div class="form-group">
    <label class="font-weight-bold">GAMBAR</label>
     <input type="file" class="form-control @error('gambar_ktp') is-invalid @enderror" name="gambar_ktp">
                            
     <!-- error message untuk title -->
     
           @error('gambar_ktp')
         <div class="alert alert-danger mt-2">
            {{ $message }}
           </div>
          @enderror
          </div>
  </div>
    
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
                </div>
            </div>
        </div>
    </div>
@stop

