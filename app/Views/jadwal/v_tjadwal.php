<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Jadwal</h1>
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
                        <form action="<?= base_url(); ?>/Jadwal/tjadwalAksi" method="POST">
                            <div class="form-group">
                                <label>Hari</label>
                                <select name="hari" class="form-control">
                                    <option value="">-Pilih-</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                <label>Dari jam</label>
                                <input type="time" name="jam1" class="form-control" required>
                            </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                <label>Sampai jam</label>
                                <input type="time" name="jam2" class="form-control" required>
                            </div>
                                </div>
                            </div><!-- row -->
                        </div>
                        <div class="card-footer">
                            <Button class="btn btn-success">simpan</Button>
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