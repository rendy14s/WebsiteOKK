<?php 
session_start();
$username = $_SESSION['username'];
	

include "../Koneksi_Php/koneksi.php";
	$no = $_GET['no'];
	$jumlah = $_POST['jumlah'];
	$tribun = $_POST['tribun'];
	$harga1 = $_POST['harga1'];
	$harga2 = $_POST['harga2'];
	$harga3 = $_POST['harga3'];
	$harga4 = $_POST['harga4'];

	$tanggal = $_POST['users'];
	$pertandingan = $_POST['pertandingan'];



	if($tribun == '1'){
		$tribun = "Kategori 1";
		$total = $jumlah * $harga1;
	}
	else if($tribun == '2' ){
		$tribun = "Kategori 2";
		$total = $jumlah * $harga2;
	}
	else if($tribun == '3'){
		$tribun = "VIP Timur";
		$total = $jumlah * $harga3;
	}
	else if($tribun == '4'){
		$tribun = "VIP Barat (VVIP)";
		$total = $jumlah * $harga4;
	}


?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>PERSIJA JAKARTA</title>
		<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="../js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="../css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		
	</head>
	<body>
	
	
		<div class="header about-head">
			<div class="container">
				
				<div class="logo">
					<a href="../index.php"><span>P</span>ersija</a>
				</div>
				
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
						<li><a href="../index.php">Home</a></li>
						<li><a href="../about.php">About</a></li>
						<li><a href="../contact.php">Contact</a></li>
						<?php
						if (empty($_SESSION['status'])){ 
						echo '<li><a href="../enter.php">Login</a></li>';
						}
						else if ($_SESSION['status'] == "user"){
							echo '<li><a href="../User-Account/pages/indexuserhomepage.php">'.$username.'</a></li>';
							echo '<li><a href="../logout.php">Logout</a></li>';
						}
						else if ($_SESSION['status'] == "admin"){
							echo '<li><a href="../Admin/pages/index.php">'.$username.'</a></li>';
							echo '<li><a href="../logout.php">Logout</a></li>';
						}
						?>
					</ul>
				</div>
				<div class="clearfix"> </div>
				
				<script>
					$( "span.menu" ).click(function() {
					  $( ".top-nav ul" ).slideToggle( "slow", function() {
					    // Animation complete.
					  });
					});
				</script>			
			</div>
			</div>
		<div class="contact">
			<div class="breadcrumbs">
				<div class="container">
					<div class="breadcrumbs-left">
						<h1>Join With Us!</h1>
					</div>
					<div class="breadcrumbs-right">
						<ul>
							<li><a href="../index.php">Home</a> <label>:</label></li>
							<li>Join Us</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="contact">
				<div class="container">
					<div class="contact-grids">
						<div class="contact-right">
							<h2>Join Data</h2>
						<form class="form-horizontal" role="form" method="POST" action="booking.php">
								<div>
									<span>Username</span>
								<input type="text" name="username" value="<?php echo $username; ?>" readonly>
								</div>
								<div>
									<span>Tanggal</span>
									<?php
					 echo '<input type="date" name="tanggal" value="'.$tanggal.'"  readonly>';
					 ?> 
								</div>
								<div>
									<span>Pertandingan</span>
									<?php
					 echo '<input type="text" name="pertandingan" value="'.$pertandingan.'"  readonly>';
						

						?>
								</div>
								<div>
									<span>Jumlah Tiket</span>
								 <?php
					 echo '<input type="text" name="jml_tiket" value="'.$jumlah.'"  readonly>';
					 ?>
								</div>
								<div>
									<span>Harga Tiket</span>
									<?php
					 echo '<input type="text" name="harga" value="'.$total.'"  readonly>';
						

						?>
								</div>
								<div>
									<span>Tribun</span>
									<input type="text" name="tribun" value="<?php echo $tribun; ?>" readonly>
								</div>
								<div>
									<span>Atas Nama</span>
									<input type="text" name="atas_nama" placeholder="Atas Nama" required>
								</div>
								<div>
									<span>Alamat Email</span>
									<input type="text" name="email" placeholder="Alamat Email" required>
								</div>
								<div>
									<span>No Telephone</span>
									<input type="text" name="telepon" placeholder="No Telepon" required>
								</div>
								<input type="submit" Value="Submit" />
							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
		</div>
		<!---- contact ----->
	<!---- container ---->
	<div class="footer">
				<div class="top-footer">
					<div class="container">
						<div class="top-footer-grids">
							<div class="top-footer-grid">
								<h3>Contact us</h3>
								<ul class="address">
									<li><span class="map-pin"> </span><label>Kompleks Stadion Utama Gelora BUng Karno, Pintu VIII. Senayan Jakarta Pusat.</label></li>
									<li><span class="mob"> </span>(+62) 838 7714 5594</li>
									<li><span class="msg"> </span><a href="mailto:yourname@yoursite.com">andrvaldi@gmail.com</a></li>
								</ul>
							</div>
							<div class="top-footer-grid">
								<h3><span><label>P</label>ersija Tweets</span></h3>
								<a class="twitter-timeline" href="https://twitter.com/persija_jkt?lang=id" data-tweet-limit="2"  data-aria-polite="assertive" data-chrome="nofooter noborders" width="800" height="250">Tweets by @Persija_Jkt</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
							</div>
							<div class="clear"> </div>
						</div>
					</div>
				</div>
				<!----start-bottom-footer---->
				<div class="bottom-footer">
					<div class="container"> 
						<div class="bottom-footer-left">
							<p>&#169; Copyright 2016 <a href="#">#GUEPERSIJA</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!----//End-bottom-footer---->
			</div>
	</body>
</html>

