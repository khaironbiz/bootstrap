<section id="event">
    <div class="container-fluid">
        <div class="row text-center text-white">
            <div class="col">
                <h2>Event Mendatang</h2>
                <p>Pilih dan catat tanggalnya acara yang kamu suka kemuan pesan</p>
            </div>
        </div>
        <div class="row">
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-2">
                <?php
                $x = 1;
                while ($x < 20) {
                ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?= base_url() ?>/assets/img/event/3.jpg" class="card-img-top" alt="...">
                            <div class="card-header text-center">

                                <span style="font-size: 0.7rem; color: Tomato;">
                                    <i class="bi bi-calendar-minus-fill"></i> 20-03-2021
                                    <i class="bi bi-people-fill"></i> 200
                                    <i class="fas fa-file"> 3 SKP</i>
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
        <path fill="#ffff" fill-opacity="1" d="M0,256L48,229.3C96,203,192,149,288,133.3C384,117,480,139,576,128C672,117,768,75,864,53.3C960,32,1056,32,1152,69.3C1248,107,1344,181,1392,218.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</section>