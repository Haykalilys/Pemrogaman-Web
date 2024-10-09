<?php include "service/database.php" ?>
<h1>Halaman konfirmasi contact</h1>
<?php
  if(isset($_POST['submit'])) {
  $username = $_POST['nama'];
  $passwords = $_POST['pass'];
  
  
  
  echo 'nama saya ' .$username; 
  echo '<br> password saya '.$passwords; 
} 

?> 

<?php
        for ($i=0; $i<=1; $i++) {
            echo '
            <!-- CARD BERITA -->
            <div class="row mb-4">
                <div class="col-auto col-gambar">
                    <img src="kapal.jpg">
                </div>
                <div class="col col-text">
                    <h3>Judul '.($i + 1).'</h3>
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