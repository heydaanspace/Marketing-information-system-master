
<!-- Start content -->
<div class="content">
  <div class="container">

    <!-- Page-Title -->
    <div class="row">
      <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
          <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#tambah-kaveling"><span class="m-l-5"><i class="fa fa-plus"></i></span>&nbsp;Tambah</button>
          <!-- form input perumahan modals -->
          <?php 
          include 'modals-kaveling.php';
          ?>
        </div>

        <h4 class="page-title">Data Kaveling</h4>
        <ol class="breadcrumb">
          <li>
            <a href="#">Citra Kedaton</a>
          </li>
          <li>
            <a href="#">Data Master</a>
          </li>
          <li class="active">
            Data Kaveling
          </li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive">
          <h4 class="m-t-0 header-title"><b>Data Kaveling</b></h4>
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
          <?php
          if(isset($_SESSION['errDel'])){
            $errSize = $_SESSION['errDel'];
            echo '<div class="alert alert-danger">
            <strong>Gagal!</strong>&nbsp;'.$_SESSION['errDel'].'
            </div>';
            unset($_SESSION['errDel']);
          }
          ?>     
        </p>

        <table id="datatable-buttons" class="table table-striped table-bordered datatable">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Kaveling</th>
              <th>Nama Perumahan</th>
              <th>Blok Kaveling</th>
              <th>Luas Kaveling</th>
              <th>Tipe Kaveling</th>
              <th>Harga Kaveling</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include 'conndb.php';

            $no = 1;
            $res = $mysqli->query("SELECT * FROM tbl_kaveling JOIN tbl_perumahan ON tbl_kaveling.id_perumahan=tbl_perumahan.id_perumahan");
            while($row = $res->fetch_assoc()){
              echo '
              <tr>
              <td>'.$no.'</td>
              <td>'.$row['id_kaveling'].'</td>
              <td>'.$row['nama_perumahan'].'</td>
              <td>'.$row['blok_kaveling'].'</td>
              <td>'.$row['luas_kaveling'].'</td>
              <td>'.$row['tipe_kaveling'].'</td>
              <td>Rp. '.$row['harga_kaveling'].'</td>';
              if($row['jumlah'] > 0){ 
               echo
               '<td>
               <a href="modals-edit-kaveling.php?id='.$row['id_kaveling'].'" class="table-action-btn"  data-target="#edit-modal-kaveling" data-toggle="modal"><i class="md md-edit"></i></a>
               <a href="delete-kaveling.php?id='.$row['id_kaveling'].'" class="table-action-btn"><i class="md md-close"></i></a>
               </td>';
             } else {
              echo '<td><span class="label label-danger">Terjual</span></td>';
            }

            echo '</tr>';
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- end row -->


</div> <!-- container -->

</div> <!-- content -->

<div id="edit-modal-kaveling" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-full">
    <div class="modal-content">

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

