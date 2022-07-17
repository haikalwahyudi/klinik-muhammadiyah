<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Pasien</h1>
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
                            <form action="<?= base_url() ?>/pasien/tpasienAksi" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Nama Pasien</label>
                                    <input type="text" name="nm_pasien" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>No Hp</label>
                                    <input type="number" name="nohp" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio1" name="jk" value="Laki-Laki" checked>
                                        <label for="customRadio1" class="custom-control-label">Laki - Laki</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio2" name="jk" value="Perempuan">
                                        <label for="customRadio2" class="custom-control-label">Perempuan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Keluhan</label>
                                    <textarea name="keluhan" cols="5" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" name="foto" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" cols="5" rows="5" class="form-control"></textarea>
                                </div>
                        </div>
                        <div class="card-footer">
                            <Button class="btn btn-success">Simpan</Button>
                            <a href="<?= base_url(); ?>/Pasien/dpasien" class="btn btn-danger">Batal</a>
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