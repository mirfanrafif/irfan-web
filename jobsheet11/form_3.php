<html>
  <head>
    <style>
      .error{
        color: red;
      }
    </style>
  </head>
  <body>
    <?php 
    if (isset($_GET["error"])) {
      $error = $_GET["error"];
    }else{
      $error = "";
    }

    $pesan = "";
    if ($error == "variabel_belum_diset") {
      $pesan = "Anda harus mengakses halaman ini dari form_2.html";
    }else if ($error == "nama_kosong") {
      $pesan = "Nama Harus Diisi";
    }else if ($error == "email_kosong") {
      $pesan = "Email harus diisi";
    }else if ($error == "nama_invalid") {
      $pesan = "Nama diisi huruf dan spasi";
    }else if ($error == "email_invalid") {
      $pesan = "Email tidak sesuai";
    }

    if (isset($_GET["nama"]) AND isset($_GET["email"]) 
    AND isset($_GET["komentar"]) ) {
      $nama = $_GET["nama"];
      $email = $_GET["email"];
      $komentar = $_GET["komentar"];
    }else{
      $nama = "";
      $email = "";
      $komentar = "";
    }
    ?>

    <span class="Error"> <?php echo $pesan;?></span>

    <table>
      <form action="prosesForm_3.php" method="GET">
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama" value="<?php echo $nama?>"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="email" value="<?php echo $email?>"></td>
        </tr>
        <tr>
          <td>Komentar</td>
          <td><input type="text" name="komentar" value="<?php echo $komentar?>"></td>
        </tr>
        <tr>
          <td><input type="submit" name="kirim" value="kirim"></td>
        </tr>
      </form>
    </table>


  </body>
</html>