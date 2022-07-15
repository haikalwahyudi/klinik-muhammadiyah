<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link " style="background-color:#16a085">
    <img src="<?= base_url() ?>/template/dist/img/logo.png" alt="logo" style="width: 220px;">
  </a>

  <div class="user-panel pb-3 d-flex bg-white">
    <div class="image">
      <img src="<?= base_url() ?>/img/<?= session()->get('foto'); ?>" class="img-circle elevation-2 mt-2" alt="User Image" />
    </div>
    <div class="info mt-2 text-bold">
      <a href="#" class="d-block text-dark"><?= session()->get('nama') ?></a>
    </div>
  </div>
  <!-- Sidebar -->
  <div class="sidebar " style="background-color:#16a085">
    <!-- Sidebar user panel (optional) -->

    <!-- SidebarSearch Form -->
    <!-- / SidebarSearch Form -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <?php if (session()->get('level') == 'Admin') { ?>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/Admin/index" class="nav-link">
              <i class="nav-icon fa fa-home text-light"></i>
              <p class="text-light">
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-folder text-light"></i>
              <p class="text-light">
                Data Master
                <i class="fa fa-angle-left right"></i>
                <span class="badge badge-danger right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url(); ?>/Dokter/ddokter" class="nav-link">
                  <i class="fa fa-user-md text-light"></i>
                  <p class="text-light">Dokter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>/pasien/dpasien" class="nav-link">
                  <i class="fa fa-users text-light"></i>
                  <p class="text-light">Pasien</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header text-light">EXAMPLES</li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/Poli/dpoli" class="nav-link">
              <i class="nav-icon fa fa-stethoscope text-light"></i>
              <p class="text-light">
                Poli
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/Berita/dberita" class="nav-link">
              <i class="nav-icon fa fa-newspaper text-light"></i>
              <p class="text-light">
                Berita
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/Fasilitas/dfasilitas" class="nav-link">
              <i class="nav-icon fa fa-book text-light"></i>
              <p class="text-light">
                Fasilitas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/Jadwal/djadwal" class="nav-link">
              <i class="nav-icon far fa-calendar-alt text-light"></i>
              <p class="text-light">
                Jadwal Dokter
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/Sosmed/dsosmed" class="nav-link">
              <i class="nav-icon fa fa-book text-light"></i>
              <p class="text-light">
                Sosmed
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-file text-light"></i>
              <p class="text-light">
                Laporan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/User/duser" class="nav-link">
              <i class="nav-icon fa fa-users text-light"></i>
              <p class="text-light">User</p>
            </a>
          </li>
          <li class="nav-header text-light">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-sign-out-alt text-light"></i>
              <p class="text-light">Logout</p>
            </a>
          </li>
        <?php } elseif (session()->get('level') == 'Dokter') { ?>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/Fasilitas/dfasilitas" class="nav-link">
              <i class="nav-icon fa fa-book text-light"></i>
              <p class="text-light">
                Fasilitas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/Jadwal/djadwal" class="nav-link">
              <i class="nav-icon far fa-calendar-alt text-light"></i>
              <p class="text-light">
                Jadwal Dokter
              </p>
            </a>
          </li>
        <?php } elseif (session()->get('level') == 'Pimpinan') { ?>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/Admin/index" class="nav-link">
              <i class="nav-icon fa fa-home text-light"></i>
              <p class="text-light">
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-file text-light"></i>
              <p class="text-light">
                Laporan
              </p>
            </a>
          </li>
        <?php } elseif (session()->get('level') == 'Pasien') { ?>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/Chat" class="nav-link">
              <i class="nav-icon fa fa-home text-light"></i>
              <p class="text-light">
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/Home" class="nav-link">
              <i class="nav-icon fa fa-home text-light"></i>
              <p class="text-light">
                Landing Page
              </p>
            </a>
          </li>
        <?php } ?>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>