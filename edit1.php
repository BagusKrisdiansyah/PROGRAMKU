<!DOCTYPE html>
<html>
<head>
	<title>Tari Tradisional</title>
	</head>
	<body>

	<p><a href="Tari.php">Beranda</a> / <a href="tambah1.php">Tambah Data</a></p>
	
	<h3> Edit Data Penari</h3>
	
	<?php
	include('koneksi1.php');
	
	$id = $_GET['id'];
	
	$show = mysql_query("SELECT * FROM tarian WHERE penari_id='$id'");
	
	if(mysql_num_rows($show) == 0) {
	
	echo'<script>window.history.back()</script>';
	}
	else
	{
	$data = mysql_fetch_assoc($show);
	}
	?>
	


	<form action="edit-proses1.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<table cellpadding="3" cellspacing="0">
		<tr>
			<td>Nama Penari</td>
			<td>:</td>
			<td><input type="text" name="Penari" value="<?php echo $data['nama_penari']?>" required></td>
			
		</tr>
		<tr>
			<td>Nama Tarian</td>
			<td>:</td>
			<td><input type="text" name="Tarian" value="<?php echo $data['nama_tarian']?>" required></td>
			
		</tr>
		<tr>
			<td>Asal Tarian</td>
			<td>:</td>
			<td><input type="text" name="Asal" size="30" value="<?php echo $data['asal_tarian']?>" required></td>
		</tr>
		
		<tr>
			<td>nbsp</td>
			<td></td>
			<td><input type="submit" name="simpan"  value="Simpan"></td>
		</tr>
		
		</table>
	</form>
	</body>
	</html>
	
