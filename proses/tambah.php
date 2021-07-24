<?php
include "koneksi.php";
if(isset($_POST['tambah'])){
	$judul	= $_POST['judul'];
	$pengarang	= $_POST['pengarang'];
	$harga = $_POST['harga'];

	$s	= "insert into buku values('$judul','$pengarang','$harga')";
	$query1	= mysqli_query($s,$sambung);
	
	if($query1){
		header('location: ../menapilkan_data.php');
	}
	else{
		echo 'Gagal';
	}
}
?>

<form method=post action=form.php>
<input type=submit name=submit value=Kembali>
</form>