<html>
  <head>

  </head>
  <body>
    <?php 
    $rawString = "Welcome Birmingham Parent.
    Your Replacement is a pleasure to have!";

    $maleStr = str_replace("Replacement", "son", $rawString);
    $femaleStr = str_replace("Replacement", "daughter", $rawString);

    echo "Son : " . $maleStr ."<br>";
    echo "Daughter : " . $femaleStr ."<br>";
    ?>
  </body>
</html>