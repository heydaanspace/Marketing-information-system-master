  <form action="pembayaran-act.php" method="post" enctype="multipart/form-data">

    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h1>Form Pembayaran.</h1>
    </div>
    <div class="modal-body">
      <form action="pembayaran-act.php" method="post" enctype="multipart/form-data">
       <div class="row">
        <div class="col-md-6">
          <?php 
          include 'no_pembayaran.php'; 
          ?>
          <label class="control-label" for="lastname">No. Pembayaran</label>
          <input type="text" readonly="" name="nopem" class="form-control" value="<?php echo $kode_pembayaran; ?>">
        </div>
        <?php  
        include 'conndb.php';
        $id = $_GET['id'];
        $res = $mysqli->query("SELECT * FROM tbl_penjualan WHERE no_transaksi='$id'");
        $row = $res->fetch_assoc();

        ?>
        <div class="col-md-6">
         <label class="control-label" for="lastname">No Pembelian</label>
         <input type="text" name="notrans" readonly=""class="form-control" value="<?php echo $row['no_transaksi']; ?>">
       </div>
     </div>
     <div class="row">
      <div class="col-md-6">
       <label class="control-label" for="lastname">Tanggal Transfer</label>
       <div class="input-group">
        <input type="text" name="tanggal" class="form-control datepicker-autoclose">
        <span class="input-group-addon bg-custom b-0 text-white" style="background-color: #ff7841; color: #fff;"><i class="icon-calender"></i></span>
      </div>
    </div>
    <div class="col-md-6">
      <label class="control-label" for="lastname">Jenis Bayar</label>
      <select class="form-control" name="jenis" onchange="">

        <?php    
        $res ="SELECT * FROM tbl_penjualan WHERE jenis_pelunasan LIKE 'Cash' AND no_transaksi='$id'"; 
        $result = mysqli_query($mysqli,$res);
        if (mysqli_num_rows($result) > 0) {
          echo '<option value="Uang Muka" id="uang">Uang Muka</option>
          <option value="Angsuran 1 (Cash)">Angsuran 1 (Cash)</option>
          <option value="Angsuran 2 (Cash)">Angsuran 2 (Cash)</option>
          <option value="Angsuran 3 (Cash)">Angsuran 3 (Cash)</option>
          <option value="Angsuran 4 (Cash)">Angsuran 4 (Cash)</option>
          <option value="Angsuran 5 (Cash)">Angsuran 5 (Cash)</option>
          <option value="Angsuran 6 (Cash)">Angsuran 6 (Cash)</option>
          <option value="Angsuran 7 (Cash)">Angsuran 7 (Cash)</option>
          <option value="Angsuran 8 (Cash)">Angsuran 8 (Cash)</option>
          <option value="Angsuran 9 (Cash)">Angsuran 9 (Cash)</option>
          <option value="Angsuran 10 (Cash)">Angsuran 10 (Cash)</option>
          <option value="Angsuran 11 (Cash)">Angsuran 11 (Cash)</option>
          <option value="Angsuran 12 (Cash)">Angsuran 12 (Cash)</option>
          ';

        } else {
          echo '<option value="Cash">Uang Muka</option>';
        }
        ?>

      </select>

      <script>
        function tampilkan(){
          var cek;
          if(nominal.value < harus.value){
            cek = false;
            alert("Uang Muka Minimal 30% dari harga kaveling");
            nominal.focus();
          }else{
            cek = true;
          }return cek;
        }
      </script>


    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <label class="control-label" for="lastname">Nominal Transfer</label>
      <input type="number" id="nominal" name="nominal" class="form-control">
    </div>
    
    <?php 
    $res = $mysqli->query("SELECT * FROM tbl_kaveling JOIN tbl_penjualan ON tbl_kaveling.id_kaveling = tbl_penjualan.id_kaveling WHERE tbl_penjualan.no_transaksi='$id'");
    $row = $res->fetch_assoc();
    $harga = $row['harga_kaveling'] * 30 / 100;
    ?>
    <input type="hidden" value="<?php echo $harga ?>" readonly="" name="harus" id="harus" class="form-control">
    <div class="col-md-6">
      <label class="control-label" for="firstname" class="btn tp-btn-blue">Lampirkan Bukti Transfer</label>
      <input type="file" id="bukti" style="color: #ff7841 " name="bukti" class="filestyle" data-buttonbefore="true" data-input="false">
    </div> 
  </div>
  <div class="row">
    <div class="col-md-6">
      <label class="control-label" for="lastname">Bank Tujuan</label>
      <select class="form-control" id="pelunasan" name="bank">
        <option value="Cash">pilih Bank Tujuan</option>
        <option value="KPR">BRI</option>
        <option value="KPR">BNI</option>
        <option value="KPR">Mandiri</option>
      </select>
    </div>  

  </div>
  <br>
  <div class="modal-footer">
    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Batal</button>
    <button type="submit" onclick="return tampilkan()" name="tambah" class="btn  tp-btn tp-btn-blue">Submit</button>
  </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="admin/assets/plugins/custombox/js/legacy.min.js"></script>
<script src="admin/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>

<script src="admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="admin/assets/plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="admin/assets/plugins/bootstrap-datepicker/datepicker.js"></script>




