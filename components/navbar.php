<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
      </a>
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="logout" href="../auth/logout.php" role="button">
        <i class="fas fa-user"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="auth/logout.php" role="button">
        <i class="fas fa-th-large"></i>
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->
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
      <?php if ($_SESSION['akses'] == 'admin'): ?>
        <a href="#" class="d-block">Admin</a>
      <?php elseif ($_SESSION['akses'] == 'dokter'):?>
        <a href="#" class="d-block">Dokter</a>
      <?php else :?>
        <a href="#" class="d-block">Pasien</a>
      <?php endif;?>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <?php if ($_SESSION['akses'] == 'admin'): ?>
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
          <!-- Session login dokter -->
        <?php elseif ($_SESSION['akses'] == 'dokter'): ?>
          <li class="nav-item">
            <a href="<?= $base_dokter ?>" class="nav-link">
              <i class="nav-icon fas fa-user-injured"></i>
              <p>
                Dashboard
                <span class="right badge badge-succes">Dokter</span>
              </p>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $base_dokter . '/profil' ?>" class="nav-link">
              <i class="nav-icon fas fa-user-injured"></i>
              <p>
                Profil
                <span class="right badge badge-succes">Dokter</span>
              </p>
              </p>
            </a>
          </li>
        <?php else: ?>
          <li class="nav-item">
          <a href="<?= $base_pasien . '/poli'?>" class="nav-link">
            <i class="nav-icon fas fa-user-injured"></i>
            <p>
              poli
              <span class="right badge badge-succes">Pasien</span>
            </p>
            </p>
          </a>
        </li>
        <?php endif ?>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>