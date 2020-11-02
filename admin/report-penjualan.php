<?php 
include 'conndb.php';
include '../fungsi-tanggal.php';

if(isset($_REQUEST['submit'])){

  $dari_tanggal =date('Y-m-d', strtotime( $_REQUEST['mulai']));
  $sampai_tanggal =date('Y-m-d', strtotime( $_REQUEST['sampai']));

  if($_REQUEST['mulai'] == "" || $_REQUEST['sampai'] == ""){
    header("Location: view-laporan2.php?page=penjualanrep");
    die();
  } else {

    $query = mysqli_query($mysqli, "SELECT a.No_penjualan,a.tanggal,a.id_perumahan,a.keterangan,a.jenis_pelunasan,a.bank,a.tgl_acckpr,a.deadline_acckpr,a.acc_desain,a.deadline_add,a.prod_versispp, a.realisasi, a.pelaksana, a.tgl_spp, b.no_transaksi, b.nm_pembeli, c.blok_kaveling, d.nama_perumahan FROM ((tbl_rekap_penjualan a JOIN tbl_penjualan b ON a.no_transaksi = b.no_transaksi ) JOIN tbl_kaveling c ON a.id_kaveling = c.id_kaveling) JOIN tbl_perumahan d ON a.id_perumahan=d.id_perumahan WHERE tanggal BETWEEN '$dari_tanggal' AND '$sampai_tanggal'");


    echo '
    <form method="post" action="">
    <div class="row">
    <div class="col-sm-12">
    <div class="card-box">
    <h4 class="m-t-0 header-title"><b>Periode Penjualan</b></h4>

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
    <p class="warna agenda">Data Penjualan dari tanggal <strong>'.tanggalIndo($dari_tanggal).'</strong> sampai dengan tanggal <strong>'.tanggalIndo($sampai_tanggal).'</strong></p>';
    
    echo '<table id="" class="table table-striped table-bordered datatable-buttons">
    <div class="dt-buttons btn-group">
    <a href="print-penjualan.php?tgl1='.$dari_tanggal.'&tgl2='.$sampai_tanggal.'" class="btn btn-default buttons-print btn-sm" tabindex="0" aria-controls="datatable"><i class="fa fa-print"></i> Cetak</a>
    </div>
    <br><br>

    <thead>
    <tr>
    <th>No</th>
    <th>No. Penjualan</th>
    <th>Tanggal Penjualan</th>
    <th>No. Pembelian</th>
    <th>Nama Pembeli</th>
    <th>Perumahan</th>
    <th>Blok Kaveling</th>
    <th>Keterangan</th>
    <th>Jenis Pelunasan</th>
    <th>Bank</th>
    <th>ACC KPR</th>
    <th>Deadline ACC KPR</th>
    <th>ACC Desain</th>
    <th>Deadline addendum</th>
    <th>Produksi versi SPP</th>
    <th>Realisasi</th>
    <th>Pelaksana</th>
    <th>Tanggal SPP</th>
    <th>Staff</th>
    </tr>
    </thead>
    <tbody>
    <tr>';
    if(mysqli_num_rows($query) > 0){
      $no = 1;
      while($row = mysqli_fetch_array($query)){
       echo '
       <td>'.$no++.'</td>
       <td>'.$row['No_penjualan'].'</td>
       <td>'.$row['tanggal'].'</td>
       <td>'.$row['no_transaksi'].'</td>
       <td>'.$row['nm_pembeli'].'</td>
       <td>'.$row['nama_perumahan'].'</td>
       <td>'.$row['blok_kaveling'].'</td>
       <td>'.$row['keterangan'].'</td>
       <td>'.$row['jenis_pelunasan'].'</td>
       <td>'.$row['bank'].'</td>
       <td>'.$row['tgl_acckpr'].'</td>
       <td>'.$row['deadline_acckpr'].'</td>
       <td>'.$row['acc_desain'].'</td>
       <td>'.$row['deadline_add'].'</td>
       <td>'.$row['prod_versispp'].'</td>
       <td>'.$row['realisasi'].'</td>
       <td>'.$row['pelaksana'].'</td>
       <td>'.$row['tgl_spp'].'</td>
       <td>'.$_SESSION['nama'].'</td>
       </tr>';

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
 <h4 class="m-t-0 header-title"><b>Periode Penjualan</b></h4>

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

