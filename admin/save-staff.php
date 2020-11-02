
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


if($mysqli->query("INSERT INTO tbl_admin (No_pegawai,full_name,email,username,password,alamat_admin,no_telpadmin) VALUES('$nopeg','$nama','$email','$username','$password','$alamat','$notelp')")){
	$_SESSION['info'] = "Staff baru saja ditambahkan!";
	header('location: dashboard.php?page=viewadmin');
	exit;
}

header ("location:login.php");

?>
