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
	<link href="assets/css/poup.css" rel="stylesheet">
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/fluidbox.min.css" rel="stylesheet">
	<link href="assets/css/font-icon.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
	<link href="assets/css/aos.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/nav.css" rel="stylesheet">
	<link href="assets/css/couple.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="assets/images/logo-black.png">

</head>


<body>
	<?php require_once('Admin/Api/koneksi.php'); ?>
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
				<!-- <li><a href="listTamu.php">TAMU UNDANGAN</a></li>
				<li><a href="aboutApps.php">TENTANG APLIKASI</a></li>
				<li><a href="Login.php">MASUK</a></li> -->
			</ul>
		</div>
	</header>
	<!-- end = menu -->
	
	<!-- Bottom Navbar -->

	<nav class="nav d-md-none d-lg-none d-xl-none" >
	<a href="#header" class="nav__link">
		<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
			<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
		</svg>
		<span class="nav__text">Home</span>
	</a>
	<a href="#couple" class="nav__link">
		<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
			<path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
		</svg>
		<span class="nav__text">Couple</span>
	</a>
	<a href="#ceritaKita" class="nav__link">
		<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
			<path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
		</svg>
		<span class="nav__text">Story</span>
	</a>
	<a href="#gallery" class="nav__link">
		<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
			<path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
			<path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
		</svg>
		<span class="nav__text">Galery</span>
	</a>
	<a href="#location" class="nav__link">
		<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
			<path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
			<path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
		</svg>
		<span class="nav__text">Location</span>
	</a>
	</nav>
	<!-- start = konten save the date -->
	<?php 
		$resepsi = mysqli_query($conn,"SELECT * FROM resepsi");
		while ($infoResepsi = mysqli_fetch_array($resepsi)) {
	?>
	<div id="header" data-aos="fade-down" class="main-slider" style="background:url(Admin/fileUpload/<?php echo $infoResepsi['fileGambar'];?>); background-size:cover; "  >
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
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					
					<div class="heading">
						<!-- <h2 class="title">Sambutan</h2> -->
						<h3 class="title" data-aos="flip-left">اَلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَا تُهُ</h3>
						<span class="heading-bottom" data-aos="zoom-in-up"><i class="icon icon-star"></i></span>
					</div>
					<div data-aos="zoom-in-down">
						<!-- statrt = untuk menampilkan sambutan -->
						<?php
							$sambutan = mysqli_query($conn,"SELECT * FROM sambutan");
							while ($tampilSambutan=mysqli_fetch_array($sambutan)) {
						?>
						<!-- bagian pembuka sambutan-->
						<h4 class="desc margin-bottom"><?php echo $tampilSambutan['pembukaSambutan'];?> </h4>
						<br>
						<!-- bagian isi sambutan -->
						<?php echo $tampilSambutan['isiSambutan'];?> 
						<br>
						<!-- bagian penutup sambutan -->
						<?php echo $tampilSambutan['penutupSambutan'];?>
						</h3>
						<?php } ?>
						<!-- end = untuk menampilkan sambutan -->
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- end =konten sambutan -->
	
	<!-- satart = mempelai -->
	
	
	<section class="contact-area center-text" id="couple">
		<div class="heading w-details-area"  data-aos="zoom-in">
			<h2 class="title">Mempelai</h2>
			<span class="heading-bottom"><i class="icon icon-star"></i></span>
		</div>
		<div class="contact-wrapper section float-left">
			<div class="container">	
				<img class="photo" data-aos="fade-right" src="assets/images/oki2.jpeg">
				<h3 data-aos="zoom-out">Oki Sulton</h3>
				<h5 data-aos="fade-down">Putra Bp. Romadon & Ibu Tasmiyah</h5>
				<h6 data-aos="zoom-in-up">Kuwaton (03/03), Purwodadi, Tembarak, Temanggung</h6>
			</div>
		</div>
		<!-- start = foto gedung -->
		<div class="contact-wrapper section float-left">
			<div class="container ">
				<img class="photo" data-aos="fade-left" src="assets/images/hana2.jpeg">
				<h3 data-aos="zoom-out">Siti Nurhana</h3>
				<h5 data-aos="fade-down">Putri Bp. Sumarlan & Ibu Kuliyah</h5>
				<h6 data-aos="zoom-in-up">Dalem (02/01), Teogowanuh, Kaloran, Temanggung</h6>
			</div>
		</div>
		
	
	</section>
	<!-- end = mempelai -->

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
								<a href="Admin/fileUpload/<?php echo $infoGaleri['namaFile'];?>" data-fluidbox><img data-aos="zoom-in-up" class="margin-bottom" src="Admin/fileUpload/<?php echo $infoGaleri['namaFile'];?>" style="max-width: 100%; width:350px; height:450px; object-fit: cover; object-position: 100% 70%" ></a>
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
	<section class="contact-area" id="location">
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
						<div>
							<a href="https://bit.ly/OkiHanaWeddingMaps">
								<h4>Open in Maps</h4>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- start = foto gedung -->
		<div class="contact-wrapper section float-right">
			<div class="container">
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-10">
						<div class="margin-bottom" data-aos="fade-up"
						data-aos-anchor-placement="top-center">
								<img src="Admin/fileUpload/<?php echo $infoLokasi['gambarGedung']; } ?>" style="max-width: 100%; height: auto;">
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
		<div class="container center-text" id="sosmed" data-aos="fade-in">
			
			<div class="logo-wrapper" >
				<a class="logo" data-aos="fade-down" href="#"><img src="assets/images/logo-black.png" alt="Logo Image"></a>
				<i class="icon icon-star" data-aos="fade-up"></i>
			</div>
			<ul class="social-icons" data-aos="zoom-in">
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
				<li><a href="#sambutan">SAMBUTAN</a></li>
				<li><a href="#ceritaKita">CERITA KITA</a></li>
				<li><a href="#gallery">GALERI</a></li>
				<!-- <li><a href="listTamu.php">TAMU UNDANGAN</a></li> -->
			</ul>
			<p class="copyright"> Copyright &copy;<script>document.write(new Date().getFullYear());</script>
			 -  Dibuat dengan <i class="icon-heart" aria-hidden="true"></i> oleh Oki Sulton</p>
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
	<script src="assets/js/smoothscroll.js"></script>
	<script>
		AOS.init({
			duration: 1200,
		});
	</script>

	<script type="text/javascript">
		var el = document.documentElement;
		el.requestFullscreen
	</script>
	
</body>
</html>