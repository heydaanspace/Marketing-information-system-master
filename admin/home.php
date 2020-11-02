
<div class="content">
  <div class="container">

    <!-- Page-Title -->
    <div class="row">
      <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">

        </div>

        <h4 class="page-title">Home</h4>
        <p class="text-muted page-title-alt">Halaman Admin Sistem Informasi Pemasaran Perumahan</p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 bg-white">
          <i class="md md-home text-primary"></i>
          <?php
          include 'conndb.php';
          $res = $mysqli->query("SELECT count(*) as total from tbl_perumahan");
          $row = $res->fetch_assoc();

          echo'
          <h2 class="m-0 text-dark counter font-600">'.$row['total'].'</h2>';
          ?>
          <div class="text-muted m-t-5">Total<br>Perumahan</div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 bg-white">
          <i class="md md-view-quilt text-pink"></i>
          <?php
          $res = $mysqli->query("SELECT count(*) as totalkav from tbl_kaveling");
          $row = $res->fetch_assoc();

          echo'
          <h2 class="m-0 text-dark counter font-600">'.$row['totalkav'].'</h2>';
          ?>
          <div class="text-muted m-t-5">Total<br>Kaveling</div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 bg-white">
          <i class="md  md-done-all text-info"></i>
          <?php
          $res = $mysqli->query("SELECT count(*) as terjual from tbl_rekap_penjualan");
          $row = $res->fetch_assoc();

          echo'
          <h2 class="m-0 text-dark counter font-600">'.$row['terjual'].'</h2>';
          ?>
          <div class="text-muted m-t-5">Kaveling<br>Terjual</div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 bg-white">
          <i class="md   md-file-download
          text-custom"></i>
          <?php
          $res = $mysqli->query("SELECT count(*) as transaksi from tbl_penjualan");
          $row = $res->fetch_assoc();

          echo'
          <h2 class="m-0 text-dark counter font-600">'.$row['transaksi'].'</h2>';
          ?>
          <div class="text-muted m-t-5">Pengajuan <br>Masuk</div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="card-box">
          <h4 class="m-t-0 header-title"><b>Statistik Penjualan</b></h4>
          <div class="table-responsive">
            <table class="table table-actions-bar">
              <thead>
                <tr>
                  <th>Nama Akun</th>
                  <th>Jumlah</th>

                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>Transaksi Masuk</td>
                  <?php
                  $res = $mysqli->query("SELECT count(*) as transaksi from tbl_penjualan");
                  $row = $res->fetch_assoc();

                  echo'
                  <td><span class="label label-success">'.$row['transaksi'].'</span></td>';
                  ?>

                </tr>
                <tr>
                  <td>Total Kaveling</td>
                  <?php
                  $res = $mysqli->query("SELECT count(*) as kaveling from tbl_kaveling");
                  $row = $res->fetch_assoc();

                  echo'
                  <td><span class="label label-success">'.$row['kaveling'].'</span></td>';
                  ?>
                </tr>
                <tr>
                  <td>Total Perumahan</td>
                  <?php
                  $res = $mysqli->query("SELECT count(*) as perumahan from tbl_perumahan");
                  $row = $res->fetch_assoc();

                  echo'
                  <td><span class="label label-success">'.$row['perumahan'].'</span></td>';
                  ?>

                </tr>
                <tr>
                  <td>Kaveling Terjual</td>
                  <?php
                  $res = $mysqli->query("SELECT count(*) as kavsold from tbl_kaveling where jumlah = 0");
                  $row = $res->fetch_assoc();

                  echo'
                  <td><span class="label label-success">'.$row['kavsold'].'</span></td>';
                  ?>

                </tr>
                <tr>
                  <td>Jumlah Admin</td>
                  <?php
                  $res = $mysqli->query("SELECT count(*) as admin from tbl_admin");
                  $row = $res->fetch_assoc();

                  echo'
                  <td><span class="label label-success">'.$row['admin'].'</span></td>';
                  ?>

                </tr>
                <tr>
                  <td>Jumlah Konsumen Terdaftar</td>
                  <?php
                  $res = $mysqli->query("SELECT count(*) as konsumen from tbl_member");
                  $row = $res->fetch_assoc();

                  echo'
                  <td><span class="label label-success">'.$row['konsumen'].'</span></td>';
                  ?>

                </tr>
                <tr>
                  <td>Transaksi KPR</td>
                  <?php
                  $res = $mysqli->query("SELECT count(*) as kpr from tbl_penjualan where jenis_pelunasan = 'KPR' ");
                  $row = $res->fetch_assoc();

                  echo'
                  <td><span class="label label-success">'.$row['kpr'].'</span></td>';
                  ?>

                </tr>
                <tr>
                  <td>Transaksi Cash</td>
                   <?php
                  $res = $mysqli->query("SELECT count(*) as cash from tbl_penjualan where jenis_pelunasan = 'Cash' ");
                  $row = $res->fetch_assoc();

                  echo'
                  <td><span class="label label-success">'.$row['cash'].'</span></td>';
                  ?>

                </tr>

              </tbody>
            </table>
          </div>


        </div>
      </div>

      <!-- end row -->

    </div> <!-- container -->

  </div> <!-- content -->

  <script src="assets/plugins/flot-chart/jquery.flot.min.js"></script>
  <script src="assets/plugins/flot-chart/jquery.flot.time.js"></script>
  <script src="assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
  <script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
  <script src="assets/plugins/flot-chart/jquery.flot.pie.js"></script>
  <script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
  <script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
  <script src="assets/plugins/flot-chart/jquery.flot.orderBars.min.js"></script>
  <script src="assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>
  <script src="assets/pages/jquery.flot.init.js"></script>
