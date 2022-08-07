<!-- Navbar -->
<nav class="main-header navbar navbar-expand" style="background-color:#16a085">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars text-white"></i></a>
    </li>
    <?php if(session()->get('level') != "Dokter"){ ?>
    <li class="nav-item d-none d-sm-inline-block ">
      <a href="<?= base_url(); ?>/Home" class="nav-link text-white">Beranda</a>
    </li>
    <?php } ?>
    <!-- <li class="nav-item d-none d-sm-inline-block">
      <a href="<?= base_url(); ?>/login/logout" onclick="return confirm('Yakin Ingin Keluar?')" class="nav-link text-white">Logout</a>
    </li> -->
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?= base_url(); ?>/login/logout" onclick="return confirm('Yakin Ingin Keluar?')" class="nav-link text-white">Logout</a>
    </li>
  </ul>

  <!-- / Left navbar links -->

  <!-- Right navbar links -->

  <!-- / Right navbar links -->
</nav>
<!-- /.navbar -->