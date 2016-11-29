<?php
session_start();
$kode_acara = $_GET['kode_acara'];
?>
<html>
<head>
    <title>Penghapusan Data</title>
    
</head>
<body>
<?php

$username = $_POST['pilih_satu'];
include "../../Koneksi_Php/koneksi.php";

$sql = "SELECT * FROM daftar_acara WHERE kode_acara ='$kode_acara';"; 

    $data = mysql_query($sql);
    $hasil = mysql_fetch_array($data);


$sql1 = "SELECT * FROM konfirmasi"; 

    $data1 = mysql_query($sql1);
    $hasil1 = mysql_fetch_array($data1);

    $username = $hasil['username'];
    $atas_nama = $hasil['atas_nama'];
    $tanggal = $hasil1['tgl_transfer'];
    $norek = $hasil1['no_rek'];
    $jumlah = $hasil1['jml_transfer'];
    $to = $hasil['email'];
    $subject = "Notifikasi Konfirmasi";
    $pesan = "<b>Hallo $username </b>,<br><br>

Kami ingin menginformasikan anda bahwa Data berikut ini : <br><br>

<table border='1' align='center'>
<tr>
<td rowspan='2'>
<img src='http://3.bp.blogspot.com/-6OD07SIxnKU/VTEgKw2xHRI/AAAAAAAAAEY/idQy0kLsYIw/s1600/persija_logo.png' alt='persija' style='width:50px;height:50px;'>
</td>
<td colspan='5' align='center' bgcolor='#ff8533'>
<b>E - TICKET VALIDATE</b> 
</td>
</tr>
<tr>
<td colspan='5' align='center' bgcolor='#ff8533'>
<b>PERSIJA JAKARTA</b>
</td>

</tr>
<tr height='10' align='center' bgcolor='#ff944d'>
<td>
<b>PEMBAYARAN ATAS NAMA</b>
</td>
<td>
<b>USERNAME</b>
</td>
<td>
<b>TANGGAL TRANSFER</b> 
</td>
<td>
<b>NOMOR REKENING</b>
</td>
<td>
<b>JUMLAH TRANSFER</b>
</td>
<td>
<b>KODE ACARA</b>
</td>
</tr>

<tr align='center'>
<td>
 $atas_nama
</td>
<td>
 $username
</td>
<td>
$tanggal
</td>
<td>
$norek
</td>
<td>
$jumlah
</td>
<td>
$kode_acara
</td> 
</tr>

</table>

<br>Sudah diterima oleh pihak kami dan telah terverifikasi, oleh karena itu anda dapat mencetak konfirmasi email ini sebagai tanda bukti e-tiket anda.<br>

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
$mail->FromName = 'PERSIJA JAKARTA';
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
echo '<script>window.location = "konfirmasi-transfer.php" </script>';
    $update_sql = "UPDATE daftar_acara SET status1 = '1' WHERE kode_acara = '$kode_acara' ;";
    $update_result = mysql_query($update_sql);

    $update_sql1 = "UPDATE konfirmasi SET status = '1' WHERE kode_acara = '$kode_acara' ;";
    $update_result1 = mysql_query($update_sql1);

    if($update_result && $update_result1){
     //   echo "berhasil update";
       //  echo $nama;
    }
    else{
        echo $username;
       echo " gagal update ";
    }
}




