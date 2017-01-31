<?php
	include('koneksi.php');
	$id_kelas = $_GET['id'];
	$delete   = mysql_query("DELETE FROM kls WHERE id_kelas = '$id_kelas'");
	if($delete){
		header('location: kls_list.php');
	} else {
		echo "Gagal Menghapus!";
	}
?>