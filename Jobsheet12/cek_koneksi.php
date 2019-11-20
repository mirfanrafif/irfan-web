<?php
$namaHost = "localhost";
$username = "admin";
$password = "irfanRAFI";
$database = "praktikumdb";

$connect = mysqli_connect($namaHost, $username, $password, $database);

if ($connect) {
  echo "Koneksi ddengan MySQL berhasil";
} else {
  echo "Koneksi ddengan MySQL gaga;. " . mysqli_connect_error();
}
