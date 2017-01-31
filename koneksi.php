<?php 
	$host 		= 'localhost';
	$user 		= 'root';
	$password 	= '';
	$database 	= 'db_tiket';
	$connect 	= mysql_connect($host,$user,$password);
	if (!$connect){
		echo "Gagal Konek ke Server";
	}
	$db_connect = mysql_select_db($database);
	if (!$db_connect){
		echo "Gagal Konek ke Database";
	}
?>