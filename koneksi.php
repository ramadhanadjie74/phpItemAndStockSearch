<?php
//Membuat database mysqli
$nama_db = "adjiemid";
$buat_db = "create database $nama_db";

$sambung = mysqli_connect("localhost","root","");

if($sambung){
 echo "Koneksi Berhasil";}
else {
 echo "Koneksi Gagal";}

$q_db = mysqli_query($buat_db);
if($q_db){
 echo "<br> Database $nama_db berhasil dibuat";}
else {
 echo "<br> Database $nama_db gagal dibuat";}
?>
