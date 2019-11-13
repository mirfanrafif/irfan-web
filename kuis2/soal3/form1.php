<html>

<head>
  <title>Login</title>
  <style>
    td {
      padding: 0px;
    }
  </style>
</head>

<body>
  <h1>Login</h1>
  <form action="form2.php" method="post">
    <table style="width: 1200px; margin: auto;">
      <tbody>
        <tr>
          <td style="background-color:blue; text-align:right; display:block; height:100%; color:white;">
            Email <br>
            Password <br><br><br>
          </td>
          <td>
            <input type="email" name="email" id="email"> <br>
            <input type="password" name="password" id="password"><br>
            <input type="checkbox" name="save_password" id="save_password">Save my Email And Password <br>
            <input type="submit" value="Continue" name="submit">
            <input type="reset" value="reset">
            <?php
            if (isset($_GET["error"])) {
              if ($_GET["error"]  == "1") {
                echo "<p style='color:red;'>Data Tidak Valid</p>";
              }
            }
            ?>
          </td>
        </tr>
      </tbody>
    </table>
  </form>

</body>

</html>