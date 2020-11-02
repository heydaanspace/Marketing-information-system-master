<?php 
session_start();
if($_SESSION['status']!="login"){
  $_SESSION['denied'] = 'Anda harus masuk dulu!';
  header("location:index.php");
}
?>
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
  <meta name="author" content="Coderthemes">

  <link rel="shortcut icon" href="assets/images/favicon_1.ico">

  <title>Administrator</title>

  <!--alert -->
  <link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">

  <!-- ION Slider -->
  <link href="assets/plugins/ion-rangeslider/ion.rangeSlider.css" rel="stylesheet" type="text/css"/>
  <link href="assets/plugins/ion-rangeslider/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css"/> 
  <link href="assets/plugins/bootstrap-slider/css/bootstrap-slider.min.css" rel="stylesheet" type="text/css"/>


  <!-- plugin datepicker -->
  <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
  <link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">

  <!-- DataTables -->
  <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
  <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
  <link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>


  <!-- css spinner form perumahan -->
  <link href="assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

  <!-- csss multi select form perumahan -->
  <link href="assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="assets/plugins/magnific-popup/css/magnific-popup.css"/>


  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/percent_slider.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

  <script src="assets/js/modernizr.min.js"></script>

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
            <i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>
            <span><img src="assets/images/cklog.png" height="20"/></span>
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
              <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
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


            <div style=" background: #5fbeaa ">

              <img src="assets/images/admin.jpg" alt="" class="circle responsive-img valign profile-image">
              <a class="text-white" href="#"><?php echo $_SESSION['nama'];?></a>


            </div>
          </li>

          <li class="text-muted menu-title">Navigation</li>

          <li>
            <a href="dashboard.php?page=home"><i class="ti-home"></i> <span> Dashboard </span></a>

          </li>

          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i><span> Data Master </span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled">
              <li><a href="dashboard.php?page=perumahan">Perumahan</a></li>
              <li><a href="dashboard.php?page=kaveling">Kaveling</a></li>
              <li><a href="dashboard.php?page=viewbank">Data Bank</a></li>
              <li><a href="dashboard.php?page=viewkpr">KPR</a></li>
              <li><a href="dashboard.php?page=viewadmin">Manajemen Staff</a></li>
              <li><a href="dashboard.php?page=viewmember">Manajemen Konsumen</a></li>
            </ul>
          </li>

          <li class="has_sub">
            <a href="dashboard.php?page=transaksi" class="waves-effect"><i class="ti-import"></i> <span> Transaksi Masuk </span> </a>
          </li>

          <li class="has_sub">
            <a href="dashboard.php?page=pembayaran" class="waves-effect"><i class="ti-money"></i> <span> Pembayaran </span> </a>
          </li>

          <li class="has_sub">
            <a href="view-laporan2.php" class="waves-effect"><i class="ti-archive"></i> <span> Laporan </span> </a>
          </li>

          <li class="has_sub">
            <a href="dashboard.php?page=penjualan" class="waves-effect"><i class="ti-shopping-cart"></i> <span> Penjualan </span> </a>
          </li>
          <li class="has_sub">
            <a href="dashboard.php?page=progres" class="waves-effect"><i class="ti-home"></i> <span>Progres Pembagunan</span> </a>
          </li>



        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
                     
      <div class="content-page">
        <!-- Start content -->
        <div class="content">
          <div class="container">

            <!-- Page-Title -->
            <div class="row">
              <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                  
                </div>

                <h4 class="page-title">Laporan</h4>
                <ol class="breadcrumb">
                  <li><a href="#">Citra Kedaton</a></li>
                  <li class="active">Laporan</li>
                </ol>
              </div>
            </div>


            <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
                 <div class="row m-t-10 m-b-10">
                   <div class="col-sm-6 col-lg-8">
                     <form role="form">
                       <div class="form-group contact-search m-b-30">

                        <select name="Pilihan" class="form-control" onchange="document.location = this.options[this.selectedIndex].value;">
                          <option>Silahkan Pilih Laporan</option>
                          <option value="view-laporan2.php?page=transaksirep">Laporan Transaksi Masuk</option>
                          <option value="view-laporan2.php?page=kavelingrep">Laporan Kaveling Terjual</option>
                          <option value="view-laporan2.php?page=penjualanrep">Laporan Penjualan</option>
                          <option value="view-laporan2.php?page=progresrep">Laporan Progres Pembangunan</option>
                        </select>
                        
                      </div> 
                    </form>
                  </div>
                  <div class="col-sm-4">
                    <a href="view-laporan2.php?page=refresh" class="btn btn-default btn-md waves-effect waves-light m-b-30"><i class="md md-refresh"></i>&nbsp;Refresh</a>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
                


                <?php 
                if(isset($_GET['page'])){
                  $page = $_GET['page'];

                  switch ($page) {
                    case 'refresh':
                    include "report-home.html";
                    break;
                    case 'home':
                    include "home.php";
                    break;
                    case 'perumahanrep':
                    include "report-perumahan.php";
                    break;
                    case 'kavelingrep':
                    include "report-kaveling.php";
                    break;
                    case 'transaksirep':
                    include "report-transaksi.php";
                    break;
                    case 'penjualanrep':
                    include "report-penjualan.php";
                    break;
                    case 'progresrep':
                    include "report-progres.php";
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
                  include "report-home.html";

                }

                ?>

              </div>
            </div>
          </div>


        </div>
      </div> <!-- container -->

      <footer class="footer text-right">
        © 2018. All rights reserved.
      </footer>

    </div>
  </div>
  <!-- END wrapper -->



  <script>
    var resizefunc = [];
  </script>

  <script>
    $("input[name='demo3']").TouchSpin();
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
<script src="assets/js/percent_slider.js"></script>

<script src="assets/plugins/peity/jquery.peity.min.js"></script>
<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

<!--plugin multiselect form input perumahan -->

<script type="text/javascript" src="assets/plugins/multiselect/js/jquery.multi-select.js"></script>

<!--plugin spinner form input perumahan -->
<script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/touchspin.js"></script>

<!-- plugin view gallery form gallery -->
<script type="text/javascript" src="assets/plugins/isotope/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="assets/plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>

<!-- plugin upload file input form input gellery -->   
<script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>

<!-- plugin tabel -->

<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>

<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/jszip.min.js"></script>
<script src="assets/plugins/datatables/pdfmake.min.js"></script>
<script src="assets/plugins/datatables/vfs_fonts.js"></script>
<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables/buttons.print.min.js"></script>
<script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="assets/plugins/datatables/dataTables.colVis.js"></script>
<script src="assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

<script src="assets/pages/datatables.init.js"></script>

<!-- date picker -->
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="assets/plugins/bootstrap-datepicker/datepicker.js"></script>

<!-- input slider progres -->
<script src="assets/plugins/ion-rangeslider/ion.rangeSlider.min.js"></script>
<script src="assets/plugins/bootstrap-slider/js/bootstrap-slider.min.js"></script>
<script src="assets/pages/jquery.ui-sliders.js"></script>

<!-- Sweet-Alert  -->
<script src="assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
<script src="assets/pages/jquery.sweet-alert.init.js"></script>

<!-- Modal-Effect -->
<script src="assets/plugins/custombox/js/custombox.min.js"></script>
<script src="assets/plugins/custombox/js/legacy.min.js"></script>


<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

<!-- summerbote -->
<script src="assets/pages/jquery.dashboard_3.js"></script>
<script src="assets/plugins/summernote/summernote.min.js"></script>


<!-- input Prefix rupiah -->
<script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
<script src="assets/plugins/autoNumeric/autoNumeric.js" type="text/javascript"></script>




<!-- input Prefix rupiah -->
<script type="text/javascript">

  jQuery(function($) {
    $('.autonumber').autoNumeric('init');    
  });
</script>
<!-- summernote -->
<script>
  jQuery(document).ready(function(){

    $('.summernote').summernote({
      height: 350,                 
      minHeight: null,             
      maxHeight: null,             
      focus: false                
    });

    $('.inline-editor').summernote({
      airMode: true            
    });

  });
</script>

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
    $('.datatable').dataTable();
    $('#datatable-keytable').DataTable({keys: true});
    $('#datatable-responsive').DataTable();
    $('#datatable-colvid').DataTable({
      "dom": 'C<"clear">lfrtip',
      "colVis": {
        "buttonText": "Change columns"
      }
    });
    $('#datatable-scroller').DataTable({
      ajax: "assets/plugins/datatables/json/scroller-demo.json",
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
<script type="text/javascript">
  $(document).ready(function(){
   $('#edit_data').click(function(){
    var url = $(this).attr('href');
    $.ajax({
     url : url,
     success:function(response){
      $('#edit-modal').html(response);
    }
  });
  });

 });
</script>



</body>
</html>