<?php
include "header.html";
include "./connect/controller.php";
$no = 1;
$kata = "SELECT * from kata ORDER BY kata_indonesia ASC";
$result = mysqli_query($mysqli, $kata);
?>
    <div class="container" style="margin-top: 60px;">
        <div class="row justify-content-md-center">
            <h3>Semua kata dalam <b><em>Indonesia - Lampung</em></b></h3>
        </div>
    </div>
    <div class="container-fluid">
        <hr>
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Indonesia</th>
                    <th scope="col">Lampung (dialek A)</th>
                    <th scope="col">Lampung (dialek O)</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($_kata = mysqli_fetch_array($result)) { ?>
                <tr>
                    <th scope="row"><?php echo $no++ ;?></th>
                    <td><?php echo $_kata['kata_indonesia'];?></td>
                    <td><?php echo $_kata['kata_lampung_o'];?></td>
                    <td><?php echo $_kata['kata_lampung_a'];?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php include "footer.html"; ?>