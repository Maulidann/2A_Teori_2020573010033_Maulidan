<?php 
    require "proses/session.php";
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
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Data Peminjaman</h5>
                        <p class="card-text">Peminjaman barang terdata pada Data Peminjaman</p>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col" style="background-color: cyan;">Jam peminjaman</div>
                        <div class="col" style="background-color: yellow;">Stop kontak</div>
                        <div class="col" style="background-color: yellow;">Kabel HDMI</div>
                        <div class="col" style="background-color: yellow;">Infocus</div>
                    </div>

                    <div class="row">
                        <div class="col" style="background-color: cyan;">08.00 - 09.00</div>
                        <div class="col" style="background-color: white;">TI 2A, TRKJ 1B</div>
                        <div class="col" style="background-color: white;">TI 2A, TRKJ 1B</div>
                        <div class="col" style="background-color: white;">TI 2A, TRKJ 1B</div>
                    </div>

                    <div class="row">
                        <div class="col" style="background-color: cyan;">09.30 - 10.30</div>
                        <div class="col" style="background-color: white;">TI 3B, TRKJ 3A</div>
                        <div class="col" style="background-color: white;">TI 3B, TRKJ 3A</div>
                        <div class="col" style="background-color: white;">TI 3B, TRKJ 3A</div>
                    </div>

                    <div class="row">
                        <div class="col" style="background-color: cyan;">11.00 - 12.00</div>
                        <div class="col" style="background-color: white;">TRKJ 2A</div>
                        <div class="col" style="background-color: white;">TRKJ 2A</div>
                        <div class="col" style="background-color: white;">TRKJ 2A</div>
                    </div>

                    <div class="row">
                        <div class="col" style="background-color: cyan;">13.00 - 14.00</div>
                        <div class="col" style="background-color: white;">TI 2B</div>
                        <div class="col" style="background-color: white;">TI 2B</div>
                        <div class="col" style="background-color: white;">TI 2B</div>
                    </div>

                    <div class="row">
                        <div class="col" style="background-color: cyan;">14.30 - 15.30</div>
                        <div class="col" style="background-color: white;">TRKJ 1A, TI 2C</div>
                        <div class="col" style="background-color: white;">TRKJ 1A, TI 2C</div>
                        <div class="col" style="background-color: white;">TRKJ 1A, TI 2C</div>
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