<?= $this->extend('/layout/pengguna/v_ptemplate'); ?>
<?= $this->section('isi'); ?>

<br>
<br>
<br>
<br>
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
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3><?= $brt->jdl_berita; ?></h3>
                    <p><?= (str_word_count($brt->isi_berita)) > 60 ? substr($brt->isi_berita, 0, 100) . "[...]" : $brt->isi_berita ?></p>
                    <a href="<?= base_url() ?>/Admin/detail/<?= $brt->id_berita; ?>" class="btn"> Selengkapnya <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

        <?php } ?>

    </div>

    <center><a href="<?= base_url(); ?>/Home" class="btn"> Kembali <span class="fas fa-chevron-right"></span> </a></center>
</section>

<?= $this->endSection(""); ?>