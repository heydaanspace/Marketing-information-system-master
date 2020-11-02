 
    <div id="modals-register" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog" style="width: 80%;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h1>Daftar Akun Citra Kedaton.</h1>
          </div>
          <div class="modal-body">
             <form action="register-act.php" method="post">
             <div class="row">
              <div class="col-md-6">
                <label class="control-label" for="lastname">Nama Depan</label>
                <input type="text" class="form-control" name="firstname">
              </div>
              <div class="col-md-6">
               <label class="control-label" for="lastname">Nama Belakang</label>
               <input type="text" class="form-control" name="lastname">
             </div>
           </div>
           <div class="row">
            <div class="col-md-6">
             <label class="control-label" for="lastname">Email</label>
             <input type="text" class="form-control" name="email">
           </div>
           <div class="col-md-6">
            <label class="control-label" for="lastname">Password</label>
            <input type="password" class="form-control" name="password">      
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label class="control-label" for="lastname">No. Telp</label>
            <input type="text" class="form-control" name="notelp">
          </div>
      </div>
      <div class="modal-footer">        
          <button type="submit" name="tambah" class="btn  tp-btn tp-btn-orange">Daftar</button>
    </div>
    </form>
  </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>




