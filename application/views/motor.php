    <div class="col-md-12 py-5 about">
        <center>
            <h2 class="mt-3 ml-4 about-title"> Sewa Motor </h2>
        </center>
        <div class="foods mt-5">
            <div class="container">
                <div class="row">
                    <?php
                    function buatRupiah($angka)
                    {
                        $hasil = "Rp " . number_format($angka, 2, ',', '.');
                        return $hasil;
                    }
                    foreach ($motor as $tor) :
                    ?>
                        <div class="col-lg-4">
                            <div class="card mt-4" style="width:250px">
                                <img class="card-img-top" src="<?= base_url('assets/img/') . $tor['image'] ?>" alt="Card image" lazyload="true">
                                <div class="card-body">
                                    <hr class="mt-1">
                                    <h4 class="card-title"><?= $tor['merk_motor']; ?></h4>
                                    <p class="card-text"><?= $tor['nama_motor']; ?></p>
                                    <p class="card-text"><?= $tor['no_pol']; ?></p>
                                    <p class="card-text"><?= buatRupiah($tor['harga']); ?> / Hari</p>
                                    <a href="<?= base_url("pesanan/sewa_motor/{$tor['id']}") ?>" class="btn btn-primary col-12 mx-auto">Sewa</a>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>