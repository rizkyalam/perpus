<?php
session_start();
if(!isset($_SESSION["login-admin"])){
  header("Location: index.php");
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
     <link rel="stylesheet" href="../../fontawesome/css/all.min.css">
     <link rel="stylesheet" href="../../css/admin/anggota.css">

     <title>Input pengurus</title>
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
          <a class="dropdown-item" href="../profile.php">Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../../include/logout.php">Logout</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../kelola-anggota.php">Kelola anggota</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../kelola-pengurus.php">Kelola pengurus</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../kelola-buku.php">Kelola buku</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="../cari-.php">Cari</a>
    </li>
  </ul>
  </div>
</nav>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
      <li class="breadcrumb-item"><a href="../kelola-pengurus.php">Kelola pengurus</a></li>
      <li class="breadcrumb-item active" aria-current="page">Input pengurus</li>
    </ol>
  </nav>
  <div class="card">
    <div class="card-body">
      <form action="input-sukses.php" method="post">
      <h1><i class="fa fa-user"></i> Input pengurus</h1>
      <br>
      <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyfields"){
              echo '<p class="daftarerror">Isi semua fields !</p>';
            }
            elseif($_GET["error"] == "invalidmail"){
              echo '<p class="daftarerror">Invalid Email !</p>';
            }
            elseif($_GET["error"] == "invaliduid"){
              echo '<p class="daftarerror">Invalid username !</p>';
            }
            elseif($_GET["error"] == "invalidmailuid"){
              echo '<p class="daftarerror">Invalid Email dan username !</p>';
            }
            elseif($_GET["error"] == "passwordcheck"){
              echo '<p class="daftarerror">Password do not match !</p>';
            }
            elseif($_GET["error"] == "usertaken"){
              echo '<p class="daftarerror">Username sudah ada !</p>';
            }
      }
       ?>
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="uid" class="form-control" placeholder="Enter username" required>
      </div>
      <div class="form-group">
        <label>Email address</label>
        <input type="email" name="mail" class="form-control" placeholder="Enter email" required>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="pwd" class="form-control" placeholder="Enter Password" required>
      </div>
      <div class="form-group">
        <label>Ulangi password</label>
        <input type="password" name="pwd-repeat" class="form-control" placeholder="Ulangi Password" required>
      </div>
        <input type="hidden" name="peran" class="form-control" value="admin">
        <button type="submit" name="submit-input" class="btn btn-primary">Daftar</button>
        <button type="button" onclick="window.location.href = '../kelola-pengurus.php';" class="btn btn-danger">Kembali</button>
      </form>
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
