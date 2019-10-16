<html>
  <head>
    <title>
      Kalkulator
    </title>

    <style>
      body{
        font-family: sans-serif;
      }

      .container{
        margin: auto;
        padding: 50px;
        width: 300px;
        background-color: #5EDFFF;
        border-radius: 20px;
      }

      .input-text{
        background-color: white;
        border: none;
        width: 200px;
        height: 20px;
        border-radius: 20px;
      }
    </style>
    <?php
      //mengambil data
      
      
      $hasil = 0;

      if(isset($_GET["submit"])){
        $bil1 = $_GET["bil1"];
        $bil2 = $_GET["bil2"];
        $operator = $_GET["operator"];
        switch ($operator) {
          case 1:
            $hasil = $bil1 + $bil2;
            break;

          case 2:
            $hasil = $bil1 - $bil2;
            break;

          case 3:
            $hasil = $bil1 * $bil2;
            break;

          case 4:
            $hasil = $bil1 / $bil2;
            break;
            
          case 5:
            $hasil = $bil1 % $bil2;
            break;
          
          default:
            $hasil = "Tolong diisi ya :)";
            break;
        }
      }
    ?>
    
  </head>
  <body>
    <div class="container">
      <h2>Kalkulator</h2>
      <form action="kalkulator.php" method="get">
      <label for="#bil1" >Masukkan bilangan pertama</label>
      <input type="text" name="bil1" value="" id="bil1"class="input-text"><br><br>
      <label for="#bil1" >Masukkan bilangan kedua</label>
      <input type="text" name="bil2" value="" id="bil1"class="input-text"><br>
      <br>
      <input type="radio" name="operator" value="1">Tambah <br>
      <input type="radio" name="operator" value="2">Kurang <br>
      <input type="radio" name="operator" value="3">Kali <br>
      <input type="radio" name="operator" value="4">Bagi <br>
      <input type="radio" name="operator" value="5">Sisa <br>
      <br>
      <input type="submit" name="submit" value="submit">
      </form>
      
      <?php echo "Hasil perhitungan : " . $hasil ?>
    </div>
    

  </body>
</html>