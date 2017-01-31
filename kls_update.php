<?php
	include('koneksi.php');
	$id_kelas = $_POST['id_kelas'];
	$kelas	  = $_POST['kelas'];
	$harga	  = $_POST['harga'];
	$update   = mysql_query("UPDATE kls SET kelas = '$kelas', harga = '$harga' WHERE id_kelas = '$id_kelas'");
	if($update){
		header('location: kls_list.php');
	} else {
		echo "Gagal Mengupdate";
	}
?>