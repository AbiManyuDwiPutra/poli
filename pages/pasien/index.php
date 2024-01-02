<?php
include_once("../../config/koneksi.php");
session_start();

if (isset($_SESSION['login'])) {
    $_SESSION['logon'] = true;
} else {
    echo "<meta http-equiv='refresh' content='0; url=../auth/loginUser.php'>";
    die();
}

$nama = $_SESSION['username'];
$akses = $_SESSION['akses'];

if ($akses != 'pasien') {
    echo "<meta http-equiv='refresh' content='0; url=../..'>";
    die();
}
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- TAMPILKAN NAVBAR -->
        <?= include("../../components/navbar.php"); ?>

        <!-- TAMPILKAN SIDEBAR -->
        <?= include("../../components/sidebar.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <form class="mb-3">
                <div class="form-group">
                    <label for="rekamMedis">Nomor Rekam Medis</label>
                    <input type="email" class="form-control" id="rekamMedis" value="name@example.com">
                </div>
                <div class="form-group">
                    <label for="poli">Pilih Poli</label>
                    <select class="form-control" id="poli">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jadwal">Pilih Jadwal</label>
                    <select class="form-control" id="jadwal">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="keluhan">Keluhan</label>
                    <textarea class="form-control" id="keluhan" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>