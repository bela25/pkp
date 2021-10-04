@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
   
<h1>Anggotas</h1>
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
        <div class="box-body">
          <table id="laravel_datatable" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No. Telp</th>
                <th>No. KTP</th>
                <th>Gender</th>
                <th>Gambar KTP</th> 
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
                  <td>{{ $anggota->gambar_ktp }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
@stop
