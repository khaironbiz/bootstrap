<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- akhir bootstrap CSS -->
    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
    <!-- Akhir My CSS -->
    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/fontawesome.min.css">
    <!-- data table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">




    <title><?= $title ?></title>
    <!-- JS Fon -->
    <script src="https://kit.fontawesome.com/238d77524d.js" crossorigin="anonymous"></script>
    <!-- CK editor -->
    <script src="<?= base_url() ?>/assets/ckeditor/ckeditor.js"></script>
    <!-- data table -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url() ?>/assets/img/logo.png" alt="" width="50" class="d-inline-block align-top">
                ACARA KESEHATAN.COM
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-white fw-bold">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('home') ?>#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('event') ?>">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('home') ?>#contact">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <?php
    echo view($content)
    ?>
    <a href="https://api.whatsapp.com/send?phone=6281213798746" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <section class="text-center" style="margin-top: -35px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h6>
                        Profesi
                    </h6>
                    <?php
                    $xx = 1;
                    while ($xx < 15) {
                    ?>
                        <span class="badge bg-secondary">Perawat</span>
                    <?php
                        $xx++;
                    }
                    ?>
                </div>
                <div class="col-md-4  mb-3">
                    <h6>
                        Lokasi
                    </h6>
                    <?php
                    $xxx = 1;
                    while ($xxx < 15) {
                    ?>
                        <span class="badge bg-secondary">Lokasi</span>
                    <?php
                        $xxx++;
                    }
                    ?>
                </div>
                <div class="col-md-4 " style="font-size: 2rem; color: Tomato;">
                    <h6>
                        Sosial Media
                    </h6>
                    <i class="bi bi-youtube"></i>
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-twitter"></i>
                    <i class="bi bi-instagram"></i>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h4>ACARA KESEHATAN</h4>
                    <p>Pusat Publikasi Kegiatan Ilmiah Seluruh Profesi Tenaga Kesehatan</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>