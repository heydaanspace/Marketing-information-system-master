<form action="edit_bank.php" method="post" enctype="multipart/form-data">
  <div class="modal-header"> 
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
    <h4 class="modal-title">Tambah Bank</h4> 
  </div> 
  <div class="modal-body"> 
   <?php  
   include 'conndb.php';
   $id = $_GET['id'];
   $res = $mysqli->query("SELECT * FROM tbl_bank WHERE id_bank='$id'");
   while($row = $res->fetch_assoc()){

    ?>
    <div class="row"> 
     <div class="col-md-12"> 
      <div class="form-group"> 
        <label for="field-1" class="control-label">ID Bank</label> 
        <input type="text" name="id_bank" class="form-control" id="field-1" readonly="" value="<?php echo $row['id_bank'] ?>"> 
      </div> 
    </div> 
  </div> 
  <div class="row"> 
    <div class="col-md-12"> 
      <div class="form-group"> 
        <label for="field-3" class="control-label">Nama Bank</label> 
        <input type="text" name="nama_bank" class="form-control" value="<?php echo $row['nama_bank'] ?>" id="field-1">
      </div> 
    </div> 
  </div> 
  <?php 
  } ?>
</div> 
<div class="modal-footer"> 
  <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
  <button type="submit" name="ubah" class="btn btn-info waves-effect waves-light">Save</button> 
</div> 
</form>