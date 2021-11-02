@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Ubah Anggota</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <!-- form start -->
<form role="form" action="/updateanggota" method="post">
	{{csrf_field()}}

  <input type="hidden" name="idanggota" value="{{$anggota->idanggota}}">
  <div class="card-body">
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama" placeholder="Isi Nama" name="nama" value="{{$anggota->nama}}"required>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="text" class="form-control" id="alamat" placeholder="Isi Alamat" name="alamat" value="{{$anggota->alamat}}"required>
    </div>
    <div class="form-group">
      <label for="noktp">No KTP</label>
      <input type="text" class="form-control" id="ktp" placeholder="Isi No KTP" name="ktp" value="{{$anggota->ktp}}"readonly>
    </div>
    <div class="form-group">
      <label for="notelp">No Telp</label>
      <input type="text" class="form-control" id="telp" placeholder="Isi No Telp" name="telp" value="{{$anggota->telp}}"required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Isi Email" name="email" value="{{$anggota->email}}"required>
    </div>
    <div class="form-group">
      <label for="gender">Gender</label>
      <input type="text" class="form-control" id="gender" placeholder="Isi Gender" name="gender"
      value="{{$anggota->gender}}" readonly>
    </div>
    <div class="form-group">
    <label class="font-weight-bold">Gambar KTP</label>
     <input type="file" class="form-control @error('gambar_ktp') is-invalid @enderror" name="gambar_ktp" value='{{$anggota->gambar_ktp}}'>
                     
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
