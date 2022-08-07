<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>

    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css">
</head>

<body>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <img src="<?= base_url(); ?>/img/kop.png" width="100%" alt="">
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <td>Tanggal Laporan</td>
                        <td>:</td>
                        <td><?= $tgl['awal']; ?> Sampai <?= $tgl['akhir'] ?></td>
                    </tr>
                </table>
                <br>
                <table class="table table-striped">
                    <tbody>
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
                        <?php
                        $no = 1;
                        foreach ($cetak as $c) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $c->nm_pendaftar; ?></td>
                                <td><?= $c->no_antrian; ?></td>
                                <td><?= $c->jk; ?></td>
                                <td><?= $c->nohp; ?></td>
                                <td><?= $c->keluhan; ?></td>
                                <td><?= $c->tgl_kunjungan; ?></td>
                                <td><?= $c->tgl_pendaftaran; ?></td>
                                <td><?= $c->nm_poli; ?></td>
                                <td><?= $c->kategori; ?></td>
                                <td><?= $c->pembayaran; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div class="row justify-content-end mt-4">
                    <div class="col-4 text-left">
                        <table>
                            <tr>
                                <td>Mataram, 21 januari 2022</td>
                            </tr>
                            <tr>
                                <td>yang bertandatangan</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>( Nama Pimpinan )</td>
                            </tr>
                            <tr>
                                <td>NIP.</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        print();
    </script>
</body>

</html>