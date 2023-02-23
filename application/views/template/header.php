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
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">

	<!-- <link href="data:image/png;base64,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" rel="shortcut icon"> -->

	<title><?= $pageTitle ?></title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="" color="white">
				<h4>RentCars</h4>
			</a>
			<div class="nav-item dropdown float-right">

				<a class="btn btn-dark dropdown-toggle" href="<?= base_url(); ?>account" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<i class="bi bi-person-circle"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end" aria-labelledby="navbarDropdown">
					<center><img src="<?= base_url('assets/img/') . $user['image']; ?>" class="rounded mx-auto d-block" width="100px" height="100px">
						<p></p>
						<p><?= $user['nama']; ?></p>
					</center>
					<hr>
					<li>
						<div class="container-fluid">
							<a class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-box-arrow-right"></i> Log Out</a>
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

			</ul>
		</div>
		</div>
	</nav>