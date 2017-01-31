<?php
	include('koneksi.php');
	$query = "SELECT * FROM tbl_pesan ORDER BY nama";
	$sql = mysql_query($query);
	$data = array();
	while($row = mysql_fetch_assoc($sql)){
		array_push($data, $row);
	}

	#setting judul laporan dengan header tabel
	$judul = "LAPORAN PEMESANAN TIKET SIGAonline";
	$header = array(
		array("label"=>"Nomor Pesan", "length"=>30, "align"=>"L"),
		array("label"=>"Nama Pemesan", "length"=>50, "align"=>"L"),
		array("label"=>"Nomor Identitas", "length"=>30, "align"=>"L"),
		array("label"=>"Nomor Telepon", "length"=>30, "align"=>"L"),
		array("label"=>"Alamat", "length"=>50, "align"=>"L"),
		array("label"=>"Jumlah Pesanan", "length"=>30, "align"=>"L"),
		array("label"=>"Nomor Tiket", "length"=>30, "align"=>"L"),
		);

	#sertakan library FPDF dan bentuk objek
	require_once("fpdf/fpdf.php");
	$pdf = new FPDF();
	$pdf->AddPage();

	#tampilkan judul laporan
	$pdf->SetFont('Arian', 'B', '16');
	$pdf->Cell(0, 20, $judul, '0', 1, 'C');

	#buat header tabel
	$pdf->SetFont('Arial', '', '10');
	$pdf->SetFillColor(255, 0, 0);
	$pdf->SetTextColor(255);
	$pdf->SetDrawColor(128, 0, 0);
	foreach($header as $kolom){
		$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
	}
	$pdf->Ln();

	#tampilkan data tabelnya
	$pdf->SetFillColor(224, 235, 255);
	$pdf->SetTextColor(0);
	$pdf->SetFont('');
	$fill=false;
	foreach($data as $baris){
		$i = 0;
		foreach($baris as $cell){
			$pdf->Cell($header[$i]['length'], 5, $cell, 1, '0', $kolom['align'], $fill);
			$i++;
		}
		$fill = !$fill;
		$pdf->Ln();
	}

	#output file PDF
	$pdf->Output();
?>