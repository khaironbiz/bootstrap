<section id="event">
    <div class="container">
        <div class="row text-white">
            <div class="col text-center ">
                <h2>SETTUP LEVEL HARGA ACARA KESEHATAN</h2>
                <p>Melihat seluruh level harga acara kesehatan dari sisi admin</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="btn btn-primary btn-sm" href="<?= base_url('levelharga/add') ?>" role="button">Add Level Harga</a>
                <table class="table table-responsive text-white" style="font-size: smaller;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Level Harga</th>
                            <th scope="col">Tanggal Dibuat</th>
                            <th scope="col">Hash</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $no = 1;
                        foreach ($level_harga as $lh) { ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?= $lh['nama_level_harga']; ?></td>
                                <td><?= $lh['create_level_harga']; ?></td>
                                <td><?= $lh['has_level_harga']; ?></td>
                                <td><a class="btn btn-success btn-sm" href="<?= base_url('levelharga/detail') . "/" . $lh['has_level_harga']; ?>" role="button">Detail</a></td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffff" fill-opacity="1" d="M0,160L26.7,165.3C53.3,171,107,181,160,186.7C213.3,192,267,192,320,213.3C373.3,235,427,277,480,261.3C533.3,245,587,171,640,165.3C693.3,160,747,224,800,229.3C853.3,235,907,181,960,160C1013.3,139,1067,149,1120,149.3C1173.3,149,1227,139,1280,122.7C1333.3,107,1387,85,1413,74.7L1440,64L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
    </svg>
</section>