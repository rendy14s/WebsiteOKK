<?php 
session_start();
$username = $_SESSION['username'];
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
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
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
					<a href="index.php"><span>P</span>ersija</a>
				</div>
				
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
						<?php
						if (empty($_SESSION['status'])){ 
						echo '<li><a href="enter.php">Login</a></li>';
						}
						else if ($_SESSION['status'] == "user"){
							echo '<li><a href="User-Account/pages/indexuserhomepage.php">'.$username.'</a></li>';
							echo '<li><a href="logout.php">Logout</a></li>';
						}
						else if ($_SESSION['status'] == "admin"){
							echo '<li><a href="Admin/pages/index.php">'.$username.'</a></li>';
							echo '<li><a href="logout.php">Logout</a></li>';
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
		
		<div class="about">
			
			<div class="breadcrumbs">
				<div class="container">
					<div class="breadcrumbs-left">
						<h1>About</h1>
					</div>
					<div class="breadcrumbs-right">
						<ul>
							<li><a href="index.php">Home</a> <label>:</label></li>
							<li>About</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		
		</div>
		<div class="about-top-grids">
			<div class="container">
				<div class="about-wel wel-head text-center">
					<h3>About <span>P</span>ersija</h3>
					<p>Persija (Persatuan Sepak Bola Indonesia Jakarta) </p>
				</div>
			
				<div class="about-grids">
					<div class="about-grids-row1">
						<p>Persija (singkatan dari Persatuan Sepak Bola Indonesia Jakarta) adalah sebuah klub sepak bola Indonesia yang berbasis di Jakarta. Persija saat ini berlaga di Liga Super Indonesia.</p>
					</div>
					<div class="about-grids-row2">
						<div class="about-grids-row2-grid">
							<p>Persija didirikan pada 28 November 1928, tepat sebulan setelah Sumpah Pemuda, dengan cikal bakal bernama Voetbalbond Indonesische Jacatra (VIJ). VIJ merupakan salah satu klub yang ikut mendirikan Persatuan sepak bola Seluruh Indonesia (PSSI) dengan keikutsertaan wakil VIJ, Mr. Soekardi dalam pembentukan PSSI di Societeit Hadiprojo Yogyakarta, Sabtu-19 April 1930.,</p>
						</div>
						<div class="about-grids-row2-grid">
							<p>Klub ini mendapatkan perhatian yang besar dari Mantan Gubernur Jakarta, Sutiyoso yang merupakan Pembina Persija. Kelompok pendukungnya bernama The Jakmania.,</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!---- about-grids ---->
		</div>
		<!------ about ---->
		</div>
		<!---- welcome-Note ---->
		<div class="about-note welcome-note">
			<div class="container">
				<div class="wel-head text-center">
					<h3><span>#GUEP</span>ersija</h3>
					<p>Win, Draw or Lose We Will Keep Supporting Macan Kemayoran!</p>
				</div>
			</div>
		</div>
		<!---- welcome-Note ---->
		<!---- top-grids ---->
		<div class="top-grids">
			<div class="container">
				<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3416600143214!2d106.79957861535902!3d-6.218596995498381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f14d30079f01%3A0x2e74f2341fff266d!2sStadion+Utama+Gelora+Bung+Karno!5e0!3m2!1sid!2sid!4v1473041802528"> </iframe>
					</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!---- top-grids ---->
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
						<div class="clear"> </div>
					</div>
				</div>
				<!----//End-bottom-footer---->
			</div>
	</body>
</html>

