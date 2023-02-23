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
						<button class="btn btn-primary" href="<?= base_url('admin/beranda/index'); ?>" type="button"><i class="bi bi-house-door-fill"></i> Home </button>
					</li>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li class="nav-item">
						<div class="dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-book-fill"></i>
								Data Master
							</a>

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
	<!-- isi -->
	<center>
		<!-- Jumbotron -->

		<!-- End of Jumbotron -->

		<div class="col-md-12 py-5 about">
			<h2 class="mt-3 ml-4 about-title"> Rental </h2>

			<!-- card -->
			<div class="foods mt-5">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="card mt-4" style="width:250px">
								<div class="card-body">
									<hr class="mt-1">
									<h4 class="card-title">Total Pesanan</h4>
									<p class="card-title"><?= $pesan ?></p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card mt-4" style="width:250px">
								<div class="card-body">
									<hr class="mt-1">
									<h4 class="card-title">Jumlah Mobil</h4>
									<p class="card-title"><?= $mobil ?></p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card mt-4" style="width:250px">
								<div class="card-body">
									<hr class="mt-1">
									<h4 class="card-title">Jumlah Motor</h4>
									<p class="card-title"><?= $motor ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end card -->

			<div class="container">
				<div class="fact mt-5">
					<div class="row align-items-center">
						<div class="col-sm-8">
							<p class="fact-title">
								Did you know ?
							</p>
							<p class="fact-explain mt-3">
								Nutrisi atau gizi adalah substansi organik yang dibutuhkan
								organisme untuk fungsi normal dari sistem tubuh, pertumbuhan,
								pemeliharaan kesehatan. Penelitian di bidang nutrisi mempelajari
								hubungan antara makanan dan minuman
							</p>
						</div>

						<div class="col-sm-3 text-right about-image">
							<img src="<?= base_url('assets/img/rent1.png'); ?>" height="200px" alt="Did You Know?">
						</div>
					</div>
				</div>

				<div class="why" style="margin-top: 100px;">
					<div class="row align-items-center">
						<div class="col-sm-3 text-left about-image">
							<img src="<?= base_url('assets/img/rent2.png'); ?>" height="200px" alt="Why UniHealth">
						</div>

						<div class="col-sm-8">
							<p class="fact-title">
								Why UniHealth ?
							</p>
							<p class="fact-explain mt-3">
								Nutrisi atau gizi adalah substansi organik yang dibutuhkan
								organisme untuk fungsi normal dari sistem tubuh, pertumbuhan,
								pemeliharaan kesehatan. Penelitian di bidang nutrisi mempelajari
								hubungan antara makanan dan minuman
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } else { ?>
		<div class="container mt-5">
			<div class="alert alert-danger" role="alert">
				<p class="text-center">
					Youre not an admin
				</p>
			</div>
		</div>
	<?php } ?>