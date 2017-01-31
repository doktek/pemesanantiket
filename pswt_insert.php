<?php
	include('koneksi.php');
	$dari     = $_POST['dari'];
    $ke       = $_POST['ke'];
    $tanggal  = $_POST['tanggal'];
    $id_kelas = $_POST['id_kelas'];
	$insert   = mysql_query("INSERT INTO pswt VALUES('','$dari', '$ke', '$tanggal', '$id_kelas')");
	if($insert){
		header('location: pswt_list.php');
	} else {
		echo "Gagal Menambahkan Tempat!";
	}
?>