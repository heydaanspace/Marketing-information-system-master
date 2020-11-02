  <form action="edit-profil.php" method="post" enctype="multipart/form-data">

    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h1>Form Pembayaran.</h1>
    </div>
    <div class="modal-body">
      <form action="pembayaran-act.php" method="post" enctype="multipart/form-data">
       <div class="row">
        <?php  
        include 'conndb.php';
        $id = $_GET['id'];
        $res = $mysqli->query("SELECT * FROM tbl_member WHERE id_member='$id'");
        $row = $res->fetch_assoc();

        ?>
        <div class="col-md-6">
          <label class="control-label" for="lastname">Nama Depan</label>
          <input type="hidden" name="id" class="form-control" value="<?php echo $row['id_member'] ?>">
          <input type="text" name="nmdpn" class="form-control" value="<?php echo $row['nm_depan'] ?>">
        </div>
        
        <div class="col-md-6">
         <label class="control-label" for="lastname">Nama Belakang</label>
         <input type="text" name="nmblkg" class="form-control" value="<?php echo $row['nm_belakang']; ?>">
       </div>
     </div>
     <div class="row">
      <div class="col-md-6">
       <label class="control-label" for="lastname">Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>">
    </div>
    <div class="col-md-6">
       <label class="control-label" for="lastname">Password</label>
        <input type="password" name="password" class="form-control" value="<?php echo $row['password']; ?>">
    </div>
</div>
<div class="row">
  <div class="col-md-6">
    <label class="control-label" for="lastname">Alamat</label>
    <textarea name="alamat" class="form-control"><?php echo $row['alamat_member'] ?></textarea>
  </div>
  <div class="col-md-6">
    <label class="control-label" for="firstname" class="btn tp-btn-blue">Foto</label>
    <input type="file" id="file" style="color: #ff7841 " name="file" class="filestyle" data-buttonbefore="true" data-input="false">
  </div>
</div>
</div>
<br>
<div class="modal-footer">
  <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Batal</button>
  <button type="submit" name="ubah" class="btn  tp-btn tp-btn-blue">Submit</button>
</div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="admin/assets/plugins/custombox/js/legacy.min.js"></script>
<script src="admin/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>

<script src="admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="admin/assets/plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="admin/assets/plugins/bootstrap-datepicker/datepicker.js"></script>



