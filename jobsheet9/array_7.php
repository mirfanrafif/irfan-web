<html>
  <head>
    <h2>Sorting Array</h2>
    <?php 
    $numbers = array(8,4,1,9,23,54,17,30);
    asort($numbers);

    $arrLength = count($numbers);
    for ($x=0; $x < $arrLength; $x++) { 
      echo $numbers[$x] . "<br>";
    }


    ?>
  </head>
</html>