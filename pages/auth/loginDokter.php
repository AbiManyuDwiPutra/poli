<?php
session_start();
include_once('../../config/koneksi.php');
if (isset($_SESSION['login'])) {
    echo '<meta http-equiv="refresh" content="0; url=../../">';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poliklinik| Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../.." class="h1"><b>Poli</b>klinik</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username | Case Sensitive" name="nama">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password | Case Sensitive"
                            name="alamat">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (isset($_SESSION["error"])): ?>
                        <p style="color: red; font-style: italic; margin-bottom: 1rem">
                            <?php echo $_SESSION["error"];
                            unset($_SESSION['error']); ?>
                        </p>
                    <?php endif ?>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../..//plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $username = stripcslashes($_POST['nama']);
    $password = $_POST['alamat'];

    if ($username == 'admin') {
        if ($password == 'admin') {
            $_SESSION['login'] = true;
            $_SESSION['id'] = null;
            $_SESSION['username'] = 'admin';
            $_SESSION['akses'] = 'admin';
            echo '<meta http-equiv="refresh" content="0; url=../admin/index.php">';
            die();
        }
    } else {
        $cek_username = mysqli_query($mysqli, "SELECT * FROM dokter WHERE nama = '$username';");
        try {
            if ($cek_username->num_rows == 1) {
                foreach ($cek_username as $row) {
                    if ($password == $row['alamat']) {
                        $_SESSION['login'] = true;
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['username'] = $row['nama'];
                        $_SESSION['akses'] = 'dokter';
                        echo "<meta http-equiv='refresh' content='0; url=../dokter'>";
                        die();
                    }

                }
            }

        } catch (Exception $e) {
            $_SESSION['error'] = $e->getMessage();
            echo '<meta http-equif="refresh" content="0; ">';
            die();
        }
    }

    $_SESSION["error"] = 'Username dan Password tidak cocok';
    echo "<meta http-equiv='refresh' content='0;'>";
    die();
}

?>