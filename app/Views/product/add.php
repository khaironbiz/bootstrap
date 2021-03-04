<section id="event">
    <div class="container">
        <div class="row text-center text-white">
            <div class="col">
                <h2>INPUT EVENT</h2>
                <p>Tambah Event oleh Administrator <?= site_url() ?></p>
            </div>
        </div>

        <div class="row text-white justify-content-center">
            <form action="/event/tambah" method="POST">
                <?= csrf_field(); ?>
                <div class="col-md-12">
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Event</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-primary fw-bold" name="nama_event">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Kota Acara</label>
                        <div class="col-sm-5">
                            <select class="form-select text-primary fw-bold" name="provinsi_event" id="category">
                                <option selected>---Provinsi---</option>
                                <?php
                                foreach ($provinsi as $prov) {
                                ?>
                                    <option value="<?= $prov['id_prov'] ?>"><?= $prov['nama_provinsi'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-5">
                            <select class="form-control" id="sub_category" name="kota_event" required>
                                <option value="">No Selected</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Jenis Acara</label>
                        <div class="col-sm-4">
                            <select class="form-select text-primary fw-bold" name="id_jenis_event">
                                <option selected>---Jenis Acara---</option>
                                <?php
                                foreach ($jenis as $j) {
                                ?>
                                    <option value="<?= $j['id_jenis_event'] ?>"><?= $j['nama_jenis_event'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <label for="nama" class="col-sm-2 col-form-label">Harga Dasar</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control text-primary fw-bold" name="harga_event">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control text-primary fw-bold" name="tanggal_mulai">
                        </div>
                        <label for="nama" class="col-sm-2 col-form-label">Sampai</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control text-primary fw-bold" name="tanggal_selesai">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Penjelasan Event</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="deskripsi_event" id="deskripsi" rows="3"></textarea>
                            <script>
                                CKEDITOR.replace('deskripsi')
                            </script>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Fasilitas</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="fasilitas_event" id="fasilitas" rows="3"></textarea>
                            <script>
                                CKEDITOR.replace('fasilitas')
                            </script>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Peserta</label>
                        <div class="col-sm-10">
                            <?php
                            foreach ($profesi as $p) {
                            ?>
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <?= $p['nama_profesi'] ?>
                                </label>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Level Harga</label>
                        <div class="col-sm-10">
                            <?php
                            foreach ($level_harga as $lh) {
                            ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <?= $lh['nama_level_harga']; ?>
                                    </label>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Gambar 1</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control text-primary fw-bold" name="gambar">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-warning text-white fw-bold">INPUT</button>
                    </div>
                    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.3.1.js' ?>"></script>
                    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#category').change(function() {
                                var id = $(this).val();
                                $.ajax({
                                    url: "<?php echo site_url('event/kota'); ?>",
                                    method: "POST",
                                    data: {
                                        id: id
                                    },
                                    async: true,
                                    dataType: 'json',
                                    success: function(data) {
                                        var html = '';
                                        var i;
                                        for (i = 0; i < data.length; i++) {
                                            html += '<option value=' + data[i].id_kab + '>' + data[i].nama_kabupaten + '</option>';
                                        }
                                        $('#sub_category').html(html);
                                    }
                                });
                                return false;
                            });
                        });
                    </script>
                </div>
            </form>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffff" fill-opacity="1" d="M0,192L48,213.3C96,235,192,277,288,250.7C384,224,480,128,576,117.3C672,107,768,181,864,176C960,171,1056,85,1152,69.3C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>

</section>