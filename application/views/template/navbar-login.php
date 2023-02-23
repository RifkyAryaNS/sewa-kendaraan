    <!-- MENU NAVIGASI -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="<?= base_url('home'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="<?= base_url('mobil'); ?>">Sewa Mobil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  mx-2" href="<?= base_url('motor'); ?>">Sewa Motor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  mx-2" href="<?= base_url('pesanan'); ?>">Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="">Hi, <?= $user['nama']; ?></a>
                    </li>
                    <li class="nav-item">
                        <div class="nav-item dropdown float-right">
                            <a class="btn btn-grey dropdown-toggle" href="<?= base_url(); ?>account" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <center><img src="<?= base_url('assets/img/') . $user['image']; ?>" class="rounded mx-auto d-block" width="100px" height="100px">
                                    <p></p>
                                    <p><?= $user['nama']; ?></p>
                                </center>
                                <li>
                                    <div class="container-fluid">
                                        <a class="btn btn-primary w-100" href="<?= base_url('profile'); ?>"><i class="bi bi-person-fill"></i> Profile</a>
                                    </div>
                                </li>
                                <hr>
                                <li>
                                    <div class="container-fluid">
                                        <a class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-box-arrow-right"></i> Log Out</a>
                                    </div>
                                </li>
                        </div>
                    </li>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Log Out</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Yakin akan keluar ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <a class="btn btn-danger" href="<?= base_url('auth/logout'); ?>"><i class="bi bi-box-arrow-right"></i> Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
            </li>
            </ul>
        </div>
        </div>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </ul>
        </div>
        </div>
    </nav>