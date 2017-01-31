<?php
	include('koneksi.php');
	$id_pesan  = $_POST['id_pesan'];
	$nama 	   = $_POST['nama'];
	$identitas = $_POST['identitas'];
	$alamat    = $_POST['alamat'];
	$telpon    = $_POST['telepon'];
	$insert    = mysql_query("INSERT INTO psn VALUES ('','$id_pesan','$nama','$identitas','$alamat','$telepon')");
	if($insert){
		header('location: pemesanan_list_user.php');
	} else {
		echo "Gagal Menambahkan!";
	}
?>