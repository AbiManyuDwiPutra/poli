<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../assets/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../assets/AdminLTE/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box card">
        <h2 class="bg-primary  card-header ">Daftar Poli</h2>
        <div class="row mt-3">
            <div class="col-md-10 offset-md-1">
                <form class="mb-3">
                    <div class="form-group">
                        <label for="rekamMedis">Nomor Rekam Medis</label>
                        <input type="email" class="form-control" id="rekamMedis"
                            value="name@example.com">
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
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../../assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../assets/AdminLTE/dist/js/adminlte.min.js"></script>
</body>

</html>