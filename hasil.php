<?php
include 'proses/koneksi.php';
?>
<html>
<head>
 <title>Simpan Data</title>
 <meta author=Adjie>
</head>
<body>
<h1>Data Barang</h1>
<?php
$judul = $_POST[judul];
$pengarang  = $_POST[pengarang];
$harga = $_POST[harga];
$stok = $_POST[stok];
?>
<?php
$q_simpan = "insert into buku values('$judul','$pengarang','$harga','$stok')";
$hasil = mysqli_query($sambung,$q_simpan);

if($hasil){
echo "Data tersimpan: <br>";
echo "judul              : ".$judul."<br>";
echo "pengarang           : ".$pengarang."<br>"; 
echo "harga       : ".$harga."<br>";
echo "stok			:	".$stok."<br>";
}else{
echo "Data gagal disimpan";}
?>
<form method=post action=form.php>
<input type=submit value=Kembali>
</form>
</body>
</html>
