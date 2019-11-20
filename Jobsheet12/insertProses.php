<?php
include("cek_koneksi.php");

$id = $_GET["id"];
$nama = $_GET["nama"];
$alamat = $_GET["alamat"];

$sql = "INSERT INTO mahasiswa values('$id', '$nama', '$alamat')";

if (mysqli_query($connect, $sql)) {
  echo "Record berhasil ditambahkan";
} else {
  echo "Record gagal ditambahkan : " . mysqli_error($connect);
}
