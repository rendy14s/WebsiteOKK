<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PERSIJA | The Larget Web E - Event</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->


  <!-- JADWAL CSS / JQUERY -->

  <link rel="stylesheet" href="jquery/bootstrap.min.css">
  <script src="jquery/jquery.min.js"></script>
  <script src="jquery/bootstrap.min.js"></script>



  <!--TUTUP -->
  <script type="text/javascript" src="jquery/jquery-3.1.0.js"></script>
	<script type="text/javascript" src="jquery/insert.js"></script>


  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="../../img/persija/logo.png">
	
	
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
<div class="container">

	<div class="row clearfix">
	<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			 <div class="navbar-header">
					<a class="navbar-brand" href="index.php"><img src="../../img/persija/logo.png" width="40" height="40"></img></a>
			</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="#">Skuad Persija</a>
						</li>
						<li>
							<a href="#">Tentang Kami</a>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-default" placeholder="cari disini gan">
						</div> <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
					</form>
					<?php
					
					if (empty($_SESSION['status'])){
					echo '<script>window.location="../BelomLogin.php"</script>';
					}
					else if ($_SESSION['status'] == "user"){
					echo '<ul class="nav navbar-nav navbar-right">';
					echo '<li class="dropdown">';
						echo '<a class="dropdown-toggle" href="#" data-toggle="dropdown">';
						echo '<span class="glyphicon glyphicon-user"></span> PROFIL<strong class="caret"></strong></a>';
						echo '<div class="dropdown-menu" style="padding: 15px; padding-bottom: 20px;">';
						echo '<a href = "User-Account/pages/indexuserhomepage.php">Profil</a><br><hr>';
						echo '<a href="../logout.php">Sign Out</a>';
						echo "</div>";
					echo "</li>";
					echo "</ul>";
					}
					else if ($_SESSION['status']== "admin"){
					echo '<ul class="nav navbar-nav navbar-right">';
					echo '<li class="dropdown">';
						echo '<a class="dropdown-toggle" href="#" data-toggle="dropdown">';
						echo '<span class="glyphicon glyphicon-user"></span> PROFIL<strong class="caret"></strong></a>';
						echo '<div class="dropdown-menu" style="padding: 15px; padding-bottom: 20px;">';
						echo '<a href = "Admin/index.html">Profil</a><br><hr>';
						echo '<a href="../logout.php">Sign Out</a>';
						echo "</div>";
					echo "</li>";
					echo "</ul>";
					}
					?>
				</div>
				
				
				
			</nav>
		</div><br>
		<div class="row clearfix"><br><br>
		<div class="col-md-12 column">
			<img class="modal-widget" alt="100x100" src="../../img/GIF.GIF"><a href="CreatePost.php"></a>
		</div>
	</div>
	<br><br><br></div>
<table class="table table-bordered">
<tbody>
<tr class="active">
<td>
	<div class="row clearfix">
		<div class="col-md-12 column">
		<a href="../index.php"><button title="Home" class="btn btn-default"><span title="Home" class="glyphicon glyphicon-home"></span></button></a>
		</div>
</td>
</tr>
</tbody>
</table>
<table border="1" bordercolor="d0cfcf" width="100%" align="center">
<tbody>
<tr>
<td>
		<div class="col-md-12 column">
			<h5>
				<font color="black"><b>Post New Cover</b></font>
			</h5>
		</div>
	</div>
</td>
</tr>
<tr>
<td>
<br>
<br>
<table width="100%">
<tr align="right">
<td width="10%">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<form class="form-horizontal" enctype="multipart/form-data"  role="form" method="POST" action="cover.php" id="myForm">
				<br>
				
				<tr align="right">
				<td width="10%">
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
			 <button id="sub" type="submit" class="btn btn-default">Submit Post</button>
		</form>
			<a href="index.php"><button type="submit" class="btn btn-default">Cancel</button></a>
		</div></center>
	</div>
</td>
</tr>
</tbody>
</table>
	
<br>
</div>

	<div class="row clearfix">
<div class="container-fluid">
	<div class='modal-footer-content'>
			<table class="table" color="#e4e4e4">
	
	
		<div class="col-md-4 column">
		<br>
				<h4>
					Navigation	
					<hr>
				</h4>
			 <a href="../index.php" class="btn" type="button">Home</a><br>
			  <a href="../index.php" class="btn" type="button">Hot Events</a><br>
			   <a href="../index.php" class="btn" type="button">Hot Reviews</a><br>
		</div>
		<div class="col-md-4 column">
		<br>
				<h4>
					Company Info	
					<hr>
				</h4>
				<a href="#" class="btn" type="button">Help center</a><br>
			  <a href="#" class="btn" type="button">About Us</a><br>
			   <a href="#" class="btn" type="button">General Rules</a>
		</div>
		<div class="col-md-4 column">
		<br>	
				<h4>
					Find Us	
					<hr>
				</h4>
			<img alt="90x90" width="10%"  src="../../img/twitter.png" class="img-circle"><a href="https://twitter.com/OkkOfficial?lang=en" class="btn" type="button">Twitter</a><br>
			<img alt="90x90" width="10%" src="../../img/google+.png" class="img-circle"><a href="https://plus.google.com/app/basic/107419838682498455317/about?cbp=1tjlzysosy5xd&sview=27&cid=5&soc-app=115&soc-platform=1" class="btn" type="button">Google +</a><br>
			<img alt="140x140" width="10%" src="../../img/facebook.png" class="img-circle"><a href="https://www.facebook.com/okkofficial?ref=ts&fref=ts" class="btn" type="button">Facebook</a>
		</div>
		<div class="col-md-4 column"><br>
			<img title="OKK" alt="90x90" src="../../img/persija/logo.png" class="img-rounded" height="250" width="250">
		</div>
	
	</div>	
</div>
</div>
</body>
</html>
