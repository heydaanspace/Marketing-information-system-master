  <?php 
  session_start();
  include 'conndb.php'; 
  include 'fungsi-tanggal.php';
  $id = $_SESSION['id_member'];
  $res = $mysqli->query("SELECT c.id_member,c.alamat_member,s.no_transaksi,s.nm_pembeli,g.nama_perumahan,d.blok_kaveling,s.tanggal_transaksi,d.harga_kaveling,s.Jenis_pelunasan,s.status FROM ((tbl_member c JOIN tbl_penjualan s ON c.id_member = s.id_member) JOIN tbl_perumahan g ON s.id_perumahan = g.id_perumahan) JOIN tbl_kaveling d ON d.id_kaveling = s.id_kaveling WHERE c.id_member='$id'"); 
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

  <title>Detail</title>

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
                <h4>Invoice # <br>
                  <strong><?php echo date("d/m/Y h:i:s"); ?></strong>
                </h4>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12">

              <div class="pull-left m-t-30">
                <address>
                  <strong>Nama Pembeli</strong><br>
                  <?php echo $row['nm_pembeli'] ?><br>
                  <?php echo $row['alamat_member'] ?>
                  
                </address>
              </div>
              <div class="pull-right m-t-30">
                <p><strong>Tanggal Pengajuan: </strong> <?php echo tanggalIndo($row['tanggal_transaksi']); ?></p>
                <p class="m-t-10"><strong>Status: </strong> <span class="label label-warning"><?php echo $row['status']; ?></span></p>
                <p class="m-t-10"><strong>ID Pembelian: </strong> #<?php echo $row['no_transaksi']; ?></p>
              </div>
            </div>
          </div>
          <div class="row">
             <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table m-t-30">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Kaveling</th>
                        <th>Perumahan</th>
                        <th>Harga</th>
                        <th>Jenis Pelunasan</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td><?php echo $row['blok_kaveling'] ?></td>
                          <td><?php echo $row['nama_perumahan'] ?></td>
                          <td><?php echo number_format($row['harga_kaveling'])?></td>
                          <td><?php echo $row['Jenis_pelunasan'] ?></td>
                          <td><?php echo $row['harga_kaveling'] ?></td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <br> <div class="row" style="border-radius: 0px;">
                <div class="col-md-3 col-md-offset-9">
                  <p class="text-right"><b>Total:</b> Rp.<?php echo number_format($row['harga_kaveling']) ?></p>
                  <p class="text-right">Uang Muka min: 30%  Rp. <?php echo $row['harga_kaveling'] * 30 /100; ?></p>
                </div>
              </div>
              <hr>
              <div class="hidden-print">
                <div class="pull-right">
                  <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="fa fa-print"></i> Cetak </a>
                  <a href="index.php?page=akun" class="btn btn-primary waves-effect waves-light"><i class="fa fa-money"></i> Lanjut Pembayaran </a>
                </div>
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