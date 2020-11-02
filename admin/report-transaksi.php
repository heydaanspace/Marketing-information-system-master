<?php 
include 'conndb.php';

if(isset($_REQUEST['submit'])){

  $dari_tanggal =date('Y-m-d', strtotime( $_REQUEST['mulai']));
  $sampai_tanggal =date('Y-m-d', strtotime( $_REQUEST['sampai']));

  if($_REQUEST['mulai'] == "" || $_REQUEST['sampai'] == ""){
    header("Location: view-laporan2.php?page=transaksirep");
    die();
  } else {

    $query = mysqli_query($mysqli, "SELECT a.no_transaksi,a.tanggal_transaksi,a.nm_pembeli,a.jenis_pelunasan,a.lampiran_ktp,a.status,b.blok_kaveling,b.harga_kaveling,c.nama_perumahan FROM (tbl_penjualan a JOIN tbl_kaveling b ON a.id_kaveling = b.id_kaveling ) JOIN tbl_perumahan c ON a.id_perumahan = c.id_perumahan WHERE tanggal_transaksi BETWEEN '$dari_tanggal' AND '$sampai_tanggal'");


    echo '
    <form method="post" action="">
    <div class="row">
    <div class="col-sm-12">
    <div class="card-box">
    <h4 class="m-t-0 header-title"><b>Periode Laporan</b></h4>

    <div class="row">
    <div class="col-lg-5">
    <div class="p-20">
    <div class="input-group">
    <input type="text" name="mulai" class="form-control datepicker-autoclose">
    <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
    </div>
    </div>
    </div>
    <div class="col-lg-5">
    <div class="p-20">
    <div class="input-group">
    <input type="text" name="sampai" class="form-control datepicker-autoclose">
    <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
    </div>
    </div>
    </div>
    <div class="col-lg-2">
    <div class="p-20">
    <button type="submit" name="submit" class="btn btn-default btn-md waves-effect waves-light m-b-30"><i class="md md-visibility"></i>&nbsp;Tampilkan</button>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </form>
    <p class="warna agenda">Transaksi Masuk dari tanggal <strong>'.$dari_tanggal.'</strong> sampai dengan tanggal <strong>'.$sampai_tanggal.'</strong></p>';
    
    echo '<table class="table table-striped table-bordered datatable">
    <div class="dt-buttons btn-group">
    <a href="print-transaksi.php?tgl1='.$dari_tanggal.'&tgl2='.$sampai_tanggal.'" class="btn btn-default buttons-print btn-sm" tabindex="0" aria-controls="datatable-buttons"><i class="fa fa-print"></i> Cetak</a>
    </div>
    <br><br>

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
    <th>Status</th>
    </tr>
    </thead>
    <tbody>
    <tr>';
    if(mysqli_num_rows($query) > 0){
      $no = 1;
      while($row = mysqli_fetch_array($query)){
       echo '
       <td>'.$no.'</td>
       <td>'.$row['no_transaksi'].'</td>
       <td>'.$row['tanggal_transaksi'].'</td>
       <td>'.$row['nm_pembeli'].'</td>
       <td>'.$row['nama_perumahan'].'</td>
       <td>'.$row['blok_kaveling'].'</td>
       <td>'.$row['harga_kaveling'].'</td>
       <td>'.$row['jenis_pelunasan'].'</td>
       <td>'.$row['lampiran_ktp'].'</td>
       <td>'.$row['status'].'</td>
       </tr>';
       $no++;

       echo '</tbody>';

     }
   } else { 
     echo '<tr><td colspan="9"><center><p class="add">Tidak ada Transaksi Masuk</p></center></td></tr>';
   }
   echo '</table>';

 }
} else {
 echo '
 <form method="post" action="">
 <div class="row">
 <div class="col-sm-12">
 <div class="card-box">
 <h4 class="m-t-0 header-title"><b>Periode Laporan</b></h4>

 <div class="row">
 <div class="col-lg-5">
 <div class="p-20">
 <div class="input-group">
 <input type="text" name="mulai" class="form-control datepicker-autoclose">
 <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
 </div>
 </div>
 </div>
 <div class="col-lg-5">
 <div class="p-20">
 <div class="input-group">
 <input type="text" name="sampai" class="form-control datepicker-autoclose">
 <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
 </div>
 </div>
 </div>
 <div class="col-lg-2">
 <div class="p-20">
 <button type="submit" name="submit" class="btn btn-default btn-md waves-effect waves-light m-b-30"><i class="md md-visibility"></i>&nbsp;Tampilkan</button>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </form>';
}

?>

