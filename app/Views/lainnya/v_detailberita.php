<?= $this->extend('/layout/pengguna/v_ptemplate'); ?>
<?= $this->section('isi'); ?>

<br>
<br>
<br>
<br>

<section class="blogs" id="blogs">
    <h1 class="heading">our <span>blogs</span></h1>

    <div class="box-container">
        <div class="row">
            <div class="image">
                <img src="<?= base_url(); ?>/img/<?= $dberita->gbr_berita; ?>" width="100%" alt="gambar" />
            </div>
            <div class="content">
                <div class="icon">
                    <h2><i class="fas fa-calendar"></i> <?= $dberita->tgl_berita ?> </h2>
                    <h2><i class="fas fa-user"></i> by admin</h2>
                </div>
                <h3><?= $dberita->jdl_berita ?></h3>
                <p><?= $dberita->isi_berita ?></p>
                <!-- <a href="#" class="btn"> Selengkapnya <span class="fas fa-chevron-right"></span> </a> -->
            </div>
        </div>

    </div>

    <center><a href="<?= base_url(); ?>/Home" class="btn"> Kembali <span class="fas fa-chevron-right"></span> </a></center>
</section>

<?= $this->endSection(""); ?>