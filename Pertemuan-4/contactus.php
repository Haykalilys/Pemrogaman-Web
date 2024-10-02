<?php
  if(isset($_POST['submit'])) {
  $username = $_POST['UsernameOrEmail'];
  $password = $_POST['Password'];

  echo $username ." ". $password;
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="contact.css" />
  </head>
  <body>
    <!-- NAVBAR -->
    <?php include "layout/header.html" ?>
    <!-- NAVBAR SELESAI -->

    <!-- FORM  -->
    <div>
      <form action="confirmcontact.php" method="POST">
        <h1>Contact us</h1>

        <label>Username or Email:</label> <br>
        <input type="text" name="UsernameOrEmail" placeholder="Your username or email" />
        <br />
        <br />
        <label>Password:</label> <br>
        <input type="password" name="Password" placeholder="Your password" />
        <br />
        <br />
        <label>Hobby</label> <br />
        <input type="checkbox" name="Main Game" value="Laki-Laki" /> Main Game
        <br />
        <input type="checkbox" name="Olahraga" value="Perempuan" /> Olahraga
        <br />
        <br />
        <label>Jenis Kelamin:</label> <br />
        <input type="radio" name="Laki-Laki" value="remember" /> Laki-Laki
        <br />
        <input type="radio" name="Perempuan" value="remember" /> Perempuan
        <br />
        <br />
        <!-- <button type="submit" name="submit"> Submit </button>
        <button type="reset" name="clear">Clear</button> -->
        <input type="submit" name="submit"/>
        <input type="reset" name="clear"/>
      </form>
    </div>
    <!-- FORM END -->

    <!-- FOOTER -->
     <?php include "layout/footer.html" ?>
    <!-- FOOTER END -->
  </body>
</html>

