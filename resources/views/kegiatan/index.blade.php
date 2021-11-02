@extends('adminlte::page')

@section('title', 'kegiatan/index')

@section('content_header')
   
<h1 style="text-align:left;">Daftar Kegiatan</h1>
@stop

@section('content')
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            
          @endif     
        </div>
        <a href="/tambahkegiatan" class="btn btn-primary ">
            <i class="fas fa-plus-square"></i> Tambah
             </a> <br> 
             <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Judul</th>
                <th>Gambar Produk</th> 
                <th>Interaksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($kegiatans as $kegiatan)
                <tr>
                  <td>{{ $kegiatan->judulkegiatan }}</td>
                  <td><a href="{{asset('image/'.$kegiatan->gambar_kegiatan)}}" target="_blank">{{$kegiatan->gambar_kegiatan}}</a></td>
                  <td>  
              <a href="{{ route('editkegiatan', $kegiatan->idkegiatan) }}" class="btn btn-primary">Ubah</a>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$kegiatan->idkegiatan}}">Hapus</button>
              <div class="modal fade" id="delete{{$kegiatan->idkegiatan}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Peringatan</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>Data ini akan dihapus secara permanen, Anda yakin untuk menghapus?&hellip;</p>
                      <form role="form" action="{{ route('hapuskegiatan', $kegiatan->idkegiatan) }}" method="post" id="hapus{{$kegiatan->idkegiatan}}">
                        {{csrf_field()}}
                        {{method_field('delete')}}
                        <!-- /.card-body -->
                      </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                      <button type="submit" class="btn btn-primary" form="hapus{{$kegiatan->idkegiatan}}">Yes</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              </td>
                </tr>
              @endforeach
            </tbody>
          </table><br>
          {{ $kegiatans -> links()}}
        </div>
      </div>
      <script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
@stop
