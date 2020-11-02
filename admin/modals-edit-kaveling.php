


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
<script src="../assets/js/modernizr.min.js"></script>


<form action="edit-kaveling.php" method="post" enctype="multipart/form-data">

  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title" id="full-width-modalLabel">Perbarui Data Kaveling</h4>
  </div>
  <div class="modal-body">

    <div class="row">
      <?php  
      include 'conndb.php';
      $id = $_GET['id'];
      $res = $mysqli->query("SELECT * FROM tbl_kaveling JOIN tbl_perumahan ON tbl_kaveling.id_perumahan=tbl_perumahan.id_perumahan WHERE id_kaveling='$id'");
      while($row = $res->fetch_assoc()){

        ?>

        <div class="col-md-6 form-horizontal">

         <div class="form-group">
           <label class="col-sm-2 control-label" readonly>ID Kaveling</label>
           <div class="col-md-4">

             <input type="text" name="id" readonly="" value="<?php echo $row['id_kaveling']; ?>" class="form-control">
           </div>
         </div>
         <div class="form-group">
          <label class="col-md-2 control-label">Perumahan</label>
          <div class="col-md-10">

           <select class="form-control" name="nmperumahan">


            <option value="<?php echo $row['id_perumahan']; selected ?>"><?php echo $row['nama_perumahan']; ?></option>';


          </select>
        </div>
      </div>   

      <div class="form-group">
        <label class="col-md-2 control-label">Blok Kaveling</label>
        <div class="col-md-10">
          <input type="text" name="blokav" value="<?php echo $row['blok_kaveling']; ?>" class="form-control">
        </div>
      </div>


    </div>

    <div class="col-md-6 form-horizontal">


      <div class="form-group">
        <label class="col-md-2 control-label">Luas Kaveling</label>
        <div class="col-md-10">
          <input type="text" name="luas" value="<?php echo $row['luas_kaveling']; ?>" class="form-control">
        </div>
      </div>                                   
      <div class="form-group">
        <label class="col-md-2 control-label">Tipe</label>
        <div class="col-md-10">
          <input type="text" name="tipe" value="<?php echo $row['tipe_kaveling']; ?>" class="form-control">
        </div>
      </div>                                   
      <div class="form-group">
        <label class="col-md-2 control-label">Harga Kaveling</label>
        <div class="input-group col-md-5">
          <span class="input-group-addon">Rp</span>
          <input type="text" id="example-input3-group1" name="harga" value="<?php echo $row['harga_kaveling']; ?>" class="form-control" placeholder="..">
        </div>
      </div>

    </div>
    <?php 
  }
  ?>
</div>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
  <button type="submit" name="tambah" class="btn btn-primary waves-effect waves-light">Submit</button>
</div>

</form>


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



<!--plugin multiselect form input perumahan -->

<script type="text/javascript" src="../assets/plugins/multiselect/js/jquery.multi-select.js"></script>

<!--plugin spinner form input perumahan -->
<script src="../assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../assets/plugins/touchspin.js"></script>



<!-- Modal-Effect -->
<script src="../assets/plugins/custombox/js/custombox.min.js"></script>
<script src="../assets/plugins/custombox/js/legacy.min.js"></script>






<script src="../assets/js/jquery.core.js"></script>
<script src="../assets/js/jquery.app.js"></script>


<script src="../assets/pages/jquery.dashboard_3.js"></script>