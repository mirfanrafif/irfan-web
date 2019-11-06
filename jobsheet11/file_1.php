<html>
  <head></head>
  <body>
    <?php 
    $myFile = "textFile.txt";
    $fh = fopen($myFile, 'r');
    $theData = fgets($fh);
    fclose($fh);
    echo $theData;
    ?>
  </body>
</html>