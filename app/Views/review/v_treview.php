<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>
<style>
    @import "compass/css3";

    /* $rad: 8px; */

    .rating {
        background: #fff;
    }

    input[type="radio"] {
        position: fixed;
        top: 0;
        right: 100%;
    }

    /* label {
	font-size: 1.5em;
	padding: 0.5em;
	margin: 0;
	float: left;
	cursor: pointer;
	@include transition(0.2s);
} */

    input[type="radio"]:checked~input+label {
        background: none;
        color: #aaa;
    }

    input+label {
        background: #fff;
        color: orange;
        margin: 0 0 1em 0;
    }

    /* input+label:first-of-type {
        border-top-left-radius: $rad;
        border-bottom-left-radius: $rad;
    } */

    /* input:checked+label {
        border-top-right-radius: $rad;
        border-bottom-right-radius: $rad;
    } */

    /* hr {
	clear: both;
	border: 0;
	border-top: 2px solid #999;
	margin: 2em 0;
} */

    /* ----- DEMO STUFF ----- */
    /* body {
	padding: 5% 10%;
	line-height: 1.4;
	background: #888;
	color: #fff;
	font-family: sans-serif;
} */
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Review</h1>
                </div>
                <!-- /.col -->
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <?php

                foreach ($data as $d) { ?>
                    <div class="col-md-4">
                        <div class="card card-success card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="<?= base_url(); ?>/img/<?= $d->foto ?>" alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center"><?= $d->nm_user; ?></h3>

                                <p class="text-center">
                                    <?php if ($d->rating == '1') { ?>
                                        <i class="fa fa-star" style="color:goldenrod"></i>
                                    <?php } elseif ($d->rating == '2') { ?>
                                        <i class="fa fa-star" style="color:goldenrod"></i>
                                        <i class="fa fa-star" style="color:goldenrod"></i>
                                    <?php } elseif ($d->rating == '3') { ?>
                                        <i class="fa fa-star" style="color:goldenrod"></i>
                                        <i class="fa fa-star" style="color:goldenrod"></i>
                                        <i class="fa fa-star" style="color:goldenrod"></i>
                                    <?php } elseif ($d->rating == '4') { ?>
                                        <i class="fa fa-star" style="color:goldenrod"></i>
                                        <i class="fa fa-star" style="color:goldenrod"></i>
                                        <i class="fa fa-star" style="color:goldenrod"></i>
                                        <i class="fa fa-star" style="color:goldenrod"></i>
                                    <?php } else { ?>
                                        <i class="fa fa-star" style="color:goldenrod"></i>
                                        <i class="fa fa-star" style="color:goldenrod"></i>
                                        <i class="fa fa-star" style="color:goldenrod"></i>
                                        <i class="fa fa-star" style="color:goldenrod"></i>
                                        <i class="fa fa-star" style="color:goldenrod"></i>
                                    <?php } ?>
                                </p>

                                <p><?= $d->isi_review ?></p>

                                <!-- <p class="text-muted text-center">Software Engineer</p> -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Alert -->
                    <?php if (session()->getFlashdata('simpan')) { ?>
                        <div class="alert alert-success" id="notif">
                            <?= session()->getFlashdata('simpan'); ?>

                        </div>
                    <?php } ?>
                    <!-- Alert -->
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= base_url(); ?>/Review/treviewAksi" method="POST">
                                <div class="form-group">
                                    <label for="">Masukkan Rating</label><br>
                                    <div class="rating">
                                        <input type="radio" name="rating" id="one" checked value="1" />
                                        <label for="one"><i class="fa fa-star"></i></label>
                                        <input type="radio" name="rating" id="two" value="2" />
                                        <label for="two"><i class="fa fa-star"></i></label>
                                        <input type="radio" name="rating" id="three" value="3" />
                                        <label for="three"><i class="fa fa-star"></i></label>
                                        <input type="radio" name="rating" id="four" value="4" />
                                        <label for="four"><i class="fa fa-star"></i></label>
                                        <input type="radio" name="rating" id="five" value="5" />
                                        <label for="five"><i class="fa fa-star"></i></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Masukkan Review</label>
                                    <textarea name="isi" cols="10" rows="5" class="form-control" required></textarea>
                                </div>
                        </div>
                        <div class="card-footer">
                            <Button type="submit" class="btn btn-success">Kirim</Button>
                        </div>
                        </form>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- ./col -->
            </div>
            <!-- /.content-header -->
        </div><!-- /.container-fluid -->
    </section>
</div>
<?= $this->endSection("layout/v_template"); ?>