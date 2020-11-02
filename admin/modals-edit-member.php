
<!-- plugin datepicker -->
<link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
<link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<form action="edit-member.php" method="post" enctype="multipart/form-data">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title" id="full-width-modalLabel">Edit Data Staff</h4>
  </div>
  <div class="modal-body">
   <?php  
   include 'conndb.php';
   $id = $_GET['id'];
   $res = $mysqli->query("SELECT * FROM tbl_member WHERE id_member='$id'");
   while($row = $res->fetch_assoc()){
    ?>
    <div class="row">
      <div class="col-md-6 form-horizontal">
       <div class="form-group">
         <label class="col-sm-2 control-label" readonly>No Member</label>
         <div class="col-md-4">
           <input type="text" name="nomem" readonly="" value="<?php echo $row['id_member'] ?>" class="form-control">
         </div>
       </div>
       <div class="form-group">
        <label class="col-md-2 control-label">Nama Depan</label>
        <div class="col-md-10">
         <input type="text" name="namadpn" value="<?php echo $row['nm_depan'] ?>" class="form-control">
       </div>
     </div> 
     <div class="form-group">
      <label class="col-md-2 control-label">Nama Belakang</label>
      <div class="col-md-10">
       <input type="text" name="namablkg" value="<?php echo $row['nm_belakang'] ?>" class="form-control">
     </div>
   </div>    
   <div class="form-group">
    <label class="col-md-2 control-label">Email</label>
    <div class="col-md-10">
      <input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-2 control-label">Password</label>
    <div class="col-md-10">
      <input type="password" placeholder="" value="<?php echo $row['password'] ?>" name="password" class="form-control autonumber">
    </div>
  </div> 
  <div class="form-group">
    <label class="col-md-2 control-label">Alamat</label>
    <div class="col-md-10">
      <textarea name="alamat" class="form-control"><?php echo $row['alamat_member'] ?></textarea>
    </div>
  </div>  

</div>
<div class="col-md-6 form-horizontal">
  <div class="form-group">
    <label class="col-md-2 control-label">Tanggal Lahir</label>
    <div class="col-md-10">
      <div class="input-group">
        <input type="text" name="ttl" value="<?php echo $row['TTL_member'] ?>" class="form-control datepicker-autoclose" placeholder="mm/dd/yyyy">
        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
      </div>
    </div>
  </div>                                   
  <div class="form-group">
    <label class="col-md-2 control-label">Pekerjaan</label>
    <div class="col-md-10">
      <input type="text" name="pekerjaan" value="<?php echo $row['pekerjaan_member'] ?>" class="form-control">
    </div>
  </div>                                   
  <div class="form-group">
    <label class="col-md-2 control-label">Status</label>
    <div class="col-md-10">
     <div class="radio radio-info radio-inline">
      <input type="radio" id="inlineRadio1" value="Menikah" name="status" checked>
      <label for="inlineRadio1"> Menikah </label>
    </div>
    <div class="radio radio-info radio-inline">
      <input type="radio" id="inlineRadio1" value="Belum Menikah" name="status" checked>
      <label for="inlineRadio1"> Belum Menikah </label>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label">No. Telp</label>
  <div class="col-md-10">
    <input type="text" name="notelp" value="<?php echo $row['No_telefonmember'] ?>" class="form-control">
  </div>
</div> 
</div>
</div>
<?php } ?>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
  <button type="submit" name="tambah" class="btn btn-primary waves-effect waves-light">Simpan</button>
</div>

</form>
<script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
<!-- date picker -->
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="assets/plugins/bootstrap-datepicker/datepicker.js"></script>