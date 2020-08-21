<?php 
include"koneksi.php";
$nama = $_GET['nama_produk'];
mysql_query("DELETE FROM produk WHERE nama_produk ='$nama'");
header('location:produk.php');
 ?>