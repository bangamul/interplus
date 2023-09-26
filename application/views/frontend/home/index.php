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

		<section id="slider" class="slider-element swiper_wrapper min-vh-75">
			<div class="slider-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption slider-caption-center">
									<h2 data-animate="fadeInUp">Halo.</h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Selamat datang di website resmi PT. Hogan Gailang Interplus</p>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('<?= base_url(); ?>/assets/images/bg-dummy-1.jpg');"></div>
						</div>
						<div class="swiper-slide dark">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-animate="fadeInUp">Peningkatan Reputasi</h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Sertifikasi ISO dapat meningkatkan citra organisasi di mata pelanggan, mitra bisnis, dan pemangku kepentingan lainnya.</p>
								</div>
							</div>
							<div class="video-wrap">
								<video id="slide-video" poster="<?= base_url(); ?>assets/images/videos/explore-poster.jpg" preload="auto" loop autoplay muted>
									<source src='<?= base_url(); ?>assets/images/videos/explore.webm' type='video/webm' />
									<source src='<?= base_url(); ?>assets/images/videos/explore.mp4' type='video/mp4' />
								</video>
								<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="container">
								<div class="slider-caption">
									<h2 data-animate="fadeInUp">Kepatuhan Hukum</h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Sertifikasi dapat membantu organisasi mematuhi regulasi dan persyaratan hukum yang berlaku.</p>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('<?= base_url(); ?>assets/images/swiper3.jpg'); background-position: center top;"></div>
						</div>
					</div>
					<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
					<div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
				</div>

			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">

				<a data-bs-toggle="modal" data-bs-target=".bs-example-modal-centered" role="button" aria-label="Request Penawaran Harga" class="button button-full button-purple center text-end header-stick bottommargin-lg newfontdark">
					<div class="container clearfix">
						Request penawaran harga Sertifikasi ISO dan SMK3 <i class="icon-caret-right" style="top:4px;"></i>
					</div>
				</a>

				<div class="modal fade bs-example-modal-centered" tabindex="-1" role="dialog" aria-labelledby="centerModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Hubungi Kami</h4>
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
										<label>Layanan :</label>
										<select name="layanan" id="layanan" class="form-select required">
											<option disabled="disabled" checked="checked">-- Pilih --</option>
											<option value="konsultasi">Konsultasi</option>
											<option value="sertifikasi">Sertifikasi</option>
											<option value="konsultasisertifikasi">Sertifikasi dan Konsultasi</option>
										</select>
									</div>
									<div class="col-12 form-group">
										<label>Standard :</label>
										<select name="layanan" id="layanan" class="form-select required">
											<option disabled="disabled" checked="checked">-- Pilih --</option>
											<option value="9001">ISO 9001:2015</option>
											<option value="13485">ISO 13485:2016</option>
											<option value="14001">ISO 14001:2015</option>
											<option value="21001">ISO 21001:2018</option>
											<option value="22000">ISO 22000:2018</option>
											<option value="27001">ISO 27001:2013</option>
											<option value="37001">ISO 37001:2016</option>
											<option value="45001">ISO 45001:2018</option>
											<option value="50001">ISO 50001:2011</option>
										</select>
									</div>
									<div class="col-12 form-group">
										<label>Bidang Usaha :</label>
										<select name="layanan" id="layanan" class="form-select required">
											<option disabled="disabled" checked="checked">-- Pilih --</option>
											<option value="konstruksi">Konstruksi</option>
											<option value="konsultankonstruksi">Konsultan Konstruksi</option>
											<option value="layanankatering">Layanan Katering</option>
											<option value="outsourching">Outsourching/Penyedia Tenaga Kerja</option>
											<option value="manufaktur">Manufaktur</option>
											<option value="lainnya">Lainnya</option>
										</select>
									</div>
									<div class="col-12 form-group">
										<label>Jadwal Pelaksanaan Sertifikasi :</label>
										<input type="date" name="jadwal" id="jadwal" class="form-control required" value="" required>
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

				<div class="container clearfix">

					<div class="heading-block topmargin-lg center">
						<h1>PT. HOGAN GAILANG INTERPLUS</h1>
						<span class="mx-auto">PT. Hogan Gailang Interplus disingkat HGI adalah perusahaan yang menyediakan jasa sertifikasi untuk berbagai sistem manajemen perusahaan. Dengan pengalaman dan keahlian yang luas, kami berkomitmen untuk membantu perusahaan Anda mencapai standar internasional dalam berbagai bidang manajemen untuk mendukung organisasi diberbagai sektor industri (swasta) maupun pemerintahan.</span>
					</div>

				</div>

				<div class="section mb-0">

					<div class="container">

						<div class="heading-block center">
							<h2>Mengapa Memilih Kami.</h2>
							<!-- <span>We provide a wide array of Usable &amp; Flexible Features</span> -->
						</div>

						<div class="row col-mb-50">

							<div class="col-lg-4 text-center text-lg-start">
								<img loading="lazy" decoding="async"data-animate="fadeInLeftBig" src="<?= base_url(); ?>assets/images/iphone.png" alt="iPhone" class="fadeInLeftBig animated">
							</div>

							<div class="col-lg-4 col-md-4 topmargin">

								<div class="w-100 mb-5">

									<div class="feature-box fbox-plain fbox-sm fbox-dark">
										<div class="fbox-content">
											<h3>Pengalaman dan Keahlian :</h3>
											<p>Kami memiliki tim auditor yang berpengalaman dan bersertifikasi yang akan membantu Anda dalam proses sertifikasi dengan tepat dan efisien.</p>
										</div>
									</div>

								</div>

								<div class="w-100 mb-5">

									<div class="feature-box fbox-plain fbox-sm fbox-dark">
										<div class="fbox-content">
											<h3>Layanan Beragam :</h3>
											<p>Kami menyediakan layanan sertifikasi untuk sistem manajemen ISO 9001, ISO 14001, ISO 22000, ISO 27001, ISO 37001, ISO 45001, dan ISO 50001, serta sistem manajemen lainnya sesuai kebutuhan perusahaan Anda.</p>
										</div>
									</div>

								</div>

								<div class="w-100">

									<div class="feature-box fbox-plain fbox-sm fbox-dark">
										<div class="fbox-content">
											<h3>Proses Sertifikasi yang Mudah :</h3>
											<p>Kami berusaha menjadikan proses sertifikasi yang mudah dan efisien untuk Anda, sehingga perusahaan Anda dapat segera memperoleh manfaat dari standar internasional yang diakui.</p>
										</div>
									</div>

								</div>

							</div>

							<div class="col-lg-4 col-md-4 topmargin">

								<div class="w-100 mb-5">

									<div class="feature-box fbox-plain fbox-sm fbox-dark">
										<div class="fbox-content">
											<h3>Reputasi yang Terpercaya :</h3>
											<p>Keandalan dan integritas adalah inti dari filosofi kami. Kami telah membangun reputasi yang terpercaya dalam memberikan layanan sertifikasi yang berkualitas.</p>
										</div>
									</div>

								</div>

								<div class="w-100 mb-5">

									<div class="feature-box fbox-plain fbox-sm fbox-dark">
										<div class="fbox-content">
											<h3>Dukungan Pelanggan</h3>
											<p>Tim kami selalu siap menjawab pertanyaan Anda dan memberikan dukungan penuh dalam perjalanan sertifikasi Anda.</p>
										</div>
									</div>

								</div>

								<div class="w-100">

									<div class="feature-box fbox-plain fbox-sm fbox-dark">
										<div class="fbox-content">
											<!-- <h3>ISO 45001 : 2018</h3> -->
											<p>Hubungi kami hari ini untuk memulai perjalanan menuju standar kualitas internasional dengan HGI sebagai mitra sertifikasi Anda. Bersama, kami akan meningkatkan performa dan reputasi perusahaan Anda.</p>
											<a href="#">klik disini</a>
										</div>
									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

				<div class="section mt-0">
					<div class="container clearfix greenwood">

						<div class="row col-mb-50">

							<div class="col-sm-6 col-lg-4 text-center bounceIn animated" data-animate="bounceIn">
								<i class="i-plain i-xlarge mx-auto icon-line2-directions"></i>
								<div class="counter counter-lined"><span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000">20</span>K+</div>
								<h5>Projek Terselesaikan</h5>
							</div>

							<div class="col-sm-6 col-lg-4 text-center bounceIn animated" data-animate="bounceIn" data-delay="200">
								<i class="i-plain i-xlarge mx-auto mb-0 icon-line2-graph"></i>
								<div class="counter counter-lined"><span data-from="3000" data-to="100" data-refresh-interval="100" data-speed="2500">100</span>%</div>
								<h5>Pengurusan dan pembuatan sertifikat mudah dan cepat. Sangat bisa diandalkan</h5>
							</div>

							<div class="col-sm-6 col-lg-4 text-center bounceIn animated" data-animate="bounceIn" data-delay="400">
								<i class="i-plain i-xlarge mx-auto mb-0 icon-line2-layers"></i>
								<div class="counter counter-lined"><span data-from="10" data-to="408" data-refresh-interval="25" data-speed="3500">100</span></div>
								<h5>Rating on google business</h5>
							</div>

						</div>

					</div>
				</div>

				<div class="container clearfix">

					<div class="clear"></div>

					<div class="heading-block center">
						<h4>Klien Kami</h4>
					</div>

					<ul class="clients-grid grid-2 grid-sm-3 grid-md-6 mb-0">
						<li class="grid-item"><a href="http://logofury.com/logo/enzo.html"><img loading="lazy" decoding="async"src="<?= base_url(); ?>assets/images/clients/1.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com"><img loading="lazy" decoding="async"src="<?= base_url(); ?>assets/images/clients/2.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofaves.com/2021/03/grabbt/"><img loading="lazy" decoding="async"src="<?= base_url(); ?>assets/images/clients/3.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofaves.com/2021/01/ladera-granola/"><img loading="lazy" decoding="async"src="<?= base_url(); ?>assets/images/clients/4.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofaves.com/2021/02/hershel-farms/"><img loading="lazy" decoding="async"src="<?= base_url(); ?>assets/images/clients/5.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com/logo/food-fight-radio.html"><img loading="lazy" decoding="async"src="<?= base_url(); ?>assets/images/clients/6.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com"><img loading="lazy" decoding="async"src="<?= base_url(); ?>assets/images/clients/7.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com/logo/up-travel.html"><img loading="lazy" decoding="async"src="<?= base_url(); ?>assets/images/clients/8.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com/logo/caffi-bardi.html"><img loading="lazy" decoding="async"src="<?= base_url(); ?>assets/images/clients/9.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com/logo/bignix-design.html"><img loading="lazy" decoding="async"src="<?= base_url(); ?>assets/images/clients/10.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com/"><img loading="lazy" decoding="async"src="<?= base_url(); ?>assets/images/clients/11.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com/"><img loading="lazy" decoding="async"src="<?= base_url(); ?>assets/images/clients/12.png" alt="Clients"></a></li>
					</ul>

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