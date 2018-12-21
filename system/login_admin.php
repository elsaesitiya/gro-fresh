<?php
   include("koneksi.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['nama_admin']);
      $mypassword = mysqli_real_escape_string($con,$_POST['kd_admin']);
      
      $sql = "SELECT kd_admin FROM admin WHERE kd_admin = '$mypassword' and nama_admin = '$myusername'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['kd_admin'] = $_POST['kd_admin']; 
         ?>
            <script> alert("Welcome"); 
         window.location='../admin/home.php';</script>

         <?php
      }else {
         ?>
            <script> alert("Salah lur"); 
         window.location='../admin/index.php';</script>
         <?php
      }
   }
?>