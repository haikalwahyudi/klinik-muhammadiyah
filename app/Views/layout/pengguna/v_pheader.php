 <!-- header section starts  -->

 <!-- Database -->
 <?php
    $db = \Config\Database::connect();

    $query = $db->query("SELECT * FROM poli, dokter WHERE poli.id_poli = dokter.id_poli ORDER by id_dokter DESC LIMIT 3");
    $fasilitas = $db->query("SELECT * FROM fasilitas")->getResult();
    $review = $db->query("SELECT * FROM user,review WHERE user.id_user = review.id_user")->getResult();
    $berita = $db->query("SELECT * FROM berita");

    $data = $query->getResult();
    $dberita = $berita->getResult();

    // dd($data);
    ?>
 <!-- End Database -->

 <header class="header">
     <img src="<?= base_url(); ?>/landingpage/image/LOGO WEB.png" width="200px" alt="" />

     <nav class="navbar">
         <?php if (session()->get('log_in') == true) { ?>
             <a href="<?php base_url(); ?>/Admin">Dashboard</a>
         <?php } ?>
         <!-- <div class="dropdown">
        <span>Profil</span>
        <div class="dropdown-content">
          <a href="#about">Sejarah</a>
          <a href="#about">Visi & Misi</a>
          <a href="#services">Fasilitas</a>
        </div>
      </div> -->
         <!-- <a href="#doctors">Jadwal Dokter</a> -->
         <?php if (session()->get('log_in') == true) { ?>
             <a href="<?= base_url(); ?>/Chat">Konsultasi</a>
         <?php } else { ?>
             <a href="<?= base_url(); ?>/login" onclick="return confirm('Anda harus login terlebih dahulu')">Konsultasi</a>
         <?php } ?>
         <!-- <a href="<?= base_url(); ?>/Daftar">No Antrian</a> -->
         <!-- <a href="#doctors">Konsultasi</a> -->
         <a href="<?= base_url() ?>/daftar/dpoli">Daftar</a>
         <!-- <div class="dropdown">
        <span>Layanan</span>
        <div class="dropdown-content">
          <a href="login.html">Konsultasi</a>
          <a href="#book">Pendaftaran</a>
          <a href="#">BPJS</a>
        </div>
      </div> -->
         <!-- <a href="#poli">Poli</a> -->
         <?php if (session()->get('level') == 'Pasien') { ?>
             <a href="<?= base_url(); ?>/Review">review</a>
         <?php } ?>

         <?php if (session()->get('log_in') == true) { ?>
             <span class="login"> <a href="<?= base_url(); ?>/login/logout"> Logout</a></span>
         <?php } else { ?>
             <span class="login"> <a href="<?= base_url(); ?>/login"> Login</a></span>
         <?php } ?>

     </nav>
     <div id="menu-btn" class="fas fa-bars"></div>
 </header>