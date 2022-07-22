<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Antrian Barang</h1>
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
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                    <?php
                    foreach ($data as $d) {
                        // dd($data);
                    ?>
                        <div class="card card-success card-tabs">
                            <div class="card-body">
                                <table class="table table-sm table-striped responsive" width="100%">

                                    <tbody>
                                        <tr>
                                            <td width="25%">No Pendaftaran</td>
                                            <td width="50%">: <?= $d->id_pendaftaran ?></td>
                                            <td width="25%"><b>No Antrian :</b> <?= $d->no_antrian ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Pasien</td>
                                            <td>: <?= $d->nm_user ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Pendaftaran</td>
                                            <td>: <?= $d->tgl_pendaftaran ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Kunjungan</td>
                                            <td>: <?= $d->tgl_kunjungan ?></td>
                                        </tr>
                                        <tr>
                                            <td>Poli Tujuan</td>
                                            <td>: <?= $d->nm_poli ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kategori</td>
                                            <td>: <?= $d->kategori ?></td>
                                            <td>
                                                <!-- <a href="<?= base_url() ?>/Puskesmas" class="btn bg-success btn-sm">Landing Page</a> -->
                                                <a href="<?= base_url() ?>/antrian/cetak/<?= $d->id_pendaftaran ?>" class="btn btn-info btn-sm"><i class="fa fa-print"></i> Cetak</a>

                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card -->
                        </div>

                    <?php
                    }
                    ?>
                    <!-- <div class="card card-success card-tabs">
                    <div class="card-body">
                        <div class="card-foote">
                            <a href="<?= base_url() ?>/Puskesmas" class="btn bg-teal float-right">Landing Page</a>
                        </div>
                    </div>
                     /.card -->
                </div>
            </div>
            <!-- <div class="col-md-4">
                <div class="card" style="background-color: #DAEAF1;">
                    <div class="card-body">
                        <img src="<?= base_url() ?>/template/dist/img/logo.png" width="100%" alt="logo">
                        <h3 class="text-center mt-2">Klinik Muhammadiya</h3>
                        <p class="text-center">Jln. Bunghata no 33</p>
                        <hr>
                        <h5 class="text-center">No Antrian</h5>
                        <h1 class="text-center">2</h1>
                        <hr>
                        <h5 class="text-center">Tanggal Kunjungan</h5>
                        <p class="text-center">20-01-1999</p>
                        <p class="text-center">Poli Umum</p>
                    </div>
                </div>
            </div> -->
            <!-- /.content-header -->
        </div><!-- /.container-fluid -->
    </section>
</div>
<?= $this->endSection("layout/v_template"); ?>