
<form action="save-kwitansi.php" method="post" enctype="multipart/form-data">
  <div id="tambah-kwitansi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-full">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="full-width-modalLabel">Buat Kwitansi</h4>
        </div>
        <div class="modal-body">
          <div class="row">

            <div class="col-md-6 form-horizontal">

             <div class="form-group">
               <label class="col-sm-2 control-label" readonly>No. Kwitansi</label>
               <div class="col-md-4">
                <?php
                include 'conndb.php';

                $carikode = mysqli_query($mysqli, "SELECT No_kwitansi from tbl_kwitansi") or die (mysqli_error());

                $datakode = mysqli_fetch_array($carikode);
                $jumlah_data = mysqli_num_rows($carikode);

                if ($datakode) {

                 $nilaikode = substr($jumlah_data[0], 1);

                 $kode = (int) $nilaikode;

                 $kode = $jumlah_data + 1;

                 $kodekwitansi = "01".str_pad($kode, 3, "0", STR_PAD_LEFT);
               } else {
                 $kodekwitansi = "010001";

               }
               ?>  
               <input type="text" name="id" readonly="" value="<?php echo($kodekwitansi) ?>" class="form-control">
             </div>
           </div>

           <div class="form-group">
            <label class="col-md-2 control-label">Pembeli</label>
            <div class="col-md-10">
              <select class="form-control" name="pembeli">
             <?php 
             include 'conndb.php';
             $result = mysqli_query($mysqli,"SELECT * FROM (tbl_member JOIN tbl_penjualan ON tbl_member.id_member = tbl_penjualan.id_member) JOIN tbl_pembayaran ON tbl_penjualan.no_transaksi = tbl_pembayaran.no_transaksi");
             while($data = mysqli_fetch_assoc($result))
             {

              ?>
               <option value="<?php echo $data['id_member']; ?>"><?php echo $data['nm_pembeli']; ?></option>
            <?php }
            ?>
          </select>

          </div>
        </div>
           <div class="form-group">
            <label class="col-md-2 control-label">No. Pembayaran</label>
            <div class="col-md-10">
              <select class="form-control" name="nopem">
             <?php 
             include 'conndb.php';
             $result = mysqli_query($mysqli,"SELECT * FROM (tbl_member JOIN tbl_penjualan ON tbl_member.id_member = tbl_penjualan.id_member) JOIN tbl_pembayaran ON tbl_penjualan.no_transaksi = tbl_pembayaran.no_transaksi");
             while($data = mysqli_fetch_assoc($result))
             {

              ?>
               <option value="<?php echo $data['no_pembayaran']; ?>"><?php echo $data['no_pembayaran']; ?></option>
            <?php }
            ?>
          </select>

          </div>
        </div>

       

    </div>

    <div class="col-md-6 form-horizontal">
      <div class="form-group">
          <label class="col-md-2 control-label">Untuk Bayar</label>
          <div class="col-md-10">

           <select class="form-control" name="untuk">
             <?php 
             include 'conndb.php';
             $result = mysqli_query($mysqli,"SELECT * FROM (tbl_member JOIN tbl_penjualan ON tbl_member.id_member = tbl_penjualan.id_member) JOIN tbl_pembayaran ON tbl_penjualan.no_transaksi = tbl_pembayaran.no_transaksi");
             while($row = mysqli_fetch_assoc($result))
             {

              ?>
              <option value="<?php echo $row['jenis_bayar']; ?>"><?php echo $row['jenis_bayar']; ?></option>';
            <?php }



            ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Uang Sebesar</label>
        <div class="col-md-10">
          <input type="text" id="example-input3-group1" data-a-sign="Rp " name="uang" class="form-control autonumber" placeholder=".."> 
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