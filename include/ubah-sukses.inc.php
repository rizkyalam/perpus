<?php
session_start();
if(!isset($_SESSION["login"])){
  header("Location: ../index.php");
  exit();
}
elseif(isset($_POST['ubah-user'])){
  require '../include/koneksi.php';
  $pengguna = htmlspecialchars($_POST["pemakai"]);
  $id = htmlspecialchars($_SESSION["idUser"]);
  $update = mysqli_query($connect, "UPDATE users SET uidUser = '$pengguna' WHERE id = '$id'") or die ("Location: ../profile.php?ubah=error");
  $_SESSION['ubah'] = true;
  header("Location: ../profile/ubah-sukses.php");
  exit();
}
else{
  header("Location: ../profile.php");
  exit();
}
