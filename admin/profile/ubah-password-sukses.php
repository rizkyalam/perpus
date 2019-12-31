<?php
session_start();
if(!isset($_SESSION["login-admin"])){
  header("Location: ../profile.php");
  exit();
}
elseif(isset($_POST['ubah-pwd'])){
  require '../../include/koneksi.php';
  $id = $_SESSION["idUser"];
  $pwdlama = htmlspecialchars($_POST['pwd-lama']);
  $pwdbaru = htmlspecialchars($_POST['pwd-baru']);
  $pwdulang = htmlspecialchars($_POST['pwd-baru-ulang']);
  $pwdcek = password_verify($pwdlama, $_SESSION['pw']);

  if(empty($pwdlama) || empty($pwdbaru) || empty($pwdulang)){
    header("Location: ../profile/ubah-password.php?error=emptyfields");
    exit();
  }
  elseif($pwdbaru != $pwdulang){
    header("Location: ../profile/ubah-password.php?error=passwordtidaksama");
    exit();
  }
  elseif (!$pwdcek) {
    header("Location: ../profile/ubah-password.php?error=passwordsalah");
    exit();
  }
  else{
    $hash = password_hash($pwdbaru, PASSWORD_DEFAULT);
    $pw = mysqli_query($connect,"UPDATE users SET pwd = '$hash' WHERE id = '$id'") or die ("Location: ../profile.php?ubah=error");
    $_SESSION['ubah'] = true;
    header("Location: ../profile/ubah-sukses.php");
    exit();
  }
}
else{
  header("Location: ../profile.php");
  exit();
}
