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

  <!-- <link href="data:image/png;base64,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" rel="shortcut icon"> -->

  <title>Login</title>
</head>

<body>

  <!-- KONTEN -->
  <div class="container-fluid">
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">

            <div class="card-header bg-transparent mb-0">
              <h5 class="text-center"><span class="font-weight-bold text-danger fw-bold">LOGIN</span></h5>
            </div>

            <div class=container>
              <br>
              <?= $this->session->flashdata('message'); ?>
            </div>
            <form class="user" method="post" action="<?= base_url('auth'); ?>">
              <div class="card-body">
                <div class="form-floating mb-3">
                  <input type="email" name="email" class="form-control" placeholder="Email" value="<?= set_value('email'); ?>">
                  <label for="floatingInput" class="text-muted"><i class="bi bi-envelope-fill "></i> Email </label>
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-floating ">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                  <label for="floatingInput" class="text-muted"><i class="bi bi-key-fill"></i> Password</label>
                  <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <br>
                <div class="row">
                  <div class="col">

                  </div>
                  <!--
				<div class="col">
				<a href="http://localhost/intens/beranda" class="text-muted">Login as Admin</a></div> -->
                </div>
                <br>
                <div class="form-group">
                  <center>
                    <button type="submit" class="w-100 btn btn-lg btn-danger"></i>Login</button>
                  </center>
                </div>
              </div>
            </form>
            <div class="card-header bg-transparent mb-0"></div>
            <div class="card-body">
              <center>
                <p class="text-muted">
                  Belum Punya Akun? <a href="<?= base_url('auth/daftar'); ?>" class="text-reset">Daftar</a>
              </center>
              </p>
              <!--<center>
                <p class="text-muted">
                  <a href="<?= base_url('auth/change-password'); ?>" class="text-reset">Lupa Password?</a>
              </center>
              </p>
            </div> -->

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