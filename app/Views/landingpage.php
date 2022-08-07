<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KLINIK | PKU Muhammadiyah KLU</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <!-- custom css file link  -->
  <link rel="stylesheet" href="<?= base_url(); ?>/landingpage/css/style.css" />
</head>

<body>
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
        <a href="<?php base_url(); ?>/Chat">Dashboard</a>
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
      <?php if(session()->get('log_in') == true){ ?>
      <a href="<?= base_url() ?>/daftar/dpoli">Daftar</a>
      <?php }else{ ?>
        <a href="<?= base_url() ?>/login" onclick="return confirm('Anda harus login terlebih dahulu')">Daftar</a>
        <?php } ?>
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

  <!-- header section ends -->

  <!-- home section starts  -->

  <section class="home" id="home">
    <div class="image">
      <img src="<?= base_url(); ?>/landingpage/image/home-img.svg" alt="" />
    </div>

    <div class="content">
      <h3>stay safe, stay healthy</h3>
      <p>Kalo bukan kita siapa lagi, kalo bukan sekarang kapan lagi</p>
      <?php if (session()->get('log_in') == true) { ?>
        <a href="<?= base_url(); ?>/Chat" class="btn"> Konsultasi Sekarang <span class="fas fa-chevron-right"></span> </a>
      <?php } else { ?>
        <a href="<?= base_url(); ?>/Chat" onclick="return confirm('Anda harus login terlebih dahulu')" class="btn"> Konsultasi Sekarang <span class="fas fa-chevron-right"></span> </a>
      <?php } ?>
      <a href="<?= base_url() ?>/daftar/dpoli" class="btn"> Daftar <span class="fas fa-chevron-right"></span> </a>
    </div>
  </section>

  <!-- home section ends -->

  <!-- icons section starts  -->

  <h1 class="heading"><span>Fasili</span>tas</h1>
  <section class="icons-container" id="poli">
    <?php foreach ($fasilitas as $f) { ?>
      <div class="icons">
        <!-- <i class="fas fa-user-md"></i> -->
        <img src="<?= base_url(); ?>/img/<?= $f->gbr_fasilitas; ?>" width="100%" alt="Gambar">
        <h3><?= $f->jml_fasilitas; ?></h3>
        <p><?= $f->nm_fasilitas; ?></p>
      </div>
    <?php } ?>
  </section>

  <!-- icons section ends -->

  <!-- services section starts  -->

  <!-- <section class="services" id="services">
    <h1 class="heading">our <span>services</span></h1>

    <div class="box-container">
      <div class="box">
        <i class="fas fa-notes-medical"></i>
        <h3>free checkups</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        <a href="#" class="btn"> Selengkapnya <span class="fas fa-chevron-right"></span> </a>
      </div>

      <div class="box">
        <i class="fas fa-ambulance"></i>
        <h3>24/7 ambulance</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        <a href="#" class="btn"> Selengkapnya <span class="fas fa-chevron-right"></span> </a>
      </div>

      <div class="box">
        <i class="fas fa-user-md"></i>
        <h3>expert doctors</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        <a href="#" class="btn"> Selengkapnya <span class="fas fa-chevron-right"></span> </a>
      </div>

      <div class="box">
        <i class="fas fa-pills"></i>
        <h3>medicines</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        <a href="#" class="btn"> Selengkapnya <span class="fas fa-chevron-right"></span> </a>
      </div>

      <div class="box">
        <i class="fas fa-procedures"></i>
        <h3>bed facility</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        <a href="#" class="btn"> Selengkapnya <span class="fas fa-chevron-right"></span> </a>
      </div>

      <div class="box">
        <i class="fas fa-heartbeat"></i>
        <h3>total care</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        <a href="#" class="btn"> Selengkapnya <span class="fas fa-chevron-right"></span> </a>
      </div>
    </div>
  </section> -->

  <!-- services section ends -->

  <!-- about section starts  -->

  <section class="about" id="about">
    <h1 class="heading"><span>about</span> us</h1>

    <div class="row">
      <div class="image">
        <img src="<?= base_url(); ?>/landingpage/image/about-img.svg" alt="" />
      </div>

      <div class="content">
        <h3>we take care of your healthy life</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ducimus, quod ex cupiditate ullam in assumenda maiores et culpa odit tempora ipsam qui, quisquam quis facere iste fuga, minus nesciunt.</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates voluptatibus a nihil temporibus deserunt vel?</p>
        <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> -->
      </div>
    </div>
  </section>

  <!-- about section ends -->

  <!-- doctors section starts  -->

  <section class="doctors" id="doctors">
    <h1 class="heading">our <span>doctors</span></h1>

    <div class="box-container">

      <?php foreach ($data as $d) { ?>
        <div class="box">
          <img src="<?= base_url(); ?>/img/<?= $d->foto; ?>" alt="Foto" />
          <h3><?= $d->nm_dokter; ?></h3>
          <span><?= $d->nm_poli ?></span>
          <!-- <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-whatsapp"></a>
          </div> -->
        </div>
      <?php } ?>
    </div>

    <center><a href="<?= base_url(); ?>/Admin/dokter" class="btn"> Lihat Selengkapnya <span class="fas fa-chevron-right"></span> </a></center>
  </section>

  <!-- doctors section ends -->

  <!-- booking section starts   -->

  <!-- <section class="book" id="book">
    <h1 class="heading"><span>book</span> now</h1>

    <div class="row">
      <div class="image">
        <img src="<?= base_url(); ?>/landingpage/image/book-img.svg" alt="" />
      </div>

      <form action="">
        <h3>book appointment</h3>
        <input type="text" placeholder="your name" class="box" />
        <input type="number" placeholder="your number" class="box" />
        <input type="email" placeholder="your email" class="box" />
        <input type="date" class="box" />
        <input type="submit" value="book now" class="btn" />
      </form>
    </div>
  </section> -->

  <!-- booking section ends -->

  <!-- review section starts  -->

  <section class="review" id="review">
    <h1 class="heading">client's <span>review</span></h1>

    <div class="box-container">

      <?php foreach ($review as $rev) { ?>
        <div class="box">
          <img src="<?= base_url(); ?>/img/<?= $rev->foto ?>" alt="gambar" />
          <h3><?= $rev->nm_user ?></h3>

          <div class="stars">
            <?php if ($rev->rating == '1') { ?>
              <i class="fa fa-star" style="color:white"></i>
            <?php } elseif ($rev->rating == '2') { ?>
              <i class="fa fa-star" style="color:white"></i>
              <i class="fa fa-star" style="color:white"></i>
            <?php } elseif ($rev->rating == '3') { ?>
              <i class="fa fa-star" style="color:white"></i>
              <i class="fa fa-star" style="color:white"></i>
              <i class="fa fa-star" style="color:white"></i>
            <?php } elseif ($rev->rating == '4') { ?>
              <i class="fa fa-star" style="color:white"></i>
              <i class="fa fa-star" style="color:white"></i>
              <i class="fa fa-star" style="color:white"></i>
              <i class="fa fa-star" style="color:white"></i>
            <?php } else { ?>
              <i class="fa fa-star" style="color:white"></i>
              <i class="fa fa-star" style="color:white"></i>
              <i class="fa fa-star" style="color:white"></i>
              <i class="fa fa-star" style="color:white"></i>
              <i class="fa fa-star" style="color:white"></i>
            <?php } ?>
          </div>
          <p class="text">
            <?= $rev->isi_review ?>
          </p>
        </div>
      <?php } ?>

    </div>

    <center><a href="<?= base_url(); ?>/Admin/review" class="btn"> Lihat Selengkapnya <span class="fas fa-chevron-right"></span> </a></center>
  </section>

  <!-- review section ends -->

  <!-- blogs section starts  -->

  <section class="blogs" id="blogs">
    <h1 class="heading">our <span>blogs</span></h1>

    <div class="box-container">

      <?php
      foreach ($dberita as $brt) {
      ?>
        <div class="box">
          <div class="image">
            <img src="<?= base_url(); ?>/img/<?= $brt->gbr_berita; ?>" alt="" />
          </div>
          <div class="content">
            <div class="icon">
              <a href="#"> <i class="fas fa-calendar"></i> <?= $brt->tgl_berita ?> </a>
            </div>
            <h3><?= $brt->jdl_berita ?></h3>
            <p><?= (str_word_count($brt->isi_berita)) > 60 ? substr($brt->isi_berita, 0, 100) . "[...]" : $brt->isi_berita ?></p>
            <a href="<?= base_url() ?>/Admin/detail/<?= $brt->id_berita; ?>" class="btn"> Selengkapnya <span class="fas fa-chevron-right"></span> </a>
          </div>
        </div>

      <?php } ?>

    </div>

    <center><a href="<?= base_url(); ?>/Admin/blog" class="btn"> Lihat Selengkapnya <span class="fas fa-chevron-right"></span> </a></center>
  </section>

  <!-- blogs section ends -->

  <!-- footer section starts  -->

  <section class="footer">
    <div class="box-container">

      <div class="box">
        <a href="" class="brand-link ">
          <img src="<?= base_url() ?>/template/dist/img/logo.png" alt="logo" style="width: 220px;">
        </a>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus nulla neque at tenetur consectetur dolor qui nesciunt laborum sint necessitatibus distinctio reiciendis itaque accusantium nemo dolore quas, exercitationem amet quo!</p>
      </div>

      <div class="box">
        <h3>Menu</h3>
        <a href="<?= base_url() ?>/daftar/dpoli"> <i class="fas fa-home"></i> Daftar </a>
        <a href="<?= base_url(); ?>/Chat"> <i class="fas fa-chevron-right"></i> Konsultasi </a>
        <!-- <a href="#"> <i class="fas fa-chevron-right"></i> about </a>
        <a href="#"> <i class="fas fa-chevron-right"></i> doctors </a>
        <a href="#"> <i class="fas fa-chevron-right"></i> book </a> -->
        <a href="<?= base_url(); ?>/Review"> <i class="fas fa-chevron-right"></i> review </a>
        <!-- <a href="<?= base_url() ?>/Admin/detail/<?//= $brt->id_berita; ?>"> <i class="fas fa-chevron-right"></i> Berita </a> -->
      </div>
      <div class="box">
        <h3>Kontak Kami</h3>
        <!-- <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a> -->
        <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
        <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
        <!-- <a href="#"> <i class="fas fa-envelope"></i> anasbhai@gmail.com </a> -->
        <a href="#"> <i class="fas fa-map-marker-alt"></i> jl. Raya Selelos KM.21 Dusun Sembaro Kec. Gangga Lombok Utara</a>
      </div>

      <div class="box">
        <h3>Ikuti Kami</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fab fa-youtube"></i> youtube</a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        <!-- <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a> -->
      </div>
    </div>

    <div class="credit">created by <span>Bale Studio</span> | all rights reserved</div>
  </section>

  <!-- footer section ends -->

  <!-- custom js file link  -->
  <script src="<?= base_url(); ?>/landingpage/js/script.js"></script>
</body>

</html>