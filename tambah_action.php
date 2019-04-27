<?php
include "./connect/controller.php";

if(ISSET($_POST['tambah'])){
    $kata_ind = $_POST['kata_ind'];
    $kata_lo = $_POST['kata_lo'];
    $kata_la = $_POST['kata_la'];

    if(empty($kata_lo) OR empty($kata_la) OR empty($kata_ind)){
        echo "<script>alert alert-success('Lengkapi form kata!')</script>";
        //echo "<meta http-equiv=Refresh content=0;url=./kata.php>";
    }else{
        $query = ("INSERT INTO kata (kata_indonesia, kata_lampung_o, kata_lampung_a) VALUES ('$kata_ind','$kata_lo','$kata_la')");
        $sql = mysqli_query($mysqli, $query);

        if($sql){
            echo "<script>alert alert-success('Kata berhasil di tambahkan!')</script>";
            echo "<meta http-equiv=Refresh content=0;url=./kata.php>";
        }
    }

}

?>