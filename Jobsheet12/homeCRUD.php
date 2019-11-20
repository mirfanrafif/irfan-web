<html>

<head>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <table>
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </tr>
    <?php
    include("cek_koneksi.php");

    $query = "SELECT * FROM mahasiswa";
    $res = mysqli_query($connect, $query);

    if (mysqli_num_rows($res) > 0) {
      while ($row = mysqli_fetch_array($res)) { ?>
        <tr>
          <td><?= $row["id"] ?></td>
          <td><?= $row["nama"] ?></td>
          <td><?= $row["alamat"] ?></td>
          <td><a href="editForm.php?id=<?= $row["id"] ?>">Edit</a>
            <a href="hapus.php?id=<?= $row["id"] ?>">Hapus</a></td>
        </tr>
    <?php  }
    } else {
      echo "0 result";
    }
    ?>
  </table>
</body>

</html>