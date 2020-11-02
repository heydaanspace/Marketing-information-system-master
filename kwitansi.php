  <?php 
  session_start();
  include 'conndb.php'; 
  $id = $_GET['id'];
  $res = $mysqli->query("SELECT * FROM (tbl_kwitansi JOIN tbl_pembayaran ON tbl_kwitansi.no_pembayaran = tbl_pembayaran.no_pembayaran) JOIN tbl_penjualan ON tbl_penjualan.no_transaksi = tbl_pembayaran.no_transaksi WHERE tbl_pembayaran.no_pembayaran='$id'"); 
  $row = $res->fetch_assoc();
  
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title>Kwitansi</title>

    <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="admin/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="admin/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="admin/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="admin/assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <script src="admin/assets/js/modernizr.min.js"></script>

  </head>
  <body class="fixed-right">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">

          <div class="panel-body">
            <div class="clearfix" style="">
              <div class="pull-left">
                <h4 class="text-right"><img src="admin/assets/images/logo-rep.png" alt="velonic"></h4>
              </div>
              <div class="pull-right">
                <div class="pull-right">
                  <h1>Kwitansi</h1>
                    <p><strong>No.</strong><?php echo $row['No_kwitansi'] ?></p>
                  
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
             <div class="row">
              <div class="col-md-12">
                <div class="row">
                <div class="col-md-6">
                  <h3>Telah diterima dari</h3>
                  <p><?php echo $row['nm_pembeli'] ?></p>
                  <hr>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                   <h3>Uang Sebesar</h3>
                  <p>Rp. <?php echo $row['jumlah_bayar'] ?></p>
                  <hr>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                   <h3>Untuk Pembayaran</h3>
                  <p><?php echo $row['untuk_pembayaran'] ?></p>
                  <hr>
                </div>
              </div>
            </div>
          </div>

          <br> 
          <div class="row" style="border-radius: 0px;">
            <div class="col-md-6">
              <p>Yang menerima</p>
              <br>
              <br>
              <h3><?php echo $row['nm_pembeli'] ?></h3>
            </div>
            <div class="col-md-6">
              <p>Yang menyerahkan</p>
              <br>
              <br>
              <h3>Bagian Pemasaran</h3>
            </div>
          </div>

          <hr>
          <div class="hidden-print">
            <div class="pull-right">
              <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="fa fa-print"></i> Cetak </a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div> <!-- container -->

</div> <!-- content -->
<script>
  var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="admin/assets/js/jquery.min.js"></script>
<script src="admin/assets/js/bootstrap.min.js"></script>
<script src="admin/assets/js/detect.js"></script>
<script src="admin/assets/js/fastclick.js"></script>
<script src="admin/assets/js/jquery.slimscroll.js"></script>
<script src="admin/assets/js/jquery.blockUI.js"></script>
<script src="admin/assets/js/waves.js"></script>
<script src="admin/assets/js/wow.min.js"></script>
<script src="admin/assets/js/jquery.nicescroll.js"></script>
<script src="admin/assets/js/jquery.scrollTo.min.js"></script>


<script src="admin/assets/js/jquery.core.js"></script>
<script src="admin/assets/js/jquery.app.js"></script>

</body>
</html>