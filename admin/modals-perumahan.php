<?php
include 'conndb.php';

$carikode = mysqli_query($mysqli, "SELECT id_perumahan from tbl_perumahan") or die (mysqli_error());

$datakode = mysqli_fetch_array($carikode);
$jumlah_data = mysqli_num_rows($carikode);

if ($datakode) {

 $nilaikode = substr($jumlah_data[0], 1);

 $kode = (int) $nilaikode;

 $kode = $jumlah_data + 1;

 $kode_otomatis = "10".str_pad($kode, 3, "0", STR_PAD_LEFT);
} else {
 $kode_otomatis = "10001";

}
?>
<form action="save-perumahan.php" method="post" enctype="multipart/form-data">
    <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-full">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="full-width-modalLabel">Tambah Perumahan</h4>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-6 form-horizontal">                            
                            <div class="form-group">
                                <label class="col-sm-2 control-label">ID Perumahan</label>
                                <div class="col-md-4">
                                    <input type="text" name="id_perumahan" readonly="" value="<?php echo($kode_otomatis) ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="example-email">Perumahan</label>
                                <div class="col-md-4">
                                    <input type="text" id="example-email" name="nama_perumahan" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Lokasi</label>
                                <div class="col-md-10">
                                    <input type="text" name="lokasi_perumahan" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Spesifikasi Teknis</label>
                                <div class="col-md-10">

                                    <textarea name="spesifikasi_teknis" class="summernote"></textarea>

                                </div>
                            </div>
                        </div>   
                        <div class="col-md-6 form-horizontal">
                         <div class="form-group">
                          <label class="col-md-2 control-label">Daftar Tipe</label>
                          <div class="col-md-10">

                              <select multiple="multiple" class="multi-select" id="daftar_tiperumah" name="daftar_tiperumah[]" data-plugin="multiselect">
                                <?php 
                                $tipe = array("50","60", "70", "80", "90", "100","125","135");
                                foreach($tipe as $item){
                                    ?>


                                    <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>

                                    <?php
                                }
                                ?>
                            </select>

                        </div>
                    </div>                                                                     
                    <div class="form-group">
                        <label class="col-md-2 control-label">Jumlah Kaveling</label>
                        <div class="col-md-4">
                            <input id="demo3" type="text" value="" name="Jumlah_kaveling">

                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">Luas Tanah</label>
                      <div class="col-md-9">
                        <input type="text" id="luastanah" name="luas_tanah" placeholder="" data-a-sign="M²" data-p-sign="s" class="form-control autonumber" placeholder="..">
                    </div>
                </div> 
                <div class="form-group">
                  <label class="col-md-2 control-label" for="example-email">Lampirkan Foto</label>
                  <div class="col-md-10">
                      <input type="file" name="file" id="file" class="filestyle" data-buttonbefore="true">
                  </div>
              </div>
          </div>


      </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
    <button type="submit" id="tambah" name="tambah" class="btn btn-primary waves-effect waves-light">Submit</button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</form>