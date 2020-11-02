

<!-- Start content -->
<div class="content">
  <div class="container">
    <!-- Page-Title -->
    <div class="row">
      <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
          <!-- <a href="dashboard.php?page=frmperumahan" class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Tambah<span class="m-l-5"><i class="fa fa-plus"></i></span></a>-->
          <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#full-width-modal"><span class="m-l-5"><i class="fa fa-plus"></i></span> Tambah</button>
          <!-- form input perumahan modals -->
          <?php 
          include 'modals-perumahan.php';
          ?>

        </div>

        <h4 class="page-title">Data Perumahan</h4>
        <ol class="breadcrumb">
          <li>
            <a href="#">Citra Kedaton</a>
          </li>
          <li>
            <a href="#">Data Master</a>
          </li>
          <li class="active">
            Data Perumahan
          </li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">

        <div class="card-box table-responsive">
          <h4 class="m-t-0 header-title"><b>Data Perumahan</b></h4>
          <p class="text-muted font-13 m-b-30">
            <?php  
            if(isset($_SESSION['info']))
            {
              echo '<div class="alert alert-success">
              <strong>Sukses!</strong>&nbsp;'.$_SESSION['info'].'
              </div>';
              unset($_SESSION['info']);

            } else {
              if(isset($_SESSION['perumahan']))
              {
                echo '<div class="alert alert-danger">
                <strong>Maaf!</strong>&nbsp;'.$_SESSION['perumahan'].'
                </div>';
                unset($_SESSION['perumahan']);

              } else {
               if(isset($_SESSION['errEmpty']))
               {
                echo '<div class="alert alert-danger">
                <strong>Maaf!</strong>&nbsp;'.$_SESSION['errEmpty'].'
                </div>';
                unset($_SESSION['errEmpty']);

              } 

            } 
          }
          ?> 
          <?php
          if(isset($_SESSION['errSize'])){
            $errSize = $_SESSION['errSize'];
            echo '<div class="alert alert-danger">
            <strong>Maaf!</strong>&nbsp;'.$_SESSION['errSize'].'
            </div>';
            unset($_SESSION['errSize']);
          }
          if(isset($_SESSION['errFormat'])){
            $errFormat = $_SESSION['errFormat'];
            echo '<div class="alert alert-danger">
            <strong>Maaf!</strong>&nbsp;'.$_SESSION['errFormat'].'
            </div>';
            unset($_SESSION['errFormat']);
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

        <table id="datatable" class="table table-striped table-bordered datatable">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Perumahan</th>
              <th>Foto</th>

              <th>Nama Perumahan</th>
              <th>Lokasi Perumahan</th>
              <th>Daftar Tipe</th>
              <th>Jumlah Kaveling</th>
              <th>Luas Tanah</th>
              <th>Spesifikasi Teknis</th>
              <th>Aksi</th>
            </tr>
          </thead>



          <tbody>
            <?php
            include 'conndb.php';
            
            $no = 1;
            $res = $mysqli->query("SELECT * FROM tbl_perumahan");
            while($row = $res->fetch_array()){
              echo '
              <tr>
              <td>'.$no.'</td>
              <td>'.$row['id_perumahan'].'</td>
              <td>
              <a href="assets/images/perumahan/'.$row['gambar'].'" class="image-popup" title="Screenshot-4">
              <img src="assets/images/perumahan/'.$row['gambar'].'" class="thumb-sm" alt="work-thumbnail">
              </a>
              </td>
              <td>'.$row['nama_perumahan'].'</td>
              <td>'.$row['lokasi_perumahan'].'</td>
              <td>'.$row['daftar_tiperumah'].'</td>
              <td>'.$row['Jumlah_kaveling'].'</td>
              <td>'.$row['luas_tanah'].'</td>
              <td>'.$row['spesifikasi_teknis'].'</td>
              <td>
              <a id="edit-data" name="ubah" href="modals-edit-perumahan.php?id='.$row['id_perumahan'].'" data-target="#edit-modal" data-toggle="modal" class="table-action-btn"><i class="md md-edit"></i></a>
              <a href="delete-perumahan.php?id='.$row['id_perumahan'].'" class="table-action-btn"><i class="md md-close"></i></a>
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

  <!-- end row -->


</div> <!-- container -->

</div> <!-- content -->


<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-full">
    <div class="modal-content">

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


