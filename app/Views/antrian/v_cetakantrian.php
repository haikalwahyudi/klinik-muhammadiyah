<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor Antrian</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/template/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css">
</head>

<body style="background: #cecece;">
    <div class="row mt-4">
        <div class="col-md-4 offset-4">
            <div class="card" style="background-color: #DAEAF1;">
                <div class="card-body">
                    <img src="<?= base_url() ?>/template/dist/img/logo.png" width="100%" alt="logo">
                    <h3 class="text-center mt-2">Klinik Muhammadiya</h3>
                    <p class="text-center">Jln. Bunghata no 33</p>
                    <hr>
                    <h5 class="text-center">No Antrian</h5>
                    <h1 class="text-center"><?= $data->no_antrian; ?></h1>
                    <hr>
                    <h5 class="text-center">Tanggal Kunjungan</h5>
                    <p class="text-center"><?= $data->tgl_kunjungan; ?></p>
                    <p class="text-center"><?= $data->nm_poli; ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url(); ?>/template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        window.print();
        onafterprint = back;

        function back() {
            // history.back();
            location = "<?= base_url('/Antrian'); ?>";
        }
    </script>
</body>

</html>