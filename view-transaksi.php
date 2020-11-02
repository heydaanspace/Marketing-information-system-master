<?php 
include 'conndb.php';
if(isset($_SESSION['kaveling'])) {

	$result = $mysqli->query("SELECT * FROM tbl_penjualan");
}

?>