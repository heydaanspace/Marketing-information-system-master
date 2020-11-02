
<?php
session_start();
require ("conndb.php");

$nokwit	= $_POST["id"];
$nopem		= $_POST["nopem"];
$pembeli	    = $_POST["pembeli"];
$untuk		= $_POST["untuk"];
$uang		= $_POST["uang"];


if($mysqli->query("INSERT INTO tbl_kwitansi (No_kwitansi,untuk_pembayaran,jumlah_bayar,id_member,no_pembayaran) VALUES('$nokwit','$untuk','$uang','$pembeli','$nopem')")){
	$_SESSION['infokwit'] = "Kwitansi berhasil dibuat!";
	header('location: dashboard.php?page=pembayaran');
	exit;
}

header ("location:login.php");

?>
