<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Laporan</h1>
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
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center text-bold">Filter</div>
                        <div class="card-body">
                            <form action="<?= base_url(); ?>/Laporan/filter" method="POST">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="">Tanggal Awal</label>
                                            <input type="date" name="tgl_awal" class="form-control form-control-sm" required>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="">Sampai Tanggal</label>
                                            <input type="date" name="tgl_akhir" class="form-control form-control-sm" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">&nbsp;</label>
                                        <button type="submit" class="btn btn-success btn-block btn-sm"><i class="fa fa-search"></i> Cari</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center text-bold">Filter Berdasarkan Poli</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Pilih Poli</label>
                                <select name="poli" class="form-control form-control-sm" onchange="document.location.href=this.options[this.selectedIndex].value;">
                                    <option value="">- Pilih Poli -</option>
                                    <?php foreach ($poli as $p) { ?>
                                        <option value="<?= base_url('/Laporan/caripoli/' . $p->id_poli) ?>"><?= $p->nm_poli; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header text-center">
                            <a href="<?= base_url(); ?>/Laporan/cetak/<?= $tgl['awal']; ?>/<?= $tgl['akhir'] ?>" class="btn btn-secondary btn-sm" target="_blank"><i class="fa fa-print"></i> Cetak</a>
                            <a href="<?= base_url(); ?>/Laporan" class="btn btn-secondary btn-sm"><i class="fa fa-history"></i> Reset</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="card-title">
                                <h5>Laporan Tanggal : </h5>
                                <p><?= $tgl['awal']; ?> - <?= $tgl['akhir'] ?></p>
                            </div>
                            <table id="example2" class="table table-striped text-center responsive nowrap table-hover" width="100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Pendaftar</th>
                                        <th>No Antrian</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No Hp</th>
                                        <th>Keluhan</th>
                                        <th>Tanggal Kunjunga</th>
                                        <th>Tanggal pendaftaran</th>
                                        <th>Poli Tujuan</th>
                                        <th>Kategori</th>
                                        <th>Pembayaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($filter) {
                                        $no = 1;
                                        // dd($filter);
                                        foreach ($filter as $f) {
                                    ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $f->nm_pendaftar; ?></td>
                                                <td><?= $f->no_antrian; ?></td>
                                                <td><?= $f->jk; ?></td>
                                                <td><?= $f->nohp; ?></td>
                                                <td><?= $f->keluhan; ?></td>
                                                <td><?= $f->tgl_kunjungan; ?></td>
                                                <td><?= $f->tgl_pendaftaran; ?></td>
                                                <td><?= $f->nm_poli; ?></td>
                                                <td><?= $f->kategori; ?></td>
                                                <td><?= $f->pembayaran; ?></td>
                                            </tr>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="11" class="text-red">Data yang anda cari pada tanggal <?= $tgl['awal']; ?> - <?= $tgl['akhir'] ?> tidak ditemukan</td>
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