<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Konsultasi</title>

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
                <!-- <table>
                    <tr>
                        <td>Laporan Poli</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                </table><br> -->
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pasien</th>
                            <th>Dokter tujuan</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($cetak as $c) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $c['nm_user']; ?></td>
                                <td><?= $c['nm_dokter']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        print();
    </script>
</body>

</html>