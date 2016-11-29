<?php
/**
 * Created by PhpStorm.
 * User: RENDY'S
 * Date: 19/12/2014
 * Time: 14:33
 */
session_start();
include "../Koneksi_Php/koneksi.php";
$select = mysql_query("select * from post;");
while($select_result = mysql_fetch_array($select)){
    $post_id = $select_result['post_id'];

}
 
 $_SESSION['id'] = $post_id; 

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
	
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../img/apple-touch-icon-57-precomposed.png">
 <link rel="shortcut icon" href="../img/persija/logo.png">
  


  	<script src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/scripts.js"></script>
</head>

<body>
<div class="container-fluid">
	<div class="row clearfix">
	<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			 <div class="navbar-header">
				<a class="navbar-brand" href="../index.php"><img src="../img/persija/logo.png" width="40" height="40"></img></a>
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
					echo '<ul class="nav navbar-nav navbar-right">';
					echo '<li class="dropdown">';
						echo '<a class="dropdown-toggle" href="#" data-toggle="dropdown">';
						echo '<span class="glyphicon glyphicon-user"></span> Sign In &#124; Join<strong class="caret"></strong></a>';
						echo '<div class="dropdown-menu" style="padding: 15px; padding-bottom: 20px;">';
							echo '<form method="POST" action="login.php" accept-charset="UTF-8">';
								echo '<input style="margin-bottom: 15px;" type="text" placeholder="Username" id="username" name="user" required>';
								echo '<input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="pass" required>';
								echo '<a href="user/ForgetPassword.php"><u><i>forget password ?</a></i></u><br>';
								echo '<input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">';
								echo '<label class="string optional" for="user_remember_me"><font color="orange"> Remember me</font></label>';
								echo '<input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">';
								echo "</form>";
								echo "<hr>";
								echo '<label style="text-align:center;margin-top:5px"><font color="grey">New to OKK</font></label><br>';
                               
							echo '<a href="user/regis-Akun.php"><input class="btn btn-default btn-block" type="button" id="sign-in-google" value="SIGN UP"></a>';
							
						echo "</div>";
					echo "</li>";
					echo "</ul>";
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
						echo '<a href="logout.php">Sign Out</a>';
						echo "</div>";
					echo "</li>";
					echo "</ul>";
					}
					?>				</div>
				
				
				
			</nav>
		</div>
	<br><br><br></div>


	<table border="1" bordercolor="d0cfcf" width="100%" align="center">
<tbody>
		<?php
			$sql = mysql_query("SELECT * FROM post WHERE post_id='$post_id'") or die(mysql_error());
				if(mysql_num_rows($sql) == 0){
				echo 'Blank...!';
				} else {
				$data = mysql_fetch_object($sql);
				//$data = mysql_fetch_assoc($sql);
echo "<tr>";
echo "<td>";
echo "User : ";
echo "&nbsp";
echo $data->post_user; 
echo "&nbsp";
echo "&nbsp";
echo "&nbsp";
echo "Waktu : ";
echo "&nbsp";
echo $data->waktu;
echo "&nbsp";
echo "&nbsp";
echo "&nbsp";
echo "Tanggal : ";
echo "&nbsp";
echo $data->tanggal;
echo "</td>";
echo "</tr>";
echo "<tr>";

echo "<td>";
	echo '<div class="row clearfix">';
		echo '<div class="col-md-12 column">';
		echo "<br><br>";
			echo "<center>";
			echo '<center><img src="'.$data->nama_file.'" alt="'.$data->judul_gambar.'" title="'.$data->judul_gambar.'" width="400" height="400"></center>';
			echo "</center>";
		echo "<br><br>";
		echo "</div>";
		echo "<center>";
		echo '<div class="col-md-12 column">';
			echo '<h3 class="text-center">';
				echo "<b>".$data->post_judul."</b>";
			echo "</h3>";
		echo "</div>";
	echo "</div>";
echo "<center>";
	echo '<div class="row clearfix">';
		echo '<div class="col-md-12 column">';
			echo "<p>";
				echo "".$data->post_body."";"<br>";
				echo "<hr>";
				echo '<h3 class="danger">';
				echo "Add Comment";
				echo "</h3>";
				echo "<br>";
			
			
}
?>
<form action="komentar.php" method="POST">
 <textarea class="form-control" name="editor1"></textarea>
		<script>
				CKEDITOR.replace ( 'editor1')
		</script>
<br>
<br>
		<button type="submit" class="btn btn-default" >Komentar </button>
</form>
<br>
<br>
</center>
</td>
</tr>
<tr>
<td>
<b>Komentar Anggota :</b> 
<hr>
<?php 
$sql = "SELECT * FROM komentar WHERE id = '$post_id';";
$result = mysql_query($sql);
$row = mysql_num_rows($result);

if($row > 0){

while($data = mysql_fetch_array($result)){
	$user 	= $data['user'];
	$waktu 	= $data['waktu'];
	$tanggal 	= $data['tanggal'];
	$ket 	= $data['ket'];

	echo "<tr>";

	echo "<td>";
echo "User : ";
echo "&nbsp";
echo $user; 
echo "&nbsp";
echo "&nbsp";
echo "&nbsp";
echo "Waktu : ";
echo "&nbsp";
echo $waktu;
echo "&nbsp";
echo "&nbsp";
echo "&nbsp";
echo "Tanggal : ";
echo "&nbsp";
echo $tanggal;
	echo "<br>";
	echo "Komentar : ";
	echo "<br>";
	echo $ket;
	echo "<hr>";
	echo "</td>";


	echo "</tr>";
}
}
else {
	echo "No Comment On This Post";
}
?>

</td>
</tr>


</tbody>
</table>
<br>
</div>
</body>
</html>
