
<?php
session_start();
require ("conndb.php");

$id	= $_POST["idprog"];
$tahap		= $_POST["tahap"];
$persen	    = $_POST["persen"];

if($mysqli->query("UPDATE tbl_progres_pembangunan SET tahap='$tahap', progres='$persen'  WHERE	id_progres='$id'")){
	$_SESSION['info'] = "Progres baru saja diperbarui!";
	header('location: dashboard.php?page=progres');
	exit;

}

header ("location:tes.php");

?>

