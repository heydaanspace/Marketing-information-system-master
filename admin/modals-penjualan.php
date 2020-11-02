
<form action="penjualan-act.php" method="post" enctype="multipart/form-data">
  <div id="modals-penjualan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-full">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="modal-title" id="full-width-modalLabel">Input Data Penjualan</h2>
        </div>
        <div class="modal-body">
          <div class="row">

            <div class="col-md-6 form-horizontal">

             <div class="form-group">
               <label class="col-sm-2 control-label" readonly>No Penjualan</label>
               <div class="col-md-4">
                <?php
                include 'conndb.php';

                $carikode = mysqli_query($mysqli, "SELECT No_penjualan from tbl_rekap_penjualan") or die (mysqli_error());

                $datakode = mysqli_fetch_array($carikode);
                $jumlah_data = mysqli_num_rows($carikode);

                if ($datakode) {

                 $nilaikode = substr($jumlah_data[0], 1);

                 $kode = (int) $nilaikode;

                 $kode = $jumlah_data + 1;

                 $kode_penjualan = "22".str_pad($kode, 2, "1", STR_PAD_LEFT);
               } else {
                 $kode_penjualan = "22111";

               }
               ?>  
               <input type="text" name="nopel" value="<?php echo($kode_penjualan) ?>" class="form-control">
             </div>
           </div>
           <div class="form-group">
            <label class="control-label col-sm-2">Tanggal Penjualan</label>
            <div class="col-sm-8">
              <div class="input-group">
                <?php 
                $tgl=date('Y-m-d');
                ?>
                <input type="text" class="form-control" value="<?php echo $tgl ?>" name="tanggal">
                
              </div><!-- input-group -->
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Konsumen</label>
            <div class="col-md-10">

             <select class="form-control" name="konsumen">
              <option value="0">Pilih Data</option>
              <?php 
              include 'conndb.php';
              $result = mysqli_query($mysqli,"SELECT a.id_member, nm_depan, nm_pembeli, nm_belakang, no_transaksi  FROM tbl_member a JOIN tbl_penjualan b ON a.id_member = b.id_member ");
              while($row = mysqli_fetch_assoc($result))
              {
                ?>
                
                <option value="<?php echo $row['nm_pembeli']; ?>"><?php echo $row['nm_pembeli']; ?></option>
              <?php } ?>
            </select>
          </div>
        </div> 
        <div class="form-group">
          <label class="col-md-2 control-label">No Pembelian</label>
          <div class="col-md-10">
            <select class="form-control" name="notrans">
              <option value="0">Pilih Data</option>
              <?php 
              include 'conndb.php';
              $result = mysqli_query($mysqli,"SELECT a.id_member, nm_depan, nm_pembeli, nm_belakang, no_transaksi  FROM tbl_member a JOIN tbl_penjualan b ON a.id_member = b.id_member ");
              while($row = mysqli_fetch_assoc($result))
              {
                ?>
                <option value="<?php echo $row['no_transaksi']; ?>"><?php echo $row['no_transaksi']; ?></option>
              <?php } ?>
            </select>
            
          </div>
        </div>      
        <div class="form-group">
          <label class="col-md-2 control-label">Perumahan</label>
          <div class="col-md-10">
           <select class="form-control" name="nmperumahan">
             <option value="0">Pilih Data</option>
             <?php 
             include 'conndb.php';
             $result = mysqli_query($mysqli,"SELECT a.id_kaveling, c.no_transaksi, b.id_perumahan, nama_perumahan, blok_kaveling FROM (tbl_kaveling a JOIN tbl_perumahan b ON a.id_perumahan = b.id_perumahan ) JOIN tbl_penjualan c ON c.id_kaveling = a.id_kaveling");
             while($row = mysqli_fetch_assoc($result))
             {
               ?>
               <option value="<?php echo $row['id_perumahan']; ?>"><?php echo $row['nama_perumahan']; ?></option>
             <?php } ?>
           </select>
         </div>
       </div> 
       <div class="form-group">
        <label class="col-md-2 control-label">Blok Kaveling</label>
        <div class="col-md-10">
         <select class="form-control" name="blokav">
          <option value="0">Pilih Data</option>
          <?php 
          include 'conndb.php';
          $result = mysqli_query($mysqli,"SELECT a.id_kaveling, c.no_transaksi, b.id_perumahan, nama_perumahan, blok_kaveling FROM (tbl_kaveling a JOIN tbl_perumahan b ON a.id_perumahan = b.id_perumahan ) JOIN tbl_penjualan c ON c.id_kaveling = a.id_kaveling");
          while($row = mysqli_fetch_array($result))
          {
           ?>
           <option value="<?php echo $row['id_kaveling']; ?>"><?php echo $row['blok_kaveling']; ?></option>';
           <?php } ?>
         </select>
       </div>
     </div>  

     <div class="form-group">
      <label class="col-md-2 control-label">Keterangan</label>
      <div class="col-md-10">
        <textarea name="keterangan" class="form-control"></textarea>
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
          <option value="0">Pilih Data</option>
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
          <input type="text" class="form-control datepicker-autoclose" name="acckpr" placeholder="mm/dd/yyyy">
          <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
        </div><!-- input-group -->
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Dealine ACC KPR</label>
      <div class="col-sm-8">
        <div class="input-group">
          <input type="text" class="form-control datepicker-autoclose" name="dlkpr" placeholder="mm/dd/yyyy" >
          <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
        </div><!-- input-group -->
      </div>
    </div>  
    <div class="form-group">
      <label class="control-label col-sm-2">ACC Desain</label>
      <div class="col-sm-8">
        <div class="input-group">
          <input type="text" class="form-control datepicker-autoclose" name="accdesain" placeholder="mm/dd/yyyy" >
          <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
        </div><!-- input-group -->
      </div>
    </div>    
    <div class="form-group">
      <label class="control-label col-sm-2">Dealine Addendum</label>
      <div class="col-sm-8">
        <div class="input-group">
          <input type="text" class="form-control datepicker-autoclose" name="dladd" placeholder="mm/dd/yyyy" >
          <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
        </div><!-- input-group -->
      </div>
    </div> 
    <div class="form-group">
      <label class="control-label col-sm-2">Produksi Versi SPP</label>
      <div class="col-sm-8">
        <div class="input-group">
          <input type="text" class="form-control datepicker-autoclose" name="prodvspp" placeholder="mm/dd/yyyy" >
          <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
        </div><!-- input-group -->
      </div>
    </div> 
    <div class="form-group">
      <label class="control-label col-sm-2">Realisasi</label>
      <div class="col-sm-8">
        <div class="input-group">
          <input type="text" class="form-control datepicker-autoclose" name="realisasi" placeholder="mm/dd/yyyy" >
          <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
        </div><!-- input-group -->
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Pelaksana</label>
      <div class="col-sm-10">
        <div class="input-group">
         <input type="text" name="pelaksana" class="form-control">
       </div><!-- input-group -->
     </div>
   </div>                               
   <div class="form-group">
    <label class="control-label col-sm-2">Tanggal SPP</label>
    <div class="col-sm-8">
      <div class="input-group">
        <input type="text" class="form-control datepicker-autoclose" name="tglspp" placeholder="mm/dd/yyyy" >
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
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</form>