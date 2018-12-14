<?php include 'koneksi.php'; 

if(isset($_POST['submit'])){

$query="insert into pelanggan (kd_pelanggan, nama_pelanggan, email, alamat, password, no_tlp) values ('','".$_POST['nama_pelanggan']."','".$_POST['email']."','".$_POST['alamat']."','".$_POST['password']."','".$_POST['no_tlp']."')";

//eksekusi query
 $hasil=mysqli_query($con,$query) or die (mysql_error());
?>

<script>
alert("data sukses ditambahkan");
window.location='../index.html';
</script>

<?php
}
?>