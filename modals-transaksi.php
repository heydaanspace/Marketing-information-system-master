
<link href="../assets/css/components.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/pages.css" rel="stylesheet" type="text/css" />

<form action="save-transaksi.php" method="post" enctype="multipart/form-data">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h1 class="modal-title" id="con-close-modal">Rincian</h1>
  </div>
  <div class="modal-body">
    <?php 
    include 'conndb.php';
    include 'no_transaksi.php';
    $id = $_GET['id'];
    $res = $mysqli->query("SELECT * FROM tbl_kaveling JOIN tbl_perumahan ON tbl_kaveling.id_perumahan=tbl_perumahan.id_perumahan WHERE id_kaveling='$id'"); 
    if($res === FALSE){
      die(mysql_error());
    }
    if($res){
      while($obj = $res->fetch_object()) {
        ?>
        <?php
        session_start();
        if($_SESSION['status']="login"){
         echo
         '<div class="row">
         <div class="col-md-6"> 
         <div class="form-group"> 
         <label for="field-1" class="control-label">Nama Lengkap</label> 
         <h2 name="pelanggan">'.$_SESSION['id_member'].'</h2>
         </div> 
         </div>
         </div>';
       }
       ?>
       <div class="row">
        <div class="col-md-6"> 
          <div class="form-group"> 
            <label for="field-1" class="control-label">No. Pembelian</label> 
            <input type="text" name="notrans" value="<?php echo $kode_otomatis ?>" class="form-control" id="principal" readonly="" />
          </div> 
        </div>
        <div class="col-md-6"> 
          <div class="form-group"> 
            <label for="field-2" class="control-label">Perumahan</label> 
            <h3 name="id_perumahan"><?php echo $obj->nama_perumahan ?></h3>
          </div> 
        </div>
      </div>
      <div class="row">
        <div class="col-md-6"> 
          <div class="form-group"> 
            <label for="field-1" class="control-label">Blok Kaveling</label> 
            <h3 name="id_blokav" value="<?php echo $obj->id_kaveling ?>"><?php echo $obj->blok_kaveling ?></h3>
          </div> 
        </div>
        <div class="col-md-6"> 
          <div class="form-group"> 
            <label for="field-2" class="control-label">Harga</label> 
            <h3 name="harga">Rp<?php echo $obj->harga_kaveling ?></h3>
          </div> 
        </div>    
      </div>
      <?php 
    }
  } ?>
 

</div>
<div class="modal-footer">
  <button type="submit" name="tambah" class="btn btn-default waves-effect">Proses</button>
</div>
</form>
<script src="../assets/plugins/custombox/js/custombox.min.js"></script>
<script src="../assets/plugins/custombox/js/legacy.min.js"></script>
<script src="../assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>