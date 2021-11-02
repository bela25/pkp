@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Bisnis</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <!-- form start -->
<form role="form" action="/insertbisnis" method="post" enctype="multipart/form-data">
{{csrf_field()}}
  <div class="card-body">
    <div class="form-group">
      <label for="nama">Judul</label>
      <input type="text" class="form-control" id="judul" placeholder="Isi Judul" name="judul" required>
    </div>
    <div class="form-group">
      <label for="alamat">Keterangan</label>
      <input type="text" class="form-control" id="keteragan" placeholder="Isi Keterangan" name="keterangan" required>
    </div>
    <div class="form-group">
    <label class="font-weight-bold">Gambar Produk</label>
     <input type="file" class="form-control @error('gambar_produk') is-invalid @enderror" name="gambar_produk">
                            
     <!-- error message untuk title -->
     
           @error('gambar_produk')
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
