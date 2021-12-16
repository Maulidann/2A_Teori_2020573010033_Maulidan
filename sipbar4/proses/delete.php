<?php
    require "koneksi.php";

    $sl = $_GET['kd_barang'];

    $query = "DELETE FROM tb_barang WHERE kd_barang = '$sl'";
    
    if($conn->query($query)) {
        header("location: ../barang");
    } else {
        echo "DATA GAGAL DIHAPUS!";
    }
?>