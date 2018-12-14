<?php include 'koneksi.php';

/*if(isset($_POST['submit'])){

$query="insert into cart (kd_cart, kd_produk, qty, total) values ('2','2','20','2000')";
$hasil=mysqli_query($con,$query);
?>

<script>
alert("data sukses ditambahkan");
window.location='../Method Payment.html';
</script>
*/
	session_start();
	if(isset($_GET['id']) & !empty($_GET['id'])){
			$items = $_GET['id'];
			$_SESSION['cart'] = $items;
			header('location: index.php?status=success');
	}else{
		header('location: index.php?status=failed');
	}
?>
1
2
3
4
5
6
7
8
9
10
<?php
	session_start();
	if(isset($_GET['id']) & !empty($_GET['id'])){
			$items = $_GET['id'];
			$_SESSION['cart'] = $items;
			header('location: index.php?status=success');
	}else{
		header('location: index.php?status=failed');
	}
?>