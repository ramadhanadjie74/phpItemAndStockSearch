<html>
<Title> EDIT </title>
<meta author=Agus
<body>
<h3>Edit data</h3>
<?php
include 'proses/koneksi.php';
$nama = $_GET['judul'];
$d = mysqli_query("select * FROM buku WHERE judul='$nama'");
while($data = mysqli_fetch_array($d)) {
?>
<form method="post" action="proses/edit.php">		
<table>
<tr>
<td>nama</td>
<td><input type="text" name="judul" value="<?php echo $_GET['judul'] ?>"></td>
</tr>
<tr>
<td>pengarang</td>
<td><input type="text" name="pengarang" value="<?php echo $data['pengarang'] ?>"></td>
</tr>	
<tr>
<td>harga</td>
<td><input type="text" name="harga" value="<?php echo $data['harga'] ?>"></td>
</tr>
<tr>
<td>stok</td>
<td><input type="text" name="stok" value="<?php echo $data['stok'] ?>"></td>
</tr>
</table>
<input type=submit name=gedit value=simpan>
</form>
<form method=post action=menampilkan_data.php>
<input type=submit name=submit value=Kembali>
</form>
<?php 
} 
?>
 </body>
</html>