
<?php
session_start();
require ("conndb.php");

$idkpr	= $_POST["idkpr"];
$bank		= $_POST["bank"];
$jumlahpinjaman	    = $_POST["pinjaman"];
$jangka_waktu		= $_POST["jangka_waktu"];
$bunga		= $_POST["bunga"];
$angsuran	= $_POST["angsuran"];


if($mysqli->query("UPDATE tbl_kpr SET jumlah_pinjaman='$jumlahpinjaman',jangka_waktu='$jangka_waktu',bunga='$bunga',angsuran='$angsuran',id_bank='$bank' WHERE	id_kpr='$idkpr'")){
	$_SESSION['info'] = "KPR baru saja diperbarui!";
	header('location: dashboard.php?page=viewkpr');
	exit;


}

header ("location:tes.php");


?>

