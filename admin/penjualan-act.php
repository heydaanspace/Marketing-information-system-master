
<?php
session_start();
require ("conndb.php");

if(isset($_POST['tambah'])) {

$nopel		= $_POST["nopel"];
$tanggal	= $_POST["tanggal"];
$notrans	= $_POST["notrans"];
$konsumen	= $_POST["konsumen"];
$nmperumahan= $_POST["nmperumahan"];
$blokav		= $_POST["blokav"];
$keterangan	= $_POST["keterangan"];
$pelunasan	= $_POST["pelunasan"];
$bank		= $_POST["bank"];
$acckpr		= $_POST["acckpr"];
$dlkpr	    = $_POST["dlkpr"];
$accdesain	= $_POST["accdesain"];
$dladd		= $_POST["dladd"];
$prodvspp	= $_POST["prodvspp"];
$realisasi	= $_POST["realisasi"];
$pelaksana	= $_POST["pelaksana"];
$tglspp	    = $_POST["tglspp"];
$nopeg	    = $_SESSION["No_pegawai"];



$query = $mysqli->query("INSERT INTO tbl_rekap_penjualan (No_penjualan,tanggal,konsumen,keterangan,jenis_pelunasan,bank,tgl_acckpr,deadline_acckpr,acc_desain,deadline_add,prod_versispp,realisasi,pelaksana,tgl_spp,No_pegawai,id_perumahan,id_kaveling,no_transaksi) VALUES('$nopel','$tanggal','$konsumen','$keterangan','$pelunasan','$bank','$acckpr','$dlkpr','$accdesain','$dladd','$prodvspp','$realisasi','$pelaksana','$tglspp','$nopeg','$nmperumahan','$blokav','$notrans')");


	 if($query){
          if($mysqli->query("UPDATE tbl_penjualan SET status = 'Proses Pembangunan' WHERE no_transaksi = ".$notrans));
         
        }
	$_SESSION['info'] = "Data Penjualan berhasil disimpan";
	header('location: dashboard.php?page=penjualan');
	exit;
}


?>
