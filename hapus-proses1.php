<?php

		include ('koneksi1.php');

		$id = $_GET['id'];

	

		$DELETE = mysql_query("DELETE FROM tarian WHERE penari_id= '$id'");

		if ($DELETE) {

			echo ' Data berhasil di DELETE! ';

			echo ' <a href="Tari.php">kembali</a>';

		}else{

			echo ' Terjadi Error ';

		}

?>
