@extends('adminlte::page')

@section('title', 'anggota/index')

@section('content_header')
   
<h1 style="text-align:center">Daftar Anggota</h1>
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

         <div class="">
            <th> <a href="/tambahanggota" class="btn btn-primary ">
            <i class="fas fa-plus-square"></i> Tambah
             </a></th>
             <th> <a href="/exportexcel" class="btn btn-info" >Export Excel</a></th>
             <th> <div id="example1_filter" class="dataTables_filter" style="text-align: right;">
               <form action="{{route ('anggota.index')}}" method="GET">
               Search Name:  
               <label><input type="search"  name="search" class="form-control form-control-sm" placeholder=""  aria-controls="example1">
              </label> 
              </form>
            </div></th>
          </div>
            
             <div class="card-body" >
              <table id="example1" class="table table-bordered table-hover" width="100%">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No. Telp</th>
                <th>No. KTP</th>
                <th>Gender</th>
                <th>Gambar KTP</th> 
                <th>Interaksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($anggotas as $anggota)
                <tr>
                  <td>{{ $anggota->nama }}</td>
                  <td>{{ $anggota->alamat }}</td>
                  <td>{{ $anggota->email }}</td>
                  <td>{{ $anggota->telp }}</td>
                  <td>{{ $anggota->ktp }}</td>
                  <td>{{ $anggota->gender }}</td>
                  <td> <a href="{{ asset('anggota/'. $anggota->gambar_ktp) }}" target="_blank">{{$anggota->gambar_ktp}}</a></td>
                  <td>  
              <a href="{{ route('editanggota', $anggota->idanggota) }}" class="btn btn-primary">Ubah</a>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$anggota->idanggota}}">Hapus</button>
              <div class="modal fade" id="delete{{$anggota->idanggota}}">
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
                      <form role="form" action="{{route('hapusanggota', $anggota->idanggota)}}" method="post" id="hapus{{$anggota->idanggota}}">
                        {{csrf_field()}}
                        {{method_field('delete')}}
                        <!-- /.card-body -->
                      </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                      <button type="submit" class="btn btn-primary" form="hapus{{$anggota->idanggota}}">Yes</button>
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
            {{ $anggotas -> links()}}
        </div>
      </div>
      <script>
  $(function () {
    $('#example1').DataTable({
      "lengthChange": true,
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
