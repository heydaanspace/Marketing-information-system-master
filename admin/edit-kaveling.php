
<?php
session_start();
require ("conndb.php");

$idkaveling	= $_POST["id"];
$blokav		= $_POST["blokav"];
$luas	    = $_POST["luas"];
$tipe		= $_POST["tipe"];
$harga		= $_POST["harga"];
$perumahan	= $_POST["nmperumahan"];

if($mysqli->query("UPDATE tbl_kaveling SET blok_kaveling='$blokav',luas_kaveling='$luas',tipe_kaveling='$tipe',harga_kaveling='$harga' WHERE	id_kaveling='$idkaveling'")){
	$_SESSION['info'] = "Kaveling baru saja diperbarui!";
	header('location: dashboard.php?page=kaveling');
	exit;


}

header ("location:tes.php");


?>

