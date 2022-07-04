<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Data Jadwal</h1>
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
                        <form action="<?= base_url(); ?>/Jadwal/ujadwalAksi" method="POST">
                            <div class="form-group">
                                <label>Hari</label>
                                <input type="hidden" value="<?= $data->id_jadwal; ?>" name="id">
                                <select name="hari" class="form-control">
                                    <option value="">-Pilih-</option>
                                    <option value="Senin" <?php if($data->hari == "Senin"){echo 'selected';} ?>>Senin</option>
                                    <option value="Selasa" <?php if($data->hari == "Selasa"){echo 'selected';} ?>>Selasa</option>
                                    <option value="Rabu" <?php if($data->hari == "Rabu"){echo 'selected';} ?>>Rabu</option>
                                    <option value="Kamis" <?php if($data->hari == "Kamis"){echo 'selected';} ?>>Kamis</option>
                                    <option value="Jum'at" <?php if($data->hari == "Jum'at"){echo 'selected';} ?>>Jum'at</option>
                                    <option value="Sabtu" <?php if($data->hari == "Sabtu"){echo 'selected';} ?>>Sabtu</option>
                                    <option value="Minggu" <?php if($data->hari == "Minggu"){echo 'selected';} ?>>Minggu</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                <label>Dari jam</label>
                                <input type="time" name="jam1" class="form-control" value="<?= substr($data->jam, 0, 5) ?>" required>
                            </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                <label>Sampai jam</label>
                                <input type="time" name="jam2" class="form-control" value="<?= substr($data->jam, -5) ?>" required>
                            </div>
                                </div>
                            </div><!-- row -->
                        </div>
                        <div class="card-footer">
                            <Button class="btn btn-success">Simpan Perubahan</Button>
                            <a href="<?= base_url(); ?>/Jadwal/djadwal" class="btn btn-danger">Batal</a>
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