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
<div class="container">
  <div class="row">
    <div class="col-md-12">
     <form>
     <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" id="firstName" placeholder="Nama Lengkap" required>
    </div>
     
    <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Jem@email.com" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="text" class="form-control" id="address" placeholder="Alamat" required>
  </div>

  <div class="form-group">
    <label for="exampleInputKtp">No KTP</label>
    <input type="text" class="form-control" id="address" required>
    <small class="form-text text-muted">16 angka</small>
  </div>

   <div class="form-group">
    <label for="exampleInputTelp">No Telp</label>
    <input type="text" class="form-control" id="address" required>
  </div>

<div class="row">
          <div class="col-md-5 mb-3">
            <label for="gender">Jenis Kelamin</label>
            <select class="custom-select d-block w-100" id="gender" required>
              <option>Laki - Laki</option>
               <option>Perempuan</option>
            </select>
          </div>
        </div>

  <div class="row">
        <div class="custom-file" class="col-md-4 mb-3">
        <label for="gambarktp">Upload KTP</label>
        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
        <label class="custom-file-label" for="validatedCustomFile">Upload KTP</label>
        <div class="invalid-feedback">Example invalid custom file feedback</div>
       </div>
        </div>

   
<hr class="mb-4">
  <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
  </form>
    </div>
  </div>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2020-2021 Company Name</p>
    <ul class="list-inline">
    </ul>
  </footer>
  </div>
</body>
</html>
