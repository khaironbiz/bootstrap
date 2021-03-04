<section id="event" style="min-height: 700px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-header">
                        <h5>Level Harga Acara Kesehatan</h5>
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Organisasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Anggota</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <table class="table text-start">
                            <tr>
                                <td>Level Harga</td>
                                <td>:</td>
                                <td><?= $level_harga['nama_level_harga'] ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Dibuat</td>
                                <td>:</td>
                                <td><?= $level_harga['create_level_harga'] ?></td>
                            </tr>
                            <tr>
                                <td>Has Level Harga</td>
                                <td>:</td>
                                <td><?= $level_harga['has_level_harga'] ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url('levelharga') ?>" class="btn btn-primary">Kembali</a>
                        <a href="<?= base_url('levelharga/edit') . "/" . $level_harga['has_level_harga']; ?>" class="btn btn-success">Edit</a>
                        <a href="<?= base_url('levelharga/delete') . "/" . $level_harga['has_level_harga']; ?>" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffff" fill-opacity="1" d="M0,192L30,165.3C60,139,120,85,180,69.3C240,53,300,75,360,90.7C420,107,480,117,540,122.7C600,128,660,128,720,106.7C780,85,840,43,900,32C960,21,1020,43,1080,64C1140,85,1200,107,1260,117.3C1320,128,1380,128,1410,128L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
    </svg>
</section>