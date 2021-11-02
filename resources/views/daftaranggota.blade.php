<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Saurav">
<link href="{{asset ('utama/form/css/bootstrap.min.css')}}" rel="stylesheet">
<title>Daftar ANggota</title>
</head>

<body class="bg-light">
 <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="{{asset ('utama/img/logo.png')}}" alt="" width="72" height="72">
    <h2>Pendaftaran Anggota Baru PKP</h2>
  </div>
 </div>
 @if (session('status'))
    <div class="alert alert-success container">
        {{ session('status') }}
    </div>
@endif
 <form role="form" action="{{route('daftaranggota.store')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<div class="container">
  <div class="row">
    <div class="col-md-12">
     <form>
     <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" required>
    </div>
     
    <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Jem@email.com" name="email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat Lengkap</label>
    <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required>
  </div>

  <div class="form-group">
    <label for="exampleInputKtp">No KTP</label>
    <input type="text" class="form-control" id="ktp" name="ktp" required>
    <small class="form-text text-muted">16 angka</small>
  </div>

   <div class="form-group">
    <label for="exampleInputTelp">No Telp</label>
    <input type="text" class="form-control" id="telp" name="telp" required>
  </div>

  <div class="form-group">
      <label>Jenis Kelamin </label>
      <div class="custom-control custom-radio">
        <input class="custom-control-input" type="radio" id="lakilaki" name="gender" value="Laki - laki" checked required>
        <label for="lakilaki" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio">
        <input class="custom-control-input" type="radio" id="perempuan" name="gender" value="perempuan" required>
        <label for="perempuan" class="custom-control-label">Perempuan</label>
      </div>
      <br>

<div class="form-group">
  <label >Upload KTP</label>
     <input type="file" class="form-control @error('gambar_ktp') is-invalid @enderror" name="gambar_ktp">
        </div>

   
<hr class="mb-4">
  <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
  </form>
    </div>
  </div>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Partai Keadilan dan Persatuan</p>
    <ul class="list-inline">
    </ul>
  </footer>
  </div>
</body>
</html>
