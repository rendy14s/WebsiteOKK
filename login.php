<?php
session_start(); 
include "Koneksi_Php/koneksi.php";

    if (isset($_POST['user'])) {
	$user = $_POST['user'];
	$password = $_POST['pass'];
    
	
	$sql = mysql_query("SELECT * FROM user where username = '$user' and password = '$password'");
    $data = mysql_fetch_array($sql);
	
	if ($user == $data['username'] && $password = $data['password']) {
	
		$_SESSION['status'] = $data['status'];
		$_SESSION['username']= $data['username'];
			echo '<script language="javascript">alert("Selamat datang '.$user.' ")</script>';
            echo '<script>window.location="index.php"</script>';
        }
	else{
			echo '<script>window.location="user/SalahPassword.php"</script>';
	}
}
	?>