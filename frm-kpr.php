
<?php
include 'modals-kpr.php'; 
?>
<div class="tp-breadcrumb"><!-- breadcrumb -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li><a href="index.html">Citra Kedaton</a></li>
          <li class="active">KPR</li>
        </ol>
      </div>
      </div>
    </div>
  </div>
  <!-- /.breadcrumb -->
  <div class="main-container" id="main-container"> 
    <!--Main container start-->
    <div class="tp-career-form" id="tp-career-form"><!--career-form-->
      <div class="container">

        <div class="row" ng-controller="CalculatorController">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
              <a href="#" data-toggle="modal" data-target="#con-close-modal" class="btn tp-btn tp-btn-blue">Kalkulator KPR</a>
              <h4 class="m-t-0">

                
              </h4>
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
                $res = $mysqli->query("SELECT * FROM tbl_kpr JOIN tbl_bank ON tbl_kpr.id_bank=tbl_bank.id_bank");
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
                  <a href="modals-edit-kaveling.php?id='.$row['id_kpr'].'" class="table-action-btn"  data-target="#edit-modal-kaveling" data-toggle="modal"><i class="md md-edit"></i></a>
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
      
    </div>
  </div>
  <!--/.career-form--> 
</div>
<!-- /.Main container start-->
