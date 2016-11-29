<?php
session_start();
include "Koneksi_Php/koneksi.php";
$username = $_SESSION['username'];



$thread = mysql_query ("SELECT * FROM post ORDER BY post_id DESC LIMIT 0,4 ;");
$data_kosong = "SELECT * FROM `post`;";
$row 	= mysql_query($data_kosong);
$baris  = mysql_num_rows($row);

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
	
		<div class="header">
			<div class="container">
				
				<div class="logo">
					<a href="index.php"><span>P</span>ersija</a>
				</div>
			
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
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
				<!--- script-for-nav -->
		<!-- banner -->
		<div class="banner text-center">
			<h1>Fight for the Glory <span>P</span>ersija</h1>
			<p>Here you can find some tickets to see the details of this work review just click the thumbnails below.</p>
			<a class="seemore" href="user/View-Jadwal.php">Tickets</a>
		</div>
		<!-- banner -->
		<!-- banner-grids -->
		<div class="banner-grids">
			<div class="col-md-4 banner-grid">
				<span><img src="images/icon.png" title="tootls" /></span>
				<h3><a href="#">Our Rules</a></h3>
				<p>Come in peace , and mutual respect.</p>
			</div>
			<div class="col-md-4 banner-grid">
				<span><img src="images/icon1.png" title="tootls" /></span>
				<h3><a href="#">Our licence</a></h3>
				<p>All data users will be stored securely in our database.</p>
			</div>
			<div class="col-md-4 banner-grid">
				<span><img src="images/icon3.png" title="tootls" /></span>
				<h3><a href="#">Our info</a></h3>
				<p>Office hours 8:00 to 17:00 WIB.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!---- banner-grids ---->
			</div>
			</div>
		<!---- header ----->
		<!---- welcome-Note ---->
		<div class="welcome-note">
			<div class="container">
				<div class="wel-head text-center">
					<h3><span>#GueP</span>ersija</h3>
					<p>Win, Draw or Lose We Will Keep Supporting Macan Kemayoran!</p>
				</div>
			</div>
		</div>
		<!---- welcome-Note ---->
		<!---- top-grids ---->
		<div class="top-grids">
			<div class="container">
				
					<div align="center" class="embed-responsive embed-responsive-16by9">
   						 <video autoplay loop class="embed-responsive-item">
        						<source align= "center" src="video/video.mp4" type="video/mp4">
   				 		 </video>
					</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<br>
		<!---- top-grids ---->
		<!---- mid-grids ---->
		<div class="mid-grids">
			<div class="container">
				<div class="col-md-8 mid-grids-left">
					<h2>Latest News from <span><label>P</label>ersija</span></h2>
					<p>Berita tentang seputar pertandingan, acara, event, gathering </p>
					 <div class="latest-news-grids">
					<?php
			while ($data = mysql_fetch_assoc($thread)) {
					if ( $baris == 0){
						echo '<div class="latest-news-grid">';
							echo '<img src="images/m1.jpg" title="name" />';
							echo '<h4><a href="#">Preparing dish for you with love</a></h4>
							<span>22 Sept 2013, by <a href="#">Admin</a></span>
							<p>Etiam pretium quam sed lectus mollis, sed element working cursus. Phasellus vitae mollis sem. </p>
							<a class="news-btn" href="singlepage.html">Read More</a>
						</div>
						<div class="latest-news-grid">
							<img src="images/m3.jpg" title="name" />
							<h4><a href="#">Preparing dish for you with love</a></h4>
							<span>22 Sept 2013, by <a href="#">Admin</a></span>
							<p>Etiam pretium quam sed lectus mollis, sed element working cursus. Phasellus vitae mollis sem. </p>
							<a class="news-btn" href="singlepage.html">Read More</a>
						</div>
						<div class="latest-news-grid">
							<img src="images/m4.jpg" title="name" />
							<h4><a href="#">Preparing dish for you with love</a></h4>
							<span>22 Sept 2013, by <a href="#">Admin</a></span>
							<p>Etiam pretium quam sed lectus mollis, sed element working cursus. Phasellus vitae mollis sem. </p>
							<a class="news-btn" href="singlepage.html">Read More</a>
						</div>
						<div class="latest-news-grid">
							<img src="images/m5.jpg" title="name" />
							<h4><a href="#">Preparing dish for you with love</a></h4>
							<span>22 Sept 2013, by <a href="#">Admin</a></span>
							<p>Etiam pretium quam sed lectus mollis, sed element working cursus. Phasellus vitae mollis sem. </p>
							<a class="news-btn" href="singlepage.html">Read More</a>
						</div>
						<div class="clearfix"> </div>
					</div>';

					}
				else{
						echo '<div class="latest-news-grid">';
						   echo '<img src="user/'.$data['nama_file'].'" title="name" />';
							echo '<h4><a href="#">'.$data['post_judul'].'</a></h4>';
							 echo '<span>'.$data['tanggal'].', '.$data['waktu'].', by <a href="#">'.$data['post_user'].'</a></span> ';
							 	echo '<p>'.$data['post_body'].'</p>';
						echo '<a class="news-btn" href="user/View-Posting.php?post_id=' . $data['post_id'] . ' ">Read More</a>';
						echo '<div class="clearfix"> </div>';
							echo '</div>';	
					}	
				}
				?>
				</div>
			</div>
				<div class="col-md-4 mid-grids-right">
					<h3><span><label>P</label>ersija Tweets</span></h3>
					<p>Tweets From @Persija_Jkt</p>
					<a class="twitter-timeline" href="https://twitter.com/persija_jkt?lang=id" data-tweet-limit="3"  data-aria-polite="assertive" data-chrome="nofooter noborders">Tweets by @Persija_Jkt</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
				<div class="clearfix"> </div>
		</div>
	</div>
		<!---- mid-grids ---->
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
								<h3><span><label>P</label>ersija OFFICE</span></h3>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3416600143214!2d106.79957861535902!3d-6.218596995498381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f14d30079f01%3A0x2e74f2341fff266d!2sStadion+Utama+Gelora+Bung+Karno!5e0!3m2!1sid!2sid!4v1473041943770" width="1000" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
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

