<?php 
session_start();

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

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Font -->
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic' rel='stylesheet' type='text/css'>

  <link href="css/style.css" rel="stylesheet">
  <link href="css/owl.carousel.css" rel="stylesheet">
  <link href="css/owl.theme.css" rel="stylesheet">


  <link href="admin/assets/css/components.css" rel="stylesheet" type="text/css" />
  <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
  <link href="admin/assets/css/pages.css" rel="stylesheet" type="text/css" />


  <link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>
  <div class="search-open" ><!-- search open -->
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
          <div class="col-md-4"> <a class="navbar-brand" href="index.html"><img src="images/ft-logo.png" alt="Peace Insurance Logo" class="img-responsive"></a> </div>
          <div class="col-md-8 cta-box text-right"><span class="call">Call: 1-800-837-5254</span> 
            <!-- Single button -->
            <div class="btn-group">
            </div>
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
                    <li><a href="perumahan.php?nama=<?php echo $row['id_perumahan'] ?>"><?php echo $row['nama_perumahan'] ?></a></li>
                  <?php } ?>
                </ul>
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
    <!-- /.full page header-->
    <div class="tp-breadcrumb"><!-- breadcrumb -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ol class="breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li><a href="index.html">Perumahan</a></li>
              <li class="active">Kaveling</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.breadcrumb -->
    <?php 
    include 'conndb.php'; 

    $id = $_GET['id'];
    $res = $mysqli->query("SELECT  c.id_perumahan,nama_perumahan,gambar FROM tbl_perumahan c, tbl_kaveling s WHERE c.id_perumahan='$id'"); 
    $dataperum = $res->fetch_assoc();

    ?>
    <div class="tp-page-header"><!-- full page header -->
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="page-header"> <!-- page header  -->
              <h1>Perumahan <?php echo $dataperum['nama_perumahan'] ?></h1>

              <!--<p class="lead">Lorem ipsum dolor sit amet consectetur adipiscing elit inte lacinia malesuada justo sit amet vestibulum orci tristiquen nunc nonec ultricies enimullam lorem est.</p>-->
            </div>
            <!-- page header  --> 
          </div>
          <div class="col-md-4 header-pic"><!-- page header pic --> 
            <img src="images/page-head-home.jpg" alt="" class="img-responsive"> 
          </div>
          <!-- page header pic --> 
        </div>
      </div>
    </div>

    <div class="main-container" id="main-container"><!--Main container start-->
      <div class="tp-tabs font-increase" id="tp-tabs"><!-- tabs -->
        <div class="container">
          <div class="row">
            <div class="col-md-12 tabs-one"><!-- tab one -->
              <div role="tabpanel"> <!-- Tab panel -->

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#tabs-one" aria-controls="tabs-one" role="tab" data-toggle="tab">Site Plan</a></li>
                  <li role="presentation"><a href="#tabs-two" aria-controls="tabs-two" role="tab" data-toggle="tab">Spesifikasi Teknis</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content"><!-- Tab content -->
                  <div role="tabpanel" class="tab-pane active" id="tabs-one"><!-- Tab panel -->
                    <h2><?php echo $dataperum['nama_perumahan'] ?></h2>

                    <img class="img-responsive" src="admin/assets/images/perumahan/<?php echo $dataperum['gambar'] ?>" alt="">

                  </div><!-- /.Tab panel -->
                  <div role="tabpanel" class="tab-pane" id="tabs-two"><!-- Tab panel -->
                    <h2>Spesifikasi Teknis.</h2>
                    <p></p>
                    <a href="#" class="btn tp-btn tp-btn-orange">Get A Quote</a>
                  </div><!-- /.Tab panel -->
                </div><!-- /.Tab content -->
              </div><!-- /.tab panel -->
            </div>
          </div>
        </div>
      </div>
      <!-- /.tabs --> 
      <br>
      <form action="transaksi-act.php" method="get" accept-charset="utf-8">
        <div class="tp-product-page font-increase" id="tp-product-page">
          <div class="container">
           <div class="row" ng-controller="CalculatorController">
            <img src="" alt="">
            <?php 
            include 'modals-kpr.php';
            $id_kaveling = array();
            $jml_kaveling = array();

            $result = $mysqli->query("SELECT * FROM tbl_kaveling WHERE id_perumahan='".$dataperum['id_perumahan']."'");
            if($result === FALSE){
              die(mysql_error());
            }

            if($result){
              while($obj = $result->fetch_object()) {
               ?>
               <!-- /.section title-->
               <div class="col-md-3 product-thumb"> <!-- Product thumb-->
                <div class="grey-box">
                  <h1><a href="auto-insurance.html"><?php echo $obj->blok_kaveling ?></a></h1>
                  <p>Tipe <?php echo $obj->tipe_kaveling ?></p>
                  <p>Rp. <?php echo number_format($obj->harga_kaveling) ?></p>
                  <?php if($obj->jumlah > 0){ 
                    echo 
                    '<div class="form-group">
                    <a href="transaksi-act.php?action=add&id='.$obj->id_kaveling.'" class="btn tp-btn tp-btn-orange">Proses</a>
                    <br><br>
                    <a href="#" data-toggle="modal" data-target="#con-close-modal" id="'.$obj->harga_kaveling.'" class="btn tp-btn tp-btn-blue">Hitung KPR</a>
                    </div>';
                  }
                  else {
                    echo '<h3 style="color: red;">Terjual</h3>
                    <br>
                    <br>';

                  }

                  ?>
                </div>
              </div>
              <?php 

            }
          } 

          ?>
          <!-- /.Product thumb-->
        </div>
      </div>
    </div>

  </form>
