<!-- /.full page header-->
<div class="tp-breadcrumb"><!-- breadcrumb -->
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <ol class="breadcrumb">
          <li><a href="index.html">Citra Kedaton</a></li>
          <li><a href="index.html">Perumahan</a></li>
          <li class="active">Pengajuan Kaveling</li>
        </ol>
       
      </div> 
      <br>
       <div class="col-md-2">
         <a href="transaksi-act.php?action=empty" class="btn tp-btn tp-btn-orange">Batal</a>
       </div>
    </div>
  </div>
</div>
  <!-- /.breadcrumb -->
  
  <div class="main-container" id="main-container"> 
    <!--Main container start-->
    <div class="tp-career-form" id="tp-career-form"><!--career-form-->
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10 career-form">
            <form class="form" method="post" action="career-form.php">
             <?php

             include 'conndb.php';
             if(isset($_SESSION['kaveling'])) {
              foreach($_SESSION['kaveling'] as $idkaveling => $quantity) {
                # code...
                


               $result = $mysqli->query("SELECT * FROM tbl_kaveling JOIN tbl_perumahan ON tbl_kaveling.id_perumahan=tbl_perumahan.id_perumahan WHERE id_kaveling = ".$idkaveling);
               $obj = $result->fetch_object()


               ?>
               <div class="row">
                <div class="col-md-6">
                  <label class="control-label" for="firstname">No transaksi</label>
                  <input  type="text"  readonly="" id="firstname" name="firstname" class="form-control" placeholder="Name">
                </div>
                <div class="col-md-6">
                  <label class="control-label" for="lastname">Perumahan</label>
                  <h2 style="color: #06502D;"><?php echo $obj->nama_perumahan?></h2>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <label class="control-label" for="email">Blok Kaveling</label>
                  <h1 style="color: #06502D;"><?php echo $obj->blok_kaveling?></h1>
                </div>
                <div class="col-md-6">
                  <label class="control-label" for="city">Type</label>
                  <h1 style="color: #06502D;">70</h1>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <label class="control-label" for="state">Harga</label>
                  <h3 style="color: #06502D;">Rp <?php echo $obj->harga_kaveling?></h3>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <button type="submit" class="btn tp-btn tp-btn-blue">Proses </button>
                  
                </div>
              </div>
              <?php 
            } 
          } else {
            echo '<h1>Transaksi dibatalkan</h1>';
            echo '<a href="index.php?page=perumahan" class="btn tp-btn tp-btn-orange">Kembali</a>';
          }

          ?>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/.career-form--> 
</div>
<!-- /.Main container start-->
