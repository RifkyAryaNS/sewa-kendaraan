<div class="col-sm-6 mx-auto">
  <div class="container">
    <div class="page-title mt-4">
      <h1 class="text-center">My Profile</h1>
    </div>
  </div>
</div>


<div class="card mb-3" style="max-width: 1000px; margin-left:220px ; margin-top:50px">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?= base_url('/assets/img/') . $user['image']; ?>" class="card-img">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $user['nama']; ?></h5>
        <p class="card-text"><?= $user['email']; ?></p>
        <p class="card-text"><?= $user['no_hp']; ?></p>
        <p class="card-text"><?= $user['no_sim']; ?></p>
        <p class="card-text"><small class="text-muted">Member Since <?= date('d F Y', $user['date_created']) ?></small></p>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="col-lg-11">
    <a class="btn btn-primary" href="<?= base_url('profile/editProfile/') . $user['id']; ?>" type="submit" style="float:right;"><i class="bi bi-pencil-square"> Edit Account</i></a>
    <a class="btn btn-success" href="<?= base_url('home/'); ?>" type="submit" style="float:right;"><i class="bi bi-box-arrow-left"> Kembali</i></a>
  </div>
</div>