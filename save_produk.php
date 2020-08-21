<?php 
include 'koneksi.php';
$int = 0;
$nama = $_POST["nama"];
$keterangan = $_POST["keterangan"];
$harga = $_POST["harga"];
$jumlah = $_POST["jumlah"];
$sql = mysql_query("SELECT nama_produk from produk where nama_produk = '$nama'");
$cek = mysql_num_rows($sql);
if ($cek>=1) {
	echo "<script>alert('Nama yang sama sudah ada');window.location='produk.php'</script>";
} else {
mysql_query("INSERT INTO produk VALUES ('$nama','$keterangan','$harga','$jumlah')");
header('location:produk.php');
} ?>