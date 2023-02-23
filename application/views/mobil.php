    <div class="col-md-12 py-5 about">
        <center>
            <h2 class="mt-3 ml-4 about-title"> Sewa Mobil </h2>
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
                    foreach ($mobil as $bil) :
                    ?>
                        <div class="col-lg-4">
                            <div class="card mt-4" style="width:250px">
                                <img class="card-img-top" src="<?= base_url('assets/img/') . $bil['image'] ?>" alt="Card image" lazyload="true">
                                <div class="card-body">
                                    <hr class="mt-1">
                                    <h4 class="card-title"><?= $bil['merk_mobil']; ?></h4>
                                    <p class="card-text"><?= $bil['nama_mobil']; ?></p>
                                    <p class="card-text"><?= $bil['no_pol']; ?></p>
                                    <p class="card-text"><?= buatRupiah($bil['harga']); ?> / Hari</p>
                                    <a href="<?= base_url("pesanan/sewa_mobil/{$bil['id']}") ?>" class="btn btn-primary col-12 mx-auto">Sewa</a>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>