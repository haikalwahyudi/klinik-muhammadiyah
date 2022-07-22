<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/template/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css">
</head>

<body class="hold-transition lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <h2>Pendaftaran Online Klinik Muhammadiyah</h2>
        </div>
        <div class="col-12 col-sm-12">
            <div class="card card-success card-tabs">
                <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Daftar Online</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Pasien Lama</a>
                        </li> -->
                    </ul>
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('simpan')) { ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('simpan'); ?></div>
                    <?php } ?>
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                            <form method="POST" action="<?= base_url() ?>/Daftar/daftarPoliAksi">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" require>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio1" name="jk" value="Laki-Laki" checked>
                                        <label for="customRadio1" class="custom-control-label">Laki - Laki</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio2" name="jk" value="Perempuan">
                                        <label for="customRadio2" class="custom-control-label">Perempuan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">No Hp</label>
                                    <input type="number" name="nohp" class="form-control" require>
                                </div>
                                <div class="form-group">
                                    <label for="">Keluhan</label>
                                    <textarea name="keluhan" id="" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Poli Tujuan</label>
                                    <select name="id_poli" class="form-control" required>
                                        <option value="">-Pilih-</option>
                                        <?php foreach ($data as $p) { ?>
                                            <option value="<?= $p->id_poli ?>"><?= $p->nm_poli ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Kunjungan</label>
                                    <input type="date" name="tgl_kunjungan" value="<?= date('Y-m-d', time() + (60 * 60 * 38)) ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Kategori</label>
                                    <select name="kategori" class="form-control kt2" onchange="tes();" id="kt" required>
                                        <option value="">-Pilih-</option>
                                        <option value="UMUM">UMUM</option>
                                        <option value="BPJS">BPJS</option>
                                    </select>
                                </div>
                                <div class="form-group" id="pb">
                                    <label for="">Nomor BPJS</label>
                                    <input type="text" name="pembayaran" id="bpjs" class="form-control">
                                </div>
                                <div class="card-foote">
                                    <button type="submit" class="btn btn-success">Daftar</button>
                                    <!-- <button type="reset" class="btn btn-danger">Batal</button> -->
                                    <a href="<?= base_url() ?>/Home" class="btn bg-teal">Kembali</a>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                            Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                        </div> -->
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- /.center -->
    <script>
        // const kategori = document.getElementById('kt');
        // // const lokasi = document.getElementById('pb');
        // // const newTextBox = document.createElement('input');
        // // newTextBox.className = "form-control";
        // // newTextBox.type = "text";
        // // newTextBox.id = "bpjs";
        // // newTextBox.placeholder = "Masukkan Nomor BPJS"
        // let pilihan = document.getElementById('kt').value;

        // kategori.addEventListener('change', function(e) {
        //     // console.log(pilihan);
        //     // lokasi.appendChild(newTextBox);
        //     if (pilihan != 'UMUM') {
        //         document.getElementById('bpjs').disabled = true;
        //     } else {
        //         document.getElementById('bpjs').disabled = false;
        //     }
        // })

        function tes() {
            //     let lokasi = document.getElementById('pb');
            //     let newTextBox = document.createElement('input');
            //     newTextBox.className = "form-control";
            //     newTextBox.type = "text";
            //     newTextBox.id = "bpjs";
            //     newTextBox.placeholder = "Masukkan Nomor BPJS"
            let pilihan = document.getElementById('kt').value;
            //     // console.log(pilihan);
            if (pilihan != 'UMUM') {
                document.getElementById('bpjs').disabled = false;
                document.getElementById('bpjs').required = true;
                document.getElementById('bpjs').focus();
                //         lokasi.appendChild(newTextBox);
                //         // newTextBox.appendChild(newTextBox);
            } else {
                document.getElementById('bpjs').disabled = true;
                document.getElementById('bpjs').value = "";
                //         document.getElementById('bpjs').disabled = true;
            }
        }
    </script>
    <!-- jQuery -->
    <script src="<?= base_url(); ?>/template/plugins/jquery/jquery.min.js"></script>
    <!-- <script src="<?= base_url() ?>/js/textbox.js"></script> -->
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>