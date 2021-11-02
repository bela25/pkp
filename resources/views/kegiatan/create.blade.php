@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Kegiatan</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <!-- form start -->
<form role="form" action="/insertkegiatan" method="post" enctype="multipart/form-data">
{{csrf_field()}}
  <div class="card-body">
    <div class="form-group">
      <label for="judulkegiatan">Judul Kegiatan</label>
      <input type="text" class="form-control" id="judulkegiatan" placeholder="Isi Judul" name="judulkegiatan" required>
    </div>

    <div class="form-group">
    <label class="font-weight-bold">Gambar Kegiatan</label>
     <input type="file" class="form-control @error('gambar_kegiatan') is-invalid @enderror" name="gambar_kegiatan">
                            
     <!-- error message untuk title -->
     
           @error('gambar_kegiatan')
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
