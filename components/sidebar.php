<!-- <?php
include_once("../config/koneksi.php");
?> -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="../../dist/img/UdinusLogo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">Poliklinik BK</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <?php if ($_SESSION['akses'] == 'admin') ?>
        <li class="nav-item">
          <a href="<?= $base_admin ?>" class="nav-link">
            <i class="nav-icon fas fa-pills"></i>
            <p>
              Dashboard
              <span class="right badge badge-succes">Admin</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_admin . '/dokter' ?>" class="nav-link">
            <i class="nav-icon fas fa-pills"></i>
            <p>
              Dokter
              <span class="right badge badge-succes">Admin</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_admin . '/pasien' ?>" class="nav-link">
            <i class="nav-icon fas fa-user-md"></i>
            <p>
              Pasien
              <span class="right badge badge-succes">Admin</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_admin . '/poli' ?>" class="nav-link">
            <i class="nav-icon fas fa-hospital"></i>
            <p>
              Poli
              <span class="right badge badge-succes">Admin</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_admin . '/obat' ?>" class="nav-link">
            <i class="nav-icon fas fa-user-injured"></i>
            <p>
              Obat
              <span class="right badge badge-succes">Admin</span>
            </p>
          </a>
        </li>

        <!-- <li class="nav-item">
          <a href="<?= $base_pasien ?>" class="nav-link">
            <i class="nav-icon fas fa-user-injured"></i>
            <p>
              Dashboard
              <span class="right badge badge-succes">Pasien</span>
            </p>
            </p>
          </a>
        </li> -->
        <!-- <li class="nav-item">
          <a href="" class="nav-link">
            <i class="nav-icon fas fa-user-injured"></i>
            <p>
              Dashboard
              <span class="right badge badge-succes">Dokter</span>
            </p>
            </p>
          </a>
        </li> -->
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>