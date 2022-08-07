<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dokter</h1>
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
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <?php foreach ($data as $d) {
                    //  $dt = $db->query("SELECT * FROM user WHERE id_user = '$d[id_user]'")->getRowArray();
                ?>

                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="card bg-light h-100">
                            <div class="card-header text-muted border-bottom-0">
                                Digital Strategist
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b><?= $d->nm_dokter; ?></b></h2>
                                        <p class="text-muted text-sm"><b>Spesialis: </b> <?= $d->nm_poli; ?> </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: <?= $d->alamat; ?></li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> No Hp : <?= $d->nohp; ?></li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="<?= base_url(); ?>/img/<?= $d->foto; ?>" alt="user-avatar" class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="<?= base_url(); ?>/Chat/chat/<?= $d->id_dokter; ?>" class="btn btn-sm bg-teal">
                                        <i class="fas fa-comment"></i> Live Chat
                                    </a>
                                    <!-- <a href="#" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> View Profile
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- /.card -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
</div>
<?= $this->endSection("layout/v_template"); ?>