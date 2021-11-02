@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Berita</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <!-- form start -->
<form role="form" action="/insertberita" method="post" enctype="multipart/form-data">
{{csrf_field()}}
  <div class="card-body">
    <div class="form-group">
      <label for="nama">Judul Berita</label>
      <input type="text" class="form-control" id="judul" placeholder="Isi JudulBerita" name="judul_berita" required>
    </div>
    <div class="form-group">
      <label for="alamat">Isi Berita</label>
      <input type="text" class="form-control" id="keteragan" placeholder="Isi Berita" name="isi_berita" required>
    </div>
    <div class="form-group">
    <label class="font-weight-bold">Gambar Berita</label>
     <input type="file" class="form-control @error('gambar_berita') is-invalid @enderror" name="gambar_berita">
                            
     <!-- error message untuk title -->
     
           @error('gambar_berita')
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
