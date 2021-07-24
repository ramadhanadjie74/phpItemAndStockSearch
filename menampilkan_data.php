<html>
<head>
<title>Menampilkan data dari database</title>
</head>
<body>
<h2><a class="tombol" href="form.php">Tambah Data Baru</a></h2>
<table border="1" cellpadding="0" cellspacing="0">
<tr>
<th>Judul</th>
<th>Pengarang</th>
<th>Harga</th>
<th>Stok</th>
<th>Action</th>
</tr>
<?php
include 'proses/koneksi.php';
$query_mysqli = mysqli_query($sambung, "SELECT * FROM buku ORDER BY judul ASC")or die(mysqli_error());
$no = 1;
while($data = mysqli_fetch_array($query_mysqli))
{	?>
<tr>
<td><?php echo $data['judul'];?></td>
<td><?php echo $data['pengarang'];?></td>
<td><?php echo $data['harga'];?></td>
<td><?php echo $data['stok'];?></td>
<td>
<a href="edit.php?judul=<?php echo $data['judul']; ?>"><img src="editlogo.jpg" alt="edit" height="20" width="20"></a>
<a href="proses/hapus.php?judul=<?php echo $data['judul']; ?>" onclick="return confirm('Yakin mau di hapus?');"><img src="eraser.png" alt="hapus" height="20" width="20"></a>
<a href="data.php?judul=<?php echo $data['judul']; ?>"><img src="print.png" alt="print" height="20" width="20"></a>
</td>
</tr>
<?php } ?>
</table>
<?php 
if(isset($_GET['pesan'])){
$pesan = $_GET['pesan'];
if($pesan == "input"){
echo "Data berhasil di input.";
}else if($pesan == "update"){
echo "Data berhasil di update.";
}else if($pesan == "hapus"){
echo "Data berhasil di hapus.";
}
}
?>
</br>
</body>
</html>