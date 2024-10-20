
<?php

include "service/database.php";

if (isset($_POST["register"])) {
    $username = $_POST["nama"];
    $password = $_POST["pass"];

    $sql = "INSERT INTO users(username, password) 
    VALUES ('$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
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

    <!-- ISI -->
    <div class="row">
            <div class="col-3 mx-auto p-0">
                <!-- FORM -->
                <form action="simpandata.php" method="POST" >

                    <!-- FORM NAMA -->
                    <div class="row mb-3">
                        <div class="col-1 px-0">
                            <label for="inputNama" class="form-label">Nama:</label>
                        </div>
                        <br>
                        <div class="col-20">
                            <input type="text" name="nama" class="form-control" id="inputNama">
                        </div>
                    </div>
                    <!-- END FORM NAMA -->

                    <!-- FORM PASSWORD -->
                    <div class="row mb-3">
                        <div class="col-1 px-0">
                            <label for="inputUrl" class="form-label">Password:</label>
                        </div>
                        <div class="col-20">
                            <input type="password" name="pass" class="form-control" id="inputPass">
                        </div>
                    </div>
                    <!-- END FORM PASSWORD -->

                    <!-- FORM HOBI -->
                    <div class="row mb-3">
                        <div class="col p-0">
                            <label class="mb-2">Hobi:</label><br>
                            <input type="checkbox" id="sepak_bola" name="hobi" value="Sepak bola">
                            <label for="sepak_bola">Sepak Bola</label><br>
                            <input type="checkbox" id="badminton" name="hobi" value="Badminton">
                            <label for="badminton">Badminton</label><br>
                            <input type="checkbox" id="main_game" name="hobi" value="Main game">
                            <label for="main_game">Menggaming</label><br>
                        </div>
                    </div>
                    <!-- END FORM HOBI -->

                    <!-- FORM JENIS KELAMIN -->
                    <div class="row mb-3">
                        <div class="col p-0">
                            <label class="mb-2">Jenis Kelamin:</label><br>
                            <input type="radio" id="laki_laki" name="gender" value="Laki-laki">
                            <label for="laki_laki">Laki-laki</label><br>
                            <input type="radio" id="perempuan" name="gender" value="perempuan">
                            <label for="perempuan">Perempuan</label>
                        </div>
                    </div>
                    <!-- END FORM JENIS KELAMIN -->

                    <!-- BUTTON -->
                    <div class="row">
                        <!-- BUTTON SUBMIT -->
                        <div class="col-auto p-0 me-2">
                            <button type="submit" class="btn btn-primary ml-0" name="submit" >Submit</button>

                        </div>
                        <!-- END BUTTON SUBMIT -->

                        <!-- BUTTON RESET -->
                        <div class="col-auto p-0">
                            <button type="reset" class="btn btn-danger" name="reset">Reset</button>
                        </div>
                        <!-- END BUTTON RESET -->
                    </div>
                    <!-- END BUTTON -->
                </form>
                <!-- END FORM -->
            </div>
        </div>
        <!-- END ISI -->

    <!-- FOOTER -->
     <?php include "layout/footer.html" ?>
    <!-- FOOTER END -->
  </body>
</html>

