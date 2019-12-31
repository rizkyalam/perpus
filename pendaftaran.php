<?php
session_start();
if(isset($_SESSION["login"])){
  header("Location: home.php");
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
    <link rel="stylesheet" href="css/pendaftaran.css">

    <title>Daftar</title>
  </head>
  <body>
    <div class="container col-sm col-md col-lg">
      <form action="include/pendaftaran.inc.php" method="post">
        <h4>Pendaftaran</h4>
        <hr>
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
            <input type="hidden" name="peran" class="form-control" value="pengguna">
            <button type="submit" name="submit-daftar" class="btn btn-primary">Daftar</button>
            <button type="button" onclick="window.location.href = 'index.php';" class="btn btn-danger">Kembali</button>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
