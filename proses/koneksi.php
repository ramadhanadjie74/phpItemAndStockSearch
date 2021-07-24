<?php
$sambung = new mysqli("localhost","root","","adjiemid");
if ($sambung -> connect_errno)
{
	echo "Gagal menyambung ke database";
}
else
	{
		echo "Koneksi berhasil";
	}
?>