<?php
include_once("../../../config/koneksi.php");
session_start();

if (isset($_SESSION['login'])) {
    $_SESSION['login'] = true;
} else {
    echo "<meta http-equiv='refresh' content='0; url=../auth/loginDokter.php'>";
    die();
}

$nama = $_SESSION['username'];
$akses = $_SESSION['akses'];

if ($akses != 'dokter') {
    echo "<meta http-equiv='refresh' content='0; url=../..'>";
    die();
}
?>

<!-- Modal -->
<div class="modal fade" id="editModal" role="dialog">
    <div class="container">
        <form id="editForm" method="POST" action="">
            <input type="hidden" name="id" value="<?= $row['id']; ?>">
            <div class="form-group">
                <label for="nama">Nama Obat</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $row['nama']; ?>" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Dokter</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $row['alamat']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="no_hp">Telepon Dokter</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $row['no_hp']; ?>" required>
            </div>

            <input type="submit" name="submit" value="Update" class="btn btn-primary">
        </form>
    </div>
    <!-- </div> -->
</div>

