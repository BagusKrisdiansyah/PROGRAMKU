<?php 
//cek dahulu.jika tombol tambah di klik
if(isset($_POST['Tambah'])){
	//include atau memasukan file koneksi ke databaSE
	include('koneksi1.php');
	//jika tombol tambah benear di klik maka lanjut prosesnya
	$Penari= $_POST['Penari']; //membuat variable Prodi dan datanya dari Prodi
	$Tarian= $_POST['Tarian']; //memmbuat variabel $nim dan datanya dari inputan nim
	$Asal= $_POST['Asal']; //membuat variable nama dan datanya dari inputan nama lengkap
	//melakukan query dengarn perintah insert into untuk memasukan data ke database
	$input=mysql_query("INSERT INTO tarian VALUES ('NULL','$Penari','$Tarian','$Asal')") or die (mysql_error());// harus diurutkan sesuai database mysql dan NULL = mhs_id karena auto increement

// jika query input sukses
 if ($input){
 	echo 'data berhasil di tambahkan';// pessan jika proses tambah sukses
 	echo '<a href="tambah1.php"> Kembali</a>'; //membuat link untuk kembali ke halaman tambah
 }else{
 	echo 'gagal menambahkan data';//pesan jika proses tambah gagal
 	echo '<a href="tambah1.php">Kembali</a>';//membuat link untuk kekmabli ke halaman tambah
 }
}else {
	//jika tidak terdeteksi tombol tambah diklik
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
}
 ?>
