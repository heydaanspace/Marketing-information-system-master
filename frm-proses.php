<?php 
if(empty($_SESSION['status'])){
  $_SESSION['err'] = 'Anda harus login terlebih dahulu!';
  header("Location: index.php?page=login");
  die();
}
?>
<div class="tp-breadcrumb"><!--tp-breadcrumb-->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li><a href="index.html">Citra Kedaton</a></li>
          <li class="active">Detail Pengajuan</li>
        </ol>
      </div>
    </div>
  </div>
</div><!--/.tp-breadcrumb-->
<?php  
if(isset($_SESSION['errSize']))
{
  echo '<div class="alert alert-danger">
  <strong>Selamat! </strong> &nbsp;'.$_SESSION['errSize'].'
  </div>';
  unset($_SESSION['errSize']);

} else {
  if(isset($_SESSION['errFormat']))
  {
    echo '<div class="alert alert-danger">
    <strong>Selamat! </strong> &nbsp;'.$_SESSION['errFormat'].'
    </div>';
    unset($_SESSION['errFormat']);
  }
}
?> 
<div class="main-container" id="main-container"><!--Main container start-->
  <div class="tp-accordion" id="tp-accordion"><!-- tp accordion start-->
    <div class="container">
      <div class="row">
        <div class="col-md-12 tp-accordion-one"><!--tp-accordion-one-->
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"><!--panel-group-->
            <div class="panel panel-default"><!--panel panel-default-->
              <div class="panel-heading" role="tab" id="headingOne"><!--panel-heading-->
                <h1 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Detail Pengajuan</a> </h1>
                </div><!--/.panel-heading-->
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne"><!--panel-collapse collapse in-->
                  <div class="panel-body"><!--panel-body-->

                   <form class="form" method="post" action="career-form.php">
                     <?php

                     include 'conndb.php';
                     include 'no_transaksi.php';
                     if(isset($_SESSION['kaveling'])) {
                      foreach($_SESSION['kaveling'] as $idkaveling => $quantity) {


                       $result = $mysqli->query("SELECT * FROM tbl_kaveling JOIN tbl_perumahan ON tbl_kaveling.id_perumahan=tbl_perumahan.id_perumahan WHERE id_kaveling = ".$idkaveling);

                       $obj = $result->fetch_object()

                       ?>
                       <div class="row">
                        <div class="col-md-6">
                          <label class="control-label" for="lastname">Perumahan</label>
                          <h2 style="color: #06502D;"><?php echo $obj->nama_perumahan?></h2>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-md-6">
                          <label class="control-label" for="email">Blok Kaveling</label>
                          <h1 style="color: #06502D;"><?php echo $obj->blok_kaveling?></h1>
                        </div>
                        <div class="col-md-6">
                          <label class="control-label" for="city">Type</label>
                          <h1 style="color: #06502D;">70</h1>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-md-6">
                          <label class="control-label" for="state">Harga</label>
                          <h3 style="color: #06502D;">Rp <?php echo number_format($obj->harga_kaveling)?></h3>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <a href="transaksi-act.php?action=empty" class="btn tp-btn tp-btn-orange">Batal</a>

                        </div>
                      </div>
                      <?php 
                    } 
                  } else {
                    echo '<h1>Silahkan pilih kaveling</h1>';
                    echo '<a href="index.php?page=perumahan" class="btn tp-btn tp-btn-orange">Kembali</a>';

                  }

                  ?>
                </form>

              </div><!--panel-body-->
            </div><!--/.panel-collapse collapse in-->
          </div><!--/.panel panel-default-->
          <div class="panel panel-default"><!--panel panel-default-->
            <div class="panel-heading" role="tab" id="headingTwo"><!--panel-heading-->
              <h3 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Lengkapi Persyaratan</a> </h3>
            </div><!--/.panel-heading-->
            
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">

              <div class="panel-body">
               <?php 
               //include 'fungsi-tanggal.php';
               $tgl = date('d-m-Y');
               if(isset($_SESSION['kaveling'])) {

                 echo
                 '<form action="proses-act.php" method="post" enctype="multipart/form-data">
                 <div class="row">
                 <div class="col-md-6">
                 <label class="control-label" for="lastname">Nama Lengkap</label>
                 <input  type="text"  id="firstname" value="'.$_SESSION['nm_depan'].'" name="pembeli" class="form-control" placeholder="">
                 </div>
                 <div class="col-md-6">
                 <label class="control-label" for="lastname">Tanggal Pembelian</label>
                 <input  type="text"  id="firstname" value="'.$tgl.'" readonly="" name="tanggal" class="form-control" placeholder="">
                 </div>
                 </div>
                 <div class="row">
                 <div class="col-md-6">
                 <label class="control-label" for="lastname">No. Telp</label>
                 <input  type="text"  id="firstname" name="notelp" class="form-control" placeholder="">
                 </div>
                 <div class="col-md-6">
                 <label class="control-label" for="lastname">Jenis Pelunasan</label>
                 <select class="form-control" name="pelunasan">
                 <option value="Cash">Cash Bertahap</option>
                 <option value="KPR">KPR</option>
                 </select>
                 </div>
                 </div>
                 <div class="row">
                 <div class="col-md-6">
                 <label class="control-label" for="lastname">Alamat</label>
                 <textarea name="alamat" class="form-control"></textarea>
                 </div>
                 <div class="col-md-6">
                 <label class="control-label" for="firstname">Lampiran Scan KTP</label>
                 <input type="file" id="file" name="file" class="filestyle" data-buttonbefore="true" data-input="false">
                 <label class="control-label" for="firstname">Lampiran Scan NPWP</label>
                 <input type="file" name="npwp" id="npwp" class="filestyle" data-buttonbefore="true" data-input="false">
                 </div>
                 </div>

                 <div class="h5 m-0">
                 <div class="form-group text-right">     
                 <button type="submit" name="tambah" class="btn  tp-btn tp-btn-blue">Submit</button>
                 </div>
                 </div>
                 </form> ';

               } else {
                echo '<h1>Transaksi Belum Dilakukan</h1>';
              }
              ?>
            </form>
          </div>

        </div>
      </div>
    </div>

  </div><!--/.panel-group-->
</div><!--/.tp-accordion-one-->
</div>
</div>
</div><!-- /.tp accordion start-->
</div>
<!-- /.Main container start-->
