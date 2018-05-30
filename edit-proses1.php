<?php

	if(isset($_POST['simpan'])){

		include ('koneksi1.php');

		$id = $_POST['id'];

		$Penari = $_POST['Penari'];

		$Tarian = $_POST['Tarian'];

		$Asal = $_POST['Asal'];



		$UPDATE = mysql_query("UPDATE tarian set nama_penari='$Penari' , nama_tarian='$Tarian' , asal_tarian='$Asal' WHERE penari_id= '$id'");

		if ($UPDATE) {

			echo ' Data berhasil di UPDATE! ';

			echo ' <a href="Tari.php">kembali</a>';

		}else{

			echo ' Terjadi Error ';

		}

	}

?>
