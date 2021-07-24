<?php
include 'koneksi.php';
if(isset($_POST['gedit'])){
	$judul	= $_POST['judul'];
	$pengarang	= $_POST['pengarang'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	
	
	$sql	= 'update buku set stok="'.$stok.'", pengarang="'.$pengarang.'", harga="'.$harga.'" where judul="'.$judul.'"';
	$query	= mysqli_query($sql,$sambung);
	
	if($query){
	header('location: ../menampilkan_data.php');
	}
	else{ 
	echo"Gagal";
	}
  } 
?>
<br>
	<br>
	<form method=post action=../menapilkan_data.php>
	<input type=submit name=submit value=Kembali>
	</form>