<?php 
session_start();
if (!isset($_SESSION['kd_admin'])){
include '../system/koneksi.php';
}
 ?>

<header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <a class="navbar-brand" href="#"><img src="../img/logofont.svg" width="150" height="auto" class="d-inline-block align-top" alt=""></a>
          <!--<img src="img/logo.png " width="30" height="30" class="d-inline-block align-top" alt="">-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product.php">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user.php">User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="message.php">Messages</a>
            </li>
          </ul>
             <div class="dropdown">
            ADMIN - <?=$_SESSION['kd_admin']; ?>  
          <button class="dropbtn"><img src="../img/user2.png"></button>
          
        </div>
      </nav>
    </header>