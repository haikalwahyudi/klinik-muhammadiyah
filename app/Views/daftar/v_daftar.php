<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KLINIK | PKU Muhammadiyah KLU</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?= base_url(); ?>/landingpage/css/style.css" />
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css"> -->
</head>

<body>
    <!-- header section starts  -->

    <!-- header section ends -->

    <!-- home section starts  -->

    <!-- home section ends -->

    <!-- icons section starts  -->

    <!-- icons section ends -->

    <!-- services section starts  -->

    <!-- services section ends -->

    <!-- about section starts  -->

    <!-- about section ends -->

    <!-- doctors section starts  -->

    <!-- doctors section ends -->

    <!-- booking section starts   -->

    <section class="book">
        <h1 class="heading"><span>KLINIK PKU</span> Muhammadiyah KLU</h1>

        <div class="row">
            <div class="image">
                <img src="<?= base_url(); ?>/landingpage/image/book-img.svg" alt="" />
            </div>
            <form action="<?= base_url(); ?>/Daftar/daftarAksi" method="POST">
                <h3>Buat Akun</h3>
                <?= session()->getFlashdata('simpan') ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('salah'); ?>
                </div>
                <input name="nama" placeholder="masukkan Nama" class="box" required />
                <input type="username" name="email" placeholder="masukkan Email" class="box" required />
                <input name="nohp" placeholder="masukkan No Hp" class="box" required />
                <input type="password" name="password" placeholder="masukkan password" class="box" required />
                <input type="submit" value="Buat Akun" class="btn" />
                <a href="<?= base_url() ?>/Home" class="btn">Kembali </a>
            </form>
        </div>
    </section>

    <!-- booking section ends -->

    <!-- review section starts  -->

    <!-- review section ends -->

    <!-- blogs section starts  -->

    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer">
        <div class="credit">created by <span>Bale Studio</span> | all rights reserved</div>
    </section>

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="<?= base_url(); ?>/landingpage/js/script.js"></script>
</body>

</html>