<?php

//include koneksi database
require "koneksi.php";

//get data dari form
$kd_barang = $_POST['kd_barang'];
$nama_barang = $_POST['nama_barang'];
$keterangan = $_POST['keterangan'];
$gambar = $_POST['gambar'];

//query insert data ke dalam database
$query = "UPDATE `tb_barang` SET `nama_barang` = '$nama_barang', `keterangan` = '$keterangan', `gambar` = '$gambar' WHERE `tb_barang`.`kd_barang` = $kd_barang";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($query)) {

    //redirect ke halaman index.php 
    header("location: ../barang");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>