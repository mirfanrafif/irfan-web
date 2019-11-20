<?php
include("cek_koneksi.php");
$id = $_GET["id"];
$sql = "SELECT * FROM mahasiswa where id=$id";

$res = mysqli_query($connect, $sql)->fetch_array();
?>

<html>

<head>
  <title>Tambah Data</title>
</head>

<body>
  <table>
    <form action="updateProses.php" method="get">
      <tr>
        <td>ID</td>
        <td><input type="text" name="id" value="<?= $res["id"] ?>" /></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?= $res["nama"] ?>" /></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" value="<?= $res["alamat"] ?>" /></td>
      </tr>
      <tr>
        <td><button type="submit">Submit</button></td>
      </tr>
    </form>
  </table>
</body>

</html>