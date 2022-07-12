<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Berita</h1>
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
                    <?php if (session()->getFlashdata('simpan')) { ?>
                        <div class="alert alert-success alert-dismissible" id="notif">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Alert!</h5>
                            <?= session()->getFlashdata('simpan'); ?>
                        </div>
                    <?php } ?>
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= base_url() ?>/Berita/tberitaAksi" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Judul Berita</label>
                                    <input type="text" name="judul" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="date" value="<?= date("Y-m-d"); ?>" name="tanggal" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" name="gambar" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Isi</label>
                                    <textarea name="isi" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                        </div>
                        <div class="card-footer">
                            <Button class="btn btn-success">simpan</Button>
                            <a href="<?= base_url(); ?>/Berita/dberita" class="btn btn-danger">Batal</a>
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