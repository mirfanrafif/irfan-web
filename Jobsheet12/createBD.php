<?php
$namaHost = "localhost";
$username = "admin";
$password = "irfanRAFI";

$connect = mysqli_connect($namaHost, $username, $password);

if ($connect) {
  echo "Koneksi ddengan MySQL berhasil <br>";
} else {
  echo "Koneksi ddengan MySQL gaga;. " . mysqli_connect_error();
}

$sql = "CREATE DATABASE praktikumdb";
if (mysqli_query($connect, $sql)) {
  echo "Database Berhasil Dibuat";
}else{
  echo "Database gagal dibuat <br>" . mysqli_error($connect);
}

mysqli_close($connect);