</div>
<!-- /.Main container start-->

<div id="ajukan-kaveling" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" style="width: 80%;">
    <div class="modal-content">

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!-- Newsletter -->
<div id="tp-footer-two" class="tp-footer-two"><!-- footer -->
  <div class="container">
    <div class="row ft-section">

      <div class="col-md-8 cta">+1 800-PEACE | (1-800-255-7828) </div>
    </div>
    <div class="row ft-section"> 
      <!-- ft aboutus -->
      <div class="col-md-2 ft-links"><!-- footer links -->
        <h2>Insurance</h2>
        <ul>
          <li><i class="fa fa-angle-double-right"></i><a href="#">Auto Insurance</a></li>
          <li><i class="fa fa-angle-double-right"></i><a href="#">Home Insurance</a></li>
          <li><i class="fa fa-angle-double-right"></i><a href="#">Business Insurance</a></li>
          <li><i class="fa fa-angle-double-right"></i><a href="#">Life Insurance</a></li>
          <li><i class="fa fa-angle-double-right"></i><a href="#">Travel Insurance</a></li>
          <li><i class="fa fa-angle-double-right"></i><a href="#">Other Insurance</a></li>
        </ul>
      </div>
      <!-- /.footer links -->

      <div class="col-md-2 ft-links"><!-- footer links -->
        <h2>Quick Links</h2>
        <ul>
          <li><i class="fa fa-angle-double-right"></i><a href="#">About us</a></li>
          <li><i class="fa fa-angle-double-right"></i><a href="#">Support</a></li>
          <li><i class="fa fa-angle-double-right"></i><a href="#">Careers</a></li>
          <li><i class="fa fa-angle-double-right"></i><a href="#">Download  App</a></li>
          <li><i class="fa fa-angle-double-right"></i><a href="#">Investors</a></li>
          <li><i class="fa fa-angle-double-right"></i><a href="#">Find An Agent</a></li>
          <li><i class="fa fa-angle-double-right"></i><a href="#">Claims</a></li>
        </ul>
      </div>
      <!-- /.footer links -->
      <div class="col-md-5 ft-aboutus"> <!-- ft aboutus -->
        <h2>About Peace Insurance</h2>
        <p>Established in 1990, we are your insurance expert committed to providing peace of mind to all kinds of borrowers by helping them obtain and manage a insurance.</p>
        <p><span class="addrs">Address :</span> 56702,Meeraz Centroz, Near roxa,garden, Banglore</p>
        <p><span class="addrs">Phone : </span>+1 800-PEACE |  (1-800-255-7828)</p>
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
        Copyright  2015. Peace Insurance Company. All Rights Reserved.</div>
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
  <script type="text/javascript" src="js/search.js"></script> 

  <script src="admin/assets/plugins/custombox/js/custombox.min.js"></script>
  <script src="admin/assets/plugins/custombox/js/legacy.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <script src="js/calculation.js" type="text/javascript"></script>


</body>
</html>

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
   case 'frmkpr':
   include "frm-kpr.php";
   break;
   case 'viewadmin':
   include "view-admin.php";
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
   default:
   echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
   break;
 }
}else{

}

?>
<script>
  $(document).ready(function(){
    $('#con-close-modal').on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).attr('id');
        $("#principal").val(id);
    });
    return id;
});
</script>