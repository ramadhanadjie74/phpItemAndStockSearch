<?php 
include 'koneksi.php';
$nama = $_GET['judul'];
$eksekusi = mysqli_query($sambung, "Delete FROM buku WHERE judul='$nama'")or die(mysqli_error());
header("location:../menampilkan_data.php?pesan=delete");
?>