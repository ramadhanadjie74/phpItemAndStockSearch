<?php
//Membuat tabel mysqli
$nama_db = "adjiemid";
$nama_tbl = "buku";

$sambung = mysqli_connect("localhost","root","");
if($sambung){
 echo "Koneksi Berhasil";}
else {
 echo "Koneksi Gagal";}

mysqli_select_db($nama_db,$sambung) or die("Koneksi ke $nama_db gagal");

$buat_tbl = "create table $nama_tbl (judul char(20) not null, pengarang char(20) not null, harga char(20) not null, stok char(20) not null)";

$qtbl = mysqli_query($buat_tbl,$sambung);
if($qtbl){
 echo "<br>Tabel $nama_tbl berhasil dibuat";}
else {
 echo "<br>Tabel $nama_tbl gagal dibuat";}
?>
