<?php
include("cek_koneksi.php");
$id = $_GET["id"];
$sql = "DELETE FROM mahasiswa where id=$id";
$res = mysqli_query($connect, $sql);

if ($res) {
  echo "Data berhasil dihapus"; ?>
  <a href="homeCRUD.php">Lihat Data Di Table</a>
<?php
} else {
  echo "Data gagal dihapus " . mysqli_error($connect);
}
?>