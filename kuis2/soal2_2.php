<?php
if (isset($_POST["submit"])) {
  $bentuk = $_POST["bentuk"];
  $panjang = $_POST["panjang"];
  $tinggi = $_POST["tinggi"];
  $jari2 = $_POST["radius"];

  if ($bentuk == "segitiga") {
    $bentuk = "Segitiga";
    $luas = $panjang * $tinggi / 2;
  } else if ($bentuk == "lingkaran") {
    $bentuk = "Lingkaran";
    $luas = 3.14 * $jari2 * $jari2;
  } else if ($bentuk == "persegi_panjang") {
    $bentuk = "Persegi Panjang";
    $luas = $panjang * $tinggi;
  }

  echo "Luas bangun " . $bentuk . " tersebut adalah " . $luas;
  echo "<br><a href='/kuis2/soal2.html'>Kembali</a>";
}
