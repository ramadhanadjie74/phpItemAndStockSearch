<?php
$tampil = "select * from buku";
$sambung = mysqli_connect("localhost","root","");
mysqli_select_db(adjiemid,$sambung) or die("Koneksi ke adjiemid gagal");
$q_buat = mysqli_query($tampil,$sambung);
?>
<table border=1>
<tr>
 <td>judul</td>
 <td>pengarang</td>
 <td>harga</td>
 <td>stok</td>
</tr>
<?php
while($row = mysqli_fetch_row($q_buat)){
echo ("<tr align=center><td>$row[0]</td>");
echo ("<td>$row[1]</td>");
echo ("<td>$row[2]</td>");
echo ("<td>$row[3]</td></tr>");
}
?>
</table>
<script>
window.print();
</script>


  
