   <!--Template slider start-->
   <div id="slider">
     <div class="item">
      <img src="images/slider-3.jpg" alt="The Last of us" class="img-responsive">
      <div class="container">
        <div class="row">
          <div class="col-md-6 slider-caption"><!-- slider caption-->
            <h1>Perumahan Nayara Citra</h1>
            <p>Cluster 52 Kaveling, Lingkungan asri, Kualitas Real estate.</p>
            <a href="index.php?page=perumahan" class="btn tp-btn tp-btn-orange">Cek Sekarang</a> </div>
            <!-- /.slider caption--> 
          </div>
        </div>
      </div>
      <div class="item">
        <img src="images/slider-3.jpg" alt="Mirror Edge" class="img-responsive">
        <div class="container">
          <div class="row">
            <div class="col-md-6 slider-caption"><!-- slider caption-->
              <h1>Perumahan Adara Citra</h1>
              <p></p>
              <a href="#" class="btn tp-btn tp-btn-orange">Wujudkan Rumah Impian anda</a> </div>
              <!-- /.slider caption--> 
            </div>
          </div>
        </div>

      </div>

      <!-- /.Select option close-->
      <div id="tp-product" class="tp-product section-space"><!-- Products start-->
        <div class="container">
          <div class="row">
            <div class="col-md-12 tp-title"><!-- section title-->
              <h1>Produk Kami</h1>
            </div>
            <!-- /.section title-->
          </div>
          <div id="product">
            <?php
           include 'conndb.php';

           $no = 1;
           $res = $mysqli->query("SELECT * FROM tbl_kaveling JOIN tbl_perumahan ON tbl_kaveling.id_perumahan=tbl_perumahan.id_perumahan");
           while($row = $res->fetch_assoc()){
            echo '
            <div class="col-md-12 product-thumb item"> <!-- Product thumb-->
            <div class="grey-box">
            <h2><a href="index.php?page=perumahan">Kaveling '.$row['blok_kaveling'].'</a></h2>
            <p style="color: #06502D">Perumahan '.$row['nama_perumahan'].'</p>
            <span class="icon"><i class="fa fa-home"></i></span></div>
            </div>';
          }
            ?>
           
          </div>

        </div>
      </div>
