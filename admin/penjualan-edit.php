
<?php
session_start();
require ("conndb.php");

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



	if($mysqli->query("UPDATE tbl_rekap_penjualan SET konsumen='$konsumen', keterangan='$keterangan',jenis_pelunasan='$pelunasan',bank='$bank',tgl_acckpr='$acckpr',deadline_acckpr='$dlkpr',acc_desain='$accdesain',deadline_add='$dladd',prod_versispp='$prodvspp',realisasi='$realisasi',pelaksana='$pelaksana',tgl_spp='$tglspp',id_perumahan='$nmperumahan',id_kaveling='$blokav',no_transaksi='$notrans', No_pegawai='$nopeg' WHERE No_penjualan='$nopel'")){


		$_SESSION['info'] = "Data Penjualan berhasil diperbarui";
		header('location: dashboard.php?page=penjualan');
		exit;
	}
	$_SESSION['failed'] = "Data Penjualan gagal diperbarui";
	header('location: dashboard.php?page=penjualan');
	exit;


	?>
