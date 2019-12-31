<?php
session_start();
if(isset($_POST['login-submit'])){
require 'koneksi.php';

$mailuser = $_POST['mail'];
$pass = $_POST['pwdlogin'];

if(empty($mailuser) || empty($pass)){
  header("Location: ../index.php?error=emptyfields");
  exit();
}
else{
  $sql = "SELECT * FROM users where uidUser=? or email=?";
  $stmt = mysqli_stmt_init($connect);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    header("Location: ../index.php?error=sqlerror");
    exit();
  }
  else{
    mysqli_stmt_bind_param($stmt, "ss", $mailuser, $mailuser);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($result)){
      $pwdcek = password_verify($pass, $row['pwd']);
      if ($pwdcek == false) {
        header("Location: ../index.php?error=wrongpassword");
        exit();
      }
      elseif ($pwdcek == true) {
        $_SESSION['idUser'] = $row ['id'];
        $_SESSION['username'] = $row ['uidUser'];
        $_SESSION['alamat'] = $row ['email'];
        $_SESSION['pw'] = $row ['pwd'];
        $_SESSION['role'] = $row ['peran'];

        if($_SESSION['role'] == ($row ['peran'] = "pengguna")){
        $_SESSION["login"] = true;

        header("Location: ../home.php");
        exit();
      }
      else{
        $_SESSION["login-admin"] = true;

        header("Location: ../admin/home.php");
        exit();
      }
      }
      else{
        header("Location: ../index.php?error=wrongpassword");
        exit();
      }
    }
    else{
      header("Location: ../index.php?error=nouser");
      exit();
    }
  }
}
}

else{
  header("Location: ../index.php");
  exit();
}
