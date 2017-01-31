<?php
	include('koneksi.php');
	$id_user = $_GET['id'];
	$delete  = mysql_query("DELETE FROM user WHERE id_user = '$id_user'");
	if($delete){
		header('location: user_list.php');
	} else {
	echo 'Gagal Menghapus!!';
	}
?>