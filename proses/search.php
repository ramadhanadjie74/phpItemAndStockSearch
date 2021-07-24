<?php
include"koneksi.php";
 $kolom=$_POST['kolom'];
 $cari=$_POST['cari'];
 $hasil=mysqli_query("select * from buku where  $kolom like '%$cari%'", $sambung);
 $jumlah=mysqli_num_rows($hasil);
 echo "<br>";
 echo "Ditemukan: $jumlah";
 echo "<br>";
 while($baris=mysqli_fetch_array($hasil))
   {
   echo "judul : ";
   echo $baris[0];
   echo "<br>";
   echo "pengarang : ";
   echo $baris[1];
   echo "<br>";
   echo "harga :";
   echo $baris[2];
}
?>

<br>
<br>
<form method=post action=../menapilkan_data.php>
<input type=submit name=submit value=Kembali>
</form>