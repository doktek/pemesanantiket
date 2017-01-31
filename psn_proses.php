<?php
	session_start();
	require_once('koneksi.php');
	$id_pesan	= $_POST['id_pesan'];
	$nama       = $_POST['nama'];
	$identitas  = $_POST['identitas'];
	$telepon    = $_POST['telepon'];
	$alamat	    = $_POST['alamat'];
	$id_pesawat	= $_POST['id_pesawat'];
	$simpan = mysql_query("INSERT INTO psn(nama, identitas, telepon, alamat, id_pesawat) VALUES('$nama', '$identitas', '$telepon', '$alamat', '$id_pesawat')");
	if($simpan){
		header('location: psn_bukti.php?id_pesan='.$nama.'');
	} else {
		echo "Gagal Menambahkan pesanan!";
	}
?>




