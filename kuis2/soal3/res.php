<?php
if (
  empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["altemail"]) ||
  empty($_POST["countrycode"]) || empty($_POST["citycode"]) || empty($_POST["phonenumber"]) ||
  empty($_POST["mobilephone"]) || empty($_POST["address"]) || empty($_POST["country"]) ||
  empty($_POST["password"]) || empty($_POST["passwordretype"])
) {
  header("location: /kuis2/soal3/form2.php?error=1");
}
?>

<html>

<head>
  <title>Hasil</title>
</head>

<body>
  Nama : <?= $_POST["name"] ?><br>
  Email : <?= $_POST["email"] ?><br>
  Kode Negara : <?= $_POST["countrycode"] ?><br>
  Kode Kota : <?= $_POST["citycode"] ?><br>
  No Telepon : <?= $_POST["phonenumber"] ?><br>
  No HP : <?= $_POST["mobilephone"] ?><br>
  Alamat : <?= $_POST["address"] ?><br>
  Negara : <?= $_POST["country"] ?> <br>
  Password : <?= password_hash($_POST["name"], PASSWORD_DEFAULT) ?> <br>
</body>

</html>