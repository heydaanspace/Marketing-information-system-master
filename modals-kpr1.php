<div ng-controller="CalculatorController">
  <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="modal-title" id="con-close-modal">Kalkulator - Simulasi KPR</h2>
        </div>
        <div class="modal-body">


          <?php
          /* 
          include 'conndb.php';
          $res = $mysqli->query("SELECT * FROM tbl_kaveling WHERE id_perumahan='".$dataperum['id_perumahan']."'"); 
          while($datakav = $res->fetch_assoc()){
          }
          */
            ?>
          
           <div class="row">
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-1" class="control-label">Harga Kaveling</label> 
                <input type="text" class="form-control" id="principal" ng-model="principal"/>
              </div> 
            </div>
         
          <div class="col-md-6"> 
            <div class="form-group"> 
              <label for="field-2" class="control-label">Uang Muka</label> 
              <input type="number" id="adddp" ng-model="adddp" class="form-control">
              <p>Minimal DP : {{total() | currency : "Rp"}}</p>
            </div> 
          </div>
        </div>
        <div class="row">
          <div class="col-md-6"> 
            <div class="form-group"> 
              <label for="field-1" class="control-label">Jumlah Pinjaman</label> 
              <h2>{{outpinjaman() | currency : "Rp"}}</h2>
            </div> 
          </div>
          <div class="col-md-6"> 
            <div class="form-group"> 
              <label for="field-2" class="control-label">Jangka Waktu</label> 
              <input type="number" class="form-control" id="time" ng-model="time" />
            </div> 
          </div>
        </div>
        <div class="row">
          <div class="col-md-6"> 
            <div class="form-group"> 
              <label for="field-1" class="control-label">Estimasi Bunga</label> 
              <input type="number" class="form-control" id="rate" ng-model="bunga" />
            </div> 
          </div>
          <div class="col-md-6"> 
            <div class="form-group"> 
              <label for="field-2" id="field-4" class="control-label">Angsuran</label> 
              <h2>{{outAngsuran() | currency : "Rp" }}</h2>
            </div> 
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>




