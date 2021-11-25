<?php 
    if ($_GET['url'] = 'home') {
        require 'home.php';
    }
    elseif ($_GET['url'] = 'mahasiswa') {
        require 'peminjaman.php';
    }
    elseif ($_GET['url'] = 'dosen') {
        require 'dosen.php';
    }
    elseif ($_GET['url'] = 'mhs') {
        require 'mahasiswa.php';
    }
    elseif ($_GET['url'] = 'tdm') {
        require 'tambah_data_mahasiswa.php';
    }
    elseif ($_GET['url'] = 'barang') {
        require 'barang.php';
    }
?>