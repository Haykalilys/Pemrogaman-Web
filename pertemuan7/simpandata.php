<?php include "layout/header.html" ?>

<h1>Halaman konfirmasi contact</h1>

<?php
$username = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    include "service/database.php";
    if (isset($_POST["nama"])) {
        $username = $_POST["nama"];
    }
    if (isset($_POST["pass"])) {
        $password = $_POST["pass"];
    }
    $sql = "INSERT INTO users (username, password) 
        VALUES ('$username', '$password') ";

    if (mysqli_query(mysql: $conn, query: $sql)) {

?>
        <div class='container mt-3'>
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Success!</strong> Data berhasil masuk ke Database.
                <button type='button' class='btn-close shadow-none border-0' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
        </div>
        
        <?php
    } else {
        ?>
        <div class='container mt-3'>
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Failed!</strong> Data tidak berhasil masuk ke Database.
                <?php echo "Error: " . $sql . "<br>" . mysqli_error(mysql: $conn);?>
                <button type='button' class='btn-close shadow-none border-0' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>

    
<?php
    }
}

?>



<?php
for ($i = 0; $i <= 1; $i++) {
    echo '
            <!-- CARD BERITA -->
            <div class="row mb-4">
                <div class="col-auto col-gambar">
                    <img src="kapal.jpg">
                </div>
                <div class="col col-text">
                    <h3>Judul ' . ($i + 1) . '</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel velit suscipit, euismod mi non,
                        facilisis est. Fusce consequat scelerisque ipsum, sed luctus libero venenatis et. Praesent molestie,
                        sem
                        a lobortis volutpat, mauris lorem euismod risus, id condimentum nisi velit vitae neque. Nulla
                        ullamcorper ligula eget sagittis volutpat. In quam nulla, viverra at viverra tempus, pharetra quis
                        ex.
                        In hac habitasse platea dictumst. Proin lorem felis, consequat semper malesuada ac, euismod sit amet
                        arcu.</p>
                    <a href="detilberita1.html">Selengkapnya</a>
                </div>
                <hr class="my-4">
            </div>
            <!-- END CARD BERITA -->
            ';
}
?>