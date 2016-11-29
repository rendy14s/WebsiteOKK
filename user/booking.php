<?php
session_start();

$home = $_SESSION['home'];
$away = $_SESSION['away'];

include "../Koneksi_Php/koneksi.php";

$username = $_POST['username'];
$harga = $_POST['harga'];
$date = $_POST['tanggal'];
$pertandingan = $_POST['pertandingan'];
$jml_tiket = $_POST['jml_tiket'];
$tribun = $_POST['tribun'];
$atas_nama = $_POST['atas_nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$dariname = 'PERSIJA JAKARTA';
$random = rand(1, 99999);

$query = mysql_query ("INSERT INTO daftar_acara VALUES ('$username','$date','$pertandingan','$home','$away','$jml_tiket','$harga','$tribun','$atas_nama','$email','$telepon','$random','0')");

    $to = $email;
    $subject = "Notifikasi Jadwal";
    $pesan = "<b>Hallo $username </b>,<br><br>

Kami ingin menginformasikan anda bahwa Data berikut ini : <br><br>

<table border='1' align='center'>
<tr>
<td rowspan='2'>
<img src='http://3.bp.blogspot.com/-6OD07SIxnKU/VTEgKw2xHRI/AAAAAAAAAEY/idQy0kLsYIw/s1600/persija_logo.png' alt='persija' style='width:50px;height:50px;'>
</td>
<td colspan='10' align='center' bgcolor='#ff8533'>
NOTIFIKASI JADWAL PERTANDINGAN 
</td>
</tr>
<tr>
<td colspan='10' align='center' bgcolor='#ff8533'>
$pertandingan
</td>

</tr>
<tr height='6' align='center' bgcolor='#ff944d'>
<td>
<b>USERNAME</b>
</td>
<td>
<b>TANGGAL</b>
</td>
<td>
<b>PERTANDINGAN</b>
</td>
<td>
<b>JUMLAH TIKET</b>
</td>
<td>
<b>HARGA TIKET</b> 
</td>
<td>
<b>TRIBUN</b>
</td>
<td>
<b>ATAS NAMA</b>
</td>
<td>
<b>EMAIL</b>
</td>
<td>
<b>NOMOR TELEPON</b>
</td>
<td>
<b>KODE TIKET</b>
</td>
<td>
<b>NO REKENING PERSIJA WEB</b>
</td>
</tr>


<tr align='center'>
<td>
 $username
</td>
<td>
 $date
</td>
<td>
 $pertandingan
</td>
<td>
 $jml_tiket
</td>
<td>
 $harga
</td>
<td>
$tribun
</td>
<td>
$atas_nama
</td>
<td>
$email
</td> 
<td>
 $telepon
</td>
<td>
 $random
</td>
<td>
 1234567890
</td>
</tr>

</table>

<br>Permintaan Booking Tiket Sudah diterima oleh pihak kami, oleh karena itu anda segera melakukan transfer ke nomor rekening yang tertera di notifikasi email dengan biaya yang sudah ditetapkan.<br>

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
echo '<script>window.location = "../User-Account/pages/daftaracara.php" </script>';
}

