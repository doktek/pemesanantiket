<?php
    include('style.php');
?>
<?php
	session_start();
	require_once("koneksi.php");
	$username 	  = $_POST['username'];
	$password     = $_POST['password'];
	$email		  = $_POST['email'];
	$level 		  = "user";
	$cekuser 	  = mysql_query("SELECT * FROM user WHERE id_user = 'id_user'");
		if(!$username || !$password || !$email){
			echo "<div align='center'>Masih Ada Data Yang Kosong! <a href='registrasi.php'>Back</a></div>";
		} else {
			$simpan = mysql_query("INSERT INTO user(username, password, email, level) VALUES('$username', '$password', '$email', '$level')");
			if($simpan) {
				echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='index.php'>Login</a></div>";
			} else {
				echo "<div align='center'>Proses Gagal!</div>";
			}
		}
?>