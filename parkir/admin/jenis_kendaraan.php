<?php
session_start();

if(!isset($_SESSION['login'])){
  header("location:../login.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../vendor/light-bootstrap/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../vendor/light-bootstrap/assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Aplikasi Parkir</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <?php require_once('home/css.php'); ?>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../vendor/light-bootstrap/assets/img/">
            <?php require_once('home/sidebar.php'); ?>
        </div>
        <div class="main-panel">

            <!-- Navbar -->
            <?php require_once('home/nav.php'); ?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    

                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">KENDARAAN</h4>
                            <hr>
                        </div>

                        <div class="card-body ">

                            <div class="container mt-5">

                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <a class="btn btn-primary tambahData" href="jenis_tambah.php">
                                            Tambah Jenis Kendaraan
                                        </a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Daftar Kendaraan</h3>
                                        <ul class="list-group">
                                            <?php
                                            include "../config/config.php";
                                            $data = mysqli_query($koneksi,"SELECT * FROM jenisKendaraan");
                                            
                                            ?>
                                            <?php while ($kendaraan = mysqli_fetch_assoc($data)): ?>
                                            <li class="list-group-item">
                                                <?= $kendaraan['jenis_kendaraan']; ?> | Rp.<?= rupiah($kendaraan['harga']); ?>
                                                <a class="badge badge-danger float-right ml-1" onclick="return confirm('Anda Yakin?');" href="../config/jenis/do_hapus.php?id=<?= $kendaraan['id_jenisKendaraan']; ?>">Hapus</a>
                                                <a class="badge badge-success float-right ml-1" href="jenis_edit.php?id=<?= $kendaraan['id_jenisKendaraan']; ?>">Edit</a>
                                            </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </div>
                                </div>
                                </div>

                                <!-- Modal -->
                                <?php include "home/modal.php"; ?>
                                <!-- End Modal -->
                            </div>

                        </div>
                    </div>
                            
                            
                </div>
            </div>

            <?php require_once('home/footer.php'); ?>
        </div>
    </div>

    <?php require_once('home/js.php'); ?>
</body>


</html>