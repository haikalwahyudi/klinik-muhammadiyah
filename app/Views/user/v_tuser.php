<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data User</h1>
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
                            <form action="<?= base_url() ?>/User/tuserAksi" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Nama User</label>
                                    <input type="text" name="user" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>No Hp</label>
                                    <input type="number" name="nohp" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Level</label>
                                    <select name="level" class="form-control" required>
                                        <option value="Admin">Admin</option>
                                        <option value="Dokter">Dokter</option>
                                        <option value="Pimpinan">Pimpinan</option>
                                        <option value="Pasien">Pasien</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Poto</label>
                                    <input type="file" name="poto" class="form-control" required>
                                </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <Button class="btn btn-success">simpan</Button>
                        <a href="<?= base_url(); ?>/User/duser" class="btn btn-danger">Batal</a>
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