<?php
include "koneksi.php";
?>

<?php
if(isset($_POST['gedit'])){
	$judul = $_POST['judul'];
	$pengarang = $_POST['pengarang'];
	$harga = $_POST['harga'];
	
	$q='update buku set pengarang="'.$pengarang.'",harga="'.$harga.'" WHERE judul="'.$judul.'"';
	$quer = mysqli_query($koneksi,$q);
	
	if($quer){
	header("location:menapilkan_data.php?pesan=update");
	}
	else{
	echo 'Gagal';
php ?>