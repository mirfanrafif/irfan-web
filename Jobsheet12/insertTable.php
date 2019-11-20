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

$sql = "INSERT INTO mahasiswa values
('0001', 'George', 'Malang'),
('0002', 'Charlotte', 'Malang'),
('0003', 'Louis', 'Surabaya')
";

if (mysqli_query($connect, $sql)) {
  echo "Record berhasil ditambahkan";
} else {
  echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
}

mysqli_close($connect);