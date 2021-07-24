<html>
<title>Cetak</title>
<?php
			include 'koneksi.php';
			$judul = $_GET['judul'];
			$d = mysqli_query("select * FROM buku WHERE judul='$judul'");
			while($data = mysqli_fetch_array($d)) {
				?>
			<html>
			<body>
			<table border="1" cellpadding="0" cellspacing="0">
		<tr>
			<th>Judul</th>
			<th>Pengarang</th>
			<th>Harga</th>
			<th>Stok</th>
			</tr>
			<tr>
			<td><?php echo $data['judul'];?></td>
			<td><?php echo $data['pengarang'];?></td>
			<td><?php echo $data['harga'];?></td>
			<td><?php echo $data['stok'];?></td>
			</tr>
			</table>

		<script>
		window.print();
		</script>
			<br>
			<?php } ?>
			</html>