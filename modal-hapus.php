  <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <div style="color: red;" class=""><i class="md-warning"></i>
      Apakah Anda yakin akan menghapus data ini?</div>
    </div>
    <div class="modal-body">
       <div class="row">

        <?php  
        include 'conndb.php';
        $id = $_GET['id'];
        $res = $mysqli->query("SELECT a.id_member, no_transaksi, nm_pembeli, nama_perumahan, blok_kaveling, tanggal_transaksi, harga_kaveling, jenis_pelunasan, status FROM ((tbl_member a JOIN tbl_penjualan b ON a.id_member = b.id_member) JOIN tbl_perumahan c ON c.id_perumahan  = b.id_perumahan) JOIN tbl_kaveling d ON d.id_kaveling = b.id_kaveling WHERE no_transaksi='$id'");
        $row = $res->fetch_assoc();

        ?>
        <div class="col-md-6">
          <label class="control-label" for="lastname">No. Pembelian</label>
          <p><?php echo $row['no_transaksi'] ?></p>
        </div>
        <div class="col-md-6">
         <label class="control-label" for="lastname">Nama</label>
         <p><?php echo $row['nm_pembeli']; ?></p>
       </div>
     </div>
     <div class="row">
      <div class="col-md-6">
       <label class="control-label" for="lastname">Perumahan</label>
       <p><?php echo $row['nama_perumahan']; ?></p>
     </div>
     <div class="col-md-6">
      <label class="control-label" for="lastname">Blok Kaveling</label>
      <p><?php echo $row['blok_kaveling']; ?></p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <label class="control-label" for="lastname">Tanggal Pembelian</label>
      <p><?php echo $row['tanggal_transaksi']; ?></p>
    </div>
    <div class="col-md-6">
      <label class="control-label" for="firstname" class="btn tp-btn-blue">Harga Kaveling</label>
      <p><?php echo $row['harga_kaveling']; ?></p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <label class="control-label" for="lastname">Jenis Pelunasan</label>
      <p><?php echo $row['jenis_pelunasan']; ?></p>
    </div> 
    <div class="col-md-6">
      <label class="control-label" for="lastname">Status</label>
      <p><?php echo $row['status'] ?></p>
    </div>   
  </div>
  <br>
  <div class="modal-footer">
    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Batal</button>
    <a href="delete-pembelian.php?id=<?php echo $row['no_transaksi'] ?>" style="background: red;" class="btn  tp-btn">Hapus</a>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="admin/assets/plugins/custombox/js/legacy.min.js"></script>
<script src="admin/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>

<script src="admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="admin/assets/plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="admin/assets/plugins/bootstrap-datepicker/datepicker.js"></script>



