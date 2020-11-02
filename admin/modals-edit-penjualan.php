
<link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
  <link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<form action="penjualan-edit.php" method="post" enctype="multipart/form-data"> 
 <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
  <h2 class="modal-title" id="full-width-modalLabel">Ubah Data Penjualan</h2>
</div>
<div class="modal-body">
  <?php  
  include 'conndb.php';
  $id = $_GET['id'];
  $res = $mysqli->query("SELECT a.No_penjualan,a.tanggal,a.id_perumahan,a.keterangan,a.jenis_pelunasan,a.bank,a.tgl_acckpr,a.deadline_acckpr,a.acc_desain,a.deadline_add,a.prod_versispp, a.realisasi, a.pelaksana, a.tgl_spp,a.id_kaveling, b.no_transaksi, b.nm_pembeli, c.blok_kaveling, d.nama_perumahan FROM ((tbl_rekap_penjualan a JOIN tbl_penjualan b ON a.no_transaksi = b.no_transaksi ) JOIN tbl_kaveling c ON a.id_kaveling = c.id_kaveling) JOIN tbl_perumahan d ON a.id_perumahan=d.id_perumahan WHERE No_penjualan='$id'");
  $row = $res->fetch_assoc();

  ?>
  <div class="row">

    <div class="col-md-6 form-horizontal">

     <div class="form-group">
       <label class="col-sm-2 control-label" readonly>No Penjualan</label>
       <div class="col-md-4"> 
        <input type="text" name="nopel" readonly="" value="<?php echo $row['No_penjualan'] ?>" class="form-control">
       </div>
     </div>
     <div class="form-group">
      <label class="control-label col-sm-2">Tanggal Penjualan</label>
      <div class="col-sm-8">
        <div class="input-group">
          <input type="text" class="form-control" readonly="" value="<?php echo $row['tanggal'] ?>" name="tanggal">
        </div><!-- input-group -->
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 control-label">Konsumen</label>
      <div class="col-md-10">
       <select class="form-control" name="konsumen">
        <option value="<?php echo $row['nm_pembeli'] ?>"><?php echo $row['nm_pembeli'] ?></option>
        <?php 
        include 'conndb.php';
        $result = mysqli_query($mysqli,"SELECT a.id_member, nm_depan, nm_pembeli, nm_belakang, no_transaksi  FROM tbl_member a JOIN tbl_penjualan b ON a.id_member = b.id_member ");
        while($data = mysqli_fetch_assoc($result))
        {
          ?>

          <option value="<?php echo $data['nm_pembeli']; ?>"><?php echo $data['nm_pembeli']; ?></option>
        <?php } ?>
      </select>
    </div>
  </div> 
  <div class="form-group">
    <label class="col-md-2 control-label">No Pembelian</label>
    <div class="col-md-10">
      <select class="form-control" name="notrans">
        <option value="<?php echo $row['no_transaksi']; ?>"><?php echo $row['no_transaksi']; ?></option>
        <?php 
        include 'conndb.php';
        $result = mysqli_query($mysqli,"SELECT a.id_member, nm_depan, nm_pembeli, nm_belakang, no_transaksi  FROM tbl_member a JOIN tbl_penjualan b ON a.id_member = b.id_member ");
        while($data = mysqli_fetch_assoc($result))
        {
          ?>
          <option value="<?php echo $data['no_transaksi']; ?>"><?php echo $data['no_transaksi']; ?></option>
        <?php } ?>
      </select>

    </div>
  </div>       
  <div class="form-group">
    <label class="col-md-2 control-label">Perumahan</label>
    <div class="col-md-10">
     <select class="form-control" name="nmperumahan">
       <option value="<?php echo $row['id_perumahan'] ?> "><?php echo $row['nama_perumahan'] ?> </option>
       <?php 
       include 'conndb.php';
       $result = mysqli_query($mysqli,"SELECT a.id_kaveling, c.no_transaksi, b.id_perumahan, nama_perumahan, blok_kaveling FROM (tbl_kaveling a JOIN tbl_perumahan b ON a.id_perumahan = b.id_perumahan ) JOIN tbl_penjualan c ON c.id_kaveling = a.id_kaveling");
       while($data = mysqli_fetch_assoc($result))
       {
         ?>
         <option value="<?php echo $data['id_perumahan']; ?>"><?php echo $data['nama_perumahan']; ?></option>
       <?php } ?>
     </select>
   </div>
 </div> 
 <div class="form-group">
  <label class="col-md-2 control-label">Blok Kaveling</label>
  <div class="col-md-10">
   <select class="form-control" name="blokav">
    <option value="<?php echo $row['id_kaveling']; ?>"><?php echo $row['blok_kaveling']; ?></option>
    <?php 
    include 'conndb.php';
    $result = mysqli_query($mysqli,"SELECT a.id_kaveling, c.no_transaksi, b.id_perumahan, nama_perumahan, blok_kaveling FROM (tbl_kaveling a JOIN tbl_perumahan b ON a.id_perumahan = b.id_perumahan ) JOIN tbl_penjualan c ON c.id_kaveling = a.id_kaveling");
    while($data = mysqli_fetch_array($result))
    {
     ?>
     <option value="<?php echo $data['id_kaveling']; ?>"><?php echo $data['blok_kaveling']; ?></option>
   <?php } ?>
 </select>
