<?php
$email = $_POST["email"];
$password = $_POST["password"];

if (isset($_POST["submit"])) {
  if (empty($email) || empty($password) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("location: /kuis2/soal3/form1.php?error=1");
  }
}
?>

<html>

<head>
  <title>Form 2</title>
</head>

<body>
  <form action="/kuis2/soal3/res.php" method="post">
    <table>
      <tbody>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="name"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="email" name="email" value="<?= $_POST["email"] ?>"></td>
        </tr>
        <tr>
          <td>Alternate Email</td>
          <td><input type="email" name="altemail" value="<?= $_POST["email"] ?>"></td>
        </tr>
        <tr>
          <td>
            Phone Number
          </td>
          <td>
            Country Code ------------------------ City Code ------------------------ Phone Number<br>
            <input type="text" name="countrycode">
            <input type="text" name="citycode">
            <input type="text" name="phonenumber">
          </td>
        </tr>
        <tr>
          <td>Mobile Phone</td>
          <td><input type="text" name="mobilephone"></td>
        </tr>
        <tr>
          <td>Your Postal Address</td>
          <td><input type="textarea" name="address" style="width:30ch; height:10ch;"></td>
        </tr>
        <tr>
          <td>Country</td>
          <td>
            <select name="country">
              <option value="0">Select</option>
              <option value="Indonesia">Indonesia</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password" id="password" value="<?= $_POST["password"] ?>"></td>
        </tr>
        <tr>
          <td>Re-Type Password</td>
          <td><input type="password" name="passwordretype" id="password" value="<?= $_POST["password"] ?>"></td>
        </tr>
        <tr>
          <td><input type="submit" value="submit"></td>
          <td> <?php
                if (isset($_GET["error"])) {
                  if ($_GET["error"]  == "1") {
                    echo "<p style='color:red;'>Data Tidak Valid</p>";
                  }
                }
                ?></td>
        </tr>
      </tbody>
    </table>
  </form>
</body>

</html>