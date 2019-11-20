<?php
include("cek_koneksi.php");

$id = $_GET["id"];
$nama = $_GET["nama"];
$alamat = $_GET["alamat"];

$sql = "UPDATE mahasiswa SET nama='$nama', alamat='$alamat' where id=$id";

if (mysqli_query($connect, $sql)) {
  echo "Record berhasil ditambahkan"; ?>
  <a href="homeCRUD.php">Lihat Data Di Table</a>
<?php
} else {
  echo "Record gagal ditambahkan : " . mysqli_error($connect);
}
