<?php 
if(empty($_SESSION['status'])){
  $_SESSION['err'] = 'Anda harus login terlebih dahulu!';
  header("Location: index.php?page=login");
  die();
}
?>
<div class="tp-breadcrumb"><!-- breadcrumb -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb"><!-- breadcrumb -->
          <li><a href="index.html">Citra Kedaton</a></li>
          <li class="active">Akun</li>
        </ol><!-- /.breadcrumb -->
      </div>
    </div>
  </div>
</div><!-- /.breadcrumb -->
<?php  
if(isset($_SESSION['info']))
{
  echo '<div class="alert alert-success">
  <strong>Selamat! </strong> &nbsp;'.$_SESSION['info'].'
  </div>';
  unset($_SESSION['info']);

}
?> 
<?php  
if(isset($_SESSION['errDel']))
{
  echo '<div class="alert alert-danger">
  <strong>Selamat! </strong> &nbsp;'.$_SESSION['errDel'].'
  </div>';
  unset($_SESSION['errDel']);

}
?> 
<div class="main-container" id="main-container"><!--Main container start-->
  <div class="tp-agent-detail" id="tp-agent-detail"><!-- agent detail section -->
  	<div class="container">
     <div class="row agent-detail">
      <?php 
      include 'conndb.php';
      $id = $_SESSION['id_member'];
      $res = $mysqli->query("SELECT * FROM tbl_member WHERE id_member='$id'");
      $rowmem = $res->fetch_assoc();
      ?>
      <div class="col-md-4">
       <img src="images/avatar-profil.png" class="img-responsive" alt="">
     </div>
     <div class="col-md-8">
       <div class="row">
         <div class="col-md-12">
           <h1><?php echo $rowmem['nm_depan'];?> <?php echo $rowmem['nm_belakang'];?></h1>
         </div>
         <div class="col-md-6">

           <div class="detail-block"><!-- detail block -->
            <h3><i class="fa fa-map-marker"></i>Alamat</h3>
            <ul>
             <li><?php echo $rowmem['alamat_member'] ?></li>
           </ul>
         </div><!-- /.detail block -->

         <img src="" alt="">

         <div class="detail-block"><!-- detail block -->
          <h3><i class="fa fa-envelope"></i> E-mail</h3>
          <p><a href="#"><?php echo $_SESSION['email'];?></a></p>
        </div><!-- /.detail block -->
      </div>

      <div class="col-md-6">
       <div class="detail-block num-block"><!-- detail block -->
        <ul>
         <li><i class="fa fa-phone"></i><?php echo $rowmem['No_telefonmember'] ?></li>
       </ul>
     </div><!-- /.detail block -->

     <div class="contact-block"><!-- detail block -->
      <a href="modal-edit-prof.php?id=<?php echo $rowmem['id_member'] ?>" data-toggle="modal" data-target="#modals-profil" class="btn btn-block tp-btn tp-btn-orange">Perbarui Profil</a>
    </div><!-- /.detail block -->

  </div>
