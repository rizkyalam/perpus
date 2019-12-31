<?php
session_start();
if(!isset($_SESSION['login-admin'])){
  header("location:../../index.php");
  exit();
}
if(isset($_POST['submit-input'])){
require '../../include/koneksi.php';
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$penerbit = $_POST['penerbit'];
$ket = $_POST['ket'];
mysqli_query($connect,"insert into buku(nama,jenis,penerbit,ket) values('$nama','$jenis','$penerbit','$ket')");
header("location:../kelola-buku.php");
exit();
}
 ?>
