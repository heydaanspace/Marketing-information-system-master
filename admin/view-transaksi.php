
<!-- Start content -->
<div class="content">
  <div class="container">

    <!-- Page-Title -->
    <div class="row">
      <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">

        </div>

        <h4 class="page-title">Transaksi Masuk</h4>
        <ol class="breadcrumb">
          <li>
            <a href="#">Citra Kedaton</a>
          </li>
          <li class="active">
            Transaksi Masuk
          </li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive">
          <h4 class="m-t-0 header-title"><b>Data Transaksi Masuk</b></h4>
          <p class="text-muted font-13 m-b-30">
            <?php
            if(isset($_SESSION['errDel'])){
              $errSize = $_SESSION['errDel'];
              echo '<div class="alert alert-danger">
              <strong>Gagal!</strong>&nbsp;'.$_SESSION['errDel'].'
              </div>';
              unset($_SESSION['errDel']);
            }
            ?>  
            <?php 
            if (isset($_SESSION['info'])) {
              echo '<div class="alert alert-success">
              <strong>Sukses!</strong>&nbsp; '.$_SESSION['info'].'
              </div>';
              unset($_SESSION['info']);
            }
            ?>
          </p>

          <table id="datatable" class="table table-striped table-bordered datatable">
            <thead>
              <tr>

                <th>No</th>
                <th>No. Transaksi</th>
                <th>Tanggal Transaksi</th>
                <th>Pembeli</th>
                <th>Perumahan</th>
                <th>Blok. Kav</th>
                <th>Harga</th>
                <th>Jenis Pelunasan</th>
                <th>KTP</th>
                <th>NPWP</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
             <?php
             include 'conndb.php';
             include '../fungsi-tanggal.php';

             $no = 1;
             $res = $mysqli->query("SELECT a.no_transaksi,a.tanggal_transaksi,a.nm_pembeli,a.jenis_pelunasan,a.lampiran_ktp,a.lampiran_npwp,a.status,b.blok_kaveling,b.harga_kaveling,c.nama_perumahan FROM (tbl_penjualan a JOIN tbl_kaveling b ON a.id_kaveling = b.id_kaveling ) JOIN tbl_perumahan c ON a.id_perumahan = c.id_perumahan");
             while($row = $res->fetch_assoc()){
              echo '
              <tr>
              <td>'.$no.'</td>
              <td>'.$row['no_transaksi'].'</td>
              <td>'.tanggalIndo($row['tanggal_transaksi']).'</td>
              <td>'.$row['nm_pembeli'].'</td>
              <td>'.$row['nama_perumahan'].'</td>
              <td>'.$row['blok_kaveling'].'</td>
              <td>Rp. '.number_format($row['harga_kaveling']).'</td>
              <td>'.$row['jenis_pelunasan'].'</td>
              <td>
               <a href="assets/images/dokumen/'.$row['lampiran_ktp'].'" class="image-popup" "email me"> '.$row['lampiran_ktp'].'</a>
              </td>
              <td>
                <a href="assets/images/dokumen/'.$row['lampiran_npwp'].'" class="image-popup" "email me">'.$row['lampiran_npwp'].'</a>
              </td>
              <td>'.$row['status'].'</td>
              <td>
              <a href="delete-transaksi.php?id='.$row['no_transaksi'].'" class="btn btn-icon waves-effect waves-light btn-danger"><i class="fa fa-trash"></i></a>
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

</div> <!-- content -->


