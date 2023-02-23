<?php if ($this->session->userdata('email')) { ?>
    <!-- KONTEN -->
    <div class="container-fluid">
        <br>
        <center>
            <h3><b>Sewa</b></h3>
        </center>
        <h3>
            <?= validation_errors(); ?>
        </h3>
        <br>
        <form class="form-horizontal" method="post" action="<?= base_url('pesanan/tambah_sewa_motor') ?>" enctype="multipart/form-data">
            <br>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label text-muted" hidden>Email</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" required hidden>
                    </div>
                </div>
            </div>
            <br>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label text-muted" hidden>Nama Penyewa</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama'] ?>" required hidden>
                    </div>
                </div>
            </div>
            <br>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label text-muted">Merek Motor</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="text" class="form-control" id="merk_motor" name="merk_motor" value="<?= $motor['merk_motor'] ?>" required>
                    </div>
                </div>
            </div>
            <br>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label text-muted">Nama Motor</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="text" class="form-control" id="nama_kendaraan" name="nama_kendaraan" value="<?= $motor['nama_motor'] ?>" required>
                    </div>
                </div>
            </div>
            <br>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label text-muted">No Polisi</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="text" class="form-control" id="no_pol" name="no_pol" value="<?= $motor['no_pol'] ?>" required>
                    </div>
                </div>
            </div>
            <br>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label text-muted">Harga</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="text" class="form-control" id="harga" name="harga" value="<?= $motor['harga'] ?>" required>
                    </div>
                </div>
            </div>
            <br>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label text-muted">Lama Sewa</label>
                <div class="col-sm-6">
                    <select class="form-select" id="lama_sewa" aria-label="Default select example" name="lama_sewa">
                        <option value="1">1 Hari</option>
                        <option value="2">2 Hari</option>
                        <option value="3">3 Hari</option>
                        <option value="4">4 Hari</option>
                        <option value="5">5 Hari</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label text-muted">Gambar</label>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="<?= base_url('assets/img/') . $motor['image'] ?>" class="img-thumbnail">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label text-muted"></label>
                <div class="col-sm-5">
                    <button class="btn btn-primary" type="submit"><i class="bi bi-file-earmark-check-fill"></i> Sewa</button></li>
                    <a class="btn btn-success" href="<?= base_url('motor'); ?>" type="submit"><i class="bi bi-box-arrow-left"></i> Kembali</a></li>
                </div>
            </div>
    </div>
    </div>
    </form>

    </div>
<?php } else { ?>
    <div class="container mt-5">
        <div class="alert alert-danger" role="alert">
            <p class="text-center">
                Silakan login terlebih dahulu!
            </p>
        </div>
    </div>
<?php } ?>