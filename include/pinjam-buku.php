<?php
session_start();
if(!isset($_SESSION["login"])){
  header("Location: ../index.php");
  exit();
}
elseif(isset($_POST['gk'])){
  require 'koneksi.php';
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $jenis = $_POST['jenis'];
  $penerbit = $_POST['penerbit'];
  $ket = $_POST['ket'];
  $update = mysqli_query($connect, "UPDATE buku SET nama = '$nama', jenis = '$jenis', penerbit = '$penerbit', ket = '$ket' WHERE id = '$id'") or die ("Location: ../kelola-buku.php?ubah=error");
  header("Location: ../daftar-saya.php");
  exit();
}
elseif(isset($_POST['tersedia'])){
  require 'koneksi.php';
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $jenis = $_POST['jenis'];
  $penerbit = $_POST['penerbit'];
  $ket = $_POST['ket'];
  $update = mysqli_query($connect, "UPDATE buku SET nama = '$nama', jenis = '$jenis', penerbit = '$penerbit', ket = '$ket' WHERE id = '$id'") or die ("Location: ../kelola-buku.php?ubah=error");
  header("Location: ../buku-saya.php");
  exit();
}
else{
  header("Location: ../daftar-buku.php?error");
  exit();
}
 ?>
