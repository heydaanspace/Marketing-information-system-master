
<form action="edit-staff.php" method="post" enctype="multipart/form-data">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title" id="full-width-modalLabel">Edit Data Staff</h4>
  </div>
  <div class="modal-body">
   <?php  
   include 'conndb.php';
   $id = $_GET['id'];
   $res = $mysqli->query("SELECT * FROM tbl_admin WHERE No_pegawai='$id'");
   while($row = $res->fetch_assoc()){
    ?>
    <div class="row">
      <div class="col-md-6 form-horizontal">
       <div class="form-group">
         <label class="col-sm-2 control-label" readonly>No Pegawai</label>
         <div class="col-md-4">
           <input type="text" name="nopeg" readonly="" value="<?php echo $row['No_pegawai'] ?>" class="form-control">
         </div>
       </div>
       <div class="form-group">
        <label class="col-md-2 control-label">Nama Lengkap</label>
        <div class="col-md-10">
         <input type="text" name="nama" value="<?php echo $row['full_name'] ?>" class="form-control">
       </div>
     </div>   

     <div class="form-group">
      <label class="col-md-2 control-label">Email</label>
      <div class="col-md-10">
        <input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 control-label">Username</label>
      <div class="col-md-10">
        <input type="text" name="username"  value="<?php echo $row['username'] ?>" class="form-control">
      </div>
    </div>

  </div>

  <div class="col-md-6 form-horizontal">


    <div class="form-group">
      <label class="col-md-2 control-label">Password</label>
      <div class="col-md-10">
        <input type="password" placeholder="" value="<?php echo $row['password'] ?>" name="password" class="form-control autonumber">
      </div>
    </div>                                   
    <div class="form-group">
      <label class="col-md-2 control-label">Alamat</label>
      <div class="col-md-10">
        <textarea name="alamat" class="form-control"><?php echo $row['alamat_admin'] ?></textarea>
      </div>
    </div>                                   
    <div class="form-group">
      <label class="col-md-2 control-label">No. telp</label>
      <div class="col-md-5">
        <input type="text" placeholder="" value="<?php echo $row['no_telpadmin'] ?>" name="notelp" class="form-control">
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