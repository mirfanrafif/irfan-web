<html>
  <head>
    <title>Soal no. 2</title>
  </head>
  <body>
    <h1>RM Photocopy</h1>
    <form action="soal_no2.php" method="GET">
      <input type="text" name="lembar" placeholder="Jumlah Lembar">
      <br><br>
      <input type="radio" name="langganan" value="1" id="langganan-1">
      <label for="#langganan-1">Berlangganan</label>
      <input type="radio" name="langganan" value="2" id="langganan-2">
      <label for="#langganan-2">Tidak Berlangganan</label>
      <br><br>
      <input type="submit" value="submit" name="submit">
    </form>

    <?php
    // echo "oke";

    if (isset($_GET["submit"])) {
      // echo "oke";
      $lembar = $_GET["lembar"];
      $status = $_GET["langganan"];
      $harga = 0;
      $total = 0;

      if ($status == 1) {
        $harga = 190;
      }else if($status == 2){
        if ($lembar < 150) {
          $harga = 350;
        }else{
          $harga = 250;
        }
      }else{
        echo "Error";
      }

      // ECHO "oke";

      $total = $harga * $lembar;
      echo "<h2>Total Harga : $total</h2>";
    }
    ?>

  </body>
</html>