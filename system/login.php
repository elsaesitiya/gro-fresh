<?php
   include("koneksi.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['email']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']);
      
      $sql = "SELECT kd_pelanggan FROM pelanggan WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        ?>
            <script> alert("Welcome"); 
         window.location='../user/index.php';</script>
         <?php
      }else {
         ?>
            <script> alert("Salah lur"); 
         window.location='../index.php';</script>
         <?php
      }
   }
?>