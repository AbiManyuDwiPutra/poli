<?php
include_once("../../config/koneksi.php");
session_start();

if (isset($_SESSION['login'])) {
    $_SESSION['login'] = true;
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



<?php
//menampilkan user berdasarkan id
$rm = mysqli_query($mysqli, "SELECT id, no_rm FROM pasien WHERE id = '$_SESSION[id]'");
$row = mysqli_fetch_assoc($rm);
?>

<?php
$poli = mysqli_query($mysqli, "SELECT * FROM poli order by id DESC ");

$jwlPrks = mysqli_query($mysqli, "SELECT * FROM jadwal_periksa order by id DESC");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poliklinik | Pasien</title>


    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- TAMPILKAN NAVBAR -->
        <?= include("../../components/navbar.php"); ?>

        <!-- TAMPILKAN SIDEBAR -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Poli</h3>
                    </div>
                    <div class="card-body">
                        <form class="mb-3" method="POST">
                            <!-- <input type="hidden" name="id" value="<?= $row['id']; ?>"> -->
                            <div class="form-group">
                                <label for="rekamMedis">Nomor Rekam Medis</label>
                                <input type="text" class="form-control" id="no_rm" name="no_rm"
                                    value="<?= $row['no_rm']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="poli">Pilih Poli</label>
                                <select class="form-control" id="nama_poli" name="nama_poli">
                                    <option disabled selected>Pilih Poli</option>
                                    <?php
                                    while ($data = mysqli_fetch_array($poli)) {
                                        ?>
                                        <option value="<?= $data['id'] ?>">
                                            <?php echo $data['nama_poli'] ?>
                                        </option>
                                        <?php
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no_rm">Pilih Jadwal</label>
                                <select class="form-control" id="jadwal" name="jadwal">

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="keluhan">Keluhan</label>
                                <textarea class="form-control" id="keluhan" name="keluhan" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Riwayat Daftar Poli</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Poli</th>
                                        <th>Dokter</th>
                                        <th>Hari</th>
                                        <th>Mulai</th>
                                        <th>Selesai</th>
                                        <th>Antrian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- TAMPILKAN DATA OBAT DI SINI -->
                                    <?php
                                    $no = 1;
                                    $query = "SELECT daftar_poli.id as idDaftarPoli, poli.nama_poli, dokter.nama, jadwal_periksa.hari, jadwal_periksa.jam_mulai, jadwal_periksa.jam_selesai, daftar_poli.no_antrian FROM daftar_poli 
                                    INNER JOIN jadwal_periksa ON daftar_poli.id_jadwal = jadwal_periksa.id INNER JOIN dokter ON jadwal_periksa.id_dokter = dokter.id INNER JOIN poli ON dokter.id_poli = poli.id WHERE daftar_poli.id_pasien = '$idPasien'";
                                    $result = mysqli_query($mysqli, $query);

                                    while ($data = mysqli_fetch_assoc($result)) {
                                        # code...  
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $no++ ?>
                                            </td>
                                            <td>
                                                <?php echo $data['nama_poli'] ?>
                                            </td>
                                            <td>
                                                <?php echo $data['nama'] ?>
                                            </td>
                                            <td>
                                                <?php echo $data['hari'] ?>
                                            </td>
                                            <td>
                                                <?php echo $data['jam_mulai'] ?>
                                            </td>
                                            <td>
                                                <?php echo $data['jam_selesai'] ?>
                                            </td>
                                            <td>
                                                <?php echo $data['no_antrian'] ?>
                                            </td>
                                            <td>
                                                <a href="detailDaftarPoli.php?id=<?php echo $data['idDaftarPoli'] ?>"
                                                    class='btn btn-sm btn-success edit-btn'>Detail</a>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">

    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../dist/js/adminlte.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#poli').on('change', function () {
                var poliId = $(this).val();

                // Mengambil data jadwal berdasarkan poli yang dipilih
                $.ajax({
                    type: 'POST',
                    url: 'getJadwal.php', // Ganti dengan path file get_jadwal.php sesuai dengan struktur proyek Anda
                    data: {
                        poliId: poliId
                    },
                    success: function (data) {
                        $('#jadwal').html(data);
                    }
                });
            });
        });
    </script>
</body>

</html>