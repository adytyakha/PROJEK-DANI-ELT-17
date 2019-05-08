<?php
	include 'koneksi.php';
	if (isset($_POST['log'])) {
		$user = mysqli_real_escape_string($link, $_POST['username']);
		$pass = mysqli_real_escape_string($link, $_POST['password']);
		
		
		$query = mysqli_query($link, "SELECT * FROM data_user WHERE username='$user' AND password='$pass'");
		$data = mysqli_fetch_array($query);
		$username = $data['username'];
		$password = $data['password'];
		$nama	  = $data['nama'];
		$level    = $data['level'];

		if ($user==$username && $pass ==$password) {
			session_start();
			$_SESSION['user']	=$username;
			$_SESSION['nama']	=$nama;
			$_SESSION['level'] 	=$level;
			if ($level == 'admin') {
				echo "<script>alert('Anda berhasil login. Sebagai : $level');</script>";
				echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
			}else{
				echo "<script>alert('Anda berhasil Log In. Sebagai : $level');</script>";
				echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
			}
		}else{
			echo "<script>alert('Username dan Password Tidak Ditemukan');</script>";
			echo "<meta http-equiv='refresh' content='0; url=../login.php'>";
		}
	}
?>
