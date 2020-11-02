<?php
session_start();
include 'conndb.php';

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

  <title>Laporan Data Penjualan</title>

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
                  <strong>Periode Penjualan</strong><br>
                  <p class="m-t-10"><span class="label label-success"><?php echo $tgl1 ?></span> / <span class="label label-success"><?php echo $tgl2 ?></span></p>
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
                     <th>No. Penjualan</th>
                     <th>Tanggal Penjualan</th>
                     <th>No. Pembelian</th>
                     <th>Nama Pembeli</th>
                     <th>Perumahan</th>
                     <th>Blok Kaveling</th>
                     <th>Keterangan</th>
                     <th>Jenis Pelunasan</th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php
                   $no=1;
                   $query="SELECT a.No_penjualan,a.tanggal,a.id_perumahan,a.keterangan,a.jenis_pelunasan,a.bank,a.tgl_acckpr,a.deadline_acckpr,a.acc_desain,a.deadline_add,a.prod_versispp, a.realisasi, a.pelaksana, a.tgl_spp, b.no_transaksi, b.nm_pembeli, c.blok_kaveling, d.nama_perumahan FROM ((tbl_rekap_penjualan a JOIN tbl_penjualan b ON a.no_transaksi = b.no_transaksi ) JOIN tbl_kaveling c ON a.id_kaveling = c.id_kaveling) JOIN tbl_perumahan d ON a.id_perumahan=d.id_perumahan WHERE tanggal BETWEEN '$tgl1' AND '$tgl2'";
                   $result=$mysqli->query($query);
                   $num_result=$result->num_rows;
                   if ($num_result > 0 ) { 
                    while ($data=mysqli_fetch_assoc($result)) {
                      echo
                      '<tr>
                      <td>'.$no++.'</td>
                      <td>'.$data['No_penjualan'].'</td>
                      <td>'.$data['tanggal'].'</td>
                      <td>'.$data['no_transaksi'].'</td>
                      <td>'.$data['nm_pembeli'].'</td>
                      <td>'.$data['nama_perumahan'].'</td>
                      <td>'.$data['blok_kaveling'].'</td>
                      <td>'.$data['keterangan'].'</td>
                      <td>'.$data['jenis_pelunasan'].'</td>
                      </tr>';

                    }
                  }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
          <div class="col-md-12">
            <div class="table-responsive">
              <table class="table m-t-30">
                <thead>
                  <tr>
                   <th>Bank</th>
                   <th>ACC KPR</th>
                   <th>Deadline ACC KPR</th>
                   <th>ACC Desain</th>
                   <th>Deadline addendum</th>
                   <th>Produksi versi SPP</th>
                   <th>Realisasi</th>
                   <th>Pelaksana</th>
                   <th>Tanggal SPP</th>
                 </tr>
               </thead>
               <tbody>
                 <?php
                 $query="SELECT a.No_penjualan,a.tanggal,a.id_perumahan,a.keterangan,a.jenis_pelunasan,a.bank,a.tgl_acckpr,a.deadline_acckpr,a.acc_desain,a.deadline_add,a.prod_versispp, a.realisasi, a.pelaksana, a.tgl_spp, b.no_transaksi, b.nm_pembeli, c.blok_kaveling, d.nama_perumahan FROM ((tbl_rekap_penjualan a JOIN tbl_penjualan b ON a.no_transaksi = b.no_transaksi ) JOIN tbl_kaveling c ON a.id_kaveling = c.id_kaveling) JOIN tbl_perumahan d ON a.id_perumahan=d.id_perumahan WHERE tanggal BETWEEN '$tgl1' AND '$tgl2'";
                 $result=$mysqli->query($query);
                 $num_result=$result->num_rows;
                 if ($num_result > 0 ) { 
                  while ($data=mysqli_fetch_assoc($result)) {
                    echo
                    '<tr>
                    <td>'.$data['bank'].'</td>
                    <td>'.$data['tgl_acckpr'].'</td>
                    <td>'.$data['deadline_acckpr'].'</td>
                    <td>'.$data['acc_desain'].'</td>
                    <td>'.$data['deadline_add'].'</td>
                    <td>'.$data['prod_versispp'].'</td>
                    <td>'.$data['realisasi'].'</td>
                    <td>'.$data['pelaksana'].'</td>
                    <td>'.$data['tgl_spp'].'</td>
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
          <?php 
          $tgl = date('Y-m-d')
           ?>
          <p class="text-right"><b>Yogyakarta, </b><?php echo $tgl ?></p> <br><br>
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