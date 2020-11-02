<?php
session_start();
include_once("conndb.php");
 
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM tbl_pembayaran WHERE no_pembayaran='$id'");

if ($result) {
	$_SESSION['info'] = "Data Berhasil dihapus!";
	header('location: dashboard.php?page=pembayaran');
	exit;
}
$_SESSION['errDel'] = "Data digunakan dalam transaksi lain!";
header('location: dashboard.php?page=pembayaran');
exit;
?>