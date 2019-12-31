<?php
session_start();
if(!isset($_SESSION["login-admin"])){
  header("Location: ../index.php");
  exit();
}
elseif(isset($_POST['submit-ubah'])){
  require '../../include/koneksi.php';
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $jenis = $_POST['jenis'];
  $penerbit = $_POST['penerbit'];
  $ket = $_POST['ket'];
  $update = mysqli_query($connect, "UPDATE buku SET nama = '$nama', jenis = '$jenis', penerbit = '$penerbit', ket = '$ket' WHERE id = '$id'") or die ("Location: ../kelola-buku.php?ubah=error");
  header("Location: ../kelola-buku.php?ubah=sukses");
  exit();
}
else{
  header("Location: ../kelola-buku.php");
  exit();
}
