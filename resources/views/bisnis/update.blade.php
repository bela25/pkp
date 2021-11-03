@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Bisnis</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <!-- form start -->
<form role="form" action="/updatebisnis" method="post" enctype="multipart/form-data">
{{csrf_field()}}
@error('gambar_produk')
<div class="alert alert-danger mt-2">
    {{ implode('', $errors->all()) }}
  </div>
@enderror

<input type="hidden" name="idbisnis" value="{{$bisnis->idbisnis}}">
  <div class="card-body">
    <div class="form-group">
      <label for="nama">Judul</label>
      <input type="text" class="form-control" id="judul" placeholder="Isi Judul" name="judul" value='{{$bisnis->judul}}' required>
    </div>
    <div class="form-group">
      <label for="alamat">Keterangan</label>
      <input type="text" class="form-control" id="keteragan" placeholder="Isi Keterangan" name="keterangan" value='{{$bisnis->keterangan}}' required>
    </div>


    <div class="form-group">
     <input type="file" class="form-control-file" id="gambar_produk" name="gambar_produk" >
     <img id="gambar_produk" src="{{asset('promosi/'.$bisnis->gambar_produk)}}" alt="gambar_produk" height="200" />
     <input  type="hidden" class="form-control-file" id="hidden_image" name="hidden_image" value="{{$bisnis->gambar_produk}}">
            
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
              $('#gambar_produk')
                  .attr('src', e.target.result)
                  .width('auto')
                  .height(200);
          };

          reader.readAsDataURL(input.files[0]);
      }
  }
</script>
@endpush
