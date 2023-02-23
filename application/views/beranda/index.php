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
								Pesanan
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

			<div class="container">
				<div class="fact mt-5">
					<div class="row align-items-center">
						<div class="col-sm-8">
							<p class="fact-title">
								Did you know ?
							</p>
							<p class="fact-explain mt-3">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry.
								Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
								when an unknown printer took a galley of type and scrambled it to make a type specimen book.
								It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
								It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
								and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
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
								Why RentCars ?
							</p>
							<p class="fact-explain mt-3">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry.
								Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
								when an unknown printer took a galley of type and scrambled it to make a type specimen book.
								It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
								It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
								and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>