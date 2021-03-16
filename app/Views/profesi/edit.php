<section id="event">
    <div class="container">
        <div class="row text-center text-white">
            <div class="col">
                <h2>EDIT PROFESI</h2>
                <p>Edit Profesi oleh Administrator</p>
            </div>
        </div>
        <div class="row text-white mt-3">
            <div class="row justify-content-center" style="text-align: justify; font-size:smaller">
                <form action="/profesi/update/<?= $profesi['id_profesi_kesehatan']?>" method="POST">
                <?= csrf_field(); ?>
                    <div class="col-md-12">
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama Profesi</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control text-primary fw-bold" name="nama_profesi" value="<?= $profesi['nama_profesi']?>">
                                <input type="hidden" class="form-control text-primary fw-bold" name="has_profesi_kesehatan" value="<?= $profesi['has_profesi_kesehatan']?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama Organisasi Profesi</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control text-primary fw-bold" name="nama_op" value="<?= $profesi['nama_op']?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-3 col-form-label">Singkatan Organisasi Profesi</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control text-primary fw-bold" name="singkatan_op" value="<?= $profesi['singkatan_op']?>"> 
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-3 col-form-label">Ketua Organisasi Profesi</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control text-primary fw-bold" name="ketua_op" value="<?= $profesi['ketua_op']?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-3 col-form-label">Masa Bakti</label>
                            <div class="col-3">
                                <input type="date" class="form-control text-primary" name="masa_bakti_awal" value="<?= $profesi['masa_bakti_awal']?>">
                            </div>
                            <div class="col-3">
                                <input type="date" class="form-control text-primary" name="masa_bakti_ahir" value="<?= $profesi['masa_bakti_ahir']?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-3 col-form-label">Website Organisasi Profesi</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control text-primary fw-bold" name="web_op" value="<?= $profesi['web_op']?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-3 col-form-label">Email Organisasi Profesi</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control text-primary fw-bold" name="email_op" value="<?= $profesi['email_op']?>">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-warning text-white fw-bold">UPDATE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffff" fill-opacity="1" d="M0,192L48,213.3C96,235,192,277,288,250.7C384,224,480,128,576,117.3C672,107,768,181,864,176C960,171,1056,85,1152,69.3C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>

</section>