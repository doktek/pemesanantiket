<?php
	include('koneksi.php');
	$id_user 	  = $_POST['id_user'];
	$username     = $_POST['username'];
	$password     = $_POST['password'];
	$email        = $_POST['email'];
	$update       = mysql_query("UPDATE user SET username = '$username', password = '$password', email = '$email' WHERE id_user = '$id_user'");
	if ($update){
		header('location: user_list.php');
	} else {
		echo "Gagal Update!!";
	}
?>