<html>
  <head>
    <title>Soal no. 2</title>
    <link rel="stylesheet" href="no2_style.css" />
    <link rel="stylesheet" href="jquery-ui/jquery-ui.css" />
    <script src="jquery/jquery-3.4.1.js"></script>
    <script src="jquery-ui/jquery-ui.js"></script>

    <?php 
      $barangArray = [
        ["1", "Celana", "Celana Kain", 2, 200000],
        ["2", "Kaos", "Kaos Oblong", 5, 75000],
        ["3", "Sandal", "Sandal Jepit", 3, 15000]
      ];

      $subTotal = 0;
      $diskon = 0;
      $grandTotal = 0;

      foreach ($barangArray as $barang) {
        $subTotal += $barang[3]*$barang[4];
      }

      if ($subTotal >= 640000) {
        $diskon = 35;
      }else if($subTotal >= 439000){
        $diskon = 21;
      }else if($subTotal >= 252000){
        $diskon = 11;
      }else{
        $diskon = 0;
      }

      $grandTotal = $subTotal - ($diskon / 100)*$subTotal;
    ?>
    
  </head>
  <body>
    <h1 style="text-align: center">Toko Indah</h1>

    <h2>List Barang</h2>
    <table style="width: 100%;" id="listBarang">
      <thead>
        <tr>
          <td>No.</td>
          <td>Jenis Barang</td>
          <td>Nama Barang</td>
          <td>Jumlah Beli</td>
          <td>Harga Barang</td>
          <td>Total</td>
        </tr>
      </thead>
      <tbody>
        <?php 
          foreach ($barangArray as $barang) {
            $value = $barang[3]*$barang[4];
            echo "<tr>
              <td>$barang[0]</td>
              <td>$barang[1]</td>
              <td>$barang[2]</td>
              <td>$barang[3]</td>
              <td>Rp. $barang[4]</td>
              <td>Rp. $value</td>
            </tr>";    
          }
        ?>
      </tbody>
    </table>
    <br /><br />
    <table class="totalan">
      <tbody>
        <tr>
          <td>Sub Total</td>
          <td id="subTotal">Rp. <?php echo "$subTotal" ?></td>
        </tr>
        <tr>
          <td>Diskon</td>
          <td id="diskon">Rp. <?php echo "$diskon" ?></td>
        </tr>
        <tr>
          <td>Grand Total</td>
          <td id="grandTotal">Rp. <?php echo "$grandTotal" ?></td>
        </tr>
      </tbody>
    </table>

    
    <br /><br />
    <form action="soal_no2_1.php" method="get">
      Bayar : <input type="text" name="bayar" placeholder="Bayar"><br><br>
      <input type="submit" value="submit" name="submit">
      <input type="button" value="batal" name="batal">
      <br><br><br>

    </form>

    <?php 
    if (isset($_GET["submit"])) {
      $bayar = $_GET["bayar"];

      if ($bayar > $grandTotal) {
        $kembalian = $bayar - $grandTotal;
        echo "Terimakasih. Kembalian anda $kembalian";
      }else if ($bayar == $grandTotal) {
        echo "Terimakasih.";
      }else{
        echo "Uang anda tidak cukup.";
      }
    }

    if (isset($_GET["add-row"])) {
      $no = $_GET["no"];
      $jenis = $_GET["jenis"];
      $nama = $_GET["nama"];
      $jumlah = $_GET["jumlah"];
      $harga = $_GET["harga"];
      

    }


    ?>
  </body>
</html>
