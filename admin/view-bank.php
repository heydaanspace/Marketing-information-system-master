
<div class="content">
  <div class="container">

    <!-- Page-Title -->
    <div class="row">
      <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
          <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#modals-bank"><span class="m-l-5"><i class="fa fa-plus"></i></span>&nbsp;Tambah</button>

          <?php 
          include 'modals-bank.php';
          ?>

        </div>

        <h4 class="page-title">Data Bank</h4>
        <ol class="breadcrumb">
          <li><a href="#">Citra Kedaton</a></li>
          <li><a href="#">Data Master</a></li>
          <li class="active">Data Bank</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive">
          <h4 class="m-t-0 header-title"><b>Data Bank</b></h4>
          <p class="text-muted font-13 m-b-30">
           <?php  
           if(isset($_SESSION['info']))
           {
            echo '<div class="alert alert-success">
            <strong>Sukses!</strong> &nbsp;'.$_SESSION['info'].'
            </div>';
            unset($_SESSION['info']);

          }
          ?> 
        </p>

        <table id="datatable" class="table table-striped table-bordered datatable">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Bank</th>
              <th>Nama Bank</th>
              <th>Aksi</th>
            </tr>
          </thead>



          <tbody>
            <?php
            include 'conndb.php';

            $no = 1;
            $res = $mysqli->query("SELECT * FROM tbl_bank");
            while($row = $res->fetch_assoc()){
              echo '
              <tr>
              <td>'.$no.'</td>
              <td>'.$row['id_bank'].'</td>
              <td>'.$row['nama_bank'].'</td>
              <td>
              <a href="modals-bank-edit.php?id='.$row['id_bank'].'" class="table-action-btn"  data-target="#edit-modal-bank" data-toggle="modal"><i class="md md-edit"></i></a>
              <a href="delete-kaveling.php?id='.$row['id_bank'].'" class="table-action-btn"><i class="md md-close"></i></a>
              </td>
              </tr>';
              $no++;
            }
            ?>


          </tbody>
        </table>
      </div>
    </div>
  </div>


</div> <!-- container -->
</div>

<div id="edit-modal-bank" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-full">
    <div class="modal-content">

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
