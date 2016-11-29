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

	<link href="../css/bootstrap.min.css" rel="stylesheet">
			
	<script src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="../js/jquery.min.js"></script>	
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/scripts.js"></script>
	
	<link type="text/css" rel="stylesheet" href="../development-bundle/themes/ui-lightness/ui.all.css" />


    
    <script src="../development-bundle/jquery-1.8.0.min.js"></script>
    <script src="../development-bundle/ui/ui.core.js"></script>
    <script src="../development-bundle/ui/ui.datepicker.js"></script>
    <script src="../development-bundle/ui/i18n/ui.datepicker-id.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#tglterbit").datepicker({
                dateFormat : "dd - mm - yy",
                changeMonth : true,
                changeYear : true
            });
        });
    </script>



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
						<h1>Create Thread</h1>
					</div>
					<div class="breadcrumbs-right">
						<ul>
							<li><a href="../index.php">Home</a> <label>:</label></li>
							<li>Create Thread</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		
<table width="100%">
<tr align="right">
<td width="10%">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<form class="form-horizontal" enctype="multipart/form-data"  role="form" method="POST" action="Posting.php">
				<br>
				
				<tr align="right">
				<td width="10%">
				<div class="form-group">
					 <div class="col-sm-10">
					<b>Judul      </b><td width="1%"><font color="orange">  *</font>     :</td>
				</td>
				<td align="left">
					 <input type="text" name="judul" class="form-control" id="inputTitle3" required><br>
					</td>
					</div>
				</div>
				</tr>
				<tr align="right">
				<td width="10">
				<div class="form-group">
				<div class="col-sm-10">
					 <b>Body      </b></td><td width="1%"><font color="orange">  *</font>     :</td>
				<td align="left">
				<br><br>
					 <textarea class="form-control" name="editor1"></textarea>
					 <script>
							CKEDITOR.replace ( 'editor1')
					</script>
				<br><br>	
					</div>
					</td>
				</div>
				</td>
				</tr>
				<tr align="right">
				<td width="10%">
				<div class="form-group">
				<div class="col-sm-10">
					 <b>Upload Foto      </b></td><td width="1%"><font color="orange">  *</font>     :</td>
				<td align="left">
					 <font color="grey">*Click thumbnail image to add to post content</font>
					 <input type="file" name="nama_file" class="form-control" id="nama_file" required> <br>
					</div>
					</td>
					</tr>
				<tr align="right">
				<td width="10%">
				<div class="form-group">
				<div class="col-sm-10">
					 <b>Tittle Foto      </b></td><td width="1%"><font color="orange">  *</font>     :</td>
				<td align="left">
					 <input type="text" name="judul_gambar" class="form-control" id="inputName3" required> <br>
					</div>
				</div>
				</td>
					</tr>
					<tr align="right">
				<td width="10%">
				<div class="form-group">
				<div class="col-sm-10">
				<?php
				date_default_timezone_set('Asia/Jakarta');
					$waktu = date("h:i:s A");
				?>
					 <b>Waktu      </b></td><td width="1%"><font color="orange">  *</font>     :</td>
				<td align="left">
					 <input type="text" name="waktu" class="form-control" id="inputName3" value="<?php echo $waktu  ?>" readonly> <br>
					</div>
				</div>
				</td>
					</tr>
					<tr align="right">
				<td width="10%">
				<div class="form-group">
				<div class="col-sm-10">
				<?php
					$tanggal = date("Y/m/d");
				?>
					 <b>Tanggal      </b></td><td width="1%"><font color="orange">  *</font>     :</td>
				<td align="left">
					 <input type="text" name="tanggal" class="form-control" id="inputName3" value="<?php echo $tanggal; ?>" readonly> <br>
					</div>
				</div>
				</td>
					</tr>				
				</table>
				<br>
				<br>
				
		</div>
	</div>
</td>
</tr>
<tr>
<td>
	<div class="row clearfix">
		<center><div class="col-md-12 column">
			 <button type="submit" class="btn btn-default">Submit Post</button>
		</form>
			<a href="../index.html"><button type="submit" class="btn btn-default">Cancel</button></a>
		</div></center>
	</div>
</td>
</tr>
</tbody>
</table>
					
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

