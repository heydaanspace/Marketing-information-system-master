<?php
session_start();
include 'conndb.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
  <meta name="author" content="Coderthemes">

  <link rel="shortcut icon" href="assets/images/favicon_1.ico">

  <title>Laporan Progres Pembangunan</title>

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
                  <strong>Tanggal Laporan</strong><br>
                  <?php 
                  $tgl = date('Y-m-d');
                  ?>
                  <p class="m-t-10"><span class="label label-success"><?php echo $tgl ?></span></p>
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
                     <th>ID Progres</th>
                     <th>Tahap</th>
                     <th>No Penjualan</th>
                     <th>Nama Konsumen</th>
                     <th>Realisasi</th>
                     <th>Target Selesai</th>
                     <th>Persentase Progres</th>
                     <th>Tanggal Progres</th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php
                   include 'conndb.php';

                   $no = 1;
                   $res = $mysqli->query("SELECT a.id_progres, b.No_penjualan, konsumen, progres,tahap, mulai_pembangunan, target_selesai, tanggal_progres FROM (tbl_progres_pembangunan a JOIN tbl_rekap_penjualan b ON a.No_penjualan = b.No_penjualan) JOIN tbl_member c ON c.id_member = a.id_member");
                   while($row = $res->fetch_assoc()){
                    echo '
                    <tr>
                    <td>'.$no++.'</td>
                    <td>'.$row['id_progres'].'</td>
                    <td>'.$row['tahap'].'</td>
                    <td>'.$row['No_penjualan'].'</td>
                    <td>'.$row['konsumen'].'</td>
                    <td>'.$row['mulai_pembangunan'].'</td>
                    <td>'.$row['target_selesai'].'</td>
                    <td><span class="label label-success">'.$row['progres'].' %</span></td>
                    <td>'.$row['tanggal_progres'].'</td>
                    </tr>';
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
            <p class="text-right"><b>Yogyakarta,</b><?php echo $tgl ?></p> <br><br>
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