<?php
include "koneksi.php";
$nama = $_POST["nama"];
$keterangan = $_POST["keterangan"];
$harga = $_POST["harga"];
$jumlah = $_POST["jumlah"];
$sql = mysql_query("SELECT nama_produk from produk where nama_produk = '$nama'");
$cek = mysql_num_rows($sql);
mysql_query("UPDATE produk SET nama_produk='$nama', keterangan='$keterangan', harga='$harga' ,jumlah='$jumlah' WHERE nama_produk='$nama'");
header('location:produk.php');

?>