
<?php
session_start();
require ("conndb.php");

$idkpr	= $_POST["id"];
$bank		= $_POST["bank"];
$jumlahpinjaman	    = $_POST["pinjaman"];
$jangka_waktu		= $_POST["jangka_waktu"];
$bunga		= $_POST["bunga"];
$angsuran	= $_POST["angsuran"];


if($mysqli->query("INSERT INTO tbl_kpr (id_kpr,id_bank,jumlah_pinjaman,jangka_waktu,bunga,angsuran) VALUES('$idkpr','$bank','$jumlahpinjaman','$jangka_waktu','$bunga','$angsuran')")){
	$_SESSION['info'] = "Data KPR baru ditambahkan!";
	header('location: dashboard.php?page=viewkpr');
	exit;
}

header ("location:login.php");

?>
