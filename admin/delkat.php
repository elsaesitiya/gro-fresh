<?php
include '../system/koneksi.php';

$kd_kategori = $_GET['kd_kategori'];
	mysqli_query($con, "DELETE from kategori where kd_kategori='".$_GET['kd_kategori']."'");
?>
	<script>alert("Data Berhasil dihapus!"); window.location='product.php';</script>
