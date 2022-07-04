<?= $this->extend("layout/v_template"); ?>
<?= $this->section("isi"); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Dokter</h1>
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
                    <div class="card-header">
                        <h3 class="card-title">
                            <button class="btn text-light" style="background-color:#16a085"><i class="fa fa-plus"></i> Tambah</button>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="myTable" class="table table-striped text-center responsive nowrap table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Pasien</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Udin Sedunia</td>
                                    <td>Laki-laki</td>
                                    <td>
                                        <img src="<?= base_url() ?>/image/FB_IMG_1652761972153.jpg" width="80" alt="Gambar">
                                    </td>
                                    <td>
                                        <button class="btn btn-success btn-sm">Detail</button>
                                        <button class="btn btn-warning btn-sm">Ubah</button>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Mbok Yem</td>
                                    <td>Perempuan</td>
                                    <td>
                                        <img src="<?= base_url() ?>/image/FB_IMG_1652761969030.jpg" width="80" alt="Gambar">
                                    </td>
                                    <td>
                                        <a href="<?= base_url(); ?>/Admin/detail_pasien" class="btn btn-success btn-sm">Detail</a> 
                                        <button class="btn btn-warning btn-sm">Ubah</button>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </td>
                                </tr>
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