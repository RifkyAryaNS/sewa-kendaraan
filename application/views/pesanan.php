<?php if ($this->session->userdata('email')) { ?>
    <!-- KONTEN -->
    <div class="container-fluid">
        <br>
        <center>
            <h3><b>Pesanan</b></h3>
        </center>
        <br>
        <div class="card" style="width:auto;">
            <div class="card-body">
                <table class="table" id="">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Penyewa</th>
                            <th scope="col">Nama Kendaraan</th>
                            <th scope="col">No Pol</th>
                            <th scope="col">Harga Sewa</th>
                            <th scope="col">Lama Sewa</th>
                            <th scope="col">Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($pesan)) :
                        ?>
                            <tr>
                                <td colspan=10>
                                    <div class="alert alert-danger" role="alert">
                                        <center>Maaf, Tabel Pesanan Kosong !</center>
                                    </div>
                                </td>
                            </tr>
                        <?php endif;
                        ?>
                        <?php
                        $no = 1;
                        function buatRupiah($angka)
                        {
                            $hasil = "Rp " . number_format($angka, 2, ',', '.');
                            return $hasil;
                        }
                        foreach ($pesan as $san) :
                            $subtotal = $san['harga'] * $san['lama_sewa'];
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $san['nama']; ?></td>
                                <td><?= $san['nama_kendaraan']; ?></td>
                                <td><?= $san['no_pol']; ?></td>
                                <td><?= buatRupiah($san['harga']); ?> / Hari</td>
                                <td><?= $san['lama_sewa']; ?></td>
                                <td><?= buatRupiah($subtotal); ?></td>
                            </tr>
                        <?php endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <a class="btn btn-success" style="float: right;" href="<?= base_url("pesanan/hapus_pesanan") ?>">Checkout</a>
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