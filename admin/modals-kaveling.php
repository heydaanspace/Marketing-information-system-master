
<form action="save-kaveling.php" method="post" enctype="multipart/form-data">
  <div id="tambah-kaveling" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-full">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="full-width-modalLabel">Tambah Kaveling</h4>
        </div>
        <div class="modal-body">
          <div class="row">

            <div class="col-md-6 form-horizontal">

             <div class="form-group">
               <label class="col-sm-2 control-label" readonly>ID Kaveling</label>
               <div class="col-md-4">
                <?php
                include 'conndb.php';

                $carikode = mysqli_query($mysqli, "SELECT id_kaveling from tbl_kaveling") or die (mysqli_error());

                $datakode = mysqli_fetch_array($carikode);
                $jumlah_data = mysqli_num_rows($carikode);

                if ($datakode) {

                 $nilaikode = substr($jumlah_data[0], 1);

                 $kode = (int) $nilaikode;

                 $kode = $jumlah_data + 1;

                 $kode_otomatis = "01".str_pad($kode, 2, "0", STR_PAD_LEFT);
               } else {
                 $kode_otomatis = "01001";

               }
               ?>  
               <input type="text" name="id" readonly="" value="<?php echo($kode_otomatis) ?>" class="form-control">
             </div>
           </div>
           <div class="form-group">
            <label class="col-md-2 control-label">Perumahan</label>
            <div class="col-md-10">

             <select class="form-control" name="nmperumahan">
               <?php 
               include 'conndb.php';
               $result = mysqli_query($mysqli,"SELECT * FROM tbl_perumahan");
               while($row = mysqli_fetch_assoc($result))
               {

                ?>
                <option value="<?php echo $row['id_perumahan']; ?>"><?php echo $row['nama_perumahan']; ?></option>';
              <?php }



              ?>
            </select>
          </div>
        </div>   

        <div class="form-group">
          <label class="col-md-2 control-label">Blok Kaveling</label>
          <div class="col-md-10">
            <input type="text" required="" name="blokav" class="form-control">
          </div>
        </div>


      </div>

      <div class="col-md-6 form-horizontal">
        <div class="form-group">
          <label class="col-md-2 control-label">Luas Kaveling</label>
          <div class="col-md-10">
            <input type="text" placeholder="" name="luas" data-a-sign=" M²" data-p-sign="s" class="form-control autonumber">
          </div>
        </div>                                   
        <div class="form-group">
          <label class="col-md-2 control-label">Tipe</label>
          <div class="col-md-10">
            <input type="text" required="" name="tipe" class="form-control">
          </div>
        </div>                                   
        <div class="form-group">
          <label class="col-md-2 control-label">Harga Kaveling</label>
          <div class="input-group col-md-5">
            <span class="input-group-addon" id="format">Rp</span>
            <input type="text" placeholder="" class="form-control autonumber" data-a-sep="." data-a-dec=",">
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

<script type="text/javascript">
  $(document).ready(function(){
   $('#input_text').number( true, 0 );

   $('#get_val').click(function(){
    $('#hasil_input').text($('#input_text').val());
  });

   $('form').submit(function(){
    var form = $(this);
    $('.autonumber').each(function(i){
      var self = $(this);
      try{
        var v = self.autoNumeric('get');
        self.autoNumeric('destroy');
        self.val(v);
      }catch(err){
        console.log("Not an autonumeric field: " + self.attr("name"));
      }
    });
    return true;
  });
 });
</script>