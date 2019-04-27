<?php 
include "header.html";
include "./connect/controller.php";
?>
    <!-- Untuk mencari kata -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container container-fluid">
            <form method="post" role="search">
                <div class="input-group input-group-lg">
                    <input type="text" name="nt" class="form-control" placeholder="Masukan Kata" autofocus>
                    <div class="input-group-append">
                        <button class="btn btn-cari" name="submit" type="submit" value="cari">Cari Kata</button>
                    </div>
                </div>
            </form>
        </div>
        <br>
        <!-- Mengubah jenis translate -->
        <div class="container">
        <p class="row justify-content-md-center" style="color: white;"><b><em>- pilih penerjemah -</em></b></p>
            <div class="row justify-content-md-center">
                <div class="col-md-5" style="margin-bottom:10px;">
                    <a href="index.php" class="btn btn-cari btn-lg btn-block" role="button" aria-pressed="true">Indonesia - Lampung</a>                    
                </div>
                <div class="col-md-5">
                    <a href="index2.php" class="btn btn-danger btn-lg btn-block" role="button" aria-pressed="true">Lampung - Indonesia</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Untuk menampilkan kata pencarian -->
    <?php
    if (ISSET($_POST['submit'])){
        $cari = $_POST['nt'];
        $query = "SELECT * FROM kata WHERE kata_lampung_o LIKE '%$cari%' OR kata_lampung_a LIKE '%$cari%'";

        $sql = mysqli_query($mysqli, $query);

        if(empty($cari)){ ?>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    Harap masukan kata yang anda cari
                </div>
            </div>
        </div>
        <?php die(); } ?>
    <div class="container-fluid">
    <h5>Pencarian untuk kata <b><?php echo $cari ?></b></h5>
    <?php while ($hasil = mysqli_fetch_array($sql)) { ?>
    <hr>
        <div class="card btn-cari">
            <div class="card-body">
                Artinya = 
                <b><?php echo $hasil['kata_indonesia']?></b>
            </div>
        </div>
        <br>
        <?php } }
    else{ ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                Anda belum mencari kata
            </div>
        </div>
        <br>
    </div>
    <?php } ?>
    </div>
<?php include "footer.html"; ?>