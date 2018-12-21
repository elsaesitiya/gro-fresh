<?php
include '../system/koneksi.php';

$kd_produk = $_GET['kd_produk'];
	mysqli_query($con, "DELETE from produk where kd_produk='".$_GET['kd_produk']."'");
?>
	<script>alert("Data Berhasil dihapus!"); window.location='product.php';</script>
