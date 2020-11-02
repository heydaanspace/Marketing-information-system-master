<?php
session_start();
include 'conndb.php';
include '../fungsi-tanggal.php';

$tgl1=$_GET['tgl1'];
$tgl2=$_GET['tgl2'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
  <meta name="author" content="Coderthemes">

  <link rel="shortcut icon" href="assets/images/favicon_1.ico">

  <title>Laporan Transaksi Masuk</title>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

  <script src="assets/js/modernizr.min.js"></script>

</head>


<body class="fixed-right">



  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-body">
          <div class="clearfix" style="">
            <div class="pull-left">
              <h4 class="text-right"><img src="assets/images/logo-rep.png" alt="velonic"></h4>
            </div>
            <div class="pull-right">
              <h4><strong>Alamat</strong><br>
                Jl. Ringroad Utara 24, Condong catur, Yogyakarta. <br> 0274 887789
              </h4>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <div class="pull-left m-t-30">
                <address>
                  <strong>Periode Laporan Transaksi Masuk</strong><br>
                  <p class="m-t-10"><span class="label label-success"><?php echo tanggalIndo($tgl1) ?></span> / <span class="label label-success"><?php echo tanggalIndo($tgl2) ?></span></p>
                </address>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table m-t-30">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No. Transaksi</th>
                      <th>Tanggal Transaksi</th>
                      <th>Pembeli</th>
                      <th>Perumahan</th>
                      <th>Blok. Kav</th>
                      <th>Harga</th>
                      <th>Jenis Pelunasan</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                   $no=1;
                   $query="SELECT a.no_transaksi,a.tanggal_transaksi,a.nm_pembeli,a.jenis_pelunasan,a.lampiran_ktp,a.status,b.blok_kaveling,b.harga_kaveling,c.nama_perumahan FROM (tbl_penjualan a JOIN tbl_kaveling b ON a.id_kaveling = b.id_kaveling ) JOIN tbl_perumahan c ON a.id_perumahan = c.id_perumahan WHERE tanggal_transaksi BETWEEN '$tgl1' AND '$tgl2'";
                   $result=$mysqli->query($query);
                   $num_result=$result->num_rows;
                   if ($num_result > 0 ) { 
                    while ($data=mysqli_fetch_assoc($result)) {
                      echo
                      '<tr>
                      <td>'.$no++.'</td>
                      <td>'.$data['no_transaksi'].'</td>
                      <td>'.$data['tanggal_transaksi'].'</td>
                      <td>'.$data['nm_pembeli'].'</td>
                      <td>'.$data['nama_perumahan'].'</td>
                      <td>'.$data['blok_kaveling'].'</td>
                      <td>'.$data['harga_kaveling'].'</td>
                      <td>'.$data['jenis_pelunasan'].'</td>
                      <td>'.$data['status'].'</td>
                      </tr>';

                    }
                  }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <br>
        <div class="row" style="border-radius: 0px;">
          <div class="col-md-3 col-md-offset-9">
            <hr>
            <p class="text-right"><b>Yogyakarta</b><?php date("Y-m-d h:i:sa") ?></p> <br><br>
            <p class="text-right">Admin</p>
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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>


<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

</body>
</html>