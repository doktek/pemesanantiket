<?php
	include('koneksi.php');
	$id_pesan = $_GET['id'];
	$delete  = mysql_query("DELETE FROM psn WHERE id_pesan = '$id_pesan'");
	if($delete){
		header('location: psn_list.php');
	} else {
		echo 'Gagal Menghapus!!';
	}
?>