<?php

include "../Koneksi_Php/koneksi.php";

$email = $_POST['email'];
$combo = $_POST['combo_pertanyaan'];
$jawaban = $_POST['jawaban'];

    $query = mysql_query("SELECT username, email FROM user WHERE email = '$email'");
    $hasil = mysql_fetch_array($query);
    $username = $hasil['username'];


    $sql   = "SELECT email, pertanyaan_keamanan, jawaban FROM user WHERE email = '$email' AND pertanyaan_keamanan = '$combo' AND jawaban = '$jawaban'";

    $query = mysql_query($sql);
    $hasil_query = mysql_fetch_row($query);

if ($hasil_query > 0) {
    $newpass = rand(12345,67890);
	
    $to = $email;
    $subject = "RESET PASSWORD";
    $pesan = "<b>Hallo $username </b>,<br><br>

Anda meminta melakukan reset password :<br><br>
Username : $username <br>
New Password : $newpass<br><br>
<br>Silahkan anda melakukan login kembali. Terimakasih.<br>

<br>
<br>
<br>
Best Regard
<br>
<br>
Persija
    ";


include('phpmailer/class.phpmailer.php');
include('phpmailer/class.smtp.php');
$mail = new PHPMailer();

$dariname = 'PERSIJA JAKARTA';

$mail->Host     = "ssl://smtp.gmail.com"; 
$mail->Mailer   = "smtp";
$mail->SMTPAuth = true; 

$mail->Username = "persijaofficial@gmail.com"; 
$mail->Password = "Persija1928";
$webmaster_email = "persijaofficial@gmail.com"; 
$email = $to;
$name = "Nama Penerima"; 
$mail->From = $webmaster_email;
$mail->FromName = $dariname;
$mail->AddAddress($email,$name);
$mail->AddReplyTo($webmaster_email,"Nama Pengirim");
$mail->WordWrap = 50; 
//$mail->AddAttachment("module.txt"); // attachment
//$mail->AddAttachment("new.jpg"); // attachment
$mail->IsHTML(true); 
$mail->Subject = $subject;
$mail->Body = $pesan; 
$mail->AltBody = "This is the body when user views in plain text format"; 
if(!$mail->Send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
//echo "email berhasil dikirim";
echo '<script>window.location = "SalahPassword.php" </script>';
}


    $update = mysql_query("UPDATE user SET password = '$newpass' WHERE email = '$email'") or die (mysql_error());
} else {
	echo "Jawaban/Pertanyaan anda salah!";
}


    

?>