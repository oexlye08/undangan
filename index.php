<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Wedding Invitation</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Playball%7CBitter" rel="stylesheet">
	<!-- Stylesheets -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/fluidbox.min.css" rel="stylesheet">
	<link href="assets/css/font-icon.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
	<link href="assets/css/aos.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="assets/images/logo-black.png">

	<style>
		#top a {
			padding: 1rem;
			color: #007bff;
			position: fixed;
			right: 3rem;
			bottom: 3rem;
		}
		#top a:hover {
			color: #085eb9;
		}
	</style>
	
</head>
<body>
	<?php require_once('Admin/Api/koneksi.php'); ?>
	

	<div id="top">
		<a href="#header">
			<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-up-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 8.354a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 6.207V11a.5.5 0 0 1-1 0V6.207L5.354 8.354z"/>
			</svg>
		</a>
	</div>
	<!-- start = Menu -->
	<header>
		<div class="container">
			<a class="logo" href="#"><img src="assets/images/logo-white.png" alt="Logo"></a>
			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="icon icon-bars"></i></div>
			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="index.php">BERANDA</a></li>
				<li><a href="#sambutan">SAMBUTAN</a></li>
				<li><a href="#ceritaKita">CERITA KITA</a></li>
				<li><a href="#gallery">GALERI</a></li>
				<li><a href="listTamu.php">TAMU UNDANGAN</a></li>
				<li><a href="aboutApps.php">TENTANG APLIKASI</a></li>
				<li><a href="Login.php">MASUK</a></li>
			</ul>
		</div>
	</header>
	<!-- end = menu -->
	
	
	<!-- start = konten save the date -->
	<?php 
		$resepsi = mysqli_query($conn,"SELECT * FROM resepsi");
		while ($infoResepsi = mysqli_fetch_array($resepsi)) {
	?>
	<div id="header" data-aos="fade-down" class="main-slider" style="background:url(Admin/fileUpload/<?php echo $infoResepsi['fileGambar'];?>); background-size:cover;"  >
		<div class="display-table center-text">
			<div class="display-table-cell">
				<div class="slider-content animate__animated animate__fadeInUp">
				
					<i class="small-icon icon icon-tie"></i>
					<?php
						$getTanggal = $infoResepsi['tglResepsi'];
						$pecahTanggal = explode("-", $getTanggal);
						$tahun = $pecahTanggal[0];
						$bulan = $pecahTanggal[1];
						$tanggal = $pecahTanggal[2];
						
						if ($bulan == "01") {
							echo "<h5 = class'date'>".$tanggal." Januari ".$tahun."</h5>";
						} else if ($bulan == "02"){
							echo "<h5 = class'date'>".$tanggal." Februari ".$tahun."</h5>";
						}else if ($bulan == "03"){
							echo "<h5 = class'date'>".$tanggal." Maret".$tahun."</h5>";
						} else if($bulan == "04"){
							echo "<h5 = class'date'>".$tanggal." April ".$tahun."</h5>";
						} else if ($bulan == "05"){
							echo "<h5 class='date'>".$tanggal." Mei ".$tahun."</h5>";
						} else if ($bulan == "06"){
							echo "<h5 class='date'>".$tanggal." Juni ".$tahun."</h5>";
						} else if ($bulan == "07"){
							echo "<h5 = class'date'>".$tanggal." Juli ".$tahun."</h5>";
						} else if ($bulan == "08"){
							echo "<h5 = class'date'>".$tanggal." Agustus ".$tahun."</h5>";
						}else if ($bulan == "09"){
							echo "<h5 = class'date'>".$tanggal." September ".$tahun."</h5>";
						}else if ($bulan == "10"){
							echo "<h5 = class'date'>".$tanggal." Oktober ".$tahun."</h5>";
						}else if ($bulan == "11"){
							echo "<h5 = class'date'>".$tanggal." November ".$tahun."</h5>";
						}else if ($bulan == "12"){
							echo "<h5 = class'date'>".$tanggal." Desember ".$tahun."</h5>";
						}

					?>
					<h3 class="pre-title">Save The Date</h3>
					<h1 class="title"><?php echo $infoResepsi['namaPria'];?> <i class="icon icon-heart"></i> <?php echo $infoResepsi['namaWanita'];?></h1>
					<?php
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<!-- end = konten save the date -->
	
	<!-- start = konten sambutan -->
	<section class="section story-area center-text" id="sambutan">
		<div class="container">
			<div class="row"
				data-aos="fade-right">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					
					<div class="heading">
						<h2 class="title">Sambutan</h2>
						<span class="heading-bottom"><i class="icon icon-star"></i></span>
					</div>
					<div data-aos="fade-left">
						<!-- statrt = untuk menampilkan sambutan -->
						<?php
							$sambutan = mysqli_query($conn,"SELECT * FROM sambutan");
							while ($tampilSambutan=mysqli_fetch_array($sambutan)) {
						?>
						<!-- bagian pembuka sambutan-->
						<p class="desc margin-bottom"><?php echo $tampilSambutan['pembukaSambutan'];?> 
						<br>
						<!-- bagian isi sambutan -->
						<?php echo $tampilSambutan['isiSambutan'];?> 
						<br>
						<!-- bagian penutup sambutan -->
						<?php echo $tampilSambutan['penutupSambutan'];?>
						</p>
						<?php } ?>
						<!-- end = untuk menampilkan sambutan -->
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- end =konten sambutan -->
	

	<!-- start = Coutdown acara dimulai resepsi -->
	<section class="section counter-area center-text">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-12">
					<div class="heading" data-aos="fade-up">
						<h2 class="title">Jangan Lupa</h2>
						<div>
							<?php
								$hitungTgl = mysqli_query($conn,"SELECT * FROM resepsi");
								while ($hTgl = mysqli_fetch_array($hitungTgl)) {
									$tgl = $hTgl['tglResepsi']; 
									$pTgl = explode("-", $tgl);
									$hYears=$pTgl[0];
									$hMounth = $pTgl[1];
									$hDay = $pTgl[2];
									$jam =  (int)((mktime(0,0,0,$hMounth,$hDay,$hYears)-time())/86400);
							?>
						</div>
						<span class="heading-bottom"><i class="color-white icon icon-star"></i></span>
					</div>
				</div>
				
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					
					<div class="remaining-time" data-aos="zoom-in-up">
						<?php 
							echo "Masih Ada Waktu ".$jam." Hari Lagi, Sampai Tanggal $hDay-$hMounth-$hYears";
							echo "<br>";
							echo "Acara Resepsi Kami Akan Dilaksanakan Pada Tanggal $hDay-$hMounth-$hYears Pukul ".$hTgl['jamResepsi'];
							} 
						?>
						

					</div>

				</div>
				
			</div>
		</div>
	</section>
	<!-- end = Coutdown acara dimulai resepsi -->


	<!-- start = konten cerita -->
	<section class="section w-details-area center-text" id="ceritaKita">
		<div class="container">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					
					<div class="heading"  data-aos="zoom-in">
						<h2 class="title">Cerita Kita</h2>
						<span class="heading-bottom"><i class="icon icon-star"></i></span>
					</div>
					
					<!-- start = konten bagian cerita  -->
					<div class="wedding-details margin-bottom">
						<?php 
							$cerita = mysqli_query($conn,"SELECT * FROM cerita");
							while ($infoCerita = mysqli_fetch_array($cerita)) {
						?>
						<?php 
							$id=$infoCerita['idCerita'];
							if ($id%2 == 0 ) {
						?>
						<div class="w-detail right" data-aos="zoom-in-left">
							 <img src="Admin/fileUpload/<?php echo $infoCerita['gambarCerita'];?>"> 
							<h4 class="title" data-aos="zoom-in"><?php echo $infoCerita['judulCerita'];?></h4>
							<p data-aos="fade-up"><?php echo $infoCerita['isiCerita'];?></p>
						</div>
						<?php	
						} else if($id%2 == 1){
						?>
						<div class="w-detail left" data-aos="zoom-in-right">
							<img src="Admin/fileUpload/<?php echo $infoCerita['gambarCerita'];?>"> 
							<h4 class="title" data-aos="zoom-in"><?php echo $infoCerita['judulCerita'];?></h4>
							<p data-aos="fade-up"><?php echo $infoCerita['isiCerita'];?></p>
						</div>
						<?php
						}
						?>
					
						<?php
							}
						?>
						<!-- end = konten bagain cerita -->
						
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- end = konten cerita -->
	
	<!-- start = wedding ceremoni -->
	<section class="section ceremony-area center-text" id="wedding">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					
					<div class="heading" data-aos="fade-up">
						<h2 class="title">Wedding & Ceremonies</h2>
						<span class="heading-bottom"><i class="color-white icon icon-star"></i></span>
					</div>

					<div class="ceremony margin-bottom" data-aos="zoom-in-up">
						<?php
							$adat = mysqli_query($conn,"SELECT * FROM adat");
							while ($infoAdat = mysqli_fetch_array($adat)) {
								echo "<p class='desc'>".$infoAdat['penjelasan']."</p>";
							}
						?>
						
				
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- end = wedding ceremoni -->
	
	
	<!-- start = gallery prewedding -->
	<section class="section galery-area center-text" id="gallery">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12">
					
					<div class="heading" data-aos="fade-down">
						<h2 class="title">Gallery Prewedding</h2>
						<span class="heading-bottom"><i class="icon icon-star"></i></span>
					</div>
					
					<div class="image-gallery">
						
						<!-- start = untuk menampilkan foto -->
						<!-- nanti setting ukuran 600x400 -->
						<div class="row">
							<?php
								$galeri = mysqli_query($conn,"SELECT * FROM galery LIMIT 6");
								while ($infoGaleri = mysqli_fetch_array($galeri)) {
								
								
							?>
							<div class="col-md-4 col-sm-6">
								<a href="Admin/fileUpload/<?php echo $infoGaleri['namaFile'];?>" data-fluidbox><img data-aos="zoom-in-up" class="margin-bottom" src="Admin/fileUpload/<?php echo $infoGaleri['namaFile'];?>" style="width:350px; height:200px;" ></a>
							</div>
							<?php
								}
							?>
							
							
						</div>
						<!-- end = untuk tampilkan foto -->
						
						<a class="btn-2 margin-bottom gallery-btn" href="gallery.php" data-aos="flip-up">VIEW ALL GALLERY</a>
						
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- end = galery prewedding -->
	

	<!-- satart = lokasi prewed -->
	<section class="contact-area">
		<div class="contact-wrapper section float-left">
			<div class="container">
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-10">
						<div class="heading">
							<h3 class="title"  data-aos="fade-right">Lokasi Resepsi</h3>
							<i class="icon icon-star"  data-aos="fade-zoom-in"></i>
						</div>
						
						<div class="margin-bottom" data-aos="zoom-out-left">
							<p>Alamat :</p>
							<?php 
							$lokasi = mysqli_query($conn,"SELECT * FROM resepsi");
							while ($infoLokasi = mysqli_fetch_array($lokasi)) {
								 echo $infoLokasi['alamatResepsi'];
								 echo "<h4>".$infoLokasi['namaGedung']."</h4>";
						
							?>	
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- start = foto gedung -->
		<div class="contact-wrapper section float-right">
			<div class="container">
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-10">
						<div class="margin-bottom" data-aos="fade-up"
						data-aos-anchor-placement="top-center">
							<img src="Admin/fileUpload/<?php echo $infoLokasi['gambarGedung']; } ?>" style="width :535px; height :350px;">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end foto gedung -->
		
	
	</section>
	<!-- end = lokasi prewed -->
	
	
	<!-- start = footer  -->
	<footer>
		<div class="container center-text" id="sosmed">
			
			<div class="logo-wrapper">
				<a class="logo" href="#"><img src="assets/images/logo-black.png" alt="Logo Image"></a>
				<i class="icon icon-star"></i>
			</div>
			<ul class="social-icons">
				<?php 
					$sosmed = mysqli_query($conn,"SELECT * FROM sosmed");
					while ($infoSosmed = mysqli_fetch_array($sosmed)) {
						
					
				?>
				<li><a href="#"><i class="icon icon-heart"></i></a></li>
				<li><a href="<?php echo $infoSosmed['twitter'];?>" target="_blank"><i class="icon icon-twitter"></i></a></li>
				<li><a href="<?php echo $infoSosmed['ig'];?>" target="_blank"><i class="icon icon-instagram"></i></a></li>
				<li><a href="<?php echo $infoSosmed['fb'];?>" target="_blank"><i class="icon icon-facebook"></i></a></li>
				<?php
					}
				?>
			</ul>
			<ul class="footer-links">
				<li><a href="index.php">BERANDA</a></li>
				<li><a href="#sambuta">SAMBUTAN</a></li>
				<li><a href="#ceritaKita">CERITA KITA</a></li>
				<li><a href="#gallery">GALERI</a></li>
				<li><a href="listTamu.php">TAMU UNDANGAN</a></li>
			</ul>
			<p class="copyright"> Copyright &copy;<script>document.write(new Date().getFullYear());</script>
			 -  Dibuat dengan <i class="icon-heart" aria-hidden="true"></i> oleh Medan City Store</p>
		</div>
	</footer>
	<!-- end = footer -->

	<script src="assets/js/jquery-3.1.1.min.js"></script>	
	<script src="assets/js/tether.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/jquery.fluidbox.min.js"></script>
	<script src="assets/js/scripts.js"></script>
	<script src="assets/js/aos.js"></script>
	<script src="node_modules/onscroll/smoothscroll.js"></script>
	<script>
		AOS.init({
			duration: 1200,
		});
	</script>
	
</body>
</html>