<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Poli</h1>
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
                <!-- Alert -->
                <?php if(session()->getFlashdata('simpan')){ ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('simpan'); ?>
                        
                    </div>
                    <?php } ?>
                <!-- Alert -->
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                            <form action="<?= base_url(); ?>/Poli/tpoliAksi" method="POST">
                            <div class="form-group">
                                <label>Nama Poli</label>
                                <input type="text" name="poli" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" cols="30" rows="10" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <Button type="submit" class="btn btn-success">simpan</Button>
                            <a href="<?= base_url(); ?>/poli/dpoli" class="btn btn-danger">Batal</a>
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