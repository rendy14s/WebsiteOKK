<?php
	
include "../../Koneksi_Php/koneksi.php";

    $dari	 = $_POST['tanggal_1'];
    $ke 	 = $_POST['tanggal_2'];

	$Lapor = "SELECT username, atas_nama, no_rek, tgl_transfer, jml_transfer FROM konfirmasi WHERE DATE_FORMAT(  `tgl_transfer` ,  '%Y-%m-%d' ) >= '$dari' AND DATE_FORMAT(  `tgl_transfer` ,  '%Y-%m-%d' ) <= '$ke'";


	$Hasil = mysql_query($Lapor);
	$Data = array();
	while($row = mysql_fetch_assoc($Hasil)){
		array_push($Data, $row);
	}

	$total = "SELECT SUM(jml_transfer) FROM konfirmasi WHERE DATE_FORMAT(  `tgl_transfer` ,  '%Y-%m-%d' ) >= '$dari' AND DATE_FORMAT(  `tgl_transfer` ,  '%Y-%m-%d' ) <= '$ke'";
	$sum   = mysql_query($total);
	$data  = array();
	while ($tot = mysql_fetch_assoc($sum)){
		array_push($data, $tot);
	}


	$Judul1 = "LAPORAN DATA KEUANGAN";
	$Judul2 = "PERSIJA JAKARTA E - TICKETING";
	$tgl= "Time : ".date("l, d F Y");
	$Header= array(
		array("label"=>"Username", "length"=>35, "align"=>"C"),
		array("label"=>"Atas Nama", "length"=>40, "align"=>"C"),
		array("label"=>"No Rekening", "length"=>40, "align"=>"C"),
		array("label"=>"Tanggal Transfer", "length"=>40, "align"=>"C"),
		array("label"=>"Jumlah", "length"=>35, "align"=>"C"),
	);

	$Header_Total= array(
		array("label"=>"Total", "length"=>35, "align"=>"C")
	);

	require ("fpdf16/fpdf.php");
	$pdf = new FPDF();
	$pdf->AddPage('P','A4','C');

	//Tampilkan gambar di dokumen PDF
	$pdf->Image('persija.jpg',10,10,30);

	//judul 1
	$pdf->SetFont('arial','B','15');
	$pdf->Cell(0, 15, $Judul1, '0', 1, 'C');
	
	//judul 2
	$pdf->SetFont('arial','B','15');
	$pdf->Cell(0, 15, $Judul2, '0', 1, 'C');

	//tanggal
	$pdf->SetFont('arial','i','9');
	$pdf->Cell(0, 10, $tgl, '0', 1, 'P');
	//header
	$pdf->SetFont('arial','','12');
	$pdf->SetFillColor(253,47,6);
	$pdf->SetTextColor(255);
	$pdf->setDrawColor(128,0,0);
	foreach ($Header as $Kolom){
		$pdf->Cell($Kolom['length'], 8, $Kolom['label'], 1, '0', $Kolom['align'], true);
	}
	$pdf->Ln();


	//menampilkan data
	$pdf->SetFillColor(244,235,255);
	$pdf->SettextColor(0);
	$pdf->SetFont('arial','','10');
	$fill =false;
	foreach ($Data as $Baris){
		$i= 0;
		foreach ($Baris as $Cell){
			$pdf->Cell ($Header[$i]['length'], 7, $Cell, 2, '0', $Kolom['align'], $fill);
			$i++;
		}
		$fill = !$fill;
		$pdf->Ln();
	}
			//--------------------
	//headerTotal
	$pdf->SetFont('arial','','12');
	$pdf->SetFillColor(253,215,0);
	$pdf->SetTextColor(0);
	$pdf->setDrawColor(128,0,0);
	foreach ($Header_Total as $Kolom){
		$pdf->Cell($Kolom['length'], 8, $Kolom['label'], 2, '0', $Kolom['align'], true);
	}
	//menampilkan data Total
	$pdf->SetFont('arial','','12');
	$pdf->SetFillColor(255,215,0);
	$pdf->SetTextColor(0);
	$pdf->setDrawColor(128,0,0);
	
	foreach ($data as $baris){
		$i= 0;
		foreach ($baris as $Cell_tot){
			$pdf->Cell ($Header_Total[$i]['length'], 8, $Cell_tot, 2, '0', $Kolom['align']);
			$i++;
		}
		$pdf->Ln();
	}
	$pdf->Ln();

	//output
	$pdf->Output();
?>