<!DOCTYPE html>
<html>
<head>
	<title>Lomba Tari Tradisional</title>
</head>
<body>
	<h2>Tari Tradisional</h2>
	<p>
		<a href="tari.php">Beranda</a>/<a href="tambah1.php">Tambah Data</a>
	</p>
	<h3>Tamabah Data Peserta</h3>
	<form action="tambah-proses1.php" method="POST">
		<table cellpadding="10" cellspacing="0">
			<tr>
				<td>
					Nama Penari
				</td>
				<td>:</td>
				<td><input type="text" name="Penari" size="30" required=""></td>
			</tr>
			<tr>
				<td>
					Nama Tarian
				</td>
				<td>:</td>
				<td><input type="text" name="Tarian" size="30" required=""></td>
			</tr>
			<tr>
				<td>
					Asal Tarian
				</td>
				<td>:</td>
				<td><input type="text" name="Asal" size="30" required=""></td>
			</tr>
			<tr>
				<td>
					$nbsp$
				</td>
				<td>:</td>
				<td><input type="submit" name="Tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>
