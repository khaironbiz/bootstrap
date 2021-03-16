<section id="event">
    <div class="container-fluid">
        <div class="row text-white">
            <div class="col text-center ">
                <h2>DAFTAR PROFESI ANGGOTA</h2>
                <p>Melihat seluruh profesi tenaga kesehatan dari sisi admin</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-responsive text-white" style="font-size: smaller;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIRA</th>
                            <th scope="col">KTP</th>
                            <th scope="col">Website</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $no = 1 +(10*($currentPage-1));
                        foreach ($user as $u) { ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?= $u['nama']; ?></td>
                                <td><?= $u['nira']; ?></td>
                                <td><?= $u['ktp']; ?></td>
                                
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
                <?= $pager->links('nira', 'user_paginate') ?>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffff" fill-opacity="1" d="M0,192L48,213.3C96,235,192,277,288,250.7C384,224,480,128,576,117.3C672,107,768,181,864,176C960,171,1056,85,1152,69.3C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</section>