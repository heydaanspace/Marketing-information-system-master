
<?php
session_start();
require ("conndb.php");

$idkaveling	= $_POST["id"];
$blokav		= $_POST["blokav"];
$luas	    = $_POST["luas"];
$tipe		= $_POST["tipe"];
$harga		= $_POST["harga"];
$perumahan	= $_POST["nmperumahan"];


if($mysqli->query("INSERT INTO tbl_kaveling (id_kaveling,blok_kaveling,luas_kaveling,tipe_kaveling,harga_kaveling,id_perumahan) VALUES('$idkaveling','$blokav','$luas','$tipe','$harga','$perumahan')")){
	$_SESSION['info'] = "Kaveling baru saja ditambahkan!";
	header('location: dashboard.php?page=kaveling');
	exit;
}

header ("location:login.php");

?>
