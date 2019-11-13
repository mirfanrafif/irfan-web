<?php
$data = array(
  array("Valentino Rossi", 5678, "16-02-1979", 2, 12500),
  array("Christiano Ronaldo", 1234, "05-02-1985", 1, 18000),
  array("Nico Erik Rosberg", 4567, "27-06-1985", 1, 11000),
  array("Rio Haryanto", 7890, "22-01-1993", 0, 2500),
  array("Kobe Bryant", 6789, "23-08-1978", 3, 13500),
  array("Maria Sharapova", 3456, "19-04-1986", 0, 5500),
  array("Ana Ivanovic", 2345, "12-03-1992", 0, 6500),
);
?>

<html>

<head>
  <title>Soal no. 1</title>
</head>

<body>
  <table style="width: 1200px; margin: auto;">
    <thead>
      <tr>
        <th>Nama</th>
        <th>NIP</th>
        <th>Tgl Lahir</th>
        <th>Jumlah Anak</th>
        <th>Gaji</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($data as $key) {
        ?>
        <tr>
          <td><?= $key[0] ?></td>
          <td><?= $key[1] ?></td>
          <td><?= $key[2] ?></td>
          <td><?= $key[3] ?></td>
          <td><?= $key[4] ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
  <br>
  <div>
    <p>Nama : <?= $data[4][0] ?></p>
    <p>NIP : <?= $data[4][1] ?></p>
    <p>Gaji : <?= $data[4][4] ?></p>
  </div><br>
  <div>
    <p>Nama : <?= $data[6][0] ?></p>
    <p>Tanggal Lahir : <?= $data[6][2] ?></p>
    <p>Jumlah Anak : <?= $data[6][3] ?></p>
  </div>
</body>

</html>