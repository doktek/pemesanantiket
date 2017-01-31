<?php
	include('koneksi.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query 	  = mysql_query("SELECT * FROM user WHERE username = '$username' AND PASSWORD = '$password'");
	if(mysql_num_rows($query) == 0){
		header('location: header.php');
	} else {
		session_start();
		$row = mysql_fetch_assoc($query);
		$_SESSION['id_user'] 	= $row['id_user'];
		$_SESSION['username'] 	= $row['username'];
		$_SESSION['level']		= $row['level'];
		header('location: beranda.php');
	}