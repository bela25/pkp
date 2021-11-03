@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Kegiatan</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <!-- form start -->
<form role="form" action="/updatekegiatan" method="post" enctype="multipart/form-data">
{{csrf_field()}}
@error('gambar_kegiatan')
<div class="alert alert-danger mt-2">
    {{ implode('', $errors->all()) }}
  </div>
@enderror

<input type="hidden" name="idkegiatan" value="{{$kegiatan->idkegiatan}}">
  <div class="card-body">
    <div class="form-group">
      <label for="nama">Judul Kegiatan</label>
      <input type="text" class="form-control" id="judulkegiatan" placeholder="Isi Judul" name="judulkegiatan" value='{{$kegiatan->judulkegiatan}}' required>
    </div>

    <div class="form-group">
     <input type="file" class="form-control-file" id="gambar_kegiatan" name="gambar_kegiatan" >
     <img id="gambar_kegiatan" src="{{asset('image/'.$kegiatan->gambar_kegiatan)}}" alt="gambar_kegiatan" height="200" />
     <input  type="hidden" class="form-control-file" id="hidden_image" name="hidden_image" value="{{$kegiatan->gambar_kegiatan}}">
            
  </div>    
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Ubah Data</button>
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
              $('#gambar_kegiatan')
                  .attr('src', e.target.result)
                  .width('auto')
                  .height(200);
          };

          reader.readAsDataURL(input.files[0]);
      }
  }
</script>
@endpush
