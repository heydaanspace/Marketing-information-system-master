
<!-- Start content -->
<div class="content">
  <div class="container">

    <!-- Page-Title -->
    <div class="row">
      <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
          <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#modals-staff"><span class="m-l-5"><i class="fa fa-plus"></i></span>&nbsp;Tambah</button>
          <!-- form input perumahan modals -->
          <?php 
          include 'modals-staff.php';
          ?>

        </div>

        <h4 class="page-title">Data Admin</h4>
        <ol class="breadcrumb">
          <li>
            <a href="#">Citra Kedaton</a>
          </li>
          <li>
            <a href="#">Data Master</a>
          </li>
          <li class="active">
            Data Admin
          </li>
        </ol>
      </div>
    </div>




    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive">
          <h4 class="m-t-0 header-title"><b>Data Admin</b></h4>
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

         <table id="datatable-buttons" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>NO</th>
              <th>No. Pegawai</th>
              <th>Nama Admin</th>
              <th>Email</th>
              <th>Username</th>
              <th>Password</th>
              <th>Alamat</th>
              <th>Telepon</th>
              <th>Aksi</th>
            </tr>
          </thead>



          <tbody>
            <?php
            include 'conndb.php';

            $no = 1;
            $res = $mysqli->query("SELECT * FROM tbl_admin");
            while($row = $res->fetch_assoc()){
              echo '
              <tr>
              <td>'.$no.'</td>
              <td>'.$row['No_pegawai'].'</td>
              <td>'.$row['full_name'].'</td>
              <td>'.$row['email'].'</td>
              <td>'.$row['username'].'</td>
              <td>'.$row['password'].'</td>
              <td>'.$row['alamat_admin'].'</td>
              <td>'.$row['no_telpadmin'].'</td>
              <td>
              <a href="modals-edit-staff.php?id='.$row['No_pegawai'].'" class="table-action-btn" data-target="#modals-edit-staff" data-toggle="modal"><i class="md md-edit"></i></a>
              <a href="delete-perumahan.php?id='.$row['No_pegawai'].'" class="table-action-btn"><i class="md md-close"></i></a>
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

<div id="modals-edit-staff" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-full">
      <div class="modal-content">

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


