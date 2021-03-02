<section id="event">
    <div class="container">
        <div class="row text-center text-white">
            <div class="col">
                <h2>INPUT EVENT</h2>
                <p>Tambah Event oleh Administrator</p>
            </div>
        </div>
        <div class="row text-white">
            <div class="row justify-content-center" style="text-align: justify; font-size:smaller">

                <div class="col-md-8">

                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Event</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-primary fw-bold" id="inputNama">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Jenis Acara</label>
                        <div class="col-sm-10">
                            <select class="form-select text-primary fw-bold" aria-label="Default select example">
                                <option selected>---Jenis Acara---</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Harga Dasar</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control text-primary fw-bold" id="inputHarga">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Penjelasan Event</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="deskripsi" rows="3"></textarea>
                            <script>
                                CKEDITOR.replace('deskripsi')
                            </script>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Fasilitas</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="fasilitas" rows="3"></textarea>
                            <script>
                                CKEDITOR.replace('fasilitas')
                            </script>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Peserta</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Default checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Checked checkbox
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Level Harga</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Onsite
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Normal
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Erly Bird
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-warning text-white fw-bold">INPUT</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffff" fill-opacity="1" d="M0,192L48,213.3C96,235,192,277,288,250.7C384,224,480,128,576,117.3C672,107,768,181,864,176C960,171,1056,85,1152,69.3C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>

</section>