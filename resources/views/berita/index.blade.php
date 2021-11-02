@extends('adminlte::page')

@section('title', 'berita/index')

@section('content_header')
   
<h1 style="text-align:center">Daftar Berita</h1>
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
        <a href="/tambahberita" class="btn btn-primary ">
            <i class="fas fa-plus-square"></i> Tambah
             </a> <br> 
             <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Judul Berita</th>
                <th>Isi Berita</th>
                <th>Gambar Berita</th> 
                <th>Interaksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($beritas as $berita)
                <tr>
                  <td>{{ $berita->judul_berita }}</td>
                  <td>{{ $berita->isi_berita }}</td>
                  <td><img src="{{ asset('storage/berita/'. $berita->gambar_berita) }}" height="50px"></td>
                  <td>  
              <a href="{{route('editberita', $berita->idberita)}}" class="btn btn-primary">Ubah</a>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$berita->idberita}}">Hapus</button>
              <div class="modal fade" id="delete{{$berita->idberita}}">
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
                      <form role="form" action="{{route('hapusberita', $berita->idberita)}}" method="post" id="hapus{{$berita->idberita}}">
                        {{csrf_field()}}
                        {{method_field('delete')}}
                        <!-- /.card-body -->
                      </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                      <button type="submit" class="btn btn-primary" form="hapus{{$berita->idberita}}">Yes</button>
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
          {{ $beritas -> links()}}
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
