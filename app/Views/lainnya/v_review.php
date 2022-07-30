<?= $this->extend('/layout/pengguna/v_ptemplate'); ?>
<?= $this->section('isi'); ?>

<br>
<br>
<br>
<br>
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

    <center><a href="<?= base_url(); ?>/Home" class="btn"> Kembali <span class="fas fa-chevron-right"></span> </a></center>
</section>

<?= $this->endSection(""); ?>