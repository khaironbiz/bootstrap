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

    <title>Hello, world!</title>
    <!-- JS Fon -->
    <script src="https://kit.fontawesome.com/238d77524d.js" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">Acara Kesehatan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#event">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <section class="jumbotron text-center mt-5" id="home">
        <img class="rounded-circle img-thumbnail" src="<?= base_url() ?>/assets/img/logo-ak.png" alt="" width="200px">
        <h1 class="display-4 text-center">Acara Kesehatan</h1>
        <p class="lead">Pusat Informasi Kegiatan Ilmiah Semua Profesi Tenaga Kesehatan di Seluruh Indonesia</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffff" fill-opacity="1" d="M0,160L48,170.7C96,181,192,203,288,186.7C384,171,480,117,576,90.7C672,64,768,64,864,85.3C960,107,1056,149,1152,138.7C1248,128,1344,64,1392,32L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-3">
                    <h2>About Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-justify mb-3">
                    <p class=>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste temporibus aliquam excepturi adipisci commodi reiciendis voluptatem, numquam totam quas repellendus molestias a cumque eaque. Accusantium, possimus amet! Corrupti, expedita dolor?
                    </p>
                </div>
                <div class="col-md-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis eum, odit maiores distinctio facilis numquam eaque ad iusto reiciendis, non, dicta officiis voluptatibus minus dolorem optio magni vero. A, corporis?</div>

            </div>
            <div class="row">
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0dcaf0" fill-opacity="1" d="M0,96L48,96C96,96,192,96,288,122.7C384,149,480,203,576,208C672,213,768,171,864,165.3C960,160,1056,192,1152,208C1248,224,1344,224,1392,224L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <section id="event">
        <div class="container-fluid">
            <div class="row text-center text-white">
                <div class="col">
                    <h2>Event Mendatang</h2>
                    <p>Pilih dan catat tanggalnya acara yang kamu suka kemuan pesan</p>
                </div>
            </div>
            <div class="row">
                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                    <?php
                    $x = 1;
                    while ($x < 120) {
                    ?>
                        <div class="col">
                            <div class="card h-100">
                                <img src="<?= base_url() ?>/assets/img/event/3.jpg" class="card-img-top" alt="...">
                                <div class="card-header text-center">

                                    <span style="font-size: 0.7rem; color: Tomato;">
                                        <i class="fas fa-calendar-alt"> 20-03-2021</i>
                                        <i class="fas fa-users"> 200</i>
                                        <i class="fas fa-file"> 3 SKP</i>
                                        <i class="bi bi-youtube"></i>
                                    </span>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">Card title</h6>
                                    <p class="card-text" style="font-size: 11px;">This content is a little bit longer.</p>
                                </div>

                            </div>
                        </div>
                    <?php
                        $x++;
                    }
                    ?>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffff" fill-opacity="1" d="M0,288L48,240C96,192,192,96,288,80C384,64,480,128,576,138.7C672,149,768,107,864,96C960,85,1056,107,1152,106.7C1248,107,1344,85,1392,74.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>Contact Us</h2>
                    <p>Kami dengan senang hati melayani pendapat anda</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 ">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#20c997" fill-opacity="1" d="M0,256L48,229.3C96,203,192,149,288,133.3C384,117,480,139,576,128C672,117,768,75,864,53.3C960,32,1056,32,1152,69.3C1248,107,1344,181,1392,218.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <footer class="text-center text-white" style="background-color: #20c997">
        <h4>
            Acara Kesehatan
        </h4>

    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>