</div>
</div>
</div>
<div class="tp-accordion" id="tp-accordion"><!-- tp accordion start-->
  <div class="container">
    <div class="row">
      <div class="col-md-12 tp-accordion-one"><!--tp-accordion-one-->
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"><!--panel-group-->
          <div class="panel panel-default"><!--panel panel-default-->
            <div class="panel-heading" role="tab" id="headingOne"><!--panel-heading-->
              <h2 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Pembelian Saya</a> </h>
              </div><!--/.panel-heading-->
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne"><!--panel-collapse collapse in-->
                <div class="panel-body"><!--panel-body-->
                  <h2>Data Pembelian</h2>
                  <div class="col-md-12"><!-- search form -->
                    <form class="">
                      <div class="card-box table-responsive">
                        <table id="" class="table table-striped table-bordered datatable-buttons">
                          <thead>
                            <tr>
                              <?php 
                              include 'conndb.php'; 
                              include 'fungsi-tanggal.php';
                              $id = $_SESSION['id_member'];
                              $res = $mysqli->query("SELECT a.id_member, no_transaksi, nm_pembeli, nama_perumahan, blok_kaveling, tanggal_transaksi, harga_kaveling, jenis_pelunasan, status FROM ((tbl_member a JOIN tbl_penjualan b ON a.id_member = b.id_member) JOIN tbl_perumahan c ON c.id_perumahan  = b.id_perumahan) JOIN tbl_kaveling d ON d.id_kaveling = b.id_kaveling  WHERE a.id_member='$id'"); 
                              $row = $res->fetch_assoc();

                              ?>
                              <th>No Pembelian</th>
                              <th>Nama Pembeli</th>
                              <th>Perumahan</th>
                              <th>Blok Kaveling</th>
                              <th>Tanggal Pembelian</th>
                              <th>Harga Kaveling</th>
                              <th>Jenis Pelunasan</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                           <tr>
                            <td><?php echo $row['no_transaksi']; ?></td>
                            <td><?php echo $row['nm_pembeli']; ?></td>
                            <td><?php echo $row['nama_perumahan']; ?></td>
                            <td><?php echo $row['blok_kaveling']; ?></td>
                            <td><?php echo tanggalIndo($row['tanggal_transaksi']); ?></td>
                            <td>Rp. <?php echo number_format($row['harga_kaveling']); ?></td>
                            <td><?php echo $row['jenis_pelunasan']; ?></td>
                            <td><?php echo $row['status'] ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </form>
                </div>
                &nbsp; &nbsp;
                <a href="modal-bayar.php?id=<?php echo $row['no_transaksi']; ?>" data-toggle="modal" data-target="#modals-bayar" name="tambah" class="btn  tp-btn tp-btn-blue">Pembayaran</a>
                <a href="invoices.php" name="tambah" class="btn  tp-btn tp-btn-blue">Detail</a>
                <a href="modal-hapus.php?id=<?php echo $row['no_transaksi']; ?>" data-toggle="modal" data-target="#modals-bayar" name="tambah" class="btn  tp-btn tp-btn-blue">Batal</a>

              </div><!--panel-body-->
            </div><!--/.panel-collapse collapse in-->
          </div><!--/.panel panel-default-->
          <div class="panel panel-default"><!--panel panel-default-->
            <div class="panel-heading" role="tab" id="headingTwo"><!--panel-heading-->
              <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Riwayat Pembayaran</a> </h3>
            </div><!--/.panel-heading-->
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body"> 
                <h2>Data Pembayaran</h2>
                <div class="col-md-12"><!-- search form -->
                  <form class="">
                    <div class="card-box table-responsive">
                      <table id="" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>No Pembayaran</th>
                            <th>No Transaksi</th>
                            <th>Jenis bayar</th>
                            <th>jumlah Bayar</th>
                            <th>Tanggal Transfer</th>
                            <th>Bank Tujuan</th>
                            <th>Bukti Transfer</th>
                            <th>Status</th>
                            <th>Detail</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php 
                          include 'conndb.php'; 
                          if(isset($_SESSION['id_member'])) {

                            $res = $mysqli->query("SELECT * FROM tbl_pembayaran WHERE no_transaksi='".$row['no_transaksi']."'"); 
                            while($rowpem =mysqli_fetch_assoc($res)) {  
                              ?>
                              <tr>
                                <td><?php echo $rowpem['no_pembayaran']; ?></td>
                                <td><?php echo $rowpem['no_transaksi']; ?></td>
                                <td><?php echo $rowpem['jenis_bayar']; ?></td>
                                <td>Rp.<?php echo number_format($rowpem['jumlah_bayar']); ?></td>
                                <td><?php echo tanggalIndo($rowpem['tanggal_transfer']); ?></td>
                                <td><?php echo $rowpem['nama_bank']; ?></td>
                                <td>
                                  <a href="admin/assets/images/dokumen/<?php echo $rowpem['bukti_transfer'] ?>" class="image-popup" "email me"><?php echo $rowpem['bukti_transfer'] ?>
                                  
                                </a>
                              </td>
                              <td><?php echo $rowpem['status'] ?></td>
                              <td><a href="kwitansi.php?id=<?php echo $rowpem['no_pembayaran'] ?>">Kwitansi</a></td>
                            </tr>
                            <?php 
                          }
                        } ?>
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>

            </div><!--/.panel-body-->
          </div>
        </div><!--/.panel panel-default-->
        <div class="panel panel-default"><!--panel panel-default-->
          <div class="panel-heading" role="tab" id="headingThree"><!--panel-heading-->
            <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Progres Pembangunan</a> </h3>
          </div><!--/.panel-heading-->
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body"> 
             <h2>Data Progres</h2>
             <div class="col-md-12"><!-- search form -->
              <div class="card-box table-responsive">
                <table id="" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>ID Progres</th>
                      <th>Realisasi</th>
                      <th>Target Selesai</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    include 'conndb.php'; 
                    if(isset($_SESSION['id_member'])) {

                      $id = $_SESSION['id_member'];
                      $res = $mysqli->query("SELECT a.id_progres,progres,tanggal_progres,mulai_pembangunan, target_selesai,tahap FROM (tbl_progres_pembangunan a JOIN tbl_rekap_penjualan b ON a.No_penjualan = b.No_penjualan) JOIN tbl_member c ON c.id_member = a.id_member WHERE c.id_member='$id'"); 
                      while($data = mysqli_fetch_assoc($res)) {  
                        ?>
                        <tr>
                          <td><?php echo $data['id_progres']; ?></td>
                          <td><?php echo tanggalIndo($data['mulai_pembangunan']); ?></td>
                          <td><?php echo tanggalIndo($data['target_selesai']); ?></td>
                        </tr>

                        <div class="row">
                          <div class="col-md-6">
                            <label class="control-label" for="lastname">Tanggal Progres</label>
                            <h3><?php echo tanggalIndo($data['tanggal_progres']); ?></h3>
                          </div>
                          <div class="col-md-3">
                            <label class="control-label" for="firstname" class="btn tp-btn-blue">Tahap</label>
                            <h2><?php echo $data['tahap']; ?></h2>
                          </div>
                          <div class="col-md-3">
                            <label class="control-label" for="firstname" class="btn tp-btn-blue">Persentase Progres</label>
                            <h2><?php echo $data['progres']; ?> %</h2>
                          </div>
                        </div>
                      <?php }} ?>
                    </tbody>
                  </table>

                </div>
              </div>
            </div><!--/.panel-body-->
          </div>
        </div><!--/.panel panel-default-->
      </div><!--/.panel-group-->
    </div><!--/.tp-accordion-one-->
  </div>
</div>
</div><!-- /.tp accordion start-->

</div><!-- agent detail section --> 
</div> <!-- section --> 
</div>
<div id="modals-bayar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" style="width: 80%;">
    <div class="modal-content">
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="modals-hapus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" style="width: 80%;">
    <div class="modal-content">
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="modals-profil" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" style="width: 80%;">
    <div class="modal-content">
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="admin/assets/plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="admin/assets/plugins/bootstrap-datepicker/datepicker.js"></script>