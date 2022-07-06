<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>
<!-- aa -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
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
                        <div class="card-header">
                            <h2 class="text-center text-bold"> Detail Pasien</h2>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <img class="img-fluid" src="<?= base_url() ?>/img/<?= $data->foto; ?>" alt="poto">
                                </div>
                                <div class="col-12 col-md-7">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <td>:</td>
                                                <td><?= $data->nm_pasien; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tempat Tanggal Lahir</th>
                                                <td>:</td>
                                                <td><?= $data->tempat_lahir; ?>, <?= $data->tgl_lahir; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>:</td>
                                                <td><?= $data->email; ?></td>
                                            </tr>
                                            <tr>
                                                <th>No. Handphone</th>
                                                <td>:</td>
                                                <td><?= $data->nohp; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Alamat</th>
                                                <td>:</td>
                                                <td><?= $data->alamat; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <h3 class="card-title">
                                        <a href="<?= base_url(); ?>/Pasien/dpasien" class="btn text-light" style="background-color:#16a085"><i class="fa fa-arrow-left"></i> Kembali</a>
                                    </h3>
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