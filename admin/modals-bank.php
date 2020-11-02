<form action="proses-bank.php" method="post" enctype="multipart/form-data">
    <div id="modals-bank" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog"> 
            <div class="modal-content"> 
                <div class="modal-header"> 
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                    <h4 class="modal-title">Tambah Bank</h4> 
                </div> 
                <div class="modal-body"> 
                    <div class="row"> 
                        <?php
                        include 'conndb.php';

                        $carikode = mysqli_query($mysqli, "SELECT id_bank from tbl_bank") or die (mysqli_error());

                        $datakode = mysqli_fetch_array($carikode);
                        $jumlah_data = mysqli_num_rows($carikode);

                        if ($datakode) {

                           $nilaikode = substr($jumlah_data[0], 1);

                           $kode = (int) $nilaikode;

                           $kode = $jumlah_data + 1;

                           $kodebank = "09".str_pad($kode, 2, "0", STR_PAD_LEFT);
                       } else {
                           $kodebank = "01001";

                       }
                       ?>  
                       <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label for="field-1" class="control-label">ID Bank</label> 
                            <input type="text" name="id_bank" class="form-control" id="field-1" readonly="" value="<?php echo $kodebank ?>"> 
                        </div> 
                    </div> 
                </div> 
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label for="field-3" class="control-label">Nama Bank</label> 
                            <input type="text" name="nama_bank" class="form-control" id="field-1">
                        </div> 
                    </div> 
                </div> 
        </div> 
        <div class="modal-footer"> 
            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
            <button type="submit" name="tambah" class="btn btn-info waves-effect waves-light">Save</button> 
        </div> 
    </div> 
</div>
</div><!-- /.modal -->
</form>