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
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>WEB Parkir Unipdu</title>
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
                            <h4 class="card-title">DASHBOARD</h4>
                            <hr>
                        </div>
                        <div class="card-body ">
                        <div class="container">
                             <center><h3 class="mt-4">KAMPUS UNIPDU JOMBANG</h3></center>
                              <center><p>Setiap Hari Pukul 07.00 Wib - 14.00 wib</p></center>
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