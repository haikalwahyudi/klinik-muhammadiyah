<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Dokter</h1>
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
                            <form action="<?= base_url() ?>/Berita/tberitaAksi" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Nama Dokter</label>
                                    <input type="text" name="nm_dokter" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Spesialis</label>
                                    <select name="id_poli" class="form-control">
                                        <option value="">-Pilih-</option>
                                        <option value="Gigi">Gigi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="nm_dokter" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>No Hp</label>
                                    <input type="text" name="nohp" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Dokter</label>
                                    <input type="radio" name="jk" class="form-control" required>Laki-Laki
                                    <input type="radio" name="jk" class="form-control" required>Laki-Laki
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