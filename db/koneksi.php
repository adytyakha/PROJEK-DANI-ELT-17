<?php

		$db_host = "localhost";
		$db_user = "id6441934_adytya99";
		$db_password ="12345";
		$db_name = "id6441934_dani_elt";
		

		$link = mysqli_connect($db_host, $db_user, $db_password, $db_name);

		if (!$link) {
		die("Gagal Terkoneksi ".mysqli_connect_error(). " - ".mysqli_connection_error() );
		exit();

		}
		?>
