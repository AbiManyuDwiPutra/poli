<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poliklinik | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4 text-center">Sistem Temu Janji<br>Pasien - Dokter</h1>
            <p class="text-center">Bimbingan Karir 2023 Bidang Web</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <i class="fas fa-thin fa-user fa-4x" style="background-color: grey"></i>
                <h3>Login Sebagai Pasien</h3>
                <p>Apabila Anda adalah seorang Pasien, silahkan Login terlebih dahulu untuk melakukan pendaftaran
                    sebagai Pasien!</p>
                <p><a href="pages/auth/loginUser.php" class="btn btn-primary">Login</a></p>
            </div>
            <div class="col-md-6">
                <i class="fas fa-thin fa-user fa-4x" style="background-color: grey"></i>
                <h3>Login Sebagai Dokter</h3>
                <p>Apabila Anda adalah seorang Dokter, silahkan Login terlebih dahulu untuk memulai melayani Pasien!</p>
                <p><a href="pages/auth/loginDokter.php" class="btn btn-primary">Login</a></p>
            </div>
        </div>
    </div>

    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>