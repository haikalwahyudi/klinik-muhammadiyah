<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Poli</h1>
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
                    <?php if (session()->getFlashdata('hapus')) { ?>
                        <div class="alert alert-success" id="notif">
                            <?= session()->getFlashdata('hapus'); ?>
                        </div>
                    <?php } elseif (session()->getFlashdata('ubah')) { ?>
                        <div class="alert alert-warning" id="notif">
                            <?= session()->getFlashdata('ubah'); ?>
                        </div>
                    <?php } ?>
                    <!-- Alert -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="<?= base_url(); ?>/Poli/tpoli" class="btn text-light" style="background-color:#16a085"><i class="fa fa-plus"></i> Tambah</a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="myTable" class="table table-striped text-center responsive nowrap table-hover" width="100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Poli</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data as $d) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $d->nm_poli ?></td>
                                            <td><?= $d->desk_poli ?></td>
                                            <td>
                                                <a href="<?= base_url(); ?>/Poli/upoli/<?= $d->id_poli; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                <a href="<?= base_url(); ?>/Poli/hpoli/<?= $d->id_poli ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini!!')"><i class="fa fa-trash"></i></a href="<?= base_url(); ?>/Poli/">
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
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