<link href="assets/plugins/summernote/summernote.css" rel="stylesheet" />


<!-- css spinner form perumahan -->
<link href="assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

<!-- csss multi select form perumahan -->
<link href="assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="assets/plugins/magnific-popup/css/magnific-popup.css"/>


<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/core.css" rel="stylesheet" type="text/css" />
<link href="assets/css/components.css" rel="stylesheet" type="text/css" />
<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />


<script src="assets/js/modernizr.min.js"></script>


<form action="edit-perumahan.php" method="post" enctype="multipart/form-data">

  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title" id="full-width-modalLabel">Tambah Perumahan</h4>
  </div>
  <div class="modal-body">
    <div class="row">

     <?php 
     include 'conndb.php'; 
     $id = $_GET['id'];
     $res = $mysqli->query("SELECT * FROM tbl_perumahan WHERE id_perumahan='$id'");
     while($row = $res->fetch_array()){

      ?>

      <div class="col-md-6 form-horizontal">                            
        <div class="form-group">
          <label class="col-sm-2 control-label">ID Perumahan</label>
          <div class="col-md-4">
            <input type="text" name="id_perumahan" readonly="" value="<?php echo $row['id_perumahan']; ?>" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label" for="example-email">Perumahan</label>
          <div class="col-md-4">
            <input type="text" id="example-email" name="nama_perumahan" class="form-control" placeholder="" value="<?php echo $row['nama_perumahan'] ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Lokasi</label>
          <div class="col-md-10">
            <input type="text" name="lokasi_perumahan" class="form-control" value="<?php echo $row['lokasi_perumahan'] ?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Spesifikasi Teknis</label>
          <div class="col-md-10">

            <textarea name="spesifikasi_teknis" class="summernote"><?php echo $row['spesifikasi_teknis'] ?></textarea>

          </div>
        </div>
      </div>   
      <div class="col-md-6 form-horizontal">
       <div class="form-group">
        <label class="col-md-2 control-label">Daftar Tipe</label>
        <div class="col-md-10">
         <select multiple="multiple" class="multi-select" id="tipeperum" name="tipeperum[]" data-plugin="multiselect">
          <?php 
          $tipe = array("50","60", "70", "80", "90", "100","125","135");
          foreach($tipe as $item){
            ?>
            <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>

            <?php
          }
          ?>

        </select>

      </div>
    </div>                                                                     
    <div class="form-group">
      <label class="col-md-2 control-label">Jumlah Kaveling</label>
      <div class="col-md-4">
        <input id="demo3" type="text" value="" name="Jumlah_kaveling" value="<?php echo $row['Jumlah_kaveling']; ?>">

      </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 control-label">Luas Tanah</label>
      <div class="col-md-9">
        <input type="text" id="luastanah" name="luas_tanah" placeholder="" data-a-sign=" M²" data-p-sign="s" class="form-control autonumber" placeholder=".." value="<?php echo $row['luas_tanah']; ?>">
      </div>
    </div> 
    <div class="form-group">
      <label class="col-md-2 control-label" for="example-email">Lampirkan Foto</label>
      <div class="col-md-10">
        <input type="file" id="file" class="filestyle" name="file" data-buttonbefore="true" >
        <span class="font-13 text-muted"><?php echo $row['gambar']; ?></span>
      </div>
    </div>
  </div>

  <?php 
} ?>



</div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
  <button type="submit" name="ubah" class="btn btn-primary waves-effect waves-light">Submit</button>
</div>

</form>


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