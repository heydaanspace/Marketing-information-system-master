<?php 
session_start();
if($_SESSION['status']!="login"){
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
  <meta name="author" content="Coderthemes">

  <link rel="shortcut icon" href="../assets/images/favicon_1.ico">

  <title>Administrator</title>


  <!--alert -->
  <link href="../assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">

  <!-- ION Slider -->
  <link href="../assets/plugins/ion-rangeslider/ion.rangeSlider.css" rel="stylesheet" type="text/css"/>
  <link href="../assets/plugins/ion-rangeslider/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css"/> 
  <link href="../assets/plugins/bootstrap-slider/css/bootstrap-slider.min.css" rel="stylesheet" type="text/css"/>


  <!-- plugin datepicker -->
  <link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link href="../assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
  <link href="../assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">

  <!-- plugin datatabel -->
  <link href="../assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
  <link href="../assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="../assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="../assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="../assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="../assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
  <link href="../assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="../assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>


  <!-- css spinner form perumahan -->
  <link href="../assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

  <!-- csss multi select form perumahan -->
  <link href="../assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="../assets/plugins/magnific-popup/css/magnific-popup.css"/>


  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/css/core.css" rel="stylesheet" type="text/css" />
  <link href="../assets/css/components.css" rel="stylesheet" type="text/css" />
  <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
  <link href="../assets/css/pages.css" rel="stylesheet" type="text/css" />
  <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />

  <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->

      <script src="../assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

      <!-- Begin page -->
      <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

          <!-- LOGO -->
          <div class="topbar-left">
            <div class="text-center">
              <!-- Image Logo here -->
              <a href="index.html" class="logo">
                <i class="icon-c-logo"> <img src="../assets/images/logo_sm.png" height="42"/> </i>
                <span><img src="../assets/images/cklog.png" height="20"/></span>
              </a>
            </div>
          </div>

          <!-- Button mobile view to collapse sidebar menu -->
          <div class="navbar navbar-default" role="navigation">
            <div class="container">
              <div class="">
                <div class="pull-left">
                  <button class="button-menu-mobile open-left waves-effect waves-light">
                    <i class="md md-menu"></i>
                  </button>
                  <span class="clearfix"></span>
                </div>

                <ul class="nav navbar-nav hidden-xs">
                  <li><a href="index.html" class="waves-effect waves-light">SI Pemasaran Perumahan</a></li>
                </ul>


                <ul class="nav navbar-nav navbar-right pull-right">
                  <form role="search" class="navbar-left app-search pull-left hidden-xs">
                   <input type="text" placeholder="Search..." class="form-control">
                   <a href=""><i class="fa fa-search"></i></a>
                 </form>

                 <li class="hidden-xs">
                  <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                </li>
                <li class="dropdown top-menu-item-xs">
                  <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="../assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                  <ul class="dropdown-menu">
                    <li><a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
                    <li><a href="javascript:void(0)"><i class="ti-settings m-r-10 text-custom"></i> Settings</a></li>
                    <li><a href="javascript:void(0)"><i class="ti-lock m-r-10 text-custom"></i> Lock screen</a></li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <!--/.nav-collapse -->
          </div>
        </div>
      </div>
      <!-- Top Bar End -->


      <!-- ========== Left Sidebar Start ========== -->

      <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
          <!--- Divider -->
          <div id="sidebar-menu">
            <ul>

              <li class="user-details cyan darken-2">


                <div style=" background: #d9dadb ">

                  <img src="../assets/images/admin.jpg" alt="" class="circle responsive-img valign profile-image">
                  <a class="waves-effect" href="#"><?php echo $_SESSION['username']; ?></a>


                </div>
              </li>

              <li class="text-muted menu-title">Navigation</li>

              <li>
                <a href="index.php?page=home"><i class="ti-home"></i> <span> Dashboard </span></a>

              </li>

              <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i><span> Data Master </span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                  <li><a href="dashboard.php?page=perumahan">Data Perumahan</a></li>
                  <li><a href="dashboard.php?page=kaveling">Data Kaveling</a></li>
                  <li><a href="dashboard.php?page=viewgaleri">Galeri Foto</a></li>
                  <li><a href="dashboard.php?page=viewkpr">KPR</a></li>
                  <li><a href="dashboard.php?page=viewadmin">Data Admin</a></li>
                  <li><a href="dashboard.php?page=viewmember">Data Member</a></li>
                </ul>
              </li>

              <li class="has_sub">
                <a href="dashboard.php?page=transaksi" class="waves-effect"><i class="ti-import"></i> <span> Transaksi Masuk </span> </a>
              </li>

              <li class="has_sub">
                <a href="dashboard.php?page=pembayaran" class="waves-effect"><i class="ti-money"></i> <span> Pembayaran </span> </a>
              </li>

              <li class="has_sub">
                <a href="dashboard.php?page=laporan" class="waves-effect"><i class="ti-archive"></i> <span> Laporan </span> </a>
              </li>

              <li class="has_sub">
                <a href="dashboard.php?page=penjualan" class="waves-effect"><i class="ti-shopping-cart"></i> <span> Penjualan </span> </a>
              </li>

              <li class="has_sub">
                <a href="dashboard.php?page=statistik" class="waves-effect"><i class="ti-bar-chart"></i> <span> Statistik </span> </a>
              </li>


            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <!-- Left Sidebar End --> 

      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->                      
      <div class="content-page">
        <!-- Start content -->


        <?php
        include 'conndb.php';


        ?>  
        <div class="content">
          <div class="container">

            <!-- Page-Title -->
            <div class="row">
              <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                  <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                  <ul class="dropdown-menu drop-menu-right" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>

                <h4 class="page-title">Tambah Perumahan</h4>
                <ol class="breadcrumb">
                  <li>
                    <a href="#">Citra Kedaton</a>
                  </li>
                  <li>
                    <a href="#">Data Master</a>
                  </li>
                  <li>
                    <a href="#">Data Perumahan</a>
                  </li>
                  <li class="active">
                    Tambah Perumahan
                  </li>
                </ol>
              </div>
            </div>
            <form action="edit-perumahan.php" method="post" enctype="multipart/form-data"> 
              <div class="row">
                <div class="col-sm-12">
                  <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Tambah Perumahan</b></h4>                   
                    <p class="text-muted m-b-30 font-13">
                      <?php  
                      if(isset($_SESSION['info']))
                      {
                        echo '<div class="alert alert-success">
                        <strong>Sukses!</strong>'.$_SESSION['info'].'
                        </div>';
                        unset($_SESSION['info']);

                      }
                      ?>                     
                    </p>
                    <div class="row">
                      <?php  
                      $id = $_GET['id'];
                      $res = $mysqli->query("SELECT * FROM tbl_perumahan WHERE id_perumahan='$id'");
                      while($row = $res->fetch_assoc()){

                        ?>
                        <div class="col-md-6 form-horizontal">

                          <div class="form-group">
                            <label class="col-sm-2 control-label">ID Perumahan</label>
                            <div class="col-md-4">
                              <input type="text" name="idperumahan" readonly="" value="<?php echo $row['id_perumahan']; ?>" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label" for="example-email">Perumahan</label>
                            <div class="col-md-4">
                              <input type="text" id="example-email" name="perumahan" class="form-control" value="<?php echo $row['nama_perumahan']; ?>" placeholder="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label">Lokasi</label>
                            <div class="col-md-10">
                              <input type="text" name="lokasiperumahan" class="form-control" value="<?php echo $row['lokasi_perumahan']; ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label">Fasilitas</label>
                            <div class="col-md-10">
                              <textarea class="form-control" name="fasilitasperum" rows="5" value=""><?php echo $row['fasilitas_perumahan']; ?></textarea>
                            </div>
                          </div>

                        </div>

                        <div class="col-md-6 form-horizontal">


                          <div class="form-group">
                            <label class="col-md-2 control-label">Daftar Tipe</label>
                            <div class="col-md-10">
                              <?php $tipe = $row['daftar_tiperumah']; ?>

                              <select multiple="multiple" class="multi-select" id="tipeperum" name="tipeperum" data-plugin="multiselect">
                                <option <?php echo ($tipe == 'Tipe 36') ? "selected": "" ?>>Tipe 36</option>
                                <option <?php echo ($tipe == 'Tipe 40') ? "selected": "" ?>>Tipe 40</option>
                                <option <?php echo ($tipe == 'Tipe 50') ? "selected": "" ?>>Tipe 50</option>
                              </select>

                            </div>
                          </div>                                                                     
                          <div class="form-group">
                            <label class="col-md-2 control-label">Jumlah Kaveling</label>
                            <div class="col-md-4">
                              <input id="demo3" type="text" value="<?php echo $row['Jumlah_kaveling']; ?>" name="jmlkav">

                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label">Luas Tanah</label>
                            <div class="input-group col-md-9">
                              <span class="input-group-addon">M²</span>
                              <input type="text" id="hargakav_field" name="luastanah" value="<?php echo $row['luas_tanah']; ?>" class="form-control" placeholder="..">
                            </div>
                          </div> 
                        </div>
                        <?php 
                      }
                      ?>
                      </div>
                      <div class="h5 m-0">
                      <div class="form-group text-right">     
                      <button type="submit"  name="tambah" class="btn btn-purple waves-effect waves-light">Submit</button>
                      </div>
                      </div>
                      </div>
                      </div>

                      </div>
                      </form>


                      </div> <!-- container -->

                      </div> <!-- content -->
                  
                      <?php 
                      if(isset($_GET['page'])){
                        $page = $_GET['page'];

                        switch ($page) {
                         case 'home':
                         include "home.php";
                         break;
                         case 'kaveling':
                         include "view-kaveling.php";
                         break;
                         case 'frmkaveling':
                         include "frm-kaveling.php";
                         break;
                         case 'perumahan':
                         include "view-perumahan.php";
                         break;
                         case 'frmperumahan':
                         include "frm-perumahan.php";
                         break;
                         case 'viewgaleri':
                         include "view-gallery.php";
                         break;
                         case 'frmgaleri':
                         include "frm-gallery.php";
                         break;
                         case 'viewkpr':
                         include "view-kpr.php";
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

                    <footer class="footer text-right">
                      © 2016. All rights reserved.
                    </footer>

                  </div>


                  <!-- ============================================================== -->
                  <!-- End Right content here -->
                  <!-- ============================================================== -->


                  <!-- Right Sidebar -->
                  <div class="side-bar right-bar nicescroll">
                    <h4 class="text-center">Chat</h4>
                    <div class="contact-list nicescroll">
                      <ul class="list-group contacts-list">
                        <li class="list-group-item">
                          <a href="#">
                            <div class="avatar">
                              <img src="../assets/images/users/avatar-1.jpg" alt="">
                            </div>
                            <span class="name">Chadengle</span>
                            <i class="fa fa-circle online"></i>
                          </a>
                          <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                          <a href="#">
                            <div class="avatar">
                              <img src="../assets/images/users/avatar-2.jpg" alt="">
                            </div>
                            <span class="name">Tomaslau</span>
                            <i class="fa fa-circle online"></i>
                          </a>
                          <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                          <a href="#">
                            <div class="avatar">
                              <img src="../assets/images/users/avatar-3.jpg" alt="">
                            </div>
                            <span class="name">Stillnotdavid</span>
                            <i class="fa fa-circle online"></i>
                          </a>
                          <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                          <a href="#">
                            <div class="avatar">
                              <img src="../assets/images/users/avatar-4.jpg" alt="">
                            </div>
                            <span class="name">Kurafire</span>
                            <i class="fa fa-circle online"></i>
                          </a>
                          <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                          <a href="#">
                            <div class="avatar">
                              <img src="../assets/images/users/avatar-5.jpg" alt="">
                            </div>
                            <span class="name">Shahedk</span>
                            <i class="fa fa-circle away"></i>
                          </a>
                          <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                          <a href="#">
                            <div class="avatar">
                              <img src="../assets/images/users/avatar-6.jpg" alt="">
                            </div>
                            <span class="name">Adhamdannaway</span>
                            <i class="fa fa-circle away"></i>
                          </a>
                          <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                          <a href="#">
                            <div class="avatar">
                              <img src="../assets/images/users/avatar-7.jpg" alt="">
                            </div>
                            <span class="name">Ok</span>
                            <i class="fa fa-circle away"></i>
                          </a>
                          <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                          <a href="#">
                            <div class="avatar">
                              <img src="../assets/images/users/avatar-8.jpg" alt="">
                            </div>
                            <span class="name">Arashasghari</span>
                            <i class="fa fa-circle offline"></i>
                          </a>
                          <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                          <a href="#">
                            <div class="avatar">
                              <img src="../assets/images/users/avatar-9.jpg" alt="">
                            </div>
                            <span class="name">Joshaustin</span>
                            <i class="fa fa-circle offline"></i>
                          </a>
                          <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                          <a href="#">
                            <div class="avatar">
                              <img src="../assets/images/users/avatar-10.jpg" alt="">
                            </div>
                            <span class="name">Sortino</span>
                            <i class="fa fa-circle offline"></i>
                          </a>
                          <span class="clearfix"></span>
                        </li>
                      </ul>  
                    </div>
                  </div>
                  <!-- /Right-bar -->

                </div>
                <!-- END wrapper -->



                <script>
                  var resizefunc = [];
                </script>

                <script>
                  $("input[name='demo3']").TouchSpin();
                </script>


                <!-- jQuery  -->
                <script src="../assets/js/jquery.min.js"></script>
                <script src="../assets/js/bootstrap.min.js"></script>
                <script src="../assets/js/detect.js"></script>
                <script src="../assets/js/fastclick.js"></script>
                <script src="../assets/js/jquery.slimscroll.js"></script>
                <script src="../assets/js/jquery.blockUI.js"></script>
                <script src="../assets/js/waves.js"></script>
                <script src="../assets/js/wow.min.js"></script>
                <script src="../assets/js/jquery.nicescroll.js"></script>
                <script src="../assets/js/jquery.scrollTo.min.js"></script>

                <script src="../assets/plugins/peity/jquery.peity.min.js"></script>
                <script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

                <!--plugin multiselect form input perumahan -->

                <script type="text/javascript" src="../assets/plugins/multiselect/js/jquery.multi-select.js"></script>

                <!--plugin spinner form input perumahan -->
                <script src="../assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
                <script type="text/javascript" src="../assets/plugins/touchspin.js"></script>

                <!-- plugin view gallery form gallery -->
                <script type="text/javascript" src="../assets/plugins/isotope/js/isotope.pkgd.min.js"></script>
                <script type="text/javascript" src="../assets/plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>

                <!-- plugin upload file input form input gellery -->   
                <script src="../assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>

                <!-- plugin tabel -->
                <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
                <script src="../assets/plugins/datatables/dataTables.bootstrap.js"></script>
                <script src="../assets/plugins/datatables/dataTables.buttons.min.js"></script>
                <script src="../assets/plugins/datatables/buttons.bootstrap.min.js"></script>
                <script src="../assets/plugins/datatables/jszip.min.js"></script>
                <script src="../assets/plugins/datatables/pdfmake.min.js"></script>
                <script src="../assets/plugins/datatables/vfs_fonts.js"></script>
                <script src="../assets/plugins/datatables/buttons.html5.min.js"></script>
                <script src="../assets/plugins/datatables/buttons.print.min.js"></script>
                <script src="../assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
                <script src="../assets/plugins/datatables/dataTables.keyTable.min.js"></script>
                <script src="../assets/plugins/datatables/dataTables.responsive.min.js"></script>
                <script src="../assets/plugins/datatables/responsive.bootstrap.min.js"></script>
                <script src="../assets/plugins/datatables/dataTables.scroller.min.js"></script>
                <script src="../assets/plugins/datatables/dataTables.colVis.js"></script>
                <script src="../assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>


                <script src="../assets/pages/datatables.init.js"></script>



                <!-- date picker -->
                <script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
                <script src="../assets/plugins/timepicker/bootstrap-timepicker.js"></script>
                <script src="../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
                <script src="../assets/plugins/bootstrap-datepicker/datepicker.js"></script>

                <!-- input slider progres -->
                <script src="../assets/plugins/ion-rangeslider/ion.rangeSlider.min.js"></script>
                <script src="../assets/plugins/bootstrap-slider/js/bootstrap-slider.min.js"></script>
                <script src="../assets/pages/jquery.ui-sliders.js"></script>

                <!-- Sweet-Alert  -->
                <script src="../assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
                <script src="../assets/pages/jquery.sweet-alert.init.js"></script>






                <script src="../assets/js/jquery.core.js"></script>
                <script src="../assets/js/jquery.app.js"></script>


                <script src="../assets/pages/jquery.dashboard_3.js"></script>

                <!--javascript slider gallery -->
                <script type="text/javascript">
                  $(window).load(function(){
                    var $container = $('.portfolioContainer');
                    $container.isotope({
                      filter: '*',
                      animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                      }
                    });

                    $('.portfolioFilter a').click(function(){
                      $('.portfolioFilter .current').removeClass('current');
                      $(this).addClass('current');

                      var selector = $(this).attr('data-filter');
                      $container.isotope({
                        filter: selector,
                        animationOptions: {
                          duration: 750,
                          easing: 'linear',
                          queue: false
                        }
                      });
                      return false;
                    }); 
                  });
                  $(document).ready(function() {
                    $('.image-popup').magnificPopup({
                      type: 'image',
                      closeOnContentClick: true,
                      mainClass: 'mfp-fade',
                      gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                                      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                                    }
                                  });
                  });
                </script>

                <script type="text/javascript">
                  $(document).ready(function () {
                    $('#datatable').dataTable();
                    $('#datatable-keytable').DataTable({keys: true});
                    $('#datatable-responsive').DataTable();
                    $('#datatable-colvid').DataTable({
                      "dom": 'C<"clear">lfrtip',
                      "colVis": {
                        "buttonText": "Change columns"
                      }
                    });
                    $('#datatable-scroller').DataTable({
                      ajax: "../assets/plugins/datatables/json/scroller-demo.json",
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