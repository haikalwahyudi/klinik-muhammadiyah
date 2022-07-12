<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Fasilitas</h1>
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
                            <form action="<?= base_url(); ?>/Fasilitas/tfasilitasAksi" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Fasilitas</label>
                                    <input type="text" name="fasilitas" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" name="gambar" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah</label>
                                    <input type="text" name="jumlah" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" cols="30" rows="10" class="form-control" required></textarea>
                                </div>
                        </div>
                        <div class="card-footer">
                            <Button class="btn btn-success">simpan</Button>
                            <a href="<?= base_url(); ?>/Fasilitas/dfasilitas" class="btn btn-danger">Batal</a>
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