<?php
$hostName  ="localhost";
$userName  ="root";
$passWord  ="";
$dataBase  ="perpus";
$connect =mysqli_connect($hostName,$userName,$passWord)or die("Koneksi Gagal");
mysqli_select_db($connect,$dataBase)or die('Database Tidak Ditemukan');
