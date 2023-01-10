<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Menu</title>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">OdetteCaffe</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/menu">Daftar Menu</a>
              </li>
            </ul>
          </div>
        </div>
     </nav>
    <!--isi-->
    <div class="container mt-3">
    <div class="card">
      <div class="card-header">
        <h5 class="float-start"> Daftar Menu</h5>
        <a href="/tambah_menu" class="btn btn-primary float-end">Tambah Menu</a>
      </div>
      <div class="container mt-3">
        <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Menu</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>

          </tr>
        </thead>
        <tbody>
        <tr>
          @foreach ($menu as $datamenu)
            <th>{{$loop->iteration}}</th>
            <td>{{$datamenu->menu}}</td>
            <td>{{$datamenu->harga}}</td>
            <td>
                  <a href="/edit_menu/{{$datamenu->id_menu }}" class="btn btn-warning">Edit</a>
                  <a href="/delete_menu/{{$datamenu->id_menu }}" class="btn btn-danger" 
                  onclick="return confirm('Anda Yakin ingin menghapus data menu ?')">Delete</a>
            </td>
        </tr>
        @endforeach
      </tbody>
  </table>
</div>
</div>
</div>
    
     <!--footer-->
  <nav class="navbar fixed-bottom navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">OdetteCaffe@2022</a>
    <a class="navbar-brand" href="#">&copyLina</a>
  </div>
  </nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>