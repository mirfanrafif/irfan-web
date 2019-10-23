<html>
  <head>
    <title>Soal no. 1</title>
  </head>
  <body>
    <h1>Golongan Usia</h1>
    <form action="soal_no1.php" method="POST">
      <input type="text" name="usia" placeholder="usia">
      <input type="submit" name="submit">
    </form>
    <?php 
    if (isset($_POST["submit"])) {
      $usia = $_POST["usia"];
      
      if ($usia <= 5) {
        echo "Usia anda tergolong Balita";
      }else if ($usia <= 15) {
        echo "Usia anda tergolong Kanak-Kanak";
      }else if ($usia <= 25) {
        echo "Usia anda tergolong Remaja";
      }else if ($usia <= 60) {
        echo "Usia anda tergolong Dewasa";
      }else if($usia > 60){
        echo "Usia anda tergolong Lansia";
      }else{
        echo "Error";
      }
  }
  ?>
  </body>
  

</html>