</div>
</div>  

<div class="form-group">
  <label class="col-md-2 control-label">Keterangan</label>
  <div class="col-md-10">
    <textarea name="keterangan" class="form-control"><?php echo $row['keterangan'] ?></textarea>
  </div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label">Jenis Pelunasan</label>
  <div class="col-md-10">
    <select class="form-control" name="pelunasan">
      <option value="0">Pilih Data</option>
      <option value="Cash">Cash Bertahap</option>
      <option value="KPR">KPR</option> 
    </select>
  </div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label">Bank</label>
  <div class="col-md-10">
    <select class="form-control" name="bank">
      <option value="BNI">Mandiri</option>
      <option value="BRI">BRI</option> 
    </select>
  </div>
</div>
</div>

<div class="col-md-6 form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-2">ACC KPR</label>
    <div class="col-sm-8">
      <div class="input-group">
        <input type="text" class="form-control datepicker-autoclose" name="acckpr" placeholder="yyyy-mm-dd">
        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
      </div><!-- input-group -->
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Dealine ACC KPR</label>
    <div class="col-sm-8">
      <div class="input-group">
        <input type="text" class="form-control datepicker-autoclose" name="dlkpr" placeholder="yyyy-mm-dd" >
        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
      </div><!-- input-group -->
    </div>
  </div>  
  <div class="form-group">
    <label class="control-label col-sm-2">ACC Desain</label>
    <div class="col-sm-8">
      <div class="input-group">
        <input type="text" class="form-control datepicker-autoclose" name="accdesain" placeholder="yyyy-mm-dd" >
        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
      </div><!-- input-group -->
    </div>
  </div>    
  <div class="form-group">
    <label class="control-label col-sm-2">Dealine Addendum</label>
    <div class="col-sm-8">
      <div class="input-group">
        <input type="text" class="form-control datepicker-autoclose" name="dladd" placeholder="yyyy-mm-dd" >
        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
      </div><!-- input-group -->
    </div>
  </div> 
  <div class="form-group">
    <label class="control-label col-sm-2">Produksi Versi SPP</label>
    <div class="col-sm-8">
      <div class="input-group">
        <input type="text" class="form-control datepicker-autoclose" name="prodvspp" placeholder="yyyy-mm-dd" >
        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
      </div><!-- input-group -->
    </div>
  </div> 
  <div class="form-group">
    <label class="control-label col-sm-2">Realisasi</label>
    <div class="col-sm-8">
      <div class="input-group">
        <input type="text" class="form-control datepicker-autoclose" name="realisasi" placeholder="yyyy-mm-dd">
        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
      </div><!-- input-group -->
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Pelaksana</label>
    <div class="col-sm-8">

     <input type="text" name="pelaksana" value="<?php echo $row['pelaksana'] ?>" class="form-control">

   </div>
 </div>                               
 <div class="form-group">
  <label class="control-label col-sm-2">Tanggal SPP</label>
  <div class="col-sm-8">
    <div class="input-group">
      <input type="text" class="form-control datepicker-autoclose" name="tglspp" placeholder="yyyy-mm-dd">
      <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
    </div><!-- input-group -->
  </div>
</div>
</div>

</div>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
  <button type="submit" name="tambah" class="btn btn-primary waves-effect waves-light">Submit</button>
</div>

</form>

<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="assets/plugins/bootstrap-datepicker/datepicker.js"></script>