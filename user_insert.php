<?php
	include('koneksi.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
    $email    = $_POST['email'];
	$insert   = mysql_query("INSERT INTO user VALUES('$username', '$password', '$email')");
	if($insert){
		header('location: user_list.php');
	} else {
		echo "Gagal Menambahkan Data!";
	}
?>