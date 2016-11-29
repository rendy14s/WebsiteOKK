<?php
	include("../Koneksi_Php/koneksi.php");
?>
			<?php
				$username = $_POST['user'];
				$password = $_POST['password'];
				$nama = $_POST['nama'];
				$alamat = $_POST['alamat'];
				$email = $_POST['email'];
				$no_tel = $_POST['telepon'];
				$pertanyaan = $_POST['combo_pertanyaan'];
				$jawaban = $_POST['jawaban'];
				
				

				$user_cek = "SELECT username FROM user WHERE username = '$username'";
				$user_sql = mysql_query($user_cek);
				
				if ($user_sql && mysql_num_rows($user_sql) > 0) {

					echo '<script language="javascript">alert("Mohon Maaf username telah terdaftar, silahkan pakai user lainnya ")</script>';
            		echo '<script>window.location="regis-Akun.php"</script>';

				} else {
					$sql = mysql_query("INSERT INTO user VALUES ('$username', '$password', '$nama', '$alamat', '$email', '$no_tel',
				'$pertanyaan', '$jawaban','user')");

					echo "<meta http-equiv='refresh' content='0; url=BerhasilRegis.php'>";
				} 
			?>
		