<!DOCTYPE html>
<html>
    <head>
        <title>Dialog Confirm</title>
    </head>
    <body>
        <?php 
$nama=$_GET['nama_produk']; ?>
    <script>
        var yakin = confirm("Yakin Hapus?");

        if (yakin) {
            window.location = <?php echo "'h_produk.php?nama_produk=$nama'"; ?>
        } else {
            window.location = "produk.php";
        }
    </script>
    </body>
</html>