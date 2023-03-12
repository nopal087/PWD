<?php 
include 'db.php';
$nama = $_POST['nama'];
$kontak = $_POST['kontak'];
$alamat = $_POST['alamat'];
$produk = $_POST['produk'];

mysqli_query($koneksi, "INSERT INTO orderan VALUES(NULL,'$nama','$kontak','$alamat','$produk')");
echo '<script>alert("Sukses")</script>';
echo '<script>window.location ="pesan.php"</script>';
