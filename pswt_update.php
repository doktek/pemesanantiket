<?php
	include('koneksi.php');
	$id_pesawat = $_POST['id_pesawat'];
	$dari	    = $_POST['dari'];
	$ke	        = $_POST['ke'];
	$tanggal	= $_POST['tanggal'];
	$id_kelas	= $_POST['id_kelas'];
	$update     = mysql_query("UPDATE pswt SET dari = '$dari', ke = '$ke', tanggal = '$tanggal', id_kelas = '$id_kelas' WHERE id_pesawat = '$id_pesawat'");
	if($update){
		header('location: pswt_list.php');
	} else {
		echo "Gagal Mengupdate";
	}
?>