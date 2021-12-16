<?php
require "proses/session.php";
$select = mysqli_query($conn, "SELECT * FROM tb_mahasiswa");
$query = mysqli_fetch_array($select);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sistem Informasi Peminjaman Barang Jurusan TIK</title>
</head>

<body>
    <div class="container-fluid">
        <!-- Header -->
        <?php
        require "header.php"
        ?>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <!-- sidebar -->
                <?php
                require "sidebar.php"
                ?>
            </div>

            <div class="col">
                <div class="card em-1 mt-4">
                    <h5 class="card-body">
                        Mahasiswa
                    </h5>
                </div>
                <div class="card-body"></div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Id_user</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tanggal_Lahir</th>
                            <th scope="col">Tempat_lahir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($select as $sm) : ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $sm['NIM']; ?></td>
                                <td><?= $sm['id_user']; ?></td>
                                <td><?= $sm['nama']; ?></td>
                                <td><?= $sm['kelas']; ?></td>
                                <td><?= $sm['prodi']; ?></td>
                                <td><?= $sm['alamat']; ?></td>
                                <td><?= $sm['tgl_lahir']; ?></td>
                                <td><?= $sm['tempat_lahir']; ?></td>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- akhir isi tabel -->
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>