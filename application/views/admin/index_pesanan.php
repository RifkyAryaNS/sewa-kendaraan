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
                        <a class="nav-link" href="<?= base_url('admin/home'); ?>"><i class="bi bi-house-door-fill"></i> Home </a>
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
            <h3><b>Pesanan</b></h3>
        </center>
        <br>
        <div class="card" style="width:auto;">
            <div class="card-body">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Penyewa</th>
                            <th scope="col">Nama Kendaraan</th>
                            <th scope="col">No Pol</th>
                            <th scope="col">Harga Sewa</th>
                            <th scope="col">Tanggal Sewa</th>
                            <th scope="col">Lama Sewa</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Aksi</th>
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
                                <td><?= date('d F Y', $san['date_created']); ?></td>
                                <td><?= $san['lama_sewa']; ?></td>
                                <td><?= buatRupiah($subtotal); ?></td>
                                <td>
                                    <a class="btn btn-warning btn-sm bi bi-pencil-fill" href="<?= base_url("admin/pesanan/edit/{$san['id']}") ?>"></a>
                                    <a class="btn btn-danger btn-sm bi bi-eraser-fill" onclick="return confirm('Apakah anda yakin untuk menghapus data?')" href="<?= base_url("admin/pesanan/hapus/{$san['id']}") ?>"></a>
                                </td>
                            </tr>
                        <?php endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
            <?php
            echo anchor('laporanfpdf', '<div class="btn btn-sm btn-danger" style="margin-right:30px; font-size:18px; float:right;" ><i class="bi bi-card-text" style="margin-right:10px;"></i>Cetak Laporan</div>');
            ?>
            <br>
        </div>
        <br>
        <br>
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