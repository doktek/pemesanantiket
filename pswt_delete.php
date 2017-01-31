<?php
	include('koneksi.php');
	$id_pesawat = $_GET['id'];
	$delete 	= mysql_query("DELETE FROM pswt WHERE id_pesawat = '$id_pesawat'");
	if($delete){
		header('location: pswt_list.php');
	} else {
	echo "Gagal Menghapus!!";
	}
?>