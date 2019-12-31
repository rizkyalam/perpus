<?php
session_start();
require '../include/koneksi.php';
mysqli_query($connect,"DELETE from users WHERE id='$_GET[id]' and peran = 'admin'");
header("location: ../admin/kelola-pengurus.php");
exit();
 ?>
