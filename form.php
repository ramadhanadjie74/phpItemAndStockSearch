<html>
<head>
 <title>Data Buku</title>
</head>
<body>
<h1>Masukkan Data Buku</h1>
<form method=post action=hasil.php>
 <table>
  <tr>
   <td>Judul Buku</td>
   <td><input type=text name=judul size=20></td>
  </tr>
  <tr>
   <td>Pengarang</td>
   <td><input type=text name=pengarang size=20></td>
  </tr>
<tr>
<td>Harga</td>
   <td><input type=text name=harga size=20></td>
  </tr>
<tr>
<td>stok</td>
   <td><input type=text name=stok size=20></td>
  </tr>
  <tr>
   <td align=center><input type=submit name=save value=save></td>
   <td align=center><input type=reset name=reset value=batal></td>
  </tr>
 </table>
    <br><a class="tombol" href="menampilkan_data.php"> Menampilkan data yang sudah ada</a><br><br>
</form>
</body>
</html>
