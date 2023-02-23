<?php if ($this->session->userdata('email')) { ?>
    <!-- MENU NAVIGASI -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/home'); ?>"><i class="bi bi-house-door-fill"></i> Beranda</a>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-book-fill"></i>
                                Data Master
                            </button>

                            <ul class="dropdown-menu dropdown-menu-lg" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="<?= base_url('admin/mobil/index'); ?>"><i class="bi bi-table"></i> Data Mobil</a>
                                </li>
                                <li><a class="dropdown-item" href="<?= base_url('admin/motor/index'); ?>"><i class="bi bi-table"></i> Data Motor</a>
                                </li>
                                <li><a class="dropdown-item" href="<?= base_url('admin/pesanan/index'); ?>"><i class="bi bi-table"></i> Data Pesanan</a>
                                </li>
                            </ul>
                        </div>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </ul>
            </div>
        </div>
    </nav>
    <!-- KONTEN -->
    <div class="container-fluid">
        <br>
        <center>
            <h3><b>Edit Motor</b></h3>
        </center>
        <h3>
            <?= validation_errors(); ?>
        </h3>
        <br>
        <form class="form-horizontal" method="post" action="<?= base_url('admin/motor/edit_save') ?>" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label text-muted">ID Motor</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="text" class="form-control" id="id" name="id" value="<?= $motor['id'] ?>" required readonly>
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
                        <input type="text" class="form-control" id="nama_motor" name="nama_motor" value="<?= $motor['nama_motor'] ?>" required>
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
                <label for="nama" class="col-sm-2 col-form-label text-muted">Gambar</label>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="<?= base_url('assets/img/') . $motor['image'] ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-8">

                            <div class="custom-file">
                                <input type="file" class="form-control" id="image" name="image">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label text-muted"></label>
                <div class="col-sm-5">
                    <button class="btn btn-primary" type="submit"><i class="bi bi-file-earmark-check-fill"></i> Simpan</button></li>
                    <a class="btn btn-success" href="<?= base_url('admin/motor'); ?>" type="submit"><i class="bi bi-box-arrow-left"></i> Kembali</a></li>
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