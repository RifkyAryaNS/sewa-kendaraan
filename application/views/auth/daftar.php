<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- CSS ICON -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <title>Login</title>
</head>

<body>

  <!-- KONTEN -->
  <div class="container-fluid">
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-auto">
          <div class="card" style="width:auto;">
            <div class="card-header bg-transparent">
              <h5 class="text-center"><span class="font-weight-bold text-success fw-bold">Registrasi</span></h5>
            </div>
            <form class="user" method="post" action="<?= base_url('auth/daftar'); ?>">
              <div class="card-body">

                <div class="col-sm">
                  <div class="form-floating mb-3">
                    <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="<?= set_value('email'); ?>">
                    <label for="floatingInput"><i class="bi bi-envelope-fill"></i> Email</label>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm">
                    <div class="form-floating mb-3">
                      <input type="password" id="pass1" name="pass1" class="form-control" placeholder="Password">
                      <label for="floatingInput"><i class="bi bi-key-fill"></i> Password</label>
                      <?= form_error('pass1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-floating mb-3">
                      <input type="password" id="pass2" name="pass2" class="form-control" placeholder="Confirm Password">
                      <label for="floatingInput"><i class="bi bi-key"></i> Confirm Password</label>
                    </div>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="form-floating mb-3">
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" value="<?= set_value('email'); ?>">
                    <label for="floatingInput"><i class="bi bi-person-fill"></i> Nama</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm">
                    <div class="form-floating mb-3">
                      <input type="text" id="no_sim" name="no_sim" class="form-control" placeholder="No SIM">
                      <label for="floatingInput"><i class="bi bi-person-badge-fill"></i> No SIM</label>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-floating mb-3">
                      <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="No Handphone">
                      <label for="floatingInput"><i class="bi bi-phone-fill"></i> No Handphone</label>
                    </div>
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <center>
                    <button type="submit" class="w-100 btn btn-lg btn-success"></i>Register</button>
                  </center>
                </div>
              </div>
              <hr>
              <center>
                <p class="text-muted">
                  <a href="<?= base_url('auth'); ?>" class="text-reset">Anda Sudah Punya Akun? Login</a>
              </center>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>