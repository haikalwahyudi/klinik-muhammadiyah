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
</head>

<body>


    <?= $this->include('/layout/pengguna/v_pheader'); ?>

    <!-- home section starts  -->

    <?= $this->renderSection('isi'); ?>

    <!-- And isi -->

    <!-- footer section starts  -->

    <?= $this->include('/layout/pengguna/v_pfooter'); ?>

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="<?= base_url(); ?>/landingpage/js/script.js"></script>
</body>

</html>