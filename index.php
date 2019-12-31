<?php
session_start();
if(isset($_SESSION["login"]) ){
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
    <link rel="stylesheet" href="css/index.css">

    <title>Masuk</title>
  </head>
  <body>
    <h3>Selamat Datang di Perpustakaan</h3>
    <div class="container col-sm col-md col-lg">
      <form action="include/login.php" method="post">
        <h4>Login</h4>
        <hr>
        <?php
        if(isset($_GET['error'])){
          if($_GET['error'] == "emptyfields"){
            echo "Fields tidak boleh kosong !";
          }
          elseif ($_GET['error'] == "wrongpassword") {
            echo "Password Salah !";
          }
          elseif ($_GET['error'] == "nouser") {
            echo "Tidak ada user !";
          }
        }
         ?>
          <div class="form-group">
            <label>Email address</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-user"></i></div>
              </div>
            <input type="email" name="mail" class="form-control" placeholder="Enter email" required>
          </div>
          </div>
          <div class="form-group">
            <label>Password</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-unlock"></i></div>
              </div>
            <input type="password" name="pwdlogin" class="form-control" placeholder="Password" required>
          </div>
          </div>
            <button type="submit" name="login-submit" class="btn btn-primary">Masuk</button>
        </form>
        <label><a href="lupa-dibikin.php">Lupa password?</a></label>
    </div>
    <div class="daftar">
      <p>Belum punya akun ? <a href="pendaftaran.php">Daftar Disini</a></p>
      <br>
      <p>© 2019<a href="https://www.instagram.com/rizky_alams/"> Rizky Alam</a></p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
