<section id="event">
    <div class="container-fluid">
        <div class="row text-center text-white">
            <div class="col">
                <h2>Registrasi Acara</h2>
                <p>Pelatihan Tatalaksanan Vaksinasi Covid-19 Provinsi DKI Jakarta</p>
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
                </div>
                <div class="col-md-6">

                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-primary fw-bold" id="inputNama">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control text-primary fw-bold" id="inputNama">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Whatsapp</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control text-primary fw-bold" id="inputNama">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Peserta</label>
                        <div class="col-sm-10">
                            <select class="form-select text-primary fw-bold" aria-label="Default select example">
                                <option selected>Pilih Kategori Peserta</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Pembayaran</label>
                        <div class="col-sm-10">
                            <select class="form-select text-primary fw-bold" aria-label="Default select example">
                                <option selected>Pilih Metode Pembayaran</option>
                                <option value="1">Kartu Kredit</option>
                                <option value="2">Transfer Bank</option>
                                <option value="3">QRIS</option>
                            </select>
                            <div id="emailHelp" class="form-text text-white"> Pembayaran QRIS dapat menggunakan aplikasi berikut = (GOPAY, OVO, LINK AJA, DANA, Shopeepay, Mandiri Mobile, BCA Mobile, Octo Mobile).</div>

                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-warning text-white fw-bold">DAFTAR</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffff" fill-opacity="1" d="M0,256L48,229.3C96,203,192,149,288,133.3C384,117,480,139,576,128C672,117,768,75,864,53.3C960,32,1056,32,1152,69.3C1248,107,1344,181,1392,218.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</section>