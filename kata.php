<?php 
include "header.html";
include "./connect/controller.php";
?>
<div class="container square" style="margin-top: 100px; padding: 30px;">
    <div class="row justify-content-md-center">
        <label for="tambah"><h4>Tambah Kata</h4></label>
    </div>
    <form action="./tambah_action.php" method="post">
        <div class="row">
            <label for="indonesia">Indonesia</label>
            <input type="text" class="form-control" name="kata_ind" placeholder="Indonesia" autofocus required>
        </div>
        <br>
        <div class="row">
            <label for="dialek_o">Dialek O</label>
            <input type="text" class="form-control" name="kata_lo" placeholder="Dialek O" required>
        </div>
        <br>
        <div class="row">
            <label for="dialek_a">Dialek A</label>
            <input type="text" class="form-control" name="kata_la" placeholder="Dialek A" required>
        </div>
        <br>
        <div class="row">
            <button type="submit" name="tambah" class="btn btn-cari btn-block"><i class="fas fa-plus"></i> <b>Tambah</b></button>
        </div>
    </form>
</div>
<?php include "footer.html"; ?>