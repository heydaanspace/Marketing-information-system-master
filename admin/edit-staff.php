
<?php
session_start();
require ("conndb.php");

$nopeg		= $_POST["nopeg"];
$nama		= $_POST["nama"];
$email	    = $_POST["email"];
$username	= $_POST["username"];
$password	= $_POST["password"];
$alamat   	= $_POST["alamat"];
$notelp   	= $_POST["notelp"];


if($mysqli->query("UPDATE tbl_admin SET full_name='$nama',email='$email',username='$username',password='$password',alamat_admin='$alamat',no_telpadmin='$notelp' WHERE No_pegawai='$nopeg'")){
	$_SESSION['info'] = "Staff baru saja diperbarui!";
	header('location: dashboard.php?page=viewadmin');
	exit;
}

header ("location:login.php");

?>
