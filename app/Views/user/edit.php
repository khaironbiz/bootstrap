<section id="event">
    <div class="container">
        <div class="row text-center text-white">
            <div class="col">
                <h2>EDIT ANGGOTA</h2>
                <p>Edit Anggota oleh Administrator</p>
            </div>
        </div>
        <div class="row text-white mt-3">
            <div class="row justify-content-center" style="text-align: justify; font-size:smaller">
                <form action="/nira/update/<?= $user['kode']?>" method="POST">
                <?= csrf_field(); ?>
                    <div class="col-md-12">
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control text-primary fw-bold" name="nama" value="<?= $user['nama']?>">
                                <input type="hidden" class="form-control text-primary fw-bold" name="kode" value="<?= $user['kode']?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-3 col-form-label">KTP</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control text-primary fw-bold" name="ktp" value="<?= $user['ktp']?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-3 col-form-label">NIP/NPS</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control text-primary fw-bold" name="ni[" value="<?= $user['nip']?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-3 col-form-label">NIRA</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control text-primary fw-bold" name="nira" value="<?= $user['nira']?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control text-primary fw-bold" name="email" value="<?= $user['email']?>"> 
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-3 col-form-label">HP</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control text-primary fw-bold" name="hp" value="<?= $user['hp']?>">
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