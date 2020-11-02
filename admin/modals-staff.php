
<form action="save-staff.php" method="post" enctype="multipart/form-data">
  <div id="modals-staff" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-full">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="full-width-modalLabel">Tambah Staff</h4>
        </div>
        <div class="modal-body">
          <div class="row">

            <div class="col-md-6 form-horizontal">

             <div class="form-group">
               <label class="col-sm-2 control-label" readonly>No Pegawai</label>
               <div class="col-md-4">
               <input type="text" name="nopeg" class="form-control">
             </div>
           </div>
           <div class="form-group">
            <label class="col-md-2 control-label">Nama Lengkap</label>
            <div class="col-md-10">
             <input type="text" name="nama" class="form-control">
           </div>
         </div>   

         <div class="form-group">
          <label class="col-md-2 control-label">Email</label>
          <div class="col-md-10">
            <input type="email" name="email" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Username</label>
          <div class="col-md-10">
            <input type="text" name="username" class="form-control">
          </div>
        </div>

      </div>

      <div class="col-md-6 form-horizontal">


        <div class="form-group">
          <label class="col-md-2 control-label">Password</label>
          <div class="col-md-10">
            <input type="password" placeholder="" name="password" class="form-control autonumber">
          </div>
        </div>                                   
        <div class="form-group">
          <label class="col-md-2 control-label">Alamat</label>
          <div class="col-md-10">
            <textarea name="alamat" class="form-control"></textarea>
          </div>
        </div>                                   
        <div class="form-group">
          <label class="col-md-2 control-label">No. telp</label>
          <div class="col-md-5">
            <input type="text" placeholder="" name="notelp" class="form-control">
          </div>
        </div>

      </div>

    </div>

  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
    <button type="submit" name="tambah" class="btn btn-primary waves-effect waves-light">Simpan</button>
  </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</form>