<?php
require "proses/session.php";
$select = mysqli_query($conn, "SELECT * FROM tb_barang");
$query = mysqli_fetch_array($select);

$sql = mysqli_query($conn, "SELECT * FROM tb_peminjaman pem
RIGHT JOIN tb_barang brg ON pem.barang=brg.kd_barang
LEFT JOIN tb_mahasiswa mhs ON pem.username=mhs.id_user
LEFT JOIN tb_matakuliah mk ON pem.matakuliah=mk.kd_matakuliah
LEFT JOIN tb_dosen dos ON mk.dosen = dos.NIP");
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

            <div class="col-9">
                <div class="card em-1 mt-4">
                    <h4 class="card-header"> <svg class="bi me-2" width="28" height="26">
                            <use xlink:href="#grid" />
                        </svg>
                        Data Barang
                    </h4>
                </div>
                <hr>
                <!-- Button Tambah barang -->
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleadd" class="btn btn-outline-dark">Pinjam Barang</button>
                <!-- Button list -->
                <button type="button" data-bs-toggle="modal" data-bs-target="#examplelist" class="btn btn-success">List Peminjaman</button>

                <!-- Akhir Button tambah barang -->
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">barang</th>
                            <th scope="col">user</th>
                            <th scope="col">status</th>
                            <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($select as $sl) : ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $sl['nama_barang']; ?></td>
                                <td><?= $sl['keterangan']; ?></td>
                                <td><?= $sl['gambar']; ?></td>
                                <td>

                                </td>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                        <!-- Akhir Tombol Delete -->
                    </tbody>
                </table>
                <!-- akhir isi tabel -->
            </div>
        </div>
    </div>

    <!-- Modal Tambah Barang -->

    <div class="modal fade" id="exampleadd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pinjam</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="proses/proses_tambah_barang.php" method="POST">
                        <div class="mb-1">
                            <label for="nama_barang" class="col-form-label">Nama Barang:</label>
                            <select name="barang" class="form-select" aria-label="Default select example">
                                <?php
                                $query = mysqli_query($conn, "SELECT * FROM tb_barang");
                                while ($hasil1 = mysqli_fetch_array($query)) {
                                    echo "<option value=''>" . $hasil1['kd_barang'] . "-" . $hasil1['nama_barang'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="nama_barang" class="col-form-label">Mata Kuliah:</label>
                            <select name="barang" class="form-select" aria-label="Default select example">

                                <?php
                                $query1 = mysqli_query($conn, "SELECT * FROM tb_matakuliah mk 
                            LEFT JOIN tb_dosen dos ON mk.dosen = dos.nip");
                                while ($hasil2 = mysqli_fetch_array($query1)) {
                                    echo "<option value=''>" . $hasil2['kd_matakuliah'] . "-" . $hasil2['nama_matakuliah'] . "</option>";
                                }

                                ?>
                            </select>
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal List Peminjaman -->
    <div class="modal fade" id="examplelist" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">List Peminjaman</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">barang</th>
                                <th scope="col">user</th>
                                <th scope="col">status</th>
                                <th scope="col">Waktu Peminjaman</th>
                                <th scope="col">Waktu Pengembalian</th>
                                <th scope="col">Mata Kuliah </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            while ($sl = mysqli_fetch_array($sql)) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><?= $sl['barang']; ?></td>
                                    <td><?= $sl['nama']; ?></td>
                                    <td>
                                        <?php
                                        $status = "";
                                        if ($sl['status'] == 1) {
                                            $status = 'Disetujui';
                                        } else if ($sl['status'] == 2) {
                                            $status = 'Pending';
                                        } else if ($sl['status'] == 3) {
                                            $status = 'Tidak Disetujui';
                                        }
                                        echo $status;
                                        ?>
                                    </td>
                                    <td><?= $sl['waktu_peminjaman']; ?></td>
                                    <td><?= $sl['waktu_pengembalian']; ?></td>
                                    <td><?= $sl['matakuliah']; ?></td>

                                </tr>
                            <?php $i++;
                            }
                            ?>
                            <!-- Akhir Tombol Delete -->
                        </tbody>
                    </table>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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