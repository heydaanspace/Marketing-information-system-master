
<div class="content">
  <div class="container">

    <!-- Page-Title -->
    <div class="row">
      <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
          <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal"><span class="m-l-5"><i class="fa fa-plus"></i></span>&nbsp;Tambah</button>

          <?php 
          include 'modals-kpr.php';
          ?>

        </div>

        <h4 class="page-title">Data KPR</h4>
        <ol class="breadcrumb">
          <li><a href="#">Citra Kedaton</a></li>
          <li><a href="#">Data Master</a></li>
          <li class="active">Data KPR</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive">
          <h4 class="m-t-0 header-title"><b>Data KPR</b></h4>
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
              <th>ID KPR</th>
              <th>Bank</th>
              <th>Jumlah Pinjaman</th>
              <th>Jangka Waktu</th>
              <th>Bunga</th>
              <th>Angsuran</th>
              <th>Aksi</th>
            </tr>
          </thead>



          <tbody>
            <?php
            include 'conndb.php';

            $no = 1;
            $res = $mysqli->query("SELECT * FROM tbl_kpr JOIN tbl_bank ON tbl_kpr.id_bank = tbl_bank.id_bank");
            while($row = $res->fetch_assoc()){
              echo '
              <tr>
              <td>'.$no.'</td>
              <td>'.$row['id_kpr'].'</td>
              <td>'.$row['nama_bank'].'</td>
              <td>'.$row['jumlah_pinjaman'].'</td>
              <td>'.$row['jangka_waktu'].'</td>
              <td>'.$row['bunga'].'</td>
              <td>'.$row['angsuran'].'</td>

              <td>
              <a href="modals-edit-kpr.php?id='.$row['id_kpr'].'" class="table-action-btn"  data-target="#modals-edit-kpr" data-toggle="modal"><i class="md md-edit"></i></a>
              <a href="delete-kaveling.php?id='.$row['id_kpr'].'" class="table-action-btn"><i class="md md-close"></i></a>
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
<div id="modals-edit-kpr" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog"> 
    <div class="modal-content"> 
    </div> 
  </div>
</div><!-- /.modal -->
