
<?php
session_start();
require ("conndb.php");

$nomem		= $_POST["nomem"];
$nmdpn		= $_POST["namadpn"];
$nmblkg	    = $_POST["namablkg"];
$email	    = $_POST["email"];
$password	= $_POST["password"];
$alamat   	= $_POST["alamat"];
$notelp   	= $_POST["notelp"];
$ttl   	    = $_POST["ttl"];
$status   	= $_POST["status"];
$pekerjaan  = $_POST["pekerjaan"];


if($mysqli->query("UPDATE tbl_member SET nm_depan='$nmdpn',nm_belakang='$nmblkg',email='$email',password='$password',alamat_member='$alamat',TTL_member='$ttl',pekerjaan_member='$pekerjaan',status_member='$status',No_telefonmember='$notelp' WHERE id_member='$nomem'")){
	$_SESSION['info'] = "Data konsumen baru saja diperbarui!";
	header('location: dashboard.php?page=viewmember');
	exit;
}

header ("location:login.php");

?>
