@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Berita</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <!-- form start -->
<form role="form" action="/updateberita" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<input type="hidden" name="idberita" value="{{$berita->idberita}}">
  <div class="card-body">
    <div class="form-group">
      <label for="nama">Judul</label>
      <input type="text" class="form-control" id="judul_berita" placeholder="Isi Judul" name="judul_berita" value='{{$berita->judul_berita}}' required>
    </div>
    <div class="form-group">
      <label for="alamat">Isi Berita</label>
      <input type="text" class="form-control" id="isi_berita" placeholder="Isi Berita" name="isi_berita" value='{{$berita->isi_berita}}' required>
    </div>
    <div class="form-group">
    <label class="font-weight-bold">Gambar Berita</label>
     <input type="file" class="form-control @error('gambar_berita') is-invalid @enderror" name="gambar_berita" value='{{$berita->gambar_berita}}'>
                
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
