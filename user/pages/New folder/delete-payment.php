<html>
<head>
    <title>Penghapusan Data</title>
    
</head>
<body>
<?php
error_reporting();
include "../../Koneksi_Php/koneksi.php";

function mailer($sql) {
    $data = mysql_query($sql);
    $hasil = mysql_fetch_array($data);
    $username = $hasil['username'];
    $atas_nama = $hasil['atas_nama'];
    $tanggal = $hasil['tgl_transfer'];
    $norek = $hasil['no_rek'];
    $jumlah = $hasil['jml_transfer'];
    $random = md5(uniqid(rand()));
    $email = $hasil['email'];
    $pesan = "Hallo $username,

Kami ingin menginformasikan anda bahwa detail berikut ini :

Pembayaran Atas Nama : $atas_nama
Tanggal Transfer : $tanggal
No Rekening : $norek
Jumlah Transfer : $jumlah

Sudah diterima oleh pihak kami dan telah terverifikasi, oleh karena itu anda dapat mencetak tiket event tersebut.
Silahkan klik link di bawah ini untuk mencetak tiket anda
http://okk.zz.mu/beranda/cetak.php?code=$random

Terima Kasih
    ";
    mail($email, "Pengumuman Konfirmasi", $pesan, "noreply@admin.okk.zz.mu");
}
if (isset($_POST['hapus'])) {
    $pilih = $_POST['pilih_satu'];
    foreach ($pilih as $data1) {
        $sql = "UPDATE konfirmasi SET status = '1' WHERE no_rek = '$data1'";
        $success = mysql_query($sql);
        $stmt = "SELECT username, atas_nama, tgl_transfer, email, no_rek, jml_transfer
        FROM konfirmasi WHERE status = '1' AND no_rek = '$data1'";
        mailer($stmt);
        if ($success) {
            //echo "<meta http-equiv='refresh' content='0; url=konfirmasi-transfer.php'>";
        }
    }

}
?>
</body>
</html>