<?php
session_start();
$username = $_SESSION['username'];
if (!$username) {
	echo '<script>window.location = "../BelomLogin.php" </script>';
}
else{
include "../Koneksi_Php/koneksi.php";
$select = mysql_query("select * from jadwal");
$select_result = mysql_fetch_array($select);

    $no = $select_result['no'];
    $no1 = $_REQUEST['no'];


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

	<script type="text/javascript" src="../js/scripts.js"></script>

<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?tanggal="+str,true);
        xmlhttp.send();
    }
}
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
						<h1>Jadwal Pertandingan</h1>
					</div>
					<div class="breadcrumbs-right">
						<ul>
							<li><a href="../index.php">Home</a> <label>:</label></li>
							<li>Jadwal Pertandingan</li>
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
							<form action="JoinUs.php" method="POST">
							<table border="1" bordercolor="d0cfcf" width="100%" align="center">
								<tbody>
								<div>
									<?php
			$sql = mysql_query("SELECT * FROM jadwal") or die(mysql_error());
				if(mysql_num_rows($sql) == 0){
				echo 'Blank...!';
				} else {
					
				$data = mysql_fetch_object($sql);
			echo "<tr>";
			echo "<td>";
			
		echo "	<table class='table'>
    <thead>
      <tr>
        <th>Hari</th>
        <th>Tanggal</th>
        <th>Pertandingan</th>
      </tr>
    </thead>
    <tbody>
      <tr class='success'>";

      
					

				$sql_jadwal 	= "SELECT * FROM jadwal ORDER BY `tanggal` ASC limit 1,20";
					 $result_jadwal = mysql_query($sql_jadwal);
					 $row			= mysql_num_rows($result_jadwal);

					 if($row > 0){
					 while($data_jadwal = mysql_fetch_array($result_jadwal)){
					 		$hari 		= $data_jadwal['hari'];
					 		$tanggal 	= $data_jadwal['tanggal'];
					 		$home 		= $data_jadwal['home'];
					 		$away 	 	= $data_jadwal['away'];

					 echo "<tr class='success'>
					 		<td>$hari</td>
        					<td>$tanggal</td>
       						<td>$home VS $away</td>
       						 </tr>
			   			  ";
					
					 }
					}
						else{
							echo "<td>NO DATA ( Jadwal Belum Di input )</td>";
						}
				
     
echo "    </tbody>
  </table>";


			echo "</tr>";
			echo "</td>";
echo "<tr>";
echo "<td>";

			echo "<br>";
			echo '<label for="inputName3" class="col-sm-6 control-label">Tanggal Pertandingan :</label>';
			echo '<input type="date" class="form-control" id="inputName3" name="users" onchange="showUser(this.value)">';
		
			echo "<br>";
			echo '<div id="txtHint"><b>Data will be listed here...</b></div>';

				echo "</td>";
			
echo "</tr>";

				

}
?>
								</div>
							</form>
						</div>
						<div class="clearfix"> </div>
						</tbody>
					</table>
				</form>
				</div>
				</div>
				</div>
				</div>

		
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
			<?php } ?>
	</body>
</html>

