


<form action="update-progres-act.php" method="post" enctype="multipart/form-data">

  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title" id="full-width-modalLabel">Perbarui Progres Pembangunan</h4>
  </div>
  <div class="modal-body">

    <div class="row">
      <?php  
      include 'conndb.php';
      $id = $_GET['id'];
      $res = $mysqli->query("SELECT * FROM tbl_progres_pembangunan WHERE id_progres='$id'");
      while($row = $res->fetch_assoc()){

        ?>

        <div class="col-md-6 form-horizontal">
         <div class="form-group">
          <label class="col-sm-2 control-label">Tahap Progres</label>
          <div class="col-md-8">
            <select name="tahap" class="form-control"> 
              <option value="Pekerjaan pondasi">Pekerjaan pondasi</option>
              <option value="Pekerjaan stuktur">Pekerjaan stuktur</option>
              <option value="Pekerjaan dinding">Pekerjaan dinding</option>
              <option value="Pekerjaan kusen, pintu, dan jendela">Pekerjaan kusen, pintu, dan jendela</option>
              <option value="Pekerjaan rangka atap">Pekerjaan rangka atap</option>
              <option value="Pekerjaan plumbling, mekanikal dan elektrikal">Pekerjaan plumbling, mekanikal dan elektrikal</option>
              <option value="Pekerjaan Finising">Pekerjaan Finishing</option>
            </select>
            <span class="font-13 text-muted  autonumber">Tahap Pembangunan sebelumnya: <?php echo $row['tahap'] ?></span>
          </div>
        </div>
      </div>
      <div class="col-md-6 form-horizontal">
        <div class="form-group">
          <label for="range_01" class="col-sm-2 control-label">Progres</label>
          <div class="col-sm-8">
            <input type="text" name="persen" class="range_01" id="range_01">
            <span class="font-13 text-muted  autonumber">Persentase progres sebelumnya :<?php echo $row['progres'] ?> %</span>
          </div>
        </div>  
         <div class="form-group">
            <input type="text" name="idprog" value="<?php echo $row['id_progres'] ?>" hidden="">
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

<!-- input slider progres -->
<script src="assets/plugins/ion-rangeslider/ion.rangeSlider.min.js"></script>
<script src="assets/plugins/bootstrap-slider/js/bootstrap-slider.min.js"></script>
<script src="assets/pages/jquery.ui-sliders.js"></script>
