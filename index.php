<?php 

ob_start();
session_start();

    //cek session
if(isset($_SESSION['status'])){

}
require('conndb.php');
?>

<!DOCTYPE html>
<html lang="en" ng-app="CalculatorApp">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="Insurance compant html template for small insurance firm. Template included Insurance products, Find an agent, Claim center etc. ">
  <meta name="keywords" content="Insurance, Home Insurance, Auto Insurance, Life Insurance, Find an agent">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <title>Citra Kedaton | Green Living</title>

  <!-- plugin datepicker -->
  <link href="admin/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link href="admin/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
  <link href="admin/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">

  <!-- Bootstrap -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Font -->
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic' rel='stylesheet' type='text/css'>

  <!-- Template Style.css -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/owl.carousel.css" rel="stylesheet">
  <link href="css/owl.theme.css" rel="stylesheet">
  <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css" />

  <!-- Awesome Icon Font -->
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- DataTables -->
  <link href="admin/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
  <link href="admin/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="admin/assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="admin/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="admin/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="admin/assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
  <link href="admin/assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="admin/assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>

</head>
<body>
  <div class="search-open"><!-- search open -->
    <div class="container">
      <div class="col-md-offset-2 col-md-8">
        <div class="input-group">
          <input type="text" class="form-control">
          <span class="input-group-btn">
            <button class="btn tp-btn-orange" type="button">Search</button>
          </span> </div>
        </div>
      </div>
    </div>
    <!-- search open --> 
    <!-- tp header -->
    <div class="tp-header" id="tp-header">
      <div class="container">
        <div class="row">
          <div class="col-md-4"> <a class="navbar-brand" href="index.html"><img src="images/ft-logo.png" alt="Peace Insurance Logo" class="img-responsive"></a> 
          </div>
        </div>

      </div>
    </div>

    <!-- /.tp header --> 
    <!-- tp-navbar -->
    <div class="tp-navbar">
      <nav class="navbar navbar-default">
        <div class="container"> 
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown"> 
                <a href="index.php?page=home"  role="button" aria-expanded="false"> Home </a>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Perumahan <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <?php 
                  include 'conndb.php';
                  $res = $mysqli->query("SELECT * FROM tbl_perumahan ORDER BY nama_perumahan");
                  while($row = $res->fetch_assoc()) {
                    ?>
                    <li><a href="perumahan.php?id=<?php echo $row['id_perumahan'] ?>"><?php echo $row['nama_perumahan'] ?></a></li>
                  <?php } ?>
                </ul>
              </li>
            </li>
            <li><a href="index.php?page=kpr">KPR</a></li>
            <li><a href="index.php?page=panduan">Panduan</a></li>
            <li><a href="index.php?page=profil">Profil Perusahaan</a></li>
            <li><a href="index.php?page=contact">Dukungan</a></li>
            <?php

            if(isset($_SESSION['email'])){
              echo '<li><a href="index.php?page=akun">Akun</i></a></li>';
              echo '<li><a href="logout.php">Keluar</i></a></li>';
              echo '<li><a href="index.php?page=proses">Transaksi</i></a></li>';
            }
            else{
              echo '<li><a href="index.php?page=login">Masuk</i></a></li>';
              echo '<li><a href="index.php?page=login">Daftar</i></a></li>';
            }
            ?>

          </ul>
        </div>
        <!-- /.navbar-collapse --> 
      </div>
      <!-- /.container-fluid --> 
    </nav>
  </div>


  <?php 
  if(isset($_GET['page'])){
    $page = $_GET['page'];

    switch ($page) {
     case 'home':
     include "home.php";
     break;
     case 'login':
     include "login.php";
     break;
     case 'akun':
     include "view-akun.php";
     break;
     case 'profil':
     include "profil-perusahaan.php";
     break;
     case 'contact':
     include "view-contact.php";
     break;
     case 'perumahan':
     include "produk.php";
     break;
     case 'kaveling':
     include "view-kaveling.php";
     break;
     case 'viewkpr':
     include "view-kaveling.php";
     break;
     case 'transaksi':
     include "frm-transaksi.php";
     break;
     case 'proses':
     include "frm-proses.php";
     break;
     case 'frmadmin':
     include "frm-admin.php";
     break;
     case 'viewmember':
     include "view-member.php";
     break;
     case 'transaksi':
     include "view-transaksi.php";
     break;
     case 'pembayaran':
     include "view-pembayaran.php";
     break;
     case 'laporan':
     include "view-laporan.php";
     break;
     case 'penjualan':
     include "view-penjualan.php";
     break;
     case 'statistik':
     include "view-statistik.php";
     break;   
     case 'kpr':
     include "frm-kpr.php";
     break;
     case 'panduan':
     include "panduan.php";
     break;
     case 'detakun':
     include "detail-akun.php";
     break;      
     default:
     echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
     break;
   }
 }else{
  include "home.php";
}

?>


<div class="tp-newsletter"><!-- Newsletter -->
  <div class="container">
    <div class="row">
      <div class="col-md-5 news-title"><!-- section title -->
        <h2><i class="fa fa-envelope-o"></i> Register to Citra Kedaton Newsletter</h2>
      </div>
      <div class="col-md-7 newsletter"><!-- Newsletter form -->
        <form method="post" action="newsletter.php">
          <div class="input-group">
            <label class="sr-only control-label" for="newsletter">Newsletter</label>
            <input type="email" id="newsletter" name="newsletter" class="form-control" placeholder="E-mail Address">
            <span class="input-group-btn">
              <button class="btn tp-btn-orange" type="submit">Submit</button>
            </span> 
          </div>
          <div class="input-group">
            <input type="text" name="tanggal" class="form-control datepicker-autoclose">
            <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
          </div><!-- input-group -->
        </form>
        <!-- /input-group --> 
      </div>
      <!-- Newsletter form -->
    </div>
  </div>
