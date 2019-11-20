<?php
$namaHost = "localhost";
$username = "admin";
$password = "irfanRAFI";
$database = "praktikumdb";

$connect = mysqli_connect($namaHost, $username, $password, $database);

if ($connect) {
  echo "Koneksi ddengan MySQL berhasil <br>";
} else {
  echo "Koneksi ddengan MySQL gaga;. " . mysqli_connect_error();
}

$sql = "CREATE TABLE mahasiswa
(
  id int primary key, 
  nama varchar(30) NOT NULL,
  alamat varchar(50) NOT NULL
)
";

if (mysqli_query($connect, $sql)) {
  echo "Tabel mahasiswa berhasil dibuat";
} else {
  echo "tabel mahsiswa gagal dibuat <br>" . mysqli_error($connect);
}

mysqli_close($connect);