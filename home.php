<?php
session_start();
if(!isset($_SESSION["login"])){
  header("Location: index.php");
  exit();
}
elseif(isset($_SESSION["login-admin"]) ){
  header("Location: admin/home.php");
  exit();
}
 ?>
 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="fontawesome/css/all.min.css">
     <link rel="stylesheet" href="css/home.css">

     <title>Home</title>
   </head>
   <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <a class="navbar-brand" href="home.php"><i class="fas fa-book"></i> Perpustakaan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php
          echo '<i class="fa fa-user fa-sm"></i>'.'  Hi,  '. $_SESSION['username'];
           ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="profile.php">Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="include/logout.php">Logout</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="daftar-buku.php">Daftar Buku</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="buku-saya.php">Buku saya</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="cari.php">Cari</a>
    </li>
  </ul>
  </div>
</nav>
<div class="container">
  <div class="card bg-light mb-3">
    <div class="card-header">
    <?php
    echo "<h4>Selamat datang ".$_SESSION['username'].", di Perpustakaan </h4>";
    ?>
    </div>
  </div>
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="fas fa-book-open"></i> Daftar Buku</h5>
        <p class="card-text">Daftar buku apa saja yang ada di dalam perpustakaan ini</p>
        <a href="daftar-buku.php" class="btn btn-primary">Lihat</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="fas fa-bookmark"></i> Buku saya</h5>
        <p class="card-text">Daftar buku yang saya pinjam</p>
        <a href="buku-saya.php" class="btn btn-primary">Lihat</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="fas fa-search"></i> Cari</h5>
        <p class="card-text">Cari buku, penerbit, jenis buku dan lain - lain</p>
        <a href="cari.php" class="btn btn-primary">Lihat</a>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Footer -->
<footer class="page-footer bg-dark">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019<a href="https://www.instagram.com/rizky_alams/"> Rizky Alam</a></div>
  <!-- Copyright -->

</footer>
     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   </body>
 </html>
