<?php
include '../system/koneksi.php';

$kd_pelanggan = $_GET['kd_pelanggan'];
	mysqli_query($con, "DELETE from pelanggan where kd_pelanggan='".$_GET['kd_pelanggan']."'");
?>
	<script>alert("Data Berhasil dihapus!"); window.location='user.php';</script>
