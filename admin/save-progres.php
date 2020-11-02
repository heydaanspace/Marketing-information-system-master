
<?php
session_start();
require ("conndb.php");

$nopel	    = $_POST["nopel"];
$tahap	    = $_POST["tahap"];
$idprog	    = $_POST["idprog"];
$tanggal    = $_POST["tanggal"];
$konsumen	= $_POST["konsumen"];
$target		= $_POST["target"];
$persen		= $_POST["persen"];
$realisasi	= $_POST["realisasi"];




if($mysqli->query("INSERT INTO tbl_progres_pembangunan (id_progres,tahap,tanggal_progres,target_selesai,mulai_pembangunan,progres,id_member,No_penjualan) VALUES('$idprog','$tahap','$tanggal','$target','$realisasi','$persen','$konsumen','$nopel')"));

{
	$_SESSION['info'] = "Progres baru saja ditambahkan!";
	header('location: dashboard.php?page=progres');
	exit;
}

header ("location:login.php");

?>
