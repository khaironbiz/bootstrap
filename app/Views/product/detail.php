<section id="event">
    <div class="container-fluid">
        <div class="row text-center text-white">
            <div class="col">
                <h2>Event Mendatang</h2>
                <p>Pilih dan catat tanggalnya acara yang kamu suka kemuan pesan</p>
            </div>
        </div>
        <div class="row text-white">
            <div class="row" style="text-align: justify; font-size:smaller">
                <div class="col-md-6">


                    <div id="carouselExampleSlidesOnly" class="carousel slide mb-3" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?= base_url() ?>/assets/img/event/1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url() ?>/assets/img/event/2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url() ?>/assets/img/event/3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <h5>Penjelasan Singkat</h5>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam culpa adipisci fugit. Ex soluta illo earum alias, quo vitae a ipsam veniam error aliquam, placeat illum vero nesciunt dignissimos iusto ipsa. Perferendis error quibusdam minus totam nulla rem reiciendis expedita et vel. Aut delectus magnam praesentium quam aspernatur explicabo a, alias quaerat architecto. Ea laborum enim nihil libero officiis saepe animi maxime dolores blanditiis incidunt consequatur expedita autem facilis debitis iusto veritatis praesentium in ullam inventore, esse illum aspernatur. Fugit laborum quod expedita, iure quibusdam inventore nulla esse ullam unde quia beatae tempora reiciendis aut soluta tempore quas ex illo.</p>
                </div>
                <div class="col-md-6">
                    <table class="table text-white">

                        <tbody>
                            <tr>
                                <td>Penyelenggara</td>
                                <td>:</td>
                                <td><?= $event['nama_penyedia']?></td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td>07 Maret 2021 sd 10 Maret 2021</td>
                            </tr>
                            <tr>
                                <td>Tempat</td>
                                <td>:</td>
                                <td><?= $event['lokasi_event']?></td>
                            </tr>
                            <tr>
                                <td>Peserta</td>
                                <td>:</td>
                                <td>
                                <?php
                                $db = \Config\Database::connect();

                                $query = $db->query("
                                
                                SELECT * FROM event_peserta 
                                JOIN profesi_kesehatan on profesi_kesehatan.id_profesi_kesehatan=event_peserta.id_profesi
                                WHERE event_peserta.id_events='$peserta'
                                
                                ");
                                $results = $query->getResult();

                                foreach ($results as $row)
                                {
                                    echo $row->nama_profesi." ";
                                    
                                }
                                ?>
                                
                                </td>
                            </tr>
                            <tr>
                                <td>Kapasitas</td>
                                <td>:</td>
                                <td>200 Peserta</td>
                            </tr>
                            <tr>
                                <td>SKP</td>
                                <td>:</td>
                                <td>
                                    15 SKP IDI <br>
                                    3 SKP PPNI <br>
                                    2 SKP IBI <br>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table text-white">
                        <tr>
                            <th>Golongan Peserta</th>
                            <th>Max 12-03-2021</th>
                            <th>Max 30-03-2021</th>
                            <th>Onsite</th>
                        </tr>
                        <tr>
                            <td>Dokter Spesialis</td>
                            <td>Rp. 2.000.000</td>
                            <td>Rp. 2.200.000</td>
                            <td>Rp. 2.500.000</td>
                        </tr>
                        <tr>
                            <td>Dokter Umum</td>
                            <td>Rp. 1.500.000</td>
                            <td>Rp. 1.600.000</td>
                            <td>Rp. 1.800.000</td>
                        </tr>
                        <tr>
                            <td>Mahasiswa Kedokteran</td>
                            <td>Rp. 1.000.000</td>
                            <td>Rp. 1.200.000</td>
                            <td>Rp. 1.400.000</td>
                        </tr>
                        <tr>
                            <td>Perawat</td>
                            <td>Rp. 1.000.000</td>
                            <td>Rp. 1.200.000</td>
                            <td>Rp. 1.400.000</td>
                        </tr>
                    </table>
                    <div class="text-center">
                        <a class="btn btn-warning text-white fw-bold" href="<?= base_url() ?>/event/registrasi" role="button">DAFTAR DISINI</a>
                    </div>
                    <h6>Fasilitas</h6>
                    Makan Siang Hotel Bintang 5 <br>
                    Seminar Kit yang Kece <br>
                    SKP dari Profesi anda <br>
                    Dorprise Menarik senilai 10 JT rupiah <br>
                </div>

            </div>

        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffff" fill-opacity="1" d="M0,256L48,229.3C96,203,192,149,288,133.3C384,117,480,139,576,128C672,117,768,75,864,53.3C960,32,1056,32,1152,69.3C1248,107,1344,181,1392,218.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</section>