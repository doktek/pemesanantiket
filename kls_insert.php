<?php
	include('koneksi.php');
	$kelas 	= $_POST['kelas'];
	$harga  = $_POST['harga'];
	$insert = mysql_query("INSERT INTO kls VALUES('','$kelas', '$harga')");
	if($insert){
		header('location: kls_list.php');
	} else {
		echo "Gagal Menambahkan Data!";
	}
?>