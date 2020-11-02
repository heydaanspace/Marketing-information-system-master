
<?php
session_start();
require ("conndb.php");

 $id = $_GET['id'];
$blokav		= $_POST["blokav"];

if($mysqli->query("UPDATE tbl_pembayaran SET status='Lunas'  WHERE no_pembayaran='$id'")){
	$_SESSION['info'] = "Pembayaran telah disetujui!";
	header('location: dashboard.php?page=pembayaran');
	exit;


}

header ("location:tes.php");


?>

