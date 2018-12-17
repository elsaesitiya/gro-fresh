<?php include '../system/koneksi.php' ?>
<header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <a class="navbar-brand" href="index.php"><img src="../img/logofont.svg" width="150" height="auto" class="d-inline-block align-top" alt=""></a>
          <!--<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="productlist.php">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="quality.php">Quality</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="CS Contact.php">Contact Us</a>
            </li>
          </ul>
<?php
   $query = mysqli_query($con,"SELECT * FROM pelanggan");
   $record = mysqli_fetch_array($query);
   
   ?>
             <div class="dropdown">
            USER - <?php echo $record['nama_pelanggan']; ?>  
          <button class="dropbtn"><img src="../img/user2.png"></button>
          <div class="dropdown-content">
            <a href="indexlogin.php"> Profile </a>
            <a href="history payment.php"> History </a>
          </div>  
        </div>
      </nav>
    </header>