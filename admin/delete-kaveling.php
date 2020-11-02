<?php
session_start();
include_once("conndb.php");
 
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM tbl_kaveling WHERE id_kaveling='$id'");

if ($result) {
	$_SESSION['info'] = "Data Berhasil dihapus!";
	header('location: dashboard.php?page=kaveling');
	exit;
}
$_SESSION['errDel'] = "Data digunakan dalam transaksi lain!";
header('location: dashboard.php?page=kaveling');
exit;
?>