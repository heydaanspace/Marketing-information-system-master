<form action="save-kpr.php" method="post" enctype="multipart/form-data">
    <div id="modals-bank" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog"> 
            <div class="modal-content"> 
                <div class="modal-header"> 
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                    <h4 class="modal-title">Tambah Bank</h4> 
                </div> 
                <div class="modal-body"> 
                    <div class="row"> 
                       <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label for="field-1" class="control-label">ID Bank</label> 
                            <input type="text" name="id" class="form-control" id="field-1" readonly="" value="<?php echo $kodebank ?>"> 
                        </div> 
                    </div> 
                </div> 
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label for="field-3" class="control-label">Nama Bank</label> 
                            <input type="text" name="id" class="form-control" id="field-1">
                        </div> 
                    </div> 
                </div> 
        </div> 
        <div class="modal-footer"> 
            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
            <button type="submit" name="submit" class="btn btn-info waves-effect waves-light">Save</button> 
        </div> 
    </div> 
</div>
</div><!-- /.modal -->
</form>