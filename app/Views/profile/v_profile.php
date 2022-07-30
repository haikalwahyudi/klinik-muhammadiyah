<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Profile</h1>
                </div>
                <!-- /.col -->
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-3">
                    <!-- Profile Image -->
                    <div class="card card-success card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img src="<?= base_url() ?>/img/<?= $data->foto; ?>" width="80%" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $data->nm_user ?></h3>

                            <p class="text-muted text-center"><?= $data->email; ?></p>

                            <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--col-->

                <div class="col-md-9">
                    <div class="card card-success card-outline">
                        <div class="card-body">
                            <form action="<?= base_url(); ?>/Admin/uprofile" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="hidden" name="id" value="<?= $data->id_user; ?>">
                                    <input type="text" name="nama" value="<?= $data->nm_user ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" value="<?= $data->email ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">No Hp</label>
                                    <input type="text" name="nohp" value="<?= $data->nohp ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="text" name="password" value="<?= $data->password ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="file" name="foto" class="form-control">
                                    <input type="hidden" name="old_foto" value="<?= $data->foto; ?>" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success">Perbaharui</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
    </section>
</div>
<?= $this->endSection("layout/v_template"); ?>