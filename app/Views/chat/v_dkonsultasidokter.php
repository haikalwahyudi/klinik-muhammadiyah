<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Konsultasi Pasien</h1>
                </div><!-- /.col -->
                <!-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a class="text-dark" href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>/.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <?php
            if ($data != null) {
                $db = \Config\Database::connect();
                // $id = $data->id_user;
                // $dt = $db->query("SELECT * FROM user WHERE id_user = '$id'")->getResult();
                // dd($dt);
            ?>
                <div class="row">
                    <?php
                    foreach ($data as $d) {

                        $dt = $db->query("SELECT * FROM user WHERE id_user = '$d[id_user]'")->getRowArray();
                    ?>
                        <div class="col-md-3">
                            <div class="card card-success card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="<?= base_url(); ?>/img/<?= ($dt) ? $dt['foto'] : ""; ?>" alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center"><?= ($dt) ? $dt['nm_user'] : ""; ?></h3>

                                    <!-- <p class="text-muted text-center">Software Engineer</p> -->

                                    <a href="<?= base_url() ?>/Chat/chatDokter/<?= $d['id_user'] ?>" class="btn btn-success btn-block"><b>Buka</b></a>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <div class="row">
                    <div class="col-12">
                        <h2 class="alert alert-warning">Belum ada yang konsul</h2>
                    </div>
                </div>
            <?php } ?>
            <!-- row -->
        </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
</div>
<?= $this->endSection("layout/v_template"); ?>