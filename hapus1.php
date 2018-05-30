<!DOCTYPE html>

<html>

<head>

	<title>Tari Tradisional</title>

</head>

<body>

	<h2>Tari Tradisional</h2>

	<p><a href="Tari.php">Beranda</a> / <a href="tambah1.php">Tambah Data</a></p>

	<h3>Edit Data Penari</h3>

	<?php

		include ('koneksi1.php');

		$id = $_GET['id'];

		$show = mysql_query("SELECT * FROM tarian WHERE no = '$id'");

		if(mysql_num_rows($show) == 0){

			echo'<script>window.history.back()</script>';

		}else{

			$data = mysql_fetch_assoc($show);

		}

	?>

	<form action="delete-proses.php" method="POST">

		<input type="hidden" name="id" value="<?php echo $id;?>">

		<table cellpadding="3" cellspacing="3">

		<tr>

			<td>Nama Penari</td>

			<td>:</td>

			<td><input type="text" name="Penari" value="<?php echo $data['nama_penari'];?>" required><br></td>



		</tr>

		<tr>

			<td>Nama Tarian</td>

			<td>:</td>

			<td><input type="text" name="Tarian" value="<?php echo $data['nama_tarian'];?>" required><br></td>
			<tr>

			<td>Asal Tarian</td>

			<td>:</td>

			<td><input type="text" name="Asal" value="<?php echo $data['asal_tarian'];?>" required><br></td>

		</tr>

		<tr>

			<td>Klik</td>

			<td></td>

			<td><input type="submit" name="hapus" value="hapus"></td>

		</tr>

		</table>

	</form>

</body>

</html>
