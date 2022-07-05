<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ubah Data Dokter</h1>
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
                            <form action="<?= base_url() ?>/Dokter/udokterAksi" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Nama Dokter</label>
                                    <input type="hidden" name="id" value="<?= $data->id_dokter; ?>">
                                    <input type="text" name="nm_dokter" class="form-control" value="<?= $data->nm_dokter; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Spesialis</label>
                                    <select name="id_poli" class="form-control">
                                        <?php foreach ($poli as $pli) { ?>
                                            <option value="<?= $pli->id_poli ?>" <?php if ($pli->id_poli == $data->id_poli) {
                                                                                        echo 'selected';
                                                                                    } ?>><?= $pli->nm_poli ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" value="<?= $data->tempat_lahir; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" value="<?= $data->tgl_lahir; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="<?= $data->email; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>No Hp</label>
                                    <input type="text" name="nohp" class="form-control" value="<?= $data->nohp; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio1" <?php if ($data->jk == "Laki-Laki") {
                                                                                                                echo 'checked';
                                                                                                            } ?> name="customRadio" value="Laki-Laki" checked>
                                        <label for="customRadio1" class="custom-control-label">Laki - Laki</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio2" <?php if ($data->jk == "Perempuan") {
                                                                                                                echo 'checked';
                                                                                                            } ?> name="customRadio" value="Perempuan">
                                        <label for="customRadio2" class="custom-control-label">Perempuan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jadwal</label>
                                    <select name="jadwal" class="form-control">
                                        <?php foreach ($jadwal as $jdwl) { ?>
                                            <option value="<?= $jdwl->id_jadwal ?>" <?php if ($jdwl->id_jadwal == $data->id_jadwal) {
                                                                                        echo 'selected';
                                                                                    } ?>><?= $jdwl->jam ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="hidden" name="old_foto" value="<?= $data->foto; ?>" class="form-control">
                                    <input type="file" name="foto" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" cols="30" rows="10" class="form-control"><?= $data->alamat; ?></textarea>
                                </div>
                        </div>
                        <div class="card-footer">
                            <Button class="btn btn-success">Simpan Perubahan</Button>
                            <a href="<?= base_url(); ?>/Dokter/ddokter" class="btn btn-danger">Batal</a>
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