</div>
<!-- Newsletter -->
<div id="tp-footer-two" class="tp-footer-two" ng-controller="DbController"><!-- footer -->
  <div class="container">
    <div class="row ft-section">
      <div class="col-md-4 ft-logo"> <img src="images/ft-logo.png" alt=""> </div>
      <div class="col-md-8 cta">0274 887789</div>
    </div>
    <div class="row ft-section"> 
      <!-- ft aboutus -->

      <div class="col-md-5 ft-aboutus"> <!-- ft aboutus -->
        <h2>About Citra Kedaton</h2>
        <p>PT.Citra Kedaton adalah pengembang berbadan hukum dan telah bergabung dengan asosiasi Real Estat Indonesia (REI) sejak tahun 2006 dengan nomor anggota 10.00115.</p>
        <p><span class="addrs">Alamat :</span> PT. Citra Kedaton Jl. Ringroad Utara 24, Condong catur, Yogyakarta.</p>
        <p><span class="addrs">Phone : </span>0274 887789</p>
        <a href="#" class="btn tp-btn tp-btn-orange">Get A Quote</a> </div>
        <div class="col-md-3 ft-links-social"><!-- footer social links -->
          <h2>Social</h2>
          <ul class="social-menu">
            <li><a href="#" class="social-box facebook"><i class="fa fa-facebook-square"></i>Facebooks</a></li>
            <li><a href="#" class="social-box google"><i class="fa fa-twitter-square"></i>Twitter</a></li>
            <li><a href="#" class="social-box twitter"><i class="fa fa-google-plus-square"></i>Google</a></li>
            <li><a href="#" class="social-box linkedin"><i class="fa fa-linkedin-square"></i>Linkedin</a></li>
          </ul>
        </div>
        <!-- /.footer social links --> 
      </div>
      <div class="row">
        <div class="col-md-6 copyright-text"><!-- copyright text --> 
        Copyright  2018. PT. Citra Kedaton. All Rights Reserved.</div>
        <!-- /.copyright text -->
        <div class="col-md-6 tiny-ft-links"><!-- tiny ft links -->
          <ul>
            <li><a href="#">Site Map</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Use Security</a></li>
          </ul>
        </div>
        <!-- /.tiny ft links --> 
      </div>
    </div>
  </div>
  <!-- /.footer --> 

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="js/jquery-1.11.3.min.js"></script> 
  <!-- Include all compiled plugins (below), or include individual files as needed --> 
  <script src="js/bootstrap.min.js"></script> 
  <script src="js/nav-menu.js"></script> 
  <script src="js/owl.carousel.min.js"></script> 
  <!--slider jquery --> 
  <script type="text/javascript" src="js/slider.js"></script>
  <script type="text/javascript" src="js/product-carousel.js"></script>
  <script type="text/javascript" src="js/testimonial.js"></script>
  <!-- search open--> 

  <script type="text/javascript" src="js/jquery.easing.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <script src="js/kaveling.js" type="text/javascript"></script>

  <!-- plugin tabel -->

  <script src="admin/assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="admin/assets/plugins/datatables/dataTables.bootstrap.js"></script>

  <script src="admin/assets/plugins/datatables/dataTables.buttons.min.js"></script>
  <script src="admin/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
  <script src="admin/assets/plugins/datatables/jszip.min.js"></script>
  <script src="admin/assets/plugins/datatables/pdfmake.min.js"></script>
  <script src="admin/assets/plugins/datatables/vfs_fonts.js"></script>
  <script src="admin/assets/plugins/datatables/buttons.html5.min.js"></script>
  <script src="admin/assets/plugins/datatables/buttons.print.min.js"></script>
  <script src="admin/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
  <script src="admin/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
  <script src="admin/assets/plugins/datatables/dataTables.responsive.min.js"></script>
  <script src="admin/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
  <script src="admin/assets/plugins/datatables/dataTables.scroller.min.js"></script>
  <script src="admin/assets/plugins/datatables/dataTables.colVis.js"></script>
  <script src="admin/assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

  <script src="admin/assets/pages/datatables.init.js"></script>
  <script src="admin/assets/plugins/custombox/js/custombox.min.js"></script>
  <script src="admin/assets/plugins/custombox/js/legacy.min.js"></script>
  <script src="admin/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>

  <script src="admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="admin/assets/plugins/timepicker/bootstrap-timepicker.js"></script>
  <script src="admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <script src="admin/assets/plugins/bootstrap-datepicker/datepicker.js"></script>
  <script src="js/calculation.js" type="text/javascript"></script>

  <script type="text/javascript">
    $(document).ready(function () {
      $('.datatable').dataTable();
      $('.datatable-keytable').DataTable({keys: true});
      $('.datatable-responsive').DataTable();
      $('.datatable-colvid').DataTable({
        "dom": 'C<"clear">lfrtip',
        "colVis": {
          "buttonText": "Change columns"
        }
      });
      $('#datatable-scroller').DataTable({
        ajax: "admin/assets/plugins/datatables/json/scroller-demo.json",
        deferRender: true,
        scrollY: 380,
        scrollCollapse: true,
        scroller: true
      });
      var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
      var table = $('#datatable-fixed-col').DataTable({
        scrollY: "300px",
        scrollX: true,
        scrollCollapse: true,
        paging: false,
        fixedColumns: {
          leftColumns: 1,
          rightColumns: 1
        }
      });
    });
    TableManageButtons.init();

  </script>
</body>
</html>

