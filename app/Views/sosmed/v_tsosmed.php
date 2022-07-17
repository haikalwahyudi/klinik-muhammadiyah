<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Sosmed</h1>
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
                <div class="col-md-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= base_url(); ?>/Sosmed/tsosmedAksi" method="POST">
                                <div class="form-group">
                                    <label>Dokter</label>
                                    <select name="id_dokter" class="form-control">
                                        <?php
                                        foreach ($data as $d) {
                                        ?>
                                            <option value="<?= $d->id_dokter; ?>"><?= $d->nm_dokter; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Akun FB</label>
                                            <input type="text" name="fb" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Akun IG</label>
                                            <input type="text" name="ig" class="form-control" required>
                                        </div>
                                    </div>
                                </div><!-- row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Akun WA</label>
                                            <input type="text" name="wa" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Akun TW</label>
                                            <input type="text" name="tw" class="form-control" required>
                                        </div>
                                    </div>
                                </div><!-- row -->
                        </div>
                        <div class="card-footer">
                            <Button class="btn btn-success">simpan</Button>
                            <a href="<?= base_url(); ?>/Sosmed/dsosmed" class="btn btn-danger">Batal</a>
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