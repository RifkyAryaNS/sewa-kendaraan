<!-- AKHIR MENU NAVIGASI -->
<div class="container-fluid">
    <div class="col-sm-6 mx-auto">
        <div class="container">
            <div class="page-title mt-4">
                <h1 class="text-center">Edit Profile</h1>
            </div>
        </div>
    </div>
    <hr>
    <form class="calculator-form my-5 px-5 py-4" method="POST" action="" enctype="multipart/form-data">
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label text-muted">Email*</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email" value=<?= $user['email']; ?> readonly>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label text-muted">Nama*</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" value=<?= $user['nama']; ?>>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="no_sim" class="col-sm-2 col-form-label text-muted">No SIM*</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="no_sim" name="no_sim" value=<?= $user['no_sim']; ?>>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="no_hp" class="col-sm-2 col-form-label text-muted">No Hp*</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="no_hp" name="no_hp" value=<?= $user['no_hp']; ?>>
            </div>
        </div>
        <br>
        <div class="row g-2">
            <div class="col-sm-3">
                <p class="card-text text-muted">Foto Profile*</p>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-2">
                        <img src="<?= base_url('assets/img/') . $user['image'] ?>" class="img-thumbnail">
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
        <div class="row g-2">
            <div class="col-3">
            </div>
            <div class="col-auto">
                <button class="btn btn-primary" type="submit"><i class="bi bi-file-earmark-check-fill"> Simpan</i></button></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger" href="<?= base_url('profile/index'); ?>" type="submit"><i class="bi bi-reply-fill"> Kembali</i></a>
            </div>
        </div>
    </form>
</div>
</div>