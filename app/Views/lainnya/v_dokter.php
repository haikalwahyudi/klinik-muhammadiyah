<?= $this->extend('/layout/pengguna/v_ptemplate'); ?>
<?= $this->section('isi'); ?>

<br>
<br>
<br>
<br>
<section class="doctors" id="doctors">
    <h1 class="heading">our <span>doctors</span></h1>

    <div class="box-container">

        <?php foreach ($data as $d) { ?>
            <div class="box">
                <img src="<?= base_url(); ?>/img/<?= $d->foto; ?>" alt="Foto" />
                <h3><?= $d->nm_dokter; ?></h3>
                <span><?= $d->nm_poli ?></span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-whatsapp"></a>
                </div>
            </div>
        <?php } ?>
    </div>

    <center><a href="<?= base_url(); ?>/Home" class="btn"> Kembali <span class="fas fa-chevron-right"></span> </a></center>
</section>

<?= $this->endSection(""); ?>