<?php
session_start();
if(isset($_POST['submit-daftar'])){

require 'koneksi.php';

$username = $_POST['uid'];
$email = $_POST['mail'];
$pass = $_POST['pwd'];
$passRepeat = $_POST['pwd-repeat'];
$peran = $_POST['peran'];

if(empty($username) || empty($email) || empty($pass) || empty($passRepeat) ||empty($peran) ){
  header("Location: ../pendaftaran.php?emptyfields&uid=".$username."&mail=".$email);
  exit();
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  header("Location: ../pendaftaran.php?error=invalidmail&uid=".$username);
  exit();
}
elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
  header("Location: ../pendaftaran.php?error=invaliduid&mail=".$email);
  exit();
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/", $username)){
  header("Location: ../pendaftaran.php?error=invalidmailuid");
  exit();
}
elseif($pass !== $passRepeat){
  header("Location: ../pendaftaran.php?error=passwordcheck&uid=".$username."&mail=".$email);
  exit();
}
else {
  $sql = "SELECT uidUser FROM users WHERE uidUser=?";
  $stmt = mysqli_stmt_init($connect);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location: ../pendaftaran.php?error=sqlerror");
    exit();
  }
  else{
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultcheck = mysqli_stmt_num_rows($stmt);
    if($resultcheck > 0){
      header("Location: ../pendaftaran.php?error=usertaken");
      exit();
    }
    else{
      $sql = "INSERT INTO users (uidUser,email,pwd,peran) VALUES (?,?,?,?)";
        $stmt = mysqli_stmt_init($connect);
        if(!mysqli_stmt_prepare($stmt, $sql)){
          header("Location: ../pendaftaran.php?error=sqlerror");
          exit();
        }
        else {
          $hash = password_hash($pass, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $hash, $peran);
          mysqli_stmt_execute($stmt);
          $_SESSION['daftar'] = true;
          header("Location: ../daftar-sukses.php");
          exit();
        }
    }
  }
}
mysqli_stmt_close($stmt);
mysqli_close($connect);
}
elseif(isset($_POST['kembali'])){
  header("Location ../index.php");
  exit();
}
else{
  header("Location: ../pendaftaran.php");
  exit();
}
