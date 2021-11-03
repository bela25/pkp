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
<form role="form" action="/updateanggota" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
  @error('gambar_ktp')
<div class="alert alert-danger mt-2">
    {{ implode('', $errors->all()) }}
  </div>
@enderror

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
     <input type="file" class="form-control-file @error('gambar_ktp') is-invalid @enderror" name="gambar_ktp">
     <div class="small text-primary">Kosongkan apabila tidak ingin merubah gambar!</div>
     <img src="{{asset('anggota/'.$anggota->gambar_ktp)}}" alt="Gambar KTP" height="200" />
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
@push('scripts')
<script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('#gambar_ktp')
                  .attr('src', e.target.result)
                  .width('auto')
                  .height(200);
          };

          reader.readAsDataURL(input.files[0]);
      }
  }
</script>
@endpush