<?php
session_start();
include_once("conndb.php");
 
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM tbl_penjualan WHERE no_transaksi='$id'");

if ($result) {
	$_SESSION['info'] = "Data Berhasil dihapus!";
	header('location: dashboard.php?page=transaksi');
	exit;
}
$_SESSION['errDel'] = "Data digunakan dalam transaksi lain!";
header('location: dashboard.php?page=transaksi');
exit;
?>