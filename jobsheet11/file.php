<html>
  <head></head>
  <body>
    <?php 
    $myFile = "textFile.txt";
    $fh = fopen($myFile, 'r');
    $theData = fread($fh, filesize($myFile));
    fclose($fh);
    echo $theData;
    ?>
  </body>
</html>