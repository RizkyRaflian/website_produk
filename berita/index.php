<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mandiri KCP UNNES</title>

	<link rel="stylesheet" href="assets/css/bootstrap-grid.css">
	<link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
	<link rel="stylesheet" href="assets/css/bootstrap-utilities.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-dark p-2">
	  <div class="container-fluid">
	    <a class="navbar-brand d-flex align-items-center" href="#">
	    	<img src="assets/img/logo-sidoarjo.png" width="30" height="24">
	    	&nbsp; <span>Mandiri KCP Semarang UNNES</span>
	    </a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarScroll">
	      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index.php?page=beranda">Beranda</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="index.php?page=simpanan">Simpanan</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="index.php?page=pinjaman">Pinjaman</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="index.php?page=kartu-kredit&debit">Kartu Kredit & Debit</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="index.php?page=investasi&asuransi">Investasi & Asuransi</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="index.php?page=ebanking">E-Banking</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<header id="header">
		<div class="d-flex align-items-center p-3">
			<div class="container header-box mt-3">
				<div class="row">
					<div class="col-md-12 text-center">
						<img src="" class="img-fluid">
						<h3 class="mt-2">KCP Semarang UNNES</h3>
						<p>"Together be Winner, forever yes"</p>
						
					</div>
				</div>
			</div>
		</div>
	</header>

	<section id="sec-article" class="mt-3">
		

		<div class="container">

			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page"><?= $_GET['page'] ?></li>
			  </ol>
			</nav>

			<div class="row mt-3">
			<?php 

				if(isset($_GET['page'])) {
					$page = $_GET['page'];

					switch ($page) {
						case 'beranda':
							include "kategori/beranda.php";
							break;

						case 'simpanan':
							include "kategori/simpanan.php";
							break;

						case 'detail':
							include "kategori/detail-post.php";
							break;

						case 'pinjaman':
							include "kategori/pinjaman.php";
							break;

						case 'kartu':
							include "kategori/kartu.php";
							break;

						case 'invest&asuransi':
							include "kategori/invest&asuransi.php";
							break;

						case 'ebanking':
							include "kategori/ebanking.php";
							break;

						default:
							echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
							break;
					}
				} else {
					header("location: index.php?page=beranda");
					include "kategori/beranda.php";
				}

			 ?>

	</section>

	<footer id="footer" class="mt-5 p-3 bg-dark">
		<div class="container text-center">
			<p class="text-white">&copy;&nbsp; Copyright By Raflian | Repost by <a href='https://bankmandiri.co.id/' title='StokCoding.com' target='_blank'>bankmandiri.co.id</a>
			</p>
		</div>
	</footer>



	<script src="assets/js/bootstrap.js"></script>

</body>
</html>