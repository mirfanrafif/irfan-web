<?php
if (
  empty($_POST["nama"]) || empty($_POST["tgllahir"]) || empty($_POST["tmplahir"]) || empty($_POST["alamat"]) ||
  empty($_POST["npm"]) || empty($_POST["tingkat"]) || empty($_POST["nohp"]) ||
  empty($_POST["email"])
) {
  // header("location: /kuis2/soal5.html");
}

$targetPath = "uploads/";
$targetPath = $targetPath . basename(
  $_FILES["pasfoto"]["name"]
);

if (move_uploaded_file($_FILES["pasfoto"]["tmp_name"], $targetPath)) {
  echo "The File " . basename($_FILES["pasfoto"]["name"]) . " has been uploaded";
} else {
  echo "Error Upload";
}
?>

<html>

<head>

</head>

<body>
  <p>Nama : <?= $_POST["nama"] ?></p>
  <p>TTL : <?= $_POST["tmplahir"] . " " . $_POST["tgllahir"] ?></p>
  <p>Alamat : <?= $_POST["alamat"] ?></p>
  <p>NPM : <?= $_POST["npm"] ?></p>
  <p>Tingkat : <?= $_POST["tingkat"] ?></p>
  <p>No. HP : <?= $_POST["nohp"] ?></p>
  <p>Email : <?= $_POST["email"] ?></p>
  <p>Pas Foto : <img src="uploads/<?= basename($_FILES["pasfoto"]["name"]) ?>" alt="" style="width:300px;"> </p>
</body>

</html>