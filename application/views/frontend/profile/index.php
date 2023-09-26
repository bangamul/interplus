<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Perspektiv.id" />
	<meta name="description" content="PT. Hogan Gailang Interplus" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />

	<link rel="preload" href="<?= base_url(); ?>assets/css/bootstrap.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css"></noscript>
	<link rel="preload" href="<?= base_url(); ?>assets/css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css"></noscript>
	<link rel="preload" href="<?= base_url(); ?>assets/css/swiper.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= base_url(); ?>assets/css/swiper.css"></noscript>
	<link rel="preload" href="<?= base_url(); ?>assets/css/dark.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= base_url(); ?>assets/css/dark.css"></noscript>
	<link rel="preload" href="<?= base_url(); ?>assets/css/font-icons.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= base_url(); ?><?= base_url(); ?>assets/css/font-icons.css"></noscript>
	<link rel="preload" href="<?= base_url(); ?>assets/css/animate.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css"></noscript>
	<link rel="preload" href="<?= base_url(); ?>assets/css/magnific-popup.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css"></noscript>
	<link rel="preload" href="<?= base_url(); ?>assets/css/custom.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= base_url(); ?>assets/css/custom.css"></noscript>
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>PT. Hogan Gailang Interplus</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="header-size-sm">
			<div class="container">
				<div class="header-row">

					<!-- Logo logo-dummy
					============================================= -->
					<div id="logo" class="mx-auto">
						<a href="index.html" class="standard-logo" data-dark-logo="<?= base_url(); ?>assets/images/logo-interplus.png"><img loading="lazy" decoding="async"src="<?= base_url(); ?>assets/images/logo-interplus.png" alt="Interplus Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="<?= base_url(); ?>assets/images/logo-interplus.png"><img loading="lazy" decoding="async"src="<?= base_url(); ?>assets/images/logo-interplus.png" alt="Interplus Logo"></a>
					</div><!-- #logo end -->

				</div>
			</div>

			<div id="header-wrap" class="border-top border-f5">
				<div class="container">
					<div class="header-row justify-content-center">

						<div class="header-misc">

							<!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger" aria-label="Read more about Seminole tax hike" ><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
							</div><!-- #top-search end -->

						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container">
								<li class="menu-item current"><a class="menu-link" href="<?= site_url() ;?>"><div>Beranda</div></a></li>
								<li class="menu-item sub-menu">
									<a class="menu-link" href="#" style="padding-top: 19px; padding-bottom: 19px;"><div>Tentang Kami<i class="icon-angle-down"></i></div></a>
									<ul class="sub-menu-container" style="">
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url('tentangkami/profil') ;?>"><div>Profil</div></a>
										</li>
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url('tentangkami/struktur') ;?>"><div>Struktur Organisasi</div></a>
										</li>
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url('tentangkami/tatakelola') ;?>"><div>Tata Kelola Perusahaan</div></a>
										</li>
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url('tentangkami/mutu') ;?>"><div>Kebijakan Mutu</div></a>
										</li>
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url('tentangkami/ketidakberpihakan') ;?>"><div>Prinsip Ketidakberpihakan</div></a>
										</li>
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url('tentangkami/antisuap') ;?>"><div>Prinsip Anti Penyuapan</div></a>
										</li>
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url('tentangkami/artilogo') ;?>"><div>Arti Logo</div></a>
										</li>
									</ul>
								</li>
								<li class="menu-item sub-menu">
									<a class="menu-link" href="#" style="padding-top: 19px; padding-bottom: 19px;"><div>Layanan<i class="icon-angle-down"></i></div></a>
									<ul class="sub-menu-container" style="">
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url('layanan/iso9001'); ?>"><div>ISO 9001:2015</div></a>
										</li>
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url('layanan/iso13485'); ?>"><div>ISO 13485:2016</div></a>
										</li>
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url('layanan/iso14001'); ?>"><div>ISO 14001:2015</div></a>
										</li>
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url('layanan/iso21001'); ?>"><div>ISO 21001:2018</div></a>
										</li>
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url('layanan/iso22000'); ?>"><div>ISO 22000:2018</div></a>
										</li>
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url('layanan/iso27001'); ?>"><div>ISO 27001:2013</div></a>
										</li>
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url('layanan/iso37001'); ?>"><div>ISO 37001:2016</div></a>
										</li>
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url('layanan/iso45001'); ?>"><div>ISO 45001:2018</div></a>
										</li>
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url('layanan/iso50001'); ?>"><div>ISO 50001:2011</div></a>
										</li>
									</ul>
								</li>
								<li class="menu-item sub-menu">
									<a class="menu-link" href="#" style="padding-top: 19px; padding-bottom: 19px;"><div>Sertifikasi<i class="icon-angle-down"></i></div></a>
									<ul class="sub-menu-container" style="">
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url("sertifikasi/konsultasi"); ?>"><div>Konsultasi</div></a>
										</li>
										<li class="menu-item sub-menu" style="">
											<a class="menu-link" href="#"><div>Alur Sertifikasi<i class="icon-angle-down"></i></div></a>
											<ul class="sub-menu-container" style="">
												<li class="menu-item" style="">
													<a class="menu-link" href="<?= site_url("sertifikasi/sertifikasi_awal"); ?>"><div>Sertifikasi Awal</div></a>
												</li>
												<li class="menu-item" style="">
													<a class="menu-link" href="<?= site_url("sertifikasi/sertifikasi_ulang"); ?>"><div>Sertifikasi Ulang</div></a>
												</li>
											</ul>
											<button class="sub-menu-trigger icon-chevron-right"></button>
										</li>
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url("sertifikasi/persyaratan"); ?>"><div>Persyaratan Sertifikasi</div></a>
										</li>
										<li class="menu-item sub-menu" style="">
											<a class="menu-link" href="#"><div>Proses Sertifikasi<i class="icon-angle-down"></i></div></a>
											<ul class="sub-menu-container" style="top: -150px !important;">
												<li class="menu-item" style="">
													<a class="menu-link" href="<?= site_url("sertifikasi/permohonan"); ?>"><div>Permohonan</div></a>
												</li>
												<li class="menu-item" style="">
													<a class="menu-link" href="<?= site_url("sertifikasi/penolakan"); ?>"><div>Penolakan Sertifikasi</div></a>
												</li>
												<li class="menu-item" style="">
													<a class="menu-link" href="<?= site_url("sertifikasi/pembekuan"); ?>"><div>Pembekuan Sertifikasi</div></a>
												</li>
												<li class="menu-item" style="">
													<a class="menu-link" href="<?= site_url("sertifikasi/kajian"); ?>"><div>Kajian Permohonan</div></a>
												</li>
												<li class="menu-item" style="">
													<a class="menu-link" href="<?= site_url("sertifikasi/audit_satu"); ?>"><div>Audit Tahap I</div></a>
												</li>
												<li class="menu-item" style="">
													<a class="menu-link" href="<?= site_url("sertifikasi/audit_dua"); ?>"><div>Audit Tahap II</div></a>
												</li>
												<li class="menu-item" style="">
													<a class="menu-link" href="<?= site_url("sertifikasi/surveillance"); ?>"><div>Surveillance</div></a>
												</li>
												<li class="menu-item" style="">
													<a class="menu-link" href="<?= site_url("sertifikasi/perjanjian"); ?>"><div>Perjanjian Sertifikasi</div></a>
												</li>
												<li class="menu-item" style="">
													<a class="menu-link" href="<?= site_url("sertifikasi/keputusan"); ?>"><div>Keputusan Sertifikasi</div></a>
												</li>
												<li class="menu-item" style="">
													<a class="menu-link" href="<?= site_url("sertifikasi/penerbitan"); ?>"><div>Penerbitan Sertifikat</div></a>
												</li>
												<li class="menu-item" style="">
													<a class="menu-link" href="<?= site_url("sertifikasi/pencabutan"); ?>"><div>Pencabutan Sertifikat</div></a>
												</li>
												<li class="menu-item" style="">
													<a class="menu-link" href="<?= site_url("sertifikasi/pengaktifan"); ?>"><div>Pengaktifan Status Sertifikasi</div></a>
												</li>
												<li class="menu-item" style="">
													<a class="menu-link" href="<?= site_url("sertifikasi/perluasan"); ?>"><div>Perluasan Ruang Lingkup</div></a>
												</li>
												<li class="menu-item" style="">
													<a class="menu-link" href="<?= site_url("sertifikasi/pengurangan"); ?>"><div>Pengurangan Ruang Lingkup</div></a>
												</li>
											</ul>
											<button class="sub-menu-trigger icon-chevron-right"></button>
										</li>
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url("sertifikasi/keluhan"); ?>"><div>Keluhan dan Banding</div></a>
										</li>
										<!-- <li class="menu-item" style="">
											<a class="menu-link" href="#"><div>Penolakan</div></a>
										</li> -->
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url("sertifikasi/ketentuan_logo"); ?>"><div>Ketentuan Penggunaan Logo</div></a>
										</li>
										<li class="menu-item" style="">
											<a class="menu-link" href="<?= site_url("sertifikasi/hak_kewajiban"); ?>"><div>Hak dan Kewajiban Klien</div></a>
										</li>
									</ul>
								</li>
								<!-- <li class="menu-item"><a class="menu-link" href="#"><div>Categories</div></a></li> -->
								<li class="menu-item"><a class="menu-link" href="<?= site_url('galeri'); ?>"><div>Galeri</div></a></li>
								<li class="menu-item"><a class="menu-link" href="<?= site_url('media'); ?>"><div>Media</div></a></li>
								<!-- <li class="menu-item"><a class="menu-link" href="#"><div>Formulir Permohonan</div></a></li> -->
								<!-- <li class="menu-item"><a class="menu-link" href="profile.html"><div>Profil</div></a></li> -->
								<li class="menu-item"><a class="menu-link" href="<?= site_url("login"); ?>"><div>Login</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>

				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row clearfix">

						<div class="col-md-9">

							<img src="<?= base_url(); ?>assets/images/avatar.jpg" class="alignleft img-circle img-thumbnail my-0" alt="Avatar" loading="lazy" decoding="async" style="max-width: 84px;">

							<div class="heading-block border-0 mb-4">
								<h3>PT. Sumsang Indonesia</h3>
								<span>Resta Tholiq Sarlil</span>
							</div>

							<div class="clear"></div>

							<div class="row clearfix">

								<div class="col-lg-12">

									<div class="tabs tabs-alt clearfix" id="tabs-profile">

										<!-- <ul class="tab-nav clearfix">
											<li><a href="#tab-feeds"><i class="icon-rss2"></i> Feeds</a></li>
											<li><a href="#tab-posts"><i class="icon-pencil2"></i> Posts</a></li>
											<li><a href="#tab-replies"><i class="icon-reply"></i> Replies</a></li>
											<li><a href="#tab-connections"><i class="icon-users"></i> Connections</a></li>
										</ul> -->

										<div class="tab-container mt-0 pt-0">

											<div class="tab-content clearfix" id="tab-feeds">

												<ul class="no-decor">
													<li>
														Lokasi : <br>
														<strong>Jakarta</strong>
													</li>
													<li>
														Alamat Tambahan : <br>
														<strong>Jl. Bambu Kuning No.6, RT.2/RW.2, Bambu Apus, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13890</strong>
													</li>
													<li>
														Jumlah Karyawan : <br>
														<strong>5.000</strong>
													</li>
												</ul>

												<div class="fancy-title topmargin title-border">
													<h4>Riwayat Pesanan</h4>
												</div>

												<table class="table table-bordered table-striped">
												  <thead>
													<tr>
													  <th>Tanggal</th>
													  <th>Produk</th>
													  <th>Status</th>
													  <th>Aksi</th>
													</tr>
												  </thead>
												  <tbody>
													<tr>
													  <td>
														<code>5/23/2021</code>
													  </td>
													  <td>ISO 12001 - Kontraktor - Sertifikasi dan Konsultasi</td>
													  <td>Proses</td>
													  <td><i class="icon-line-edit"></i></td>
													</tr>
													<tr>
													  <td>
														<code>5/23/2021</code>
													  </td>
													  <td>ISO 9001 - Kontraktor - Sertifikasi dan Konsultasi</td>
													  <td><code>Selesai</code></td>
													  <td><i class="icon-file-pdf1"></i></td>
													</tr>
													<tr>
													  <td>
														<code>5/23/2021</code>
													  </td>
													  <td>ISO 14001 - Industri - Sertifikasi</td>
													  <td><code>Selesai</code></td>
													  <td><i class="icon-file-pdf1"></i></td>
													</tr>
												  </tbody>
												</table>

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

						<div class="w-100 line d-block d-md-none"></div>

						<div class="col-md-3">

							<div class="list-group">
								<a data-bs-toggle="modal" data-bs-target=".bs-example-modal-centered" role="button" aria-label="edit profil" class="bgprimary list-group-item list-group-item-action d-flex justify-content-between"><div>Edit Profil</div><i class="icon-user"></i></a>
								
								<div class="modal fade bs-example-modal-centered" tabindex="-1" role="dialog" aria-labelledby="centerModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myModalLabel">Edit Profil</h4>
												<button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
											</div>
											<div class="modal-body">
												<form class="row" id="event-registration" action="include/form.php" method="post" enctype="multipart/form-data" novalidate="novalidate">
													<div class="form-process">
														<div class="css3-spinner">
															<div class="css3-spinner-scaler"></div>
														</div>
													</div>
													<div class="col-12 form-group">
														<label>Nama PT / Organisasi :</label>
														<input type="text" name="namapt" id="namapt" class="form-control required" value="" placeholder="Masukkan Nama PT / Perusahaan" required>
													</div>
													<div class="col-12 form-group">
														<label>Jumlah Karyawan :</label>
														<input type="text" name="jmlkry" id="jmlkry" class="form-control required" value="" placeholder="Masukkan Jumlah Karyawan" required>
													</div>
													<div class="col-12 form-group">
														<label>Lokasi :</label>
														<input type="text" name="lokasi" id="lokasi" class="form-control required" value="" placeholder="Masukkan Lokasi" required>
													</div>
													<div class="col-12 form-group">
														<label>Alamat Tambahan :</label>
														<input type="text" name="alamattambahan" id="alamattambahan" class="form-control required" value="" placeholder="Masukkan Alamat Tambahan" required>
													</div>
													<div class="col-12 form-group">
														<label>Nama Pengaju :</label>
														<input type="text" name="namapengaju" id="namapengaju" class="form-control required" value="" placeholder="Masukan Nama Pengaju" required>
													</div>
													<div class="col-12 form-group">
														<label>Nomor Handphone :</label>
														<input type="text" name="nohape" id="nohape" class="form-control required" value="" placeholder="Masukan Nomor Handphone" required>
													</div>
													<div class="col-12 form-group">
														<label>Email Tujuan Proposal :</label>
														<input type="email" name="email" id="email" class="form-control required" value="" placeholder="Masukan Email Tujuan Proposal" required>
													</div>
													<div class="col-12">
														<div class="col-12 mt-3">
															<button type="submit" name="event-registration-submit" class="btn btn-primary full">Kirim</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								
							</div>

							<div class="fancy-title topmargin title-border">
								<h4>Informasi Personal</h4>
							</div>

							<ul class="no-decor">
								<li>
									No. Handphone : <br>
									<strong>082211044023</strong>
								</li>
								<li>
									Email : <br>
									<strong>restasarlil@gmail.com</strong>
								</li>
							</ul>

							<!-- <div class="fancy-title topmargin title-border">
								<h4>Social Profiles</h4>
							</div>

							<a href="#" class="social-icon si-facebook si-small si-rounded si-light" title="Facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-gplus si-small si-rounded si-light" title="Google+">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-dribbble si-small si-rounded si-light" title="Dribbble">
								<i class="icon-dribbble"></i>
								<i class="icon-dribbble"></i>
							</a>

							<a href="#" class="social-icon si-flickr si-small si-rounded si-light" title="Flickr">
								<i class="icon-flickr"></i>
								<i class="icon-flickr"></i>
							</a>

							<a href="#" class="social-icon si-linkedin si-small si-rounded si-light" title="LinkedIn">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>

							<a href="#" class="social-icon si-twitter si-small si-rounded si-light" title="Twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a> -->

						</div>

					</div>

				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-8">

							<div class="row col-mb-50">
								<div class="col-md-6">

									<div class="widget clearfix">

										<img loading="lazy" decoding="async"src=".." alt="Image" class="footer-logo">

										<p>Hubungi kami hari ini untuk memulai perjalanan menuju standar kualitas internasional dengan HGI sebagai mitra sertifikasi Anda.</p>

									</div>

								</div>

								<div class="col-md-6">

									<div class="widget widget_links clearfix">

										<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
											<address>
												<strong>Kantor:</strong><br>
												Jl. Bambu Kuning No.6 Bambu Apus - Cipayung <br>
												Jakarta Timur, Jakarta 13890
											</address>
											<abbr title="Phone Number"><strong>Phone:</strong></abbr> <a href="tel:02122817377" target="_blank">02122817377</a><br>
											<abbr title="Fax"><strong>WA:</strong></abbr> <a href="https://wa.me/6281399889001" target="_blank">081399889001</a><br>
											<abbr title="Email Address"><strong>Email:</strong></abbr> <br><a href="mailto:info@interplus.co.id" target="_blank">info@interplus.co.id</a> <br><a href="mailto:hogangailanginterplus@gmail.com" target="_blank">hogangailanginterplus@gmail.com</a>
										</div>

									</div>

								</div>

							</div>

						</div>

						<div class="col-lg-4">

							<div class="row col-mb-50">
								<div class="col-md-4 col-lg-12">
									<div class="widget clearfix" style="margin-bottom: -20px;">

										<!-- <div class="row">
											<div class="col-lg-6 bottommargin-sm">
												<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
												<h5 class="mb-0">Total Downloads</h5>
											</div>

											<div class="col-lg-6 bottommargin-sm">
												<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
												<h5 class="mb-0">Clients</h5>
											</div>
										</div> -->

										<h4>Menu Lainnya</h4>

										<ul class="menulainnya">
											<li><a href="#">Formulir Permohonan</a></li>
											<li><a href="#">Cek Status Permohonan Sertifikasi</a></li>
											<li><a href="#">Kontak</a></li>
										</ul>

									</div>
								</div>

								<!-- <div class="col-md-5 col-lg-12">
									<div class="widget subscribe-widget clearfix">
										<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
										<div class="widget-subscribe-form-result"></div>
										<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0">
											<div class="input-group mx-auto">
												<div class="input-group-text"><i class="icon-email2"></i></div>
												<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
												<button class="btn btn-success" type="submit">Subscribe</button>
											</div>
										</form>
									</div>
								</div> -->

								<div class="col-md-3 col-lg-12">
									<div class="widget clearfix" style="margin-bottom: -20px;">

										<div class="row">
											<div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
												<!-- <a href="#" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
													<i class="icon-facebook"></i>
													<i class="icon-facebook"></i>
												</a>
												<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a> -->
											</div>
											<div class="col-6 col-md-12 col-lg-6 clearfix">
												<!-- <a href="#" class="social-icon si-dark si-colored si-rss mb-0" style="margin-right: 10px;">
													<i class="icon-rss"></i>
													<i class="icon-rss"></i>
												</a>
												<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a> -->
											</div>
										</div>

									</div>
								</div>

							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row col-mb-30">

						<div class="col-md-6 text-center text-md-start">
							Copyrights &copy; 2023 All Rights Reserved by <a href="https:/perspektiv.id" target="_blank">Perspektiv.id</a>	<br>
							<!-- <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div> -->
						</div>

						<div class="col-md-6 text-center text-md-end">
							<div class="d-flex justify-content-center justify-content-md-end">
								<a href="#" class="social-icon si-small si-borderless si-facebook" aria-label="Read more about Seminole tax hike" >
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-twitter" aria-label="Read more about Seminole tax hike" >
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-instagram" aria-label="Read more about Seminole tax hike" >
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-youtube" aria-label="Read more about Seminole tax hike" >
									<i class="icon-youtube"></i>
									<i class="icon-youtube"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-linkedin" aria-label="Read more about Seminole tax hike" >
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>
							</div>

							<div class="clear"></div>

							<!-- <i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype -->
						</div>

					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="<?= base_url(); ?>assets/js/jquery.js" async></script>
	<script src="<?= base_url(); ?>assets/js/plugins.min.js" async></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="<?= base_url(); ?>assets/js/functions.js" async></script>

</body>
</html>