<?php
session_start();
require '../../include/koneksi.php';
mysqli_query($connect,"DELETE from buku WHERE id='$_GET[id]'");
header("location: ../kelola-buku.php");
exit();
 